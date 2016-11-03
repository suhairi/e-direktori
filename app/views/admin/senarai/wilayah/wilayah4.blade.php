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
                        <td class="center">04 769 1237</td>
                        <td class="center">#606</td>
                    </tr>
                    <tr>
                        <td class="center"></td>
                        <td class="center">04 769 1107</td>
                        <td class="center">#607</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">&nbsp;</td>
                        <td class="center" colspan="2">No Faks</td>
                    </tr>
                    <tr>
                        <td class="center">&nbsp;</td>
                        <td class="center" colspan="2">04 769 3457</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr><td colspan="3" style="font-weight: bold">Bahagian Pertanian</td></tr>
                    <tr>
                        <td class="center">A4 - Batas Paip</td>
                        <td class="center">04 762 3240</td>
                        <td class="center">#648</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Aman bin Ahmad</td>
                        <td class="center">019 555 6858</td>
                        <td class="center">7776</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">B4 - Pengkalan Kundur</td>
                        <td class="center">04 771 5961</td>
                        <td class="center">#650</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Nurul Bariyah binti Abdul Manaf</td>
                        <td class="center">019 542 4504</td>
                        <td class="center">7777</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">C4 - Spg Empat Kangkong</td>
                        <td class="center">04 764 1493</td>
                        <td class="center">#652</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Azurah binti Abdul Rahman</td>
                        <td class="center">019 555 0565</td>
                        <td class="center">7778</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">D4 - Permatang Buluh</td>
                        <td class="center">04 769 1331</td>
                        <td class="center">#654</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Aman bin Ahmad</td>
                        <td class="center">-</td>
                        <td class="center">7779</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">E4 - Bukit Besar</td>
                        <td class="center">04 769 1359</td>
                        <td class="center">#656</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Murni Mustafa</td>
                        <td class="center">017 449 1752</td>
                        <td class="center">7780</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">F4 - Sungai Limau Dalam</td>
                        <td class="center">04 769 1395</td>
                        <td class="center">#658</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Shahroni binti Othman</td>
                        <td class="center">019 517 4997</td>
                        <td class="center">7781</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">G4 - Guar Chempedak</td>
                        <td class="center">04 468 6140</td>
                        <td class="center">#660</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Muhamad Mustaqim</td>
                        <td class="center">019 477 7190</td>
                        <td class="center">7782</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>


                    <tr>
                        <td class="center" colspan="3" style="font-weight: bold">Bahagian Teknikal</td>
                    </tr>
                    <tr>
                        <td class="center">A4 - Batas Paip</td>
                        <td class="center">04 762 2263</td>
                        <td class="center">#649</td>
                    </tr>
                    <tr>
                        <td class="center">B4 - Pengkalan Kundur</td>
                        <td class="center">04 771 3316</td>
                        <td class="center">#651</td>
                    </tr>
                    <tr>
                        <td class="center">C4 - Spg Empat Kangkong</td>
                        <td class="center">04 764 2881</td>
                        <td class="center">#653</td>
                    </tr>
                    <tr>
                        <td class="center">D4 - Permatang Buluh</td>
                        <td class="center">04 769 2813</td>
                        <td class="center">#655</td>
                    </tr>
                    <tr>
                        <td class="center">E4 - Bukit Besar</td>
                        <td class="center">04 769 3326</td>
                        <td class="center">#657</td>
                    </tr>
                    <tr>
                        <td class="center">F4 - Sungai Limau</td>
                        <td class="center">04 769 2796</td>
                        <td class="center">#659</td>
                    </tr>
                    <tr>
                        <td class="center">G4 - Guar Chempedak</td>
                        <td class="center">04 468 7945</td>
                        <td class="center">#661</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop