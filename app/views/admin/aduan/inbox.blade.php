@extends('layouts.admin')
@section('content')

<div class="box-content">
    <table class="table table-bordered table-striped table-condensed" width="100%">
        <thead>
        <tr>
            <th>Bil</th>
            <th>Nama</th>
            <th>Pengadu</th>
            <th>Tarikh</th>
            <th>Aduan</th>
            <th>Maklumbalas</th>
            <th>Pilihan</th>
        </tr>
        </thead>
        <tbody>

<?php $bil = 0; ?>
@foreach($aduans as $aduan)

    @if($aduan->maklumbalas == '')
    <?php $bil++; ?>
		// test
        <tr>
            <td>{{ $bil }}</td>
            <td>{{ $aduan->nama }}</td>
            <td>{{ $aduan->pengadu }}</td>
            <td>{{ $aduan->tarikh }}</td>
            <td>{{ $aduan->aduan }}</td>
            <td>{{ $aduan->maklumbalas }}</td>
            <td>[ <a href="{{ URL::route('myaduan-padam', $aduan->id) }}"> Padam </a> ]</td>
        </tr>
     @endif
@endforeach

@foreach($aduans as $aduan)

    @if($aduan->maklumbalas != '')
    <?php $bil++; ?>

        <tr>
            <td>{{ $bil }}</td>
            <td>{{ $aduan->nama }}</td>
            <td>{{ $aduan->pengadu }}</td>
            <td>{{ $aduan->tarikh }}</td>
            <td>{{ $aduan->aduan }}</td>
            <td>{{ $aduan->maklumbalas }}</td>
            <td>[ <a href="{{ URL::route('myaduan-padam', $aduan->id) }}"> Padam </a> ]</td>
        </tr>
     @endif
@endforeach


        </tbody>
    </table>
</div>



@stop