@extends('layouts.admin')

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
                        <th>Pejabat</th>
                        <th>No Telefon</th>
                        <th>No Faks</th>
                        <th>Speed Dial</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Pejabat 1</td>
                        <td>04 7867 405</td>
                        <td class="center">04 7868 472</td>
                        <td class="center"># 699</td>
                    </tr>
                    <tr>
                        <td>Pejabat 2</td>
                        <td>04 7521 779</td>
                        <td class="center"></td>
                        <td class="center"></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop