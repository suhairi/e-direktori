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
                        <th colspan="4">Pengarah</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Fouzi Ali</td>
                        <td class="center">Sambungan</td>
                            <td class="center">302</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="center">Faks</td>
                            <td class="center">04 771 3180</td>
                        </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th colspan="4">Setiausaha Pejabat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Farah Wahida Abdul Wahab</td>
                        <td class="center">Sambungan</td>
                        <td class="center">337</td>
                    </tr>
                    </tbody>
                </table>
                {{--<ul class="pagination pagination-centered">--}}
                    {{--<li><a href="#">Prev</a></li>--}}
                    {{--<li class="active">--}}
                        {{--<a href="#">1</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    {{--<li><a href="#">Next</a></li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </div>
</div>

@stop