<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class HomeController extends Controller
{
    public function index()
    {
        $total_report = Report::count();

        $week_report = Report::whereDate('created_at', '>=', date('Y-m-d', strtotime("-6 days")))
            ->whereDate('created_at', '<=', date('Y-m-d', strtotime("-0 days")))
            ->count();

        return view('home.home', ['total_report' => $total_report, 'week_report' => $week_report]);
    }

    public function chart(Request $request)
    {
        $chart = [];
        for ($i = 0; $i <= 6; $i++) {
            $data = Report::whereDate('created_at', '=', date('Y-m-d', strtotime("-" . $i . "days")))
                // whereDate('created_at', date('Y-m-d', strtotime("-" . $i . "day")))
                ->count();

            if ($data == null) {
                $chart[$i] = 0;
            } else {
                $chart[$i] = $data;
            }
        }

        $chart_data['chartData'] = [
            $chart[6],
            $chart[5],
            $chart[4],
            $chart[3],
            $chart[2],
            $chart[1],
            $chart[0],
        ];

        // $chart_data['providerName'] = $provider->provider_name;

        // $chart_data['domainName'] = $domain->domain_name;

        return json_encode($chart_data);
    }
}
