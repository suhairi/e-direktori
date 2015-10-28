@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
        <div class="form-group">
            <label class="control-label" for="penempatan">Nama Penempatan</label>
            <input type="text" class="form-control" name="penempatan" id="textInput" placeholder="Nama Penempatan" size="25" maxlength="25" autofocus>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
        {{ Form::token() }}
    </form>
</div>

<div id="results"></div>

{{--##################################################################--}}


<div class="box-content">
    <div class="box col-md-8">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>Senarai Penempatan</h2>

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
                        $penempatan = Penempatan::orderBy('id', 'ASC')->get();
                        $bil = 0;
                    ?>
                        @foreach($penempatan as $tempat)
                            <?php $bil++; ?>
                            <tr>
                            <td class='center' valign='middle'>{{ $bil }}</td>
                            <td class='center' valign='middle'>{{ $tempat->nama }}</td>
                            <td class='center'><a class='delete btn btn-danger' data-id="{{ $tempat->id  }}">
                                    <i class='glyphicon glyphicon-trash icon-white'></i>Delete</a>
                            </td>
                            </tr>

                        @endforeach

                        @if($bil == 0)
                            <tr>
                                <td class='center' colspan='3'><font color='red'> Tiada Data</font></td>
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
    var url  = "{{ URL::route('penempatan-delete_') }}";
    url     += '/' + id;
//    alert(url);

    $.ajax({
        type    : "GET",
        url     : url,
        data    : id,
        success : function(data){
            console.log(data);
            swal({   title: 'Berjaya!',   text: 'Penempatan berjaya didaftar.',   type: 'success',   confirmButtonText: 'OK' });
            setTimeout(function() { window.location.reload() }, 4000);
        },
        error   : function(){
            swal({   title: 'Gagal!',   text: 'Penempatan gagal didaftar.',   type: 'error',   confirmButtonText: 'OK' });
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
    var url = "{{ URL::route('daftar-penempatan-post') }}";

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            swal({   title: 'Berjaya!',   text: 'Penempatan berjaya didaftar.',   type: 'success',   confirmButtonText: 'OK' });
            window.location.reload();
        },
        error   : function(){
            alert('Daftar Penempatan Gagal !');
        }
    }, "json");

    return false;
});

</script>

@stop