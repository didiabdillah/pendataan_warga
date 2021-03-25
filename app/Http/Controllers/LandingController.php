<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Symfony\Component\Console\Input\Input;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.form');
    }

    public function store(Request $request)
    {
        // Input Validation
        $request->validate([
            'nik'  => 'required|max:16',
            'name' => 'required|max:255',
            'sex' => 'required',
        ]);

        $nik = htmlspecialchars($request->nik);
        $name = htmlspecialchars($request->name);
        $sex = htmlspecialchars($request->sex);

        //Insert Data
        $data = [
            'report_nik' => $nik,
            'report_name' => $name,
            'report_sex' => $sex,
        ];
        Report::create($data);

        //Flash Message
        flash_alert(
            __('alert.icon_success'), //Icon
            'sukses', //Alert Message 
            'Laporan Berhasil Dikirim' //Sub Alert Message
        );

        return redirect()->route('landing');
    }

    public function cek(Request $request)
    {
        $nik = $request->input('nik');
        $result = NULL;

        if ($nik) {
            $result = Report::where('report_nik', $nik)->orderBy('created_at', 'desc')->get();
        }

        return view('landing.cek', ['result' => $result]);
    }

    public function covid(Request $request)
    {
        $ch = curl_init('https://api.kawalcorona.com/indonesia');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_exec($ch);
        curl_close($ch);
    }
}
