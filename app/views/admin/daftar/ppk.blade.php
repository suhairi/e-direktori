@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
       <div class="form-group">
           <label class="nama-ppk" for="noPekerja">Nama PPK</label>
           <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama PPK" size="50" maxlength="150">
       </div>
       <div class="form-group">
           <label for="no-telefon">No Telefon</label>
           <input type="text" name="noTel" id="noTel" class="form-control" placeholder="No Telefon" size="10" maxlength="12">
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

        <button type="submit" class="btn btn-default">Daftar PPK</button>
        {{ Form::token() }}
    </form>
</div>

<div id="results"></div>

{{--##################################################################--}}


<div class="box-content">
    <div class="box col-md-35">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>Senarai PPK</h2>

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
                        <th>Nama</th>
                        <th>No Telefon</th>
                        <th>Speed Dial</th>
                        <th>Faks</th>
                        <th>Alamat</th>
                        <th class="center">Pilihan</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                        $ppk = Ppk::orderBy('id', 'ASC')->get();
                        $bil = 0;
                    ?>
                        @foreach($ppk as $tempat)
                            <?php $bil++; ?>
                            <tr>
                            <td class='center' valign='middle'>{{ $bil }}</td>
                            <td class='center' valign='middle'>{{ $tempat->nama }}</td>
                            <td class='center' valign='middle'>{{ $tempat->noTel }}</td>
                            <td class='center' valign='middle'>{{ $tempat->speedDial }}</td>
                            <td class='center' valign='middle'>{{ $tempat->noFaks }}</td>
                            <td class='center' valign='middle'>{{ $tempat->alamat }}</td>
                            <td class='center'><a class='delete btn btn-danger' data-id="{{ $tempat->id }}" href='#'>
                                <i class='glyphicon glyphicon-trash icon-white'></i>Delete</a></td>
                            </tr>

                        @endforeach

                        @if($bil == 0)
                            <tr>
                            <td class='center' colspan='3'>Tiada Data</td>
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
    var url  = "{{ URL::route('ppk-delete_') }}";
    url     += '/' + id;
//    alert(id);
//    alert(url);

    $.ajax({
        type    : "GET",
        url     : url,
        data    : id,
        success : function(data){
            console.log(data);
            swal( { title: "Berjaya!", text:"PPK berjaya didaftar.", type:"success", confirmButtonText: "  OK  "});
            window.location.reload();
        },
        error   : function(){
            alert('Delete PPK Gagal !');
        }
    }, "json");

    return false;
});

$('#frm').on('submit', function(e){

    e.preventDefault();

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

    var input = 'nama=' + $('#nama').val();
    input += '&noTel=' + $('#noTel').val();
    input += '&speedDial=' + $('#speedDial').val();
    input += '&noFaks=' + $('#noFaks').val();
    input += '&alamat=' + $('#alamat').val();
    input += '&token=' + $('input[name=_token]').val();

//    alert(input);


    var url = "{{ URL::route('daftar-ppk-post') }}";

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            alert('Daftar PPK Berjaya');
            window.location.reload();
//            console.log(data);


        },
        error   : function(){
            alert('Daftar PPK Gagal !');
        }
    }, "json");

    return false;
});

</script>

@stop


@stop