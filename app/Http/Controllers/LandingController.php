<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        $provinces = DB::table('provinces')->get();
        $regencies = DB::table('regencies')->get();

        return view('landing.form', ['provinces' => $provinces, 'regencies' => $regencies]);
    }

    public function store(Request $request)
    {
        // Input Validation
        $request->validate([
            'nik'  => 'required|max:16',
            'name' => 'required|max:255',
            'sex' => 'required',
            'birth_place' => 'required|max:255',
            'birth_date' => 'required',
            'address' => 'required|max:255',
            'rt' => 'required|max:3',
            'rw' => 'required|max:3',
            'phone' => 'required|max:16',
            'job' => 'required|max:255',
            'duration' => 'required|max:255',
            'purpose' => 'required|max:255',
            'health_status' => 'required|max:20',
            'province' => 'required',
            'regency' => 'required',
        ]);

        $nik = htmlspecialchars($request->nik);
        $name = htmlspecialchars($request->name);
        $sex = htmlspecialchars($request->sex);
        $birth_place = htmlspecialchars($request->birth_place);
        $birth_date = htmlspecialchars($request->birth_date);
        $address = htmlspecialchars($request->address);
        $rt = htmlspecialchars($request->rt);
        $rw = htmlspecialchars($request->rw);
        $phone = htmlspecialchars($request->phone);
        $job = htmlspecialchars($request->job);
        $duration = htmlspecialchars($request->duration);
        $purpose = htmlspecialchars($request->purpose);
        $health_status = htmlspecialchars($request->health_status);
        $province = htmlspecialchars($request->province);
        $regency = htmlspecialchars($request->regency);

        //Insert Data
        $data = [
            'report_nik' => $nik,
            'report_name' => $name,
            'report_sex' => $sex,
            'report_birth_place' => $birth_place,
            'report_birth_date' => $birth_date,
            'report_address' => $address,
            'report_rt' => $rt,
            'report_rw' => $rw,
            'report_phone' => $phone,
            'report_job' => $job,
            'report_duration' => $duration,
            'report_purpose' => $purpose,
            'report_health_status' => $health_status,
            'report_province' => $province,
            'report_district' => $regency,
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
            $result = Report::join('provinces', 'reports.report_province', '=', 'provinces.id')
                ->join('regencies', 'reports.report_district', '=', 'regencies.id')
                ->select('reports.*', 'provinces.name as province', 'regencies.name as regency')
                ->where('report_nik', $nik)->orderBy('created_at', 'desc')->get();
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
