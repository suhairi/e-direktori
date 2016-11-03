@extends('layouts.admin')

@section('content')

<div class="box-content">
    <table class="table table-bordered table-striped table-condensed" width="100%">
        <thead>
        <tr>
            <th>Bil</th>
            <th>Nama</th>
            <th>Bahagian / Alamat</th>
            <th>Speed Dial #</th>
            <th>No Telefon</th>
            <th>Pilihan</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $key => $staff)
            <tr>
                <td class="center">{{ ++$key }}</td>
                <td class="center">{{ $staff->nama }}</td>
                <td class="center">{{ $staff->bahagian }}</td>
                <td class="center">{{ $staff->speedDial }}</td>
                <td class="center">{{ $staff->noPhone }}</td>
                <td class="center">{{ ++$key }}</td>
                <td class='center'><a href="{{ URL::route('syarikat-kemaskini', array($sykt->id)) }}">Kemaskini </a> </td>
            </tr>

        @endforeach
        {{--<tr>--}}
            {{--<td class='center'>{{ $bil }}</td>--}}
            {{--<td class='center'>{{ $sykt->nama }}</td>--}}
            {{--<td class='center'>{{ $sykt->alamat }}</td>--}}
            {{--<td class='center'>{{ $sykt->speedDial }}</td>--}}
            {{--<td class='center'>{{ $sykt->noTel }}<br />{{ $sykt->noTel2 }} <br />{{ $sykt->noTel3 }}</td>--}}
            {{--<td class='center'><a href="{{ URL::route('syarikat-kemaskini', array($sykt->id)) }}">Kemaskini </a> </td>--}}
        {{--</tr>--}}
        <tr>
            {{--<td class='center'>{{ $bil }}</td>--}}
            <td class='center' colspan='2'><div class="line"><hr class="hrRed"></div> </td>
            {{--<td class='center'>{{ $sd }}</td>--}}
            <td class='center' colspan='2'><div class="line"><hr class="hrRed"></div></td>
        </tr>
        </tbody>
    </table>
</div>


@stop