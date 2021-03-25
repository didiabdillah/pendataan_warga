@extends('layout.layout_admin')

@section('title', 'Beranda')

@section('page')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Overview content -->
    <section class="content">

        <div class="container-fluid">

            <div class="row mb-2 content-header">
                <div class="col-sm-12">
                    <h1>Beranda</h1>
                </div>
            </div>

        </div>

        <!--In Progress content -->
        <section class="content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6">
                        <!-- small card -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{$total_report}}</h3>

                                <p>Laporan Masuk 1 Minggu Terakhir</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-file-download"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$week_report}}</h3>

                                <p>Total Laporan Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <!-- <h4 class="card-title mb-3"><strong>Submited Content Chart</strong></h4> -->

                            <div class="card-body">

                                <div class="chart content">
                                    <!-- CHART Will Render Here -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@push('plugin')
<!-- ChartJS -->
<script src="{{ asset('assets/admin/js/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/chart.js/utils.js') }}"></script>

<script>
    // Ajax setup from csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // LOAD DATA TOTAL SUBMITTED CONTENT
    $(function() {
        var lineChart;

        var id = 0;

        //generate Content Chart
        $.ajax({
            url: "{{route('home_chart')}}",
            method: "POST",
            data: {
                id: id
            },

            dataType: 'json',
            success: function(data) {
                $('#lineChartContent').remove();
                $('.content').append(' <canvas id="lineChartContent" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>');

                var lineChartCanvas = document.getElementById('lineChartContent').getContext('2d')

                var lineChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        fontSize: 18,
                        text: "Total Laporan Masuk Dalam 1 Minggu Terakhir"
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                            },
                            ticks: {
                                beginAtZero: true,
                            }
                        }]
                    }
                }

                var dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];

                var today = new Date();
                var d;
                var day = [];

                for (var i = 6; i >= 0; i--) {
                    d = new Date(today.getFullYear(), today.getMonth(), today.getDate() - i);
                    day[6 - i] = dayNames[d.getDay()];
                }
                var chart_result = data.chartData;
                // console.log(chart_result);
                var lineChartData = {
                    labels: day,
                    datasets: []
                }

                var newDataset = {

                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: chart_result,
                    fill: false
                };

                lineChartData.datasets.push(newDataset);

                lineChartOptions.datasetFill = false

                lineChart = new Chart(lineChartCanvas, {
                    type: 'line',
                    data: lineChartData,
                    options: lineChartOptions
                })

                lineChart.update();

            }
        });

        return false;
    });
</script>
@endpush