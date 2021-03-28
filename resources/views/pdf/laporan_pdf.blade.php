<table id="example2" class="table table-bordered table-hover table-striped projects" border="1" cellspacing="0">
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