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
        <?php
            $bil = 0;

            $maxStaff = DB::table('staff')->max('speedDial');
            $minStaff = DB::table('staff')->min('speedDial');

            $maxSyarikat = DB::table('syarikat')->max('speedDial');
            $minSyarikat = DB::table('syarikat')->min('speedDial');


            $maxSpeedDial = $maxStaff;
            $minSpeedDial = 100;

            if($maxSyarikat > $maxSpeedDial)
                $maxSpeedDial = $maxSyarikat;

            for($i=$minSpeedDial; $i<=$maxSpeedDial; $i++) {

                $bil++;
                $found = false;
                $skip = false;

                if($i>=200 && $i<400)
                    $skip = true;

                if($i>=500 && $i<600)
                    $skip = true;

                if($i>=700 && $i<800)
                    $skip = true;

                if($i>=900)
                    $skip = true;

                $syarikat   = DB::table('syarikat')->where('speedDial', '=', $i)->get();
                $staff      = DB::table('staff')->where('speedDial', '=', $i)->get();
                $ppk        = DB::table('ppk')->where('speedDial', '=', $i)->get();

                ?>

                @if(!empty($syarikat))

                    @foreach($syarikat as $sykt)

                        <?php $found = true; ?>

                        <tr>
                        <td class='center'>{{ $bil }}</td>
                        <td class='center'>{{ $sykt->nama }}</td>
                        <td class='center'>{{ $sykt->alamat }}</td>
                        <td class='center'>{{ $sykt->speedDial }}</td>
                        <td class='center'>{{ $sykt->noTel }}<br />{{ $sykt->noTel2 }} <br />{{ $sykt->noTel3 }}</td>
                        <td class='center'><a href="{{ URL::route('syarikat-kemaskini', array($sykt->id)) }}">Kemaskini </a> </td>
                        </tr>
                    @endforeach
                @endif

                @if(!empty($ppk))

                    @foreach($ppk as $sykt)

                        <?php $found = true; ?>

                        <tr>
                        <td class='center'>{{ $bil }}</td>
                        <td class='center'>{{ $sykt->nama }}</td>
                        <td class='center'>{{ $sykt->alamat }}</td>
                        <td class='center'>{{ $sykt->speedDial }}</td>
                        <td class='center'>{{ $sykt->noTel }}</td>
                        <td class='center'><a href="{{ URL::route('ppk-kemaskini', array($sykt->id)) }}">Kemaskini</a></td>
                        </tr>
                    @endforeach
                @endif

                @if(!empty($staff))

                     @foreach($staff as $sykt)

                        <?php

                            $found = true;
                            $bahagians = null;

                            $namaBahagian = '<font color=red>NULL</font>';
                            $bahagian = DB::table('bahagian')->where('id', $sykt->bahagian)->pluck('nama');

                        ?>

                        <tr>
                        <td class='center'>{{ $bil }}</td>
                        <td class='center'>{{ $sykt->nama }}</td>
                        <td class='center'><?php echo $bahagian; ?></td>
                        <td class='center'>{{ $sykt->speedDial }}</td>
                        <td class='center'>{{ $sykt->noPhone }}</td>
                        <td class='center'><a href="{{ URL::route('staff-kemaskini', array($sykt->noPekerja)) }}">Kemaskini </a> </td>
                        </tr>
                    @endforeach
                @endif

                @if($found == false && $skip == false)
                    <?php
                        $found = true;
                        $sykt->speedDial++;

                        $sd = $sykt->speedDial;

                    ?>
                    <tr>
                    <td class='center'>{{ $bil }}</td>
                    <td class='center' colspan='2'><div class="line"><hr class="hrRed"></div> </td>
                    <td class='center'>{{ $sd }}</td>
                    <td class='center' colspan='2'><div class="line"><hr class="hrRed"></div></td>
                    </tr>
                @endif
            <?php
            }
        ?>
        </tbody>
    </table>
</div>


@stop