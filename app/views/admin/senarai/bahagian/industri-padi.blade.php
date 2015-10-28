@extends('.........layouts.admin')

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
                        <th colspan="4">Timbalan Pengurus Besar (Pertanian)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Haji Roslee Baharom</td>
                        <td class="center">Panggilan Terus</td>
                        <td class="center">04  772 8653</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">Sambungan</td>
                        <td class="center">301</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">Faks</td>
                        <td class="center">04 772 3180</td>
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th colspan="4">Setiausaha Pejabat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nur Asmah Che Din</td>
                        <td class="center">Sambungan</td>
                        <td class="center">320</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th colspan="4">Pengarah</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Kamaruddin Dahuli</td>
                        <td class="center">Panggilan Terus</td>
                        <td class="center">04  772 8653</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">Sambungan</td>
                        <td class="center">345</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="center">Faks</td>
                        <td class="center">04 771 9850</td>
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th colspan="4">Setiausaha Pejabat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Noraini Md Noor</td>
                        <td class="center">Sambungan</td>
                        <td class="center">358</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop