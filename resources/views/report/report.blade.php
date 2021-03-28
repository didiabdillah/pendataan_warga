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
                    <h1>Laporan</h1>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-3 col-md-3">

                    <a target="_blank" href="{{route('report_print')}}" class="btn btn-primary btn-md mb-3 btn-block"><i class="fas fa-print"></i> Cetak Laporan</a>

                    {{-- <button type="button" data-toggle="modal" data-target="#modal-default" class="mb-3 btn btn-primary btn-block"><b><i class="fas fa-print"></i> Cetak Laporan</b></button> --}}
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <!--Content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover table-striped projects">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Laporan Tanggal</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>No Telp/HP</th>
                                        <th>Pekerjaan</th>
                                        <th>Datang Dari</th>
                                        <th>Lama Di Luar Kota</th>
                                        <th>Tujuan Di Luar Kota</th>
                                        <th>Kondisi Saat Ini</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($report as $data)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>{{Carbon\Carbon::parse($data->created_at)->isoFormat('D MMMM Y')}}</td>
                                        <td>{{$data->report_nik}}</td>
                                        <td>{{$data->report_name}}</td>
                                        <td>
                                            @if($data->report_sex == 0)
                                            {{'Laki-Laki'}}
                                            @else
                                            {{'Peremmpuan'}}
                                            @endif
                                        </td>
                                        <td>{{$data->report_birth_place}}</td>
                                        <td>{{Carbon\Carbon::parse($data->report_birth_date)->isoFormat('D MMMM Y')}}</td>
                                        <td>{{$data->report_address}}</td>
                                        <td>{{$data->report_phone}}</td>
                                        <td>{{$data->report_job}}</td>
                                        <td>{{$data->regency . ', ' . $data->province}}</td>
                                        <td>{{$data->report_duration}}</td>
                                        <td>{{$data->report_purpose}}</td>
                                        <td>{{$data->report_health_status}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div><!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </section>
    </section>
</div>

<!-- Upload Profile Picture Modal Form -->
<!-- <div class="modal fade show" id="modal-default" style="display: block;" aria-modal="true" role="dialog"> -->
{{-- <div class="modal fade " id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cetak Laporan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('profile_setting_update_picture', 'me')}}" method="POST" enctype="multipart/form-data">
@csrf
@method('patch')
<div class="card-body">
    <div class="form-group">
        <label for="image">Picture Upload</label>
        <div class="input-group  @error('image') is-invalid @enderror">
            <div class="custom-file">
                <input type="file" class="custom-file-input  @error('image') is-invalid @enderror" id="image" name="image">
                <label class="custom-file-label" for="image">Choose file</label>
            </div>
        </div>
        @error('image')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
</div>
<!-- /.card-body -->

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    <button type="submit" class="btn btn-primary">Cetak</button>
</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
--}}
<!-- /.modal -->

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@push('plugin')
<!-- DataTables  & Plugins -->
<script src="{{URL::asset('assets/admin/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{ asset('assets/admin/js/chart.js/Chart.min.js') }}"></script>

<script>
    $(function() {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "pagingType": "simple_numbers",
        });
    });
</script>
@endpush