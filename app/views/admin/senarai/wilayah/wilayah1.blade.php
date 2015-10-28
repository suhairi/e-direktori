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
                        <th>Kod</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="center">Pengurus Wilayah</td>
                        <td class="center">04 976 2601</td>
                        <td class="center">#600</td>
                    </tr>
                    <tr>
                        <td class="center"></td>
                        <td class="center">04 976 2611</td>
                        <td class="center">#601</td>
                    </tr>

                    <tr>
                        <td class="center">&nbsp;</td>
                        <td class="center" colspan="2" style="font-weight: bold">No Faks</td>
                    </tr>

                    <tr>
                        <td class="center">&nbsp;</td>
                        <td class="center" colspan="2">04 976 0326</td>
                    </tr>

                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr><td colspan="3" style="font-weight: bold">Bahagian Pertanian</td></tr>
                    <tr>
                        <td class="center">A1 - Arau</td>
                        <td class="center">04 986 1109</td>
                        <td class="center">#608</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Badrul Hisham Hashim</td>
                        <td class="center">012 425 6844</td>
                        <td class="center">04 986 1109</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">B1 - Kayang</td>
                        <td class="center">04 976 1055</td>
                        <td class="center">#610</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Hj. Muhammad Zaki Ghani</td>
                        <td class="center">-</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">C1 - Kangar</td>
                        <td class="center">04 986 1109</td>
                        <td class="center">#612</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Khairil Azmer Ismail</td>
                        <td class="center">012 - 551 6781</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">D1 - Tambun Tulang</td>
                        <td class="center">04 986 1068</td>
                        <td class="center">#614</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Mohd Huzaifi Kamaruddin</td>
                        <td class="center">019 551 6784</td>
                        <td class="center">#804</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">E1 - Simpang Empat, Perlis</td>
                        <td class="center">04 976 1055</td>
                        <td class="center">#616</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Yusrizal Abu Bakar @ Zakaria</td>
                        <td class="center">019 415 5067</td>
                        <td class="center">-</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="center" colspan="3" style="font-weight: bold">Bahagian Teknikal</td>
                    </tr>
                    <tr>
                        <td class="center">A1 - Arau</td>
                        <td class="center">04 986 2524</td>
                        <td class="center">#609</td>
                    </tr>
                    <tr>
                        <td class="center">B1 - Kangar</td>
                        <td class="center">04 976 4158</td>
                        <td class="center">#611</td>
                    </tr>
                    <tr>
                        <td class="center">C1 - Kayang</td>
                        <td class="center">04 976 4159</td>
                        <td class="center">#613</td>
                    </tr>
                    <tr>
                        <td class="center">D1 - Tambun Tulang</td>
                        <td class="center">04 976 4399</td>
                        <td class="center">#615</td>
                    </tr>
                    <tr>
                        <td class="center">E1 - Simpang Empat, Perlis</td>
                        <td class="center">04 976 1055</td>
                        <td class="center">#617</td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop