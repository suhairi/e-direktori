@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
        <div class="form-group">
            <label class="control-label" for="bahagian">Nama Bahagian</label>
            <input type="text" class="form-control" name="bahagian" id="textInput" placeholder="Nama Bahagian" size="25" maxlength="255" autofocus>
        </div>

        <button type="submit" class="btn btn-default">Daftar Bahagian</button>
        {{ Form::token() }}
    </form>
</div>

<div id="results"></div>

{{--##################################################################--}}


<div class="box-content">
    <div class="box col-md-8">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>Senarai Bahagian</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>Bil</th>
                        <th>Bahagian</th>
                        <th class="center">Pilihan</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                        $bahagian = Bahagian::orderBy('id', 'ASC')->get();
                        $bil = 0;
                    ?>
                        @foreach($bahagian as $tempat)
                            <?php $bil++; ?>
                            <tr>
                            <td class='center' valign='middle'>{{ $bil }}</td>
                            <td class='center' valign='middle'>{{ $tempat->nama }}</td>
                            <td class='center'><a class=' delete btn btn-danger' data-id="{{ $tempat->id }}" href='#'>
                                <i class='glyphicon glyphicon-trash icon-white'></i>Delete</a></td>
                            </tr>

                        @endforeach

                        @if($bil == 0)
                            <tr>
                            <td class='center' colspan='3'><font color='red'>Tiada Data</font></td>
                            </tr>

                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{--###########################################################################--}}

<script>

$('.delete').click(function(e) {

    e.preventDefault();

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    var id   = $(this).data("id");
    var url  = "{{ URL::route('bahagian-delete_') }}";
    url     += '/' + id;

    $.ajax({
        type    : "GET",
        url     : url,
        data    : id,
        success : function(data){
            console.log(data);
            swal({   title: 'Berjaya!',   text: 'Bahagian berjaya dipadam.',   type: 'success',   confirmButtonText: 'OK' });
            alert('Delete Bahagian Berjaya');
            window.location.reload();
        },
        error   : function(){
            swal({   title: 'Gagal!',   text: 'Bahagian gagal dipadam',   type: 'error',   confirmButtonText: 'OK' });
        }
    }, "json");

    return false;
});

$('#frm').on('submit', function(e){

    e.preventDefault();

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    var input = 'input=' + $('#textInput').val() + '&token=' + $('input[name=_token]').val();
    var url = "{{ URL::route('daftar-bahagian-post') }}";

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            swal({   title: 'Berjaya!',   text: 'Bahagian berjaya didaftar.',   type: 'success',   confirmButtonText: 'OK' });
            setTimeout(function() { window.location.reload() }, 4000);
        },
        error   : function(){
            swal({   title: 'Gagal!',   text: 'Bahagian gagal dipadam',   type: 'error',   confirmButtonText: 'OK' });
        }
    }, "json");

    return false;
});

</script>

@stop