@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">

       <table>
        <tr>
            <td><b>Nama Pengguna</b></td>
            <td><b>:</b></td>
            <td>{{ strtoupper(Auth::user()->username) }}</td>
        </tr>
        <tr>
            <td><b>Nama Sistem</b></td>
            <td><b>:</b></td>
            <td>e-Direktori</td>
        </tr>
       </table>
       <br />
       <div class="form-group">
           <label for="aduan">Aduan</label>
           <textarea type="text" name="aduan" id="aduan" class="form-control" rows="4" cols="35" placeholder="Aduan" size="10" maxlength="255"></textarea>
       </div>

        <button type="submit" class="btn btn-default">Hantar Aduan</button>
        {{ Form::token() }}
    </form>
</div>

<div id="results"></div>



<script>


$('#frm').on('submit', function(e){

    e.preventDefault();

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    var input = 'aduan=' + $('#aduan').val();
//    alert(input);


    var url = "{{ URL::route('aduan-post') }}";

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            swal({   title: 'Berjaya!',   text: 'Aduan berjaya dihantar.',   type: 'success',   confirmButtonText: 'OK' });
            setTimeout(function(){  window.location.reload()}, 4000);
            console.log(data);
        },
        error   : function(){
            swal({   title: 'Gagal!',   text: 'Aduan gagal dipadam.',   type: 'error',   confirmButtonText: 'OK' });
        }
    }, "json");

    return false;
});

</script>

@stop


@stop