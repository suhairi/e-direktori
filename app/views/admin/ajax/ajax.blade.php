@extends('layouts.admin')


@section('content')

<h2>Create a Form</h2>

<div class="container">

    <div class="search">
        <input type="text" name="searchStaff" id="searchInput" />
    </div>

    <div id="results">here</div>

</div>

<script>

$(document).ready(function() {

       $("#searchInput").keyup(function() {

          var hr = new XMLHttpRequest();
          var url = "{{ URL::route('ajax') }}/"+ $("#searchInput").val();

          alert(url);

          hr.onreadystatechange = function() {

            if(hr.readyState == 4 && hr.status == 400) {
                alert(url);

            }
          }

          hr.open('GET', url + $("#searchInput").val(), true);
          hr.send();


       });

});

</script>





@stop