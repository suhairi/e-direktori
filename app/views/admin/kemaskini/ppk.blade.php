@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
        <div class="form-group">
            <label for="nama">Nama PPK</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Penuh" size="50" maxlength="150" value="{{ $ppk->nama }}">
        </div>
        <div class="form-group">
            <label for="noTel">No Telefon</label>
            <input type="text" class="form-control" name="noTel" id="noTel" placeholder="No Tel" size="17" maxlength="12" value="{{ $ppk->noTel }}">
        </div>
        <div class="form-group">
            <label for="speedDial">Speed Dial</label>
            <input type="text" class="form-control" name="speedDial" id="speedDial" placeholder="Speed Dial" size="60" maxlength="60" value="{{ $ppk->speedDial }}">
        </div>
        <div class="form-group">
            <label for="noFaks">Faks</label>
            <input type="text" class="form-control" name="noFaks" id="noFaks" placeholder="No Faks" size="60" maxlength="60" value="{{ $ppk->noFaks }}">
        </div>
        <div class="form-group">
            <label for="noPekerja">Alamat</label>
            <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" cols="50" rows="5">{{ $ppk->alamat }}</textarea>
        </div>
        <input type="hidden" name="id" value="{{ $ppk->id }}" id="id">

        <button type="submit" class="btn btn-default">Submit</button>
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
    input       += '&speedDial=' + $('#speedDial').val();
    input       += '&noFaks=' + $('#noFaks').val();
    input       += '&alamat=' + $('#alamat').val();
    input       += '&token=' + $('input[name=_token]').val();
    var url      = "{{ URL::route('ppk-kemaskini-post') }}";
//    alert(input);

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            alert('Kemaskini PPK Berjaya');
            window.location.reload();
            console.log(data);
        },
        error   : function(){
            alert('Kemaskini PPK Gagal !');
            console.log(data);
        }
    }, "json");

    return false;
});

</script>

@stop