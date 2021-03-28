<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $report = Report::join('provinces', 'reports.report_province', '=', 'provinces.id')
            ->join('regencies', 'reports.report_district', '=', 'regencies.id')
            ->select('reports.*', 'provinces.name as province', 'regencies.name as regency')
            ->orderBy('created_at', 'desc')->get();

        return view('report.report', ['report' => $report]);
    }

    public function print()
    {
        $report = Report::join('provinces', 'reports.report_province', '=', 'provinces.id')
            ->join('regencies', 'reports.report_district', '=', 'regencies.id')
            ->select('reports.*', 'provinces.name as province', 'regencies.name as regency')
            ->orderBy('created_at', 'asc')->get();

        $pdf = PDF::loadview('pdf.laporan_pdf', ['report' => $report])->setPaper('legal', 'landscape');
        // return $pdf->download('laporan-warga');
        return $pdf->stream();
    }
}
