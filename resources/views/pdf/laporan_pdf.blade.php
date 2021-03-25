    <table>
        @foreach($report as $data)
        <tr>
            <td>{{$data->report_name}}</td>
        </tr>
        @endforeach
    </table>