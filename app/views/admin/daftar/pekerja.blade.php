@extends('layouts.admin')

@section('content')

<meta name="_token" content="{{ csrf_token() }}"/>

<div class="box-content">
    <form method="post" action="#" id="frm">
       <div class="form-group">
                   <label class="control-label" for="noPekerja">No Pekerja</label>
                   <input type="text" name="noPekerja" id="noPekerja" class="form-control" placeholder="No Pekerja" size="7" maxlength="4" required>
               </div>
               <div class="form-group">
                   <label for="noPekerja">Nama Penuh</label>
                   <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Penuh" size="50" maxlength="150">
               </div>
               <div class="form-group">
                   <label for="noPekerja">No Kad Pengenalan</label>
                   <input type="text" name="noKP" id="noKP" class="form-control" placeholder="No Kad Pengenalan" size="17" maxlength="12">
               </div>
               <div class="form-group">
                   <label for="noPekerja">Jawatan</label>
                   <input type="text" name="jawatan" id="jawatan" class="form-control" placeholder="Jawatan" size="35" maxlength="40">
               </div>
               <div class="form-group">
                   <label class="control-label" for="selectError">Penempatan</label>

                   <div class="controls">
                       <select id="penempatan" data-rel="chosen" class="form-control">
                       <option selected value="0">Penempatan</option>
                       <?php
                            $penempatan = Penempatan::orderBy('id', 'ASC')->get();

                            foreach($penempatan as $tempat) {
                                echo "<option value='".$tempat->id."'>".$tempat->nama."</option>";
                            }
                       ?>
                       </select>
                   </div>
               </div>
               <div class="form-group">
                  <label class="control-label" for="selectError">Bahagian</label>

                  <div class="controls">
                      <select id="bahagian" name="bahagian" data-rel="chosen" class="form-control">
                      <option selected value="0">Bahagian</option>
                      <?php
                           $bahagian = Bahagian::orderBy('id', 'ASC')->get();

                           foreach($bahagian as $tempat) {
                               echo "<option value='".$tempat->id."'>".$tempat->nama."</option>";
                           }
                      ?>
                      </select>
                  </div>
                </div>
               <div class="control-group">
                   <label class="control-label" for="selectError">Cawangan</label>
                   <div class="controls">
                           <div id="results"></div>
                   </div>
               </div>
               <br />
               <div class="form-group">
                  <label for="sambungan">Sambungan</label>
                  <input type="text" name="sambungan" id="sambungan" class="form-control" placeholder="No Sambungan" size="12" maxlength="4">
               </div>
               <div class="form-group">
                   <label for="faks">Faks</label>
                   <input type="text" name="faks" id="faks" class="form-control" placeholder="No Faks" size="8" maxlength="12">
               </div>
               <div class="form-group">
                   <label for="Speed Dial">Speed Dial (#)</label>
                   <input type="text" name="speedDial" id="speedDial" class="form-control" placeholder="Speed Dial" size="12" maxlength="4">
               </div>
               <div class="form-group">
                   <label for="noPhone">Telefon Bimbit</label>
                   <input type="text" name="noPhone" id="noPhone" class="form-control" placeholder="Telefon Bimbit" size="12" maxlength="12">
               </div>
               <div class="form-group">
                   <label class="control-label" for="selectError">Status</label>

                   <div class="controls">
                     <select id="status" name="status" data-rel="chosen" class="form-control">
                       <option selected value="AKTIF">Aktif</option>
                       <option value="TIDAK AKTIF">Tidak Aktif</option>
                   </select>
                   </div>
               </div>
               <div class="form-group">
                   <label class="control-label" for="selectError">Catatan</label>

                   <div class="controls">
                        <textarea name="catatan" id="catatan" class="form-control" placeholder="catatan" size="60" maxlength="255"></textarea>
                   </div>
               </div>



        <button type="submit" class="btn btn-default">Daftar Pekerja</button>
        {{ Form::token() }}
    </form>
</div>

<div id="results"></div>


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

    var input = 'noPekerja=' + $('#noPekerja').val();
    input += '&nama=' + $('#nama').val();
    input += '&noKP=' + $('#noKP').val();
    input += '&jawatan=' + $('#jawatan').val();
    input += '&penempatan=' + $('#penempatan').val();
    input += '&bahagian=' + $('#bahagian').val();
    input += '&cawangan=' + $('#cawangan').val();
    input += '&sambungan=' + $('#sambungan').val();
    input += '&faks=' + $('#faks').val();
    input += '&speedDial=' + $('#speedDial').val();
    input += '&noPhone=' + $('#noPhone').val();
    input += '&status=' + $('#status').val();
    input += '&catatan=' + $('#catatan').val();
    input += '&token=' + $('input[name=_token]').val();

//    alert(input);


    var url = "{{ URL::route('daftar-pekerja-post') }}";

    $.ajax({
        type    : "POST",
        url     : url,
        data    : input,
        success : function(data){
            swal({   title: 'Berjaya!',   text: 'Staff berjaya didaftar.',   type: 'success',   confirmButtonText: 'OK' });
            setTimeout(function() { window.location.reload() }, 4000);
        },
        error   : function(){
            swal({   title: 'Gagal!',   text: 'Staff gagal didaftar.',   type: 'error',   confirmButtonText: 'OK' });
        }
    }, "json");

    return false;
});

</script>

@stop


@stop