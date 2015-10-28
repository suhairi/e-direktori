@extends('layouts.carian')

@section('content')

@if(Session::get('hadisDone') == 'first')
    <input type="hidden" id="hadisId" value="{{ $hadis->id }}"/>
    <input type="hidden" id="hadisText" value="{{ $hadis->hadis }}"/>
    <script language="javascript">
        var hadisId = document.getElementById("hadisId");
        var hadis = document.getElementById("hadisText")
        swal({   title: 'Hadis ' + hadisId.value,   text: 'Hadis ' + hadis.value,   type: 'success',   confirmButtonText: 'OK' });
    </script>
@endif
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
                    @if(Session::has('message'))
                        <div class="alert alert-warning">{{ Session::get('message') }}</div>
                    @endif

                    @if(Session::has('success'))
                      <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if(Session::has('fail'))
                      <div class="alert alert-warning">{{ Session::get('fail') }}</div>
                    @endif

                    <form role="form">
                            <div class="form-group">
                              <input type="text" autofocus class="search-query form-control col-md-10" id="search" placeholder="Carian Pekerja ...">
                                <input class="form-control" ng-model="username" ng-keyup="search()" placeholder="Carian Baru" />
                            </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


@stop

@section('carian')

<div class="row" id="row3" ng-show="users">
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
            <div class="box-content3">
                <table class="table table-bordered table-hover responsive">
                    <thead>
                    <tr>
                        <th>Bil</th>
                        <th>Nama</th>
                        <th>Sambungan</th>
                        <th>Speed Dial</th>
                        <th>Telefon Bimbit</th>
                        <th>Jawatan</th>
                        <th>Pilihan</th>
                    </tr>
                    </thead>
                    <tbbody>
                        <tr ng-repeat="user in users">
                            <td>@{{ $index + 1 }}</td>
                            <td>@{{ user.nama }}</td>
                            <td>@{{ user.sambungan }}</td>
                            <td>@{{ user.speedDial }}</td>
                            <td>@{{ user.noPhone }}</td>
                            <td>@{{ user.jawatan }}</td>
                            <td>[ <a href="#">Hapus</a> ]
                                {{--[ <a href="{{ URL::route('staff-delete', array($user->noPekerja) ) }}">Hapus</a> ]--}}
                                {{--[ <a href="{{ URL::route('staff-kemaskini', array($user->noPekerja) ) }}">Kemaskini</a> ]--}}
                            </td>
                        </tr>
                    </tbbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{--<div id="url">--}}

{{--</div>--}}
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


                    <div id="results">

                    </div>

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
            var url = "{{ URL::route('carian-staff') }}";
            url += '/' + strData;

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