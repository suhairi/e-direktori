@extends('layouts.carianUmum')


@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Hadis Hari Ini</h2>

                <div class="box-icon">
                    {{--<a href="#" class="btn btn-setting btn-round btn-default"><i--}}
                            {{--class="glyphicon glyphicon-cog"></i></a>--}}
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">

                    <b>Hadis {{ $hadis->id }} : <br /> {{ $hadis->hadis }}<b>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> {{ $title }}</h2>

                <div class="box-icon">
                    {{--<a href="#" class="btn btn-setting btn-round btn-default"><i--}}
                            {{--class="glyphicon glyphicon-cog"></i></a>--}}
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">

                    <form role="form">
                            <div class="form-group">
                              <input type="text" autofocus class="search-query form-control col-md-10" id="search" placeholder="Carian Pekerja ...">
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('carian')

<div class="row" id="row2">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Hasil Carian</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content2">
                <div id="results"></div>
            </div>
        </div>
    </div>
</div>



<script>

$(document).ready(function() {

    $('#row2').hide();

    $('#search').keyup(function(e) {

            e.preventDefault();

            $('#row2').show();

            var strData = $('#search').val();
            var url = "{{ URL::route('carian-umum-staff') }}";
            url += '/' + strData;
//            alert(url);

            if(strData != '') {
                $.ajax({
                    type    : 'GET',
                    url     : url,
                    data    : strData,
                    success : function(data) {
                        $('#results').html(data).slideDown(2000);
                    }
                }, 'json');
            }
            return false;
        });
})


</script>




@stop