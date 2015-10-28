@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
       <div class="form-group">
           <label class="nama-ppk" for="noPekerja">Nama Syarikat</label>
           <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Syarikat" size="50" maxlength="150">
       </div>
       <div class="form-group">
          <label for="no-telefon">No Telefon 1</label>
          <input type="text" name="noTel" id="noTel" class="form-control" placeholder="No Telefon 1" size="10" maxlength="12">
       </div>
       <div class="form-group">
           <label for="no-telefon">No Telefon 2 </label>
           <input type="text" name="noTel2" id="noTel2" class="form-control" placeholder="No Telefon 2" size="10" maxlength="12">
       </div>
       <div class="form-group">
           <label for="no-telefon">No Telefon 3 </label>
           <input type="text" name="noTel3" id="noTel3" class="form-control" placeholder="No Telefon 3" size="10" maxlength="12">
       </div>

       <div class="form-group">
           <label for="sambungan">Sambungan </label>
           <input type="text" name="sambungan" id="sambungan" class="form-control" placeholder="Sambungan" size="10" maxlength="4">
       </div>

       <div class="form-group">
           <label for="speed-dial">Speed Dial</label>
           <input type="text" name="speedDial" id="speedDial" class="form-control" placeholder="Speed Dial" size="7" maxlength="3">
       </div>
       <div class="form-group">
           <label for="no-fax">No Fax</label>
           <input type="text" name="noFaks" id="noFaks" class="form-control" placeholder="No Fax" size="10" maxlength="40">
       </div>
       <div class="form-group">
           <label for="alamat">Alamat</label>
           <textarea type="text" name="alamat" id="alamat" class="form-control" rows="4" cols="35" placeholder="Alamat" size="10" maxlength="40"></textarea>
       </div>

        <button type="submit" class="btn btn-default">Daftar Syarikat</button>
        {{ Form::token() }}
    </form>
</div>

<div id="results"></div>

{{--##################################################################--}}




{{--###########################################################################--}}

<script>


$('#frm').on('submit', function(e){

    e.preventDefault();

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    var input = 'nama=' + $('#nama').val();
    input += '&noTel=' + $('#noTel').val();
    input += '&noTel2=' + $('#noTel2').val();
    input += '&noTel3=' + $('#noTel3').val();
    input += '&sambungan=' + $('#sambungan').val();
    input += '&speedDial=' + $('#speedDial').val();
    input += '&noFaks=' + $('#noFaks').val();
    input += '&alamat=' + $('#alamat').val();
    input += '&token=' + $('input[name=_token]').val();

    alert(input);


    var url = "{{ URL::route('daftar-syarikat-post') }}";

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            alert('Daftar Syarikat Berjaya');
            window.location.reload();
//            console.log(data);


        },
        error   : function(req, err){
            console.log('My Error : ' + err);
            alert('Daftar Syarikat Gagal !');
        }
    }, "json");

    return false;
});

</script>

@stop


@stop