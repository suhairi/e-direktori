@extends('layouts.admin')

@section('content')

    <input type="hidden" id="hadisId" value="{{ $hadis->id }}"/>
    <input type="hidden" id="hadisText" value="{{ $hadis->hadis }}"/>
    <script language="javascript">
        var hadisId = document.getElementById("hadisId");
        var hadis = document.getElementById("hadisText")
        swal({   title: 'Hadis ' + hadisId.value,   text: 'Hadis ' + hadis.value,   type: 'success',   confirmButtonText: 'OK' });
    </script>


@stop