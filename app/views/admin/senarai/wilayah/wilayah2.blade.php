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
                        <td class="center">04 917 1280</td>
                        <td class="center">#602</td>
                    </tr>
                    <tr>
                        <td class="center"></td>
                        <td class="center">04 917 2467</td>
                        <td class="center">#603</td>
                    </tr>


                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">&nbsp;</td>
                        <td class="center" colspan="2" style="font-weight: bold">No Faks</td>
                    </tr>
                    <tr>
                        <td class="center">&nbsp;</td>
                        <td class="center" colspan="2">04 917 6471</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr><td colspan="3" style="font-weight: bold">Bahagian Pertanian</td></tr>
                    <tr>
                        <td class="center">A2 - Kodiang</td>
                        <td class="center">04 925 5208</td>
                        <td class="center">#618</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Hj. Mohd Kahir Wan</td>
                        <td class="center">012 545 4783</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">B2 - Sanglang</td>
                        <td class="center">04 925 4176</td>
                        <td class="center">#620</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Mohammad Hanifah Abu Hashim</td>
                        <td class="center">017 404 1539/td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">C2 - Kerpan</td>
                        <td class="center">04 794 0044</td>
                        <td class="center">#622</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Hasni Hafiz Ramli</td>
                        <td class="center">019 478 3447</td>
                        <td class="center">-</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">D2 - Tunjang</td>
                        <td class="center">04 929 1813</td>
                        <td class="center">#624</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Muhamad Wahid Mohamad Tahir</td>
                        <td class="center">012 562 1208</td>
                        <td class="center">#817</td>
                    </tr>
                    <tr><td colspan="3">&nbsp;</td></tr>
                    <tr>
                        <td class="center">E2 - Kubang Sepat</td>
                        <td class="center">04 794 0084</td>
                        <td class="center">#626</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Mohammad Sobri Hashim</td>
                        <td class="center">019 542 4867</td>
                        <td class="center">#628</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="center">F2 - Jerlun</td>
                        <td class="center">04 794 0263</td>
                        <td class="center">#628</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Shaarani Yusoff</td>
                        <td class="center">012 504 2356</td>
                        <td class="center">-</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="center">G2 - Jitra</td>
                        <td class="center">04 917 1313</td>
                        <td class="center">#630</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Shahrol Said</td>
                        <td class="center">016 414 2144</td>
                        <td class="center">-</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="center">H2 - Kepala Batas</td>
                        <td class="center">04 714 4324</td>
                        <td class="center">#632</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Ku Saadiah Ku Shafie</td>
                        <td class="center">012 500 1770</td>
                        <td class="center">-</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="center">I2 - Kuala Sungai</td>
                        <td class="center">04 733 8118</td>
                        <td class="center">#634</td>
                    </tr>
                    <tr>
                        <td class="center">Pengurus : Amrin Hamdan</td>
                        <td class="center">019 577 6663</td>
                        <td class="center">-</td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="center" colspan="3" style="font-weight: bold">Bahagian Teknikal</td>
                    </tr>
                    <tr>
                        <td class="center">A2 - Kodiang</td>
                        <td class="center">04 925 5570</td>
                        <td class="center">#619</td>
                    </tr>
                    <tr>
                        <td class="center">B2 - Sanglang</td>
                        <td class="center">04 915 3320</td>
                        <td class="center">#621</td>
                    </tr>
                    <tr>
                        <td class="center">C2 - Kerpan</td>
                        <td class="center">04 794 9301</td>
                        <td class="center">#623</td>
                    </tr>
                    <tr>
                        <td class="center">D2 - Tunjang</td>
                        <td class="center">04 929 1429</td>
                        <td class="center">#625</td>
                    </tr>
                    <tr>
                        <td class="center">E2 - Kubang Sepat</td>
                        <td class="center">04 794 9291</td>
                        <td class="center">#627</td>
                    </tr>
                    <tr>
                        <td class="center">F2 - Jerlun</td>
                        <td class="center">04 794 9290</td>
                        <td class="center">#629</td>
                    </tr>
                    <tr>
                        <td class="center">G2 - Jitra</td>
                        <td class="center">04 917 4571</td>
                        <td class="center">#631</td>
                    </tr>
                    <tr>
                        <td class="center">H2 - Kepala Batas</td>
                        <td class="center">714 4743</td>
                        <td class="center">#633</td>
                    </tr>
                    <tr>
                        <td class="center">I2 - Hutan Kampong</td>
                        <td class="center">04 733 9493</td>
                        <td class="center">#635</td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop