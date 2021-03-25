<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $report = Report::orderBy('created_at', 'asc')->get();

        return view('report.report', ['report' => $report]);
    }

    public function print()
    {
        $report = Report::all();

        $pdf = PDF::loadview('pdf.laporan_pdf', ['report' => $report]);
        // return $pdf->download('laporan-warga');
        return $pdf->stream();
    }
}
