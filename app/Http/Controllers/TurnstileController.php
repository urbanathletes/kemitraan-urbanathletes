<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use App\Models\CekInMember;
use App\Models\CekMember;
use App\Models\DataMember;
use App\Models\MemberCekInClub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class TurnstileController extends Controller
{
    public function getTurnstile(Request $request)
    {
        $apiModel = new ApiModel();
        $cekMember1 = DataMember::where('rfid_card_code', $request->rfid)->first();
        $hasilCek = false;
        $open = false;
        $cekDataMember = [];
        // $cekMemberApi = [];
        $saveData = '';
        $cekMemberApi = $apiModel->cekMember($request);
        // dd($cekMemberApi);
        if (!$cekMember1) {
            // return $cekMemberApi;
            // if (array_key_exists('member', $cekMemberApi)) {
            if ($cekMemberApi) {
                try {
                    $saveData = DataMember::create([
                        'member_id' => $cekMemberApi['member']['id'],
                        'rfid_card_code' => $cekMemberApi['member']['rfid_card_code'],
                        'email' => $cekMemberApi['member']['email'],
                        'branch_id' => $cekMemberApi['member']['branch_id'],
                        'id_card' => $cekMemberApi['member']['id_card'],
                        'membership_status_id' => $cekMemberApi['member']['membership_status_id'],
                    ]);
                    if ($saveData->membership_status_id == 1) {
                        $hasilCek = true;
                    } else {
                        $hasilCek = false;
                    }
                } catch (\Throwable $th) {
                    $saveData = throw $th;
                }

            }
        } else {
            // if (date('Y-m-d', strtotime($cekMember1->updated_at)) != date('Y-m-d', strtotime(now()))) {
            // }
            if ($cekMemberApi['member']['membership_status_id'] != $cekMember1->membership_status_id) {
                DataMember::where('rfid_card_code', $request->rfid)
                    ->update([
                        'email' => $cekMemberApi['member']['email'],
                        'branch_id' => $cekMemberApi['member']['branch_id'],
                        'id_card' => $cekMemberApi['member']['id_card'],
                        'membership_status_id' => $cekMemberApi['member']['membership_status_id'],
                    ]);
            }
            $cekMember1 = DataMember::where('rfid_card_code', $request->rfid)->first();
            if ($cekMember1->membership_status_id == 1) {
                $hasilCek = true;
            } else {
                $hasilCek = false;
            }
            // $hasilCek = true;
            $cekDataMember = $cekMember1;
            // $saveData = 'Data Allready Local';
            
        }

        if ($hasilCek) {
            $cekMember = CekMember::where('rfid_card_code', $request->rfid)
                                    ->where('cek_out', '=', 0)
                                    ->first();
                                    
            $cekMemberLast = CekMember::where('rfid_card_code', $request->rfid)
                                    ->where('cek_out', '=', 1)
                                    ->latest('id')
                                    ->first();
                                    
            if ($cekMemberLast && strtotime(date(now())) <= strtotime($cekMemberLast->updated_at) + 40 ) {
                // Posisi Sudah scan OUT
                $open = false; // <-- IKI
            } else if (empty($cekMember)) {
                CekMember::create([
                    'rfid_card_code' => $request->rfid,
                    'cek_in' => 1,
                    'cek_out' => 0
                ]); 
                $open = 'IN'; // <-- IKI
            } else if ($cekMember->cek_in == 1 && strtotime(date(now())) <= strtotime($cekMember->created_at) + 13 ) {
                // Posisi Sudah scan IN
                $open = false; // <-- IKI
            } else if ($cekMember->cek_in == 1) {
                CekMember::where('rfid_card_code', $request->rfid)
                            ->update(['cek_out' => 1]);
                $open = 'OUT'; // <-- IKI
            }
            
        }
        
        $resTurntile = [
            // 'hasil' => $hasilCek,
            // 'saveData' => $saveData,
            'data' => $cekDataMember,
            'open' => $open
        ];

        return response()->json($resTurntile, Response::HTTP_OK);
    }

    public function turnstile(Request $request)
    {
        $cekMemberLocal = DataMember::where('rfid_card_code', $request->rfid)->first();
        $apiModel = new ApiModel();
        
        // ketika di database local tidak tersipan validasi date now
        $cekMemberApi = $apiModel->cekMember($request);
        $hasilCek = false;
        $open = false;
        $saveData = 'Local';

        if (!$cekMemberLocal) { //### jika tidak ada di database local
            if ($cekMemberApi) {
                $saveData = DataMember::create([
                    'member_id' => $cekMemberApi['member']['id'],
                    'rfid_card_code' => $cekMemberApi['member']['rfid_card_code'],
                    'email' => $cekMemberApi['member']['email'],
                    'branch_id' => $cekMemberApi['member']['branch_id'],
                    'id_card' => $cekMemberApi['member']['id_card'],
                    'membership_status_id' => $cekMemberApi['member']['membership_status_id'],
                ]);
                if ($saveData->membership_status_id == 1) {
                    if ($cekMemberApi['member']['membership']['membership_club_type_id'] == 1 || $cekMemberApi['member']['membership']['branch_id'] == $request->branch_id) {
                        $hasilCek = true;
                    }
                }
                // dump($hasilCek);
                // dd($cekMemberApi);
            }
        } 
        // if ($cekMemberLocal && date('Y-m-d', strtotime($cekMemberLocal->updated_at)) != date('Y-m-d', strtotime(now())) && $cekMemberApi['member']['membership_status_id'] != $cekMemberLocal->membership_status_id) {
        if ($cekMemberLocal && $cekMemberApi['member']['membership_status_id'] != $cekMemberLocal->membership_status_id) {
            // dump(date('Y-m-d', strtotime(now())));
            // dd(date('Y-m-d', strtotime($cekMemberLocal->updated_at)));
            DataMember::where('rfid_card_code', $request->rfid)
                    ->update([
                        'email' => $cekMemberApi['member']['email'],
                        'branch_id' => $cekMemberApi['member']['branch_id'],
                        'id_card' => $cekMemberApi['member']['id_card'],
                        'membership_status_id' => $cekMemberApi['member']['membership_status_id'],
                    ]);
            $cekMemberLocal = DataMember::where('rfid_card_code', $request->rfid)->first();
            if ($cekMemberLocal->membership_status_id == 1) {
                if ($cekMemberApi['member']['membership']['membership_club_type_id'] == 1 || $cekMemberApi['member']['membership']['branch_id'] == $request->branch_id) {
                    $hasilCek = true;
                }
            }
        }

        if ($cekMemberLocal && $cekMemberLocal->membership_status_id == 1) {
            if ($cekMemberApi['member']['membership']['membership_club_type_id'] == 1 || $cekMemberApi['member']['membership']['branch_id'] == $request->branch_id) {
                $hasilCek = true;
            }
        }

        if($hasilCek){
            $cekInMember = CekInMember::where('rfid_card_code', $request->rfid)
                                    ->where('cek_out', '=', 0)
                                    ->first();

            $cekInMemberLast = CekInMember::where('rfid_card_code', $request->rfid)
                                    ->where('cek_out', '=', 1)
                                    ->latest('id')
                                    ->first();

            // Cari data member yg sudah cek in terakhir berdasarkan tanggal terakhir
            $memberCekInClub = MemberCekInClub::where('rfid_card_code', $request->rfid)
                                            ->latest('id')
                                            ->first();

            // validasi turnstile
            if ($cekInMemberLast && strtotime(date(now())) <= strtotime($cekInMemberLast->updated_at) + 40 ) {
                // Posisi Sudah scan OUT
                $open = false;
            } else if (empty($cekInMember)) {
                CekInMember::create([
                    'rfid_card_code' => $request->rfid,
                    'cek_in' => 1,
                    'cek_out' => 0,
                    'club' => $request->branch_id
                ]); 
                $open = 'IN';

                //### Simpan data member cek in club
                if (empty($memberCekInClub)) {
                    MemberCekInClub::create([
                        'rfid_card_code' => $request->rfid,
                        'cek_in_club' => $request->branch_id
                    ]);
                    $cekMemberApi = $apiModel->cekMember($request, "post");
                } elseif (date('Y-m-d', strtotime($memberCekInClub->created_at)) != date('Y-m-d', strtotime(now())) || $memberCekInClub->cek_in_club != $request->branch_id) {
                    MemberCekInClub::create([
                        'rfid_card_code' => $request->rfid,
                        'cek_in_club' => $request->branch_id
                    ]);
                    $cekMemberApi = $apiModel->cekMember($request, "post");
                }


            } else if ($cekInMember->cek_in == 1 && strtotime(date(now())) <= strtotime($cekInMember->created_at) + 13 ) {
                // Posisi Sudah scan IN
                $open = false;
            } else if ($cekInMember->cek_in == 1) {
                CekInMember::where('rfid_card_code', $request->rfid)
                            ->update(['cek_out' => 1]);
                $open = 'OUT';
            }
        }

        // dd("keluar if". $cekMemberLocal);

        $resTurntile = [
            // 'hasil' => $hasilCek,
            // 'saveData' => $saveData,
            // 'data' => $cekDataMember,
            'open' => $open
        ];

        return response()->json($resTurntile, Response::HTTP_OK);
    }

    // public function getTurnstileDelete()
    // {
    //     DB::table('cek_members')->truncate();
    // }
}
