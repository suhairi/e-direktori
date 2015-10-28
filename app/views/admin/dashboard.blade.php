@extends('layouts.admin')

@section('content')



Hello {{ ucFirst(Auth::user()->username) }} <br />


    <input class="form-control" ng-model="username" ng-keyup="search()" />
    <table class="table table-bordered table-hover responsive" ng-show="users">
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
                <td>
                    [ <a href="' . URL::route('staff-delete', array($user->noPekerja) ) . '">Hapus</a> ]
                    [ <a href="' . URL::route('staff-kemaskini', array($user->noPekerja) ) . '">Kemaskini</a> ]
                </td>
            </tr>
        </tbbody>
    </table>





@stop