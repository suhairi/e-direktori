@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
        <div class="form-group">
            <label class="control-label" for="noPekerja">No Pekerja</label>
            <input type="text" class="form-control" name="noPekerja" id="noPekerja" placeholder="No Pekerja" size="7" maxlength="4" value="{{ $staff->noPekerja }}" readonly>
        </div>
        <div class="form-group">
            <label for="noPekerja">Nama Penuh</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Penuh" size="50" maxlength="150" value="{{ $staff->nama }}">
        </div>
        <div class="form-group">
            <label for="noPekerja">No Kad Pengenalan</label>
            <input type="text" class="form-control" name="noKP" id="noKP" placeholder="No Kad Pengenalan" size="17" maxlength="12" value="{{ $staff->noKP }}">
        </div>
        <div class="form-group">
            <label for="noPekerja">Jawatan</label>
            <input type="text" class="form-control" name="jawatan" id="jawatan" placeholder="Jawatan" size="60" maxlength="60" value="{{ $staff->jawatan }}">
        </div>
        <div class="control-group">
            <label class="control-label" for="selectError">Penempatan ({{ $staff->penempatan }})</label>
            <div class="controls">
                <select data-rel="chosen" name="penempatan" id="penempatan">
                    <option></option>
                    <?php

                        $bahagian = $selected = '';

                        if(is_int($staff->penempatan)) {
                            $bahagian = $staff->penempatan;
                        }

                        $penempatan = DB::table('penempatan')->orderBy('id', 'ASC')->get();

                        foreach($penempatan as $tempat) {

                            if($staff->penempatan == $tempat->id)
                                $selected = 'selected';

                            echo "<option value='" . $tempat->id . "' "  . $selected . ">" . $tempat->nama . "</option>";

                            $selected = '';
                        }
                    ?>
                </select>
            </div>
        </div>
        <br />
        <div class="control-group">
            <label class="control-label" for="selectError">Bahagian (<?= $staff->bahagian; ?>)</label>
            <div class="controls">
                <select data-rel="chosen" name="bahagian" id="bahagian">
                    <option></option>
                    <?php

                        $selected = '';

                        if(is_int($staff->bahagian)) {
                            $selected = Bahagian::find($staff->bahagian)->get();
                        }

                        $bahagian = Bahagian::orderBy('id', 'ASC')->get();

                        foreach($bahagian as $tempat) {

                             if($staff->bahagian == $tempat->id)
                                $selected = 'selected';

                            echo "<option value='" . $tempat->id . "' " . $selected . ">" . $tempat->nama . "</option>";

                            $selected = '';
                        }
                    ?>
                </select>
            </div>
        </div>
        <br />
        <div class="control-group">
            <label class="control-label" for="selectError">Cawangan (<?= $staff->cawangan; ?>)</label>
            <div class="controls">
                    <div id="results">
                        <select data-rel="chosen" name="cawangan" id="cawangan">
                            <option></option>
                            <?php

                                $selected = '';

                                if(is_int($staff->cawangan)) {
                                    $selected = Cawangan::find($staff->cawangan)->get();
                                }

                                $cawangan = Cawangan::orderBy('id', 'ASC')->get();

                                foreach($cawangan as $tempat) {

                                     if($staff->cawangan == $tempat->id)
                                        $selected = 'selected';

                                    echo "<option value='" . $tempat->id . "' " . $selected . ">" . $tempat->nama . "</option>";

                                    $selected = '';
                                }
                            ?>
                        </select>
                    </div>
            </div>
        </div>
        <br />
        <div class="form-group">
            <label for="noPekerja">Sambungan</label>
            <input type="text" class="form-control" name="sambungan" id="sambungan" placeholder="Sambungan" size="60" maxlength="60" value="{{ $staff->sambungan }}">
        </div>
        <div class="form-group">
            <label for="noPekerja">Faks</label>
            <input type="text" class="form-control" name="faks" id="faks" placeholder="Faks" size="60" maxlength="60" value="{{ $staff->faks }}">
        </div>
        <div class="form-group">
            <label for="noPekerja">Speed Dial #</label>
            <input type="text" class="form-control" name="speedDial" id="speedDial" placeholder="Speed Dial" size="60" maxlength="60" value="{{ $staff->speedDial }}">
        </div>
        <div class="form-group">
            <label for="noPekerja">Telefon Bimbit</label>
            <input type="text" class="form-control" name="noTel" id="noTel" placeholder="Telefon Bimbit" size="60" maxlength="60" value="{{ $staff->noPhone }}">
        </div>
        <?php
            $aktif = $tidakAktif = '';
            if($staff->status == 'AKTIF')
                $aktif = 'selected';
            else
                $tidakAktif = 'selected';
        ?>
        <div class="control-group">
            <label for="status">Status </label>
            <div class="controls">
                <select name="status" data-rel="chosen" id="status">
                    <option></option>
                    <option value="AKTIF" {{ $aktif }}>AKTIF</option>
                    <option value="TIDAK AKTIF" {{ $tidakAktif }}>TIDAK AKTIF</option>
                </select>
            </div>
        </div>
        <br />
        <div class="form-group">
            <label for="noPekerja">Catatan</label>
            <textarea type="text" class="form-control" name="catatan" id="catatan" placeholder="Catatan" size="60" maxlength="255">{{ $staff->catatan }}</textarea>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
        {{ Form::token() }}
    </form>

</div>

{{--###########################################################################--}}

<script>

$('#bahagian').on('change', function(e) {

    e.preventDefault();

    var input = 'bahagian=' + $('#bahagian').val();
    var url = "{{ URL::route('getCawangan1') }}";
    url += '/' + $('#bahagian').val();

//    alert('Input : ' + input);
//    alert('URL : ' + url);

    $.ajax({
        type    : "get",
        url     : url,
        data    : input,
        success : function(data) {
            $('#results').html(data);
            console.log('success');
        },
        error   : function(){
            console.log('failed');
        }
    }, "json");

    return false;
});

$('#frm').on('submit', function(e){

    e.preventDefault();

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    var input    = 'noPekerja=' + $('#noPekerja').val();
    input       += '&nama=' + $('#nama').val();
    input       += '&noKP=' + $('#noKP').val();
    input       += '&jawatan=' + $('#jawatan').val();
    input       += '&penempatan=' + $('#penempatan').val();
    input       += '&bahagian=' + $('#bahagian').val();
    input       += '&cawangan=' + $('#cawangan').val();
    input       += '&sambungan=' + $('#sambungan').val();
    input       += '&faks=' + $('#faks').val();
    input       += '&speedDial=' + $('#speedDial').val();
    input       += '&noTel=' + $('#noTel').val();
    input       += '&status=' + $('#status').val();
    input       += '&catatan=' + $('#catatan').val();
    input       += '&token=' + $('input[name=_token]').val();
    var url = "{{ URL::route('staff-kemaskini-post') }}";
//    alert(input);

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            alert('Kemaskini Staff Berjaya');
//            window.location.reload();
            console.log(data);
        },
        error   : function(){
            alert('Kemaskini Staff Gagal !');
            console.log(data);
        }
    }, "json");

    return false;
});

</script>

@stop