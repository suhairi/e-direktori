@extends('......layouts.admin')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>{{ $title }}</h2>

                <div class="box-icon">
                    {{--<a href="#" class="btn btn-setting btn-round btn-default"><i--}}
                            {{--class="glyphicon glyphicon-cog"></i></a>--}}
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th colspan="4">Dewan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Dewan Syed Nahar</td>
                        <td class="center" width="20%">128</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="box-content">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th colspan="4">Bilik Mesyuarat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Bilik Mesyuarat Teknikal</td>
                        <td class="center" width="20%">275</td>
                    </tr>
                    <tr>
                        <td>Bilik Anggerik</td>
                        <td class="center">163</td>
                    </tr>
                    <tr>
                        <td>Bilik Ahning</td>
                        <td class="center">227</td>
                    </tr>
                    <tr>
                        <td>Bilik Cempaka</td>
                        <td class="center">159</td>
                    </tr>
                    <tr>
                        <td>Bilik Langkasuka</td>
                        <td class="center">138</td>
                    </tr>
                    <tr>
                        <td>Bilik Mahsuri</td>
                        <td class="center">321</td>
                    </tr>
                    <tr>
                        <td>Bilik Melati</td>
                        <td class="center">136</td>
                    </tr>
                    <tr>
                        <td>Bilik Malinja</td>
                        <td class="center">378</td>
                    </tr>

                     </tbody>
                </table>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th colspan="4">Bilik-bilik lain</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                       <td>Bilik Kawalan Ampang Jajar</td>
                       <td class="center" width="20%">250</td>
                    </tr>
                    <tr>
                       <td>War Room</td>
                       <td class="center" width="20%">260</td>
                    </tr>

                    <tr>
                       <td>Bilik Pemandu</td>
                       <td class="center">173</td>
                    </tr>
                    <tr>
                       <td>Kantin</td>
                       <td class="center">401</td>
                    </tr>
                    <tr>
                        <td>Pondok Kawalan</td>
                        <td class="center">404</td>
                    </tr>
                    <tr>
                        <td>KOMADA</td>
                        <td class="center">173</td>
                    </tr>
                    <tr>
                        <td>MUDA Lounge</td>
                        <td class="center">139</td>
                    </tr>
                    <tr>
                        <td>Pusat Info MADA (Perpustakaan)</td>
                        <td class="center">188</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop