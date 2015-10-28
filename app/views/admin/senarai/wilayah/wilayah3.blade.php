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
                        <td class="center">04 759 6089</td>
                        <td class="center">#604</td>
                    </tr>
                    <tr>
                        <td class="center"></td>
                        <td class="center">04 759 6250</td>
                        <td class="center">#605</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">&nbsp;</td>
                        <td class="center" colspan="2">No Faks</td>
                    </tr>
                    <tr>
                        <td class="center">&nbsp;</td>
                        <td class="center" colspan="2">04 759 2822</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr><td colspan="3" style="font-weight: bold">Bahagian Pertanian</td></tr>
                    <tr>
                        <td class="center">A3 - Hutan Kampong</td>
                        <td class="center">04 733 1544</td>
                        <td class="center">#636</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Anuar Mohamed Noor</td>
                        <td class="center">019 503 3077</td>
                        <td class="center">#138</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">B3 - Alor Senibong</td>
                        <td class="center">04 787 6252</td>
                        <td class="center">#638</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Mohd Zaini bin Hussin</td>
                        <td class="center">019 448 8468</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">C3 - Tajar</td>
                        <td class="center">04 730 2520</td>
                        <td class="center">#640</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : -</td>
                        <td class="center">-</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                     <tr>
                        <td class="center">D3 - Titi haji Idris</td>
                        <td class="center">04 734 6272</td>
                        <td class="center">#642</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Akma Madihah Md Yusoh</td>
                        <td class="center">019 278 2769</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                     <tr>
                        <td class="center">E3 - Kobah</td>
                        <td class="center">04 759 6254</td>
                        <td class="center">#644</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Ulul Azmi Mohamad Noor</td>
                        <td class="center">019 470 3544</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">F3 - Pendang</td>
                        <td class="center">04 759 6107</td>
                        <td class="center">#646</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Mohamad Zakwan Ibrahim</td>
                        <td class="center">012 577 3552</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center" colspan="3" style="font-weight: bold">Bahagian Teknikal</td>
                    </tr>
                    <tr>
                        <td class="center">A3 - Hutan Kampong</td>
                        <td class="center">04 733 9001</td>
                        <td class="center">#637</td>
                    </tr>
                    <tr>
                        <td class="center">B3 - Alor Senibong</td>
                        <td class="center">04 787 7548</td>
                        <td class="center">#639</td>
                    </tr>
                    <tr>
                        <td class="center">C3 - Tajar</td>
                        <td class="center">04 730 7248</td>
                        <td class="center">#641</td>
                    </tr>
                    <tr>
                        <td class="center">D3 - Titi Haji Idris</td>
                        <td class="center">04 734 7148</td>
                        <td class="center">#643</td>
                    </tr>
                    <tr>
                        <td class="center">E3 - Kobah</td>
                        <td class="center">04 759 7960</td>
                        <td class="center">#645</td>
                    </tr>
                    <tr>
                        <td class="center">F3 - Pendang</td>
                        <td class="center">04 759 4939</td>
                        <td class="center">#647</td>
                    </tr>
               </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop