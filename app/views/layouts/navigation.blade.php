<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div id='cssmenu'>
                    <ul>
                        <li class='active'><a href="{{ URL::route('home') }}"><span><i class="glyphicon glyphicon-home"></i> Dashboard</span></a></li>
                        <li class="active"><a href="{{ URL::route('hadis') }}"><span><i class="glyphicon glyphicon-book"></i> Hadis</span></a></li>
                        <li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-eye-open"></i> Carian</span></a>
                            <ul>
                                <li><a class="ajax-link" href="{{ URL::route('carian-staff') }}"><span>Carian Pekerja</span></a></li>
                                <li class="last"><a class="ajax-link" href="{{ URL::route('carian-syarikat') }}"><span>Carian Syarikat</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-eye-open"></i> My Aduan</span></a>
                            <ul>
                                <li><a href="{{ URL::route('myaduan') }}">Hantar Aduan</a></li>
                                <li><a href="{{ URL::route('myaduan-inbox') }}">Inbox</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-plus"></i> Daftar</span></a>
                            <ul>
                                <li><a href="{{ URL::route('daftar-pekerja') }}">Staff</a></li>
                                <li><a href="{{ URL::route('daftar-pekerja2') }}">Staff Pencen</a></li>
                                <li><a href="{{ URL::route('daftar-penempatan') }}">Penempatan</a></li>
                                <li><a href="{{ URL::route('daftar-bahagian') }}">Bahagian</a></li>
                                <li><a href="{{ URL::route('daftar-cawangan') }}">Cawangan</a></li>
                                <li><a href="{{ URL::route('daftar-ppk') }}">PPK</a></li>
                                <li><a href="{{ URL::route('daftar-syarikat') }}">Syarikat</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-plus"></i> Senarai</span></a>
                            <ul>
                                <li><a href="{{ URL::route('senarai-khidmat-pengurusan') }}">Khidmat Pengurusan</a></li>
                                <li><a href="{{ URL::route('senarai-bptm') }}">Perancangan & Teknologi Maklumat</a></li>
                                <li><a href="{{ URL::route('senarai-pengurusan-wilayah') }}">Pengurusan Wilayah</a></li>
                                <li><a href="{{ URL::route('senarai-industri-padi') }}">Industri Padi</a></li>
                                <li><a href="{{ URL::route('senarai-iat') }}">Industri Asas Tani & Bukan Padi</a></li>
                                <li><a href="{{ URL::route('senarai-pip') }}">Pengurusan Institusi Peladang</a></li>
                                <li><a href="{{ URL::route('senarai-mekanikal') }}">Mekanikal & Infrastruktur</a></li>
                                <li><a href="{{ URL::route('senarai-pengairan') }}">Perkhidmatan Pengairan & Saliran</a></li>
                                <li><a href="{{ URL::route('senarai-empangan') }}">Pengurusan Empangan & Sumber Air</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-plus"></i> Wilayah</span></a>
                            <ul>
                                <li><a href="{{ URL::route('senarai-wilayah-1') }}">Wilayah 1</a></li>
                                <li><a href="{{ URL::route('senarai-wilayah-2') }}">Wilayah 2</a></li>
                                <li><a href="{{ URL::route('senarai-wilayah-3') }}">Wilayah 3</a></li>
                                <li><a href="{{ URL::route('senarai-wilayah-4') }}">Wilayah 4</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-plus"></i> Empangan</span></a>
                            <ul>
                                <li><a href="{{ URL::route('senarai-empangan-muda') }}">MUDA</a></li>
                                <li><a href="{{ URL::route('senarai-empangan-pedu') }}">Pedu</a></li>
                                <li><a href="{{ URL::route('senarai-empangan-ahning') }}">Ahning</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-plus"></i> Lain-lain</span></a>
                            <ul>
                                <li><a class="ajax-link" href="{{ URL::route('senarai-lain') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Bilik Mesyuarat</span></a></li>
                                <li><a class="ajax-link" href="{{ URL::route('senarai-worksyop') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Worksyop</span></a></li>
                                <li><a class="ajax-link" href="{{ URL::route('senarai-sppm') }}"><i class="glyphicon glyphicon-list-alt"></i><span> SPPM/KLM</span></a></li>
                                <li><a class="ajax-link" href="{{ URL::route('senarai-faks') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Faks HQ</span></a></li>
                                <li><a class="ajax-link" href="{{ URL::route('senarai-pengarah') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Pengarah /PA</span></a></li>
                                <li><a class="ajax-link" href="{{ URL::route('senarai-speed-dial') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Speed Dial</span></a></li>
                                <li><a class="ajax-link" href="{{ URL::route('senarai-speed-dial2') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Speed Dial 2</span></a></li>

                            </ul>
                        </li>



                    </ul>
                </div>

                {{--<div class="nav-canvas">--}}

                    {{--<ul class="nav nav-pills nav-stacked main-menu">--}}
                        {{--<li class="nav-header">Utama</li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('home') }}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('carian-staff') }}"><i class="glyphicon glyphicon-eye-open"></i><span> Carian Pekerja</span></a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('carian-syarikat') }}"><i class="glyphicon glyphicon-eye-open"></i><span> Carian Syarikat</span></a></li>--}}
                        {{--<li class="accordion">--}}
                            {{--<a href="#"><i class="glyphicon glyphicon-edit"></i><span> My Aduan</span></a>--}}
                            {{--<ul class="nav nav-pills nav-stacked nav-dropped">--}}
                                {{--<li><a href="{{ URL::route('myaduan') }}">Hantar Aduan</a></li>--}}
                                {{--<li><a href="{{ URL::route('myaduan-inbox') }}">Inbox</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<ul class="nav nav-pills nav-stacked main-menu">--}}
                            {{--<li><a href="{{ URL::route('hadis') }}">Hadis</a></li>--}}
                        {{--</li>--}}

                        {{--<li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-header hidden-md">Daftar</li>--}}
                        {{--<li class="accordion">--}}
                            {{--<a href="#"><i class="glyphicon glyphicon-plus"></i><span> Daftar</span></a>--}}
                            {{--<ul class="nav nav-pills nav-stacked nav-dropped">--}}
                                {{--<li><a href="{{ URL::route('daftar-pekerja') }}">Staff</a></li>--}}
                                {{--<li><a href="{{ URL::route('daftar-pekerja2') }}">Staff Pencen</a></li>--}}
                                {{--<li><a href="{{ URL::route('daftar-penempatan') }}">Penempatan</a></li>--}}
                                {{--<li><a href="{{ URL::route('daftar-bahagian') }}">Bahagian</a></li>--}}
                                {{--<li><a href="{{ URL::route('daftar-cawangan') }}">Cawangan</a></li>--}}
                                {{--<li><a href="{{ URL::route('daftar-ppk') }}">PPK</a></li>--}}
                                {{--<li><a href="{{ URL::route('daftar-syarikat') }}">Syarikat</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="nav-header hidden-md">Senarai </li>--}}
                        {{--<li class="accordion">--}}
                            {{--<a href="#"><i class="glyphicon glyphicon-plus"></i><span> Bahagian</span></a>--}}
                            {{--<ul class="nav nav-pills nav-stacked nav-dropped">--}}
                                {{--<li><a href="{{ URL::route('senarai-khidmat-pengurusan') }}">Khidmat Pengurusan</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-bptm') }}">Perancangan & Teknologi Maklumat</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-pengurusan-wilayah') }}">Pengurusan Wilayah</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-industri-padi') }}">Industri Padi</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-iat') }}">Industri Asas Tani & Bukan Padi</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-pip') }}">Pengurusan Institusi Peladang</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-mekanikal') }}">Mekanikal & Infrastruktur</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-pengairan') }}">Perkhidmatan Pengairan & Saliran</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-empangan') }}">Pengurusan Empangan & Sumber Air</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-lain') }}">Lain-lain</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="accordion">--}}
                            {{--<a href="#"><i class="glyphicon glyphicon-plus"></i><span> Wilayah</span></a>--}}
                            {{--<ul class="nav nav-pills nav-stacked nav-dropped">--}}
                                {{--<li><a href="{{ URL::route('senarai-wilayah-1') }}">Wilayah 1</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-wilayah-2') }}">Wilayah 2</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-wilayah-3') }}">Wilayah 3</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-wilayah-4') }}">Wilayah 4</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="accordion">--}}
                            {{--<a href="#"><i class="glyphicon glyphicon-plus"></i><span> Empangan</span></a>--}}
                            {{--<ul class="nav nav-pills nav-stacked nav-dropped">--}}
                                {{--<li><a href="{{ URL::route('senarai-empangan-muda') }}">MUDA</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-empangan-pedu') }}">Pedu</a></li>--}}
                                {{--<li><a href="{{ URL::route('senarai-empangan-ahning') }}">Ahning</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="{{ URL::route('senarai-lain') }}">Lain-lain</a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('senarai-lain') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Bilik Mesyuarat</span></a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('senarai-worksyop') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Worksyop</span></a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('senarai-sppm') }}"><i class="glyphicon glyphicon-list-alt"></i><span> SPPM/KLM</span></a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('senarai-faks') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Faks HQ</span></a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('senarai-pengarah') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Pengarah /PA</span></a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('senarai-speed-dial') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Speed Dial</span></a></li>--}}
                        {{--<li><a class="ajax-link" href="{{ URL::route('senarai-speed-dial2') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Speed Dial 2</span></a></li>--}}

                        {{--</ul>--}}
                    {{--</ul>--}}
                {{--</div>--}}

            </div>


        </div>

    
        <!--/span-->
        <!-- left menu ends -->