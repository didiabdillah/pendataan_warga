<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $report = Report::orderBy('created_at', 'asc')->get();

        return view('report.report', ['report' => $report]);
    }
}
