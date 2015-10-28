@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
        <div class="form-group">
            <label for="namaSyarikat">Nama Syarikat</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Syarikat" size="50" maxlength="150" value="{{ $syarikat->nama }}">
        </div>
        <div class="form-group">
            <label for="noTel">No Telefon 1</label>
            <input type="text" class="form-control" name="noTel" id="noTel" placeholder="No Telefon 1" size="17" maxlength="12" value="{{ $syarikat->noTel }}">
        </div>
        <div class="form-group">
            <label for="noTel2">No Telefon 2</label>
            <input type="text" class="form-control" name="noTel2" id="noTel2" placeholder="No Telefon 2" size="17" maxlength="12" value="{{ $syarikat->noTel2 }}">
        </div>
        <div class="form-group">
            <label for="noTel3">No Telefon 3</label>
            <input type="text" class="form-control" name="noTel3" id="noTel3" placeholder="No Telefon 3" size="17" maxlength="12" value="{{ $syarikat->noTel3 }}">
        </div>
        <div class="form-group">
            <label for="sambungan">Sambungan</label>
            <input type="text" class="form-control" name="sambungan" id="sambungan" placeholder="Sambungan" size="60" maxlength="60" value="{{ $syarikat->sambungan }}">
        </div>
        <div class="form-group">
            <label for="speedDial">Speed Dial #</label>
            <input type="text" class="form-control" name="speedDial" id="speedDial" placeholder="Speed Dial" size="60" maxlength="60" value="{{ $syarikat->speedDial }}">
        </div>
        <div class="form-group">
            <label for="noFaks">No Faks</label>
            <input type="text" class="form-control" name="noFaks" id="noFaks" placeholder="Faks" size="60" maxlength="60" value="{{ $syarikat->noFaks }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" cols="50" rows="6">{{ $syarikat->alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-default">Kemaskini Syarikat</button>
        <input type="hidden" name="id" value="{{ $syarikat->id }}" id="id">
        {{ Form::token() }}
    </form>

</div>

{{--###########################################################################--}}

<script>

$('#frm').on('submit', function(e){

    e.preventDefault();

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    var input    = 'id=' + $('#id').val();
    input       += '&nama=' + $('#nama').val();
    input       += '&noTel=' + $('#noTel').val();
    input       += '&noTel2=' + $('#noTel2').val();
    input       += '&noTel3=' + $('#noTel3').val();
    input       += '&sambungan=' + $('#sambungan').val();
    input       += '&speedDial=' + $('#speedDial').val();
    input       += '&noFaks=' + $('#noFaks').val();
    input       += '&alamat=' + $('#alamat').val();
    input       += '&token=' + $('input[name=_token]').val();
    var url = "{{ URL::route('syarikat-kemaskini-post') }}";


    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            alert('Kemaskini Syarikat Berjaya');
            window.location.reload();
            console.log(data);
        },
        error   : function(){
            alert('Kemaskini Syarikat Gagal !');
            console.log(data);
        }
    }, "json");

    return false;
});

</script>

@stop