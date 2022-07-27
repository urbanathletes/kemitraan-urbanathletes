<?php

namespace App\Http\Controllers;

use App\Models\Contact_us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function save(Request $request)
    {
        $data = $request->all();
        if (isset($data["property_type"])) {
            $data["property_type"] = json_encode($data["property_type"]);
        }
        $contact = Contact_us::create($data);
        return redirect('/contact-us#formContact')->with('success', 'Silahkan cek Email yang kami kirim ke ');
    }
}
