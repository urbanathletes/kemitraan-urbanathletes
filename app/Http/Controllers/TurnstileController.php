<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use App\Models\CekMember;
use App\Models\DataMember;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TurnstileController extends Controller
{
    public function getTurnstile(Request $request)
    {
        $cekMember1 = DataMember::where('rfid_card_code', $request->rfid)->first();
        $hasilCek = false;
        $open = false;
        $cekDataMember = [];
        $cekMemberApi = [];
        $saveData = '';
        if (!$cekMember1) {
            $apiModel = new ApiModel();
            $cekMemberApi = $apiModel->cekMember($request->rfid);
//             return $cekMemberApi;
            if (array_key_exists('member', $cekMemberApi)) {
                try {
                    $saveData = DataMember::create([
                        'member_id' => $cekMemberApi['member']['id'],
                        'rfid_card_code' => $cekMemberApi['member']['rfid_card_code'],
                        'rfid_card_code' => $cekMemberApi['member']['rfid_card_code'],
                        'email' => $cekMemberApi['member']['email'],
                        'branch_id' => $cekMemberApi['member']['branch_id'],
                        'id_card' => $cekMemberApi['member']['id_card'],
                        'membership_status_id' => $cekMemberApi['member']['membership_status_id'],
                    ]);
                    $cekDataMember = $cekMemberApi['member'];
                    $hasilCek = true;
                } catch (\Throwable $th) {
                    $saveData = throw $th;
                }

            }
        } else {
            $hasilCek = true;
            $cekDataMember = $cekMember1;
            $saveData = 'Data Allready Local';
            
        }

        if ($hasilCek) {
            $cekMember = CekMember::where('rfid_card_code', $request->rfid)
                                    ->where('cek_out', '=', 0)
                                    ->first();
                                    
            $cekMemberLast = CekMember::where('rfid_card_code', $request->rfid)
                                    ->where('cek_out', '=', 1)
                                    ->latest('id')
                                    ->first();
                                    
            if (!$cekMemberLast && strtotime(date(now())) <= strtotime($cekMemberLast->updated_at) + 40 ) {
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
                // dump(strtotime(date(now())) + 60);
                // dump(strtotime("+60 Second"));
                // dump(strtotime("+60 Second") - strtotime(date(now())));
                // dd(strtotime($cekMember->created_at) + 60);
                $open = false; // <-- IKI
            } else if ($cekMember->cek_in == 1) {
                CekMember::where('rfid_card_code', $request->rfid)
                            ->update(['cek_out' => 1]);
                $open = 'OUT'; // <-- IKI
            }
            
        }
        
        $resTurntile = [
            // 'hasil' => $hasilCek,
            // 'data' => $cekDataMember,
            // 'saveData' => $saveData,
            'open' => $open
        ];

        return response()->json($resTurntile, Response::HTTP_OK);
    }
}
