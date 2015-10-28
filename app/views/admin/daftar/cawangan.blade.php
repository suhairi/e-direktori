@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
        <div class="form-group">
            <label class="control-label" for="bahagian">Nama Cawangan</label>
            <select name="bahagian" id="bahagian" data-rel="chosen" class="form-control">
                <option>Bahagian</option>
                <?php $bahagian = Bahagian::all(); ?>

                @foreach($bahagian as $bhgn)
                    <option value="{{ $bhgn->id }}">{{ $bhgn->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="cawangan">Nama Cawangan</label>
            <input type="text" class="form-control" name="cawangan" id="cawangan" placeholder="Nama Cawangan" size="25" maxlength="255" autofocus>
        </div>

        <button type="submit" class="btn btn-default">Daftar Cawangan</button>
        {{ Form::token() }}
    </form>
</div>

<div id="results"></div>

{{--##################################################################--}}


<div class="box-content">
    <div class="box col-md-8">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>Senarai Cawangan</h2>
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
                        <th>Cawangan</th>
                        <th class="center">Pilihan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $cawangan = Cawangan::orderBy('id', 'ASC')->get();
                        $bil = 0;
                    ?>
                        @foreach($cawangan as $tempat)
                            <?php $bil++; ?>
                            <tr>
                            <td class='center' valign='middle'>{{ $bil }}</td>
                            <td class='center' valign='middle'>{{ $tempat->bahagian }}</td>
                            <td class='center' valign='middle'>{{ $tempat->nama }}</td>
                            <td class='center'><a class='delete btn btn-danger' data-id="{{ $tempat->id }}" href='#'>
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
    var url  = "{{ URL::route('cawangan-delete_') }}";
    url     += '/' + id;
//    alert(id);
//    alert(url);

    $.ajax({
        type    : "GET",
        url     : url,
        data    : id,
        success : function(data){
            console.log(data);
            swal({   title: 'Berjaya!',   text: 'Cawangan berjaya dipadam.',   type: 'success',   confirmButtonText: 'OK' });
            setTimeout(function() {window.location.reload()}, 4000);
        },
        error   : function(){
            swal({   title: 'Gagal!',   text: 'Cawangan gagal dipadam.',   type: 'error',   confirmButtonText: 'OK' });
        }
    }, "json");

    return false;
});

$('#frm').on('submit', function(e){

    e.preventDefault();

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    var input    = 'bahagian=' + $('#bahagian').val();
    input       += '&cawangan=' + $('#cawangan').val();
    input       += '&token=' + $('input[name=_token]').val();

    var url = "{{ URL::route('daftar-cawangan-post') }}";
//    alert(input);

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            swal({   title: 'Berjaya!',   text: 'Aduan berjaya didaftar.',   type: 'success',   confirmButtonText: 'OK' });
            setTimeout(function() { window.location.reload() }, 4000);

        },
        error   : function(){
            swal({   title: 'Gagal!',   text: 'Aduan gagal didaftar.',   type: 'error',   confirmButtonText: 'OK' });
        }
    }, "json");

    return false;
});

</script>

@stop