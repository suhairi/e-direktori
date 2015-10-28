@extends('layouts.admin')

@section('content')


<div class="box-content">
    <table class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>
            <th>Pejabat</th>
            <th>No Telefon</th>
            <th>Kod</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="center">Pejabat 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="center">04 917 1212</td>
            <td class="center">#686</td>
        </tr>
        <tr>
            <td class="center">Pejabat 2</td>
            <td class="center">04 917 1216</td>
            <td class="center">#688</td>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
            <td class="center">&nbsp;</td>
            <td class="center" colspan="2" style="font-weight: bold">No Faks</td>
        </tr>
        <tr>
            <td class="center">&nbsp;</td>
            <td class="center" colspan="2">04 917 6473</td>
        </tr>
        <tr><td colspan="5">&nbsp;</td></tr>
        </tbody>
    </table>
</div>

@stop