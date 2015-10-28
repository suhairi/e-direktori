<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Utama</li>
                        <li><a class="ajax-link" href="{{ URL::route('home') }}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::route('carian-staff') }}"><i class="glyphicon glyphicon-eye-open"></i><span> Carian Pekerja</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::route('carian-syarikat') }}"><i class="glyphicon glyphicon-eye-open"></i><span> Carian Syarikat</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-edit"></i><span> My Aduan</span></a>
                            <ul class="nav nav-pills nav-stacked nav-dropped">
                                <li><a href="{{ URL::route('myaduan') }}">Hantar Aduan</a></li>
                                <li><a href="{{ URL::route('myaduan-inbox') }}">Inbox</a></li>
                            </ul>
                        </li>

                        {{--<li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>--}}
                        {{--</li>--}}
                        <li class="nav-header hidden-md">Daftar</li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Daftar</span></a>
                            <ul class="nav nav-pills nav-stacked nav-dropped">
                                <li><a href="{{ URL::route('daftar-pekerja') }}">Staff</a></li>
                                <li><a href="{{ URL::route('daftar-pekerja2') }}">Staff Pencen</a></li>
                                <li><a href="{{ URL::route('daftar-penempatan') }}">Penempatan</a></li>
                                <li><a href="{{ URL::route('daftar-bahagian') }}">Bahagian</a></li>
                                <li><a href="{{ URL::route('daftar-cawangan') }}">Cawangan</a></li>
                                <li><a href="{{ URL::route('daftar-ppk') }}">PPK</a></li>
                                <li><a href="{{ URL::route('daftar-syarikat') }}">Syarikat</a></li>
                            </ul>
                        </li>
                        <li class="nav-header hidden-md">Senarai </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Bahagian</span></a>
                            <ul class="nav nav-pills nav-stacked nav-dropped">
                                <li><a href="{{ URL::route('senarai-khidmat-pengurusan') }}">Khidmat Pengurusan</a></li>
                                <li><a href="{{ URL::route('senarai-bptm') }}">Perancangan & Teknologi Maklumat</a></li>
                                <li><a href="{{ URL::route('senarai-pengurusan-wilayah') }}">Pengurusan Wilayah</a></li>
                                <li><a href="{{ URL::route('senarai-industri-padi') }}">Industri Padi</a></li>
                                <li><a href="{{ URL::route('senarai-iat') }}">Industri Asas Tani & Bukan Padi</a></li>
                                <li><a href="{{ URL::route('senarai-pip') }}">Pengurusan Institusi Peladang</a></li>
                                <li><a href="{{ URL::route('senarai-mekanikal') }}">Mekanikal & Infrastruktur</a></li>
                                <li><a href="{{ URL::route('senarai-pengairan') }}">Perkhidmatan Pengairan & Saliran</a></li>
                                <li><a href="{{ URL::route('senarai-empangan') }}">Pengurusan Empangan & Sumber Air</a></li>
                                {{--<li><a href="{{ URL::route('senarai-lain') }}">Lain-lain</a></li>--}}
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Wilayah</span></a>
                            <ul class="nav nav-pills nav-stacked nav-dropped">
                                <li><a href="{{ URL::route('senarai-wilayah-1') }}">Wilayah 1</a></li>
                                <li><a href="{{ URL::route('senarai-wilayah-2') }}">Wilayah 2</a></li>
                                <li><a href="{{ URL::route('senarai-wilayah-3') }}">Wilayah 3</a></li>
                                <li><a href="{{ URL::route('senarai-wilayah-4') }}">Wilayah 4</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Empangan</span></a>
                            <ul class="nav nav-pills nav-stacked nav-dropped">
                                <li><a href="{{ URL::route('senarai-empangan-muda') }}">MUDA</a></li>
                                <li><a href="{{ URL::route('senarai-empangan-pedu') }}">Pedu</a></li>
                                <li><a href="{{ URL::route('senarai-empangan-ahning') }}">Ahning</a></li>
                            </ul>
                        </li>
                        {{--<li><a href="{{ URL::route('senarai-lain') }}">Lain-lain</a></li>--}}
                        <li><a class="ajax-link" href="{{ URL::route('senarai-lain') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Bilik Mesyuarat</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::route('senarai-worksyop') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Worksyop</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::route('senarai-sppm') }}"><i class="glyphicon glyphicon-list-alt"></i><span> SPPM/KLM</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::route('senarai-faks') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Faks HQ</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::route('senarai-pengarah') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Pengarah /PA</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::route('senarai-speed-dial') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Speed Dial</span></a></li>
                        <li><a class="ajax-link" href="{{ URL::route('senarai-speed-dial2') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Speed Dial 2</span></a></li>

                        {{--<li><a class="ajax-link" href="{{ URL::route('test') }}"><i class="glyphicon glyphicon-list-alt"></i><span>Test</span></a></li>--}}

                    </ul>
                    {{--<label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>--}}
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->