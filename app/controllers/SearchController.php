<?php

class SearchController extends BaseController {

    public function carianStaff() {

        $date = date('d');

        $hadis = Hadis::find($date);

        if(\Session::get('hadisDone') == 'first')
            \Session::put('hadisDone', 'done');

        if(!\Session::get('hadisDone'))
            \Session::put('hadisDone', 'first');



        return View::make('admin.carian.carianStaff')
            ->with('title', 'Carian Staff')
            ->with('hadis', $hadis);

    }

    public function carian($carian) {

        if(Request::ajax()) {

            if($carian != '') {

                $users = Staff::where('nama', 'like', '%' . $carian . '%')->get();

                $count = 1;
                $output =  '<table class="table table-striped table-bordered responsive">
                                <thead>
                                <tr>
                                    <th>Bil...</th>
                                    <th>Nama</th>
                                    <th>Sambungan</th>
                                    <th>Speed Dial</th>
                                    <th>Telefon Bimbit</th>
                                    <th>Jawatan</th>
                                    <th>Pilihan</th>
                                </tr>
                                </thead>
                                <tbody>';


                foreach ($users as $user) {

                    $kemaskini = URL::route('staff-kemaskini') . '/' . $user->noPekerja;

                    if(!empty($user->catatan))
                        $catatan = '<br /><font color=red>' . $user->catatan .'</font>';
                    else
                        $catatan = $user->catatan;

                    $output .=    '<tr>
                                        <td>'.$count++.'</td>
                                        <td class="center"><b>'.$user->nama.'</b></td>
                                        <td class="center"><b>'.$user->sambungan.'</b></td>';

                                        $speedDial = '';
                                        if(strlen($user->speedDial) < 4)
                                            $speedDial = '# ' . $user->speedDial;
                                        else
                                            $speedDial = $user->speedDial;


                    $output .=      '   <td class="center"><b>'. $speedDial .'</b></td>
                                        <td class="center"><b>'.$user->noPhone.'</b></td>
                                        <td class="center"><b>' . $user->jawatan . '&nbsp;&nbsp;' . $catatan . '</b></td>
                                        <td>
                                            [ <a href="' . URL::route('staff-delete', array($user->noPekerja) ) . '">Hapus</a> ]
                                            [ <a href="' . URL::route('staff-kemaskini', array($user->noPekerja) ) . '">Kemaskini</a> ]
                                        </td>
                                    </tr>';
                }

                $output .= '    </tbody>
                            </table>';

                if($users->count() == 0)
                    $output = '<table class="table table-striped table-bordered responsive">
                                <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>Nama</th>
                                    <th>No Telefon</th>
                                    <th>Speed Dial</th>
                                    <th>No Faks</th>
                                    <th>Alamat</th>
                                    <th>Pilihan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td colspan="8"><font color="red">Tiada Maklumat</font></td>
                                    </tr>
                                </tbody>
                                </table>';

                return $output;

            } else {
                return '';
            }
        }
    }

    public function apiSearch($username){

        $users = Staff::where('nama', 'like', '%' . $username . '%')->get();
        return $users = json_encode($users);
    }

    public function carianSyarikat() {

        return View::make('admin.carian.carianSyarikat')
            ->with('title', 'Carian Syarikat');
    }

    public function carian2($carian) {

        if(Request::ajax()) {

            if($carian != '') {

                $users = Syarikat::where('nama', 'like', '%' . $carian . '%')->get();

                $count = 1;
                $output =  '<table class="table table-striped table-bordered responsive">
                                <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>Nama</th>
                                    <th>No Telefon</th>
                                    <th>Sambungan</th>
                                    <th>Speed Dial</th>
                                    <th>No Faks</th>
                                    <th>Alamat</th>
                                    <th>Pilihan</th>
                                </tr>
                                </thead>
                                <tbody>';


                foreach ($users as $user) {
                    $output .=    '<tr>
                                        <td>'.$count++.'</td>
                                        <td class="center"><b>'.$user->nama.'</b></td>
                                        <td class="center"><b>'.$user->noTel.'<br />'.$user->noTel2.'<br />'.$user->noTel3.'</b></td>
                                        <td class="center"><b>'.$user->sambungan.'</b></td>';

                                        $speedDial = '';
                                        if(strlen($user->speedDial) < 4)
                                            $speedDial = '# ' . $user->speedDial;
                                        else
                                            $speedDial = $user->speedDial;

                    $output .=      '   <td class="center"><b>' . $speedDial . '</b></td>
                                        <td class="center"><b>'.$user->noFaks.'</b></td>
                                        <td class="center"><b>'.$user->alamat.'</b></td>
                                        <td>[ <a href="' . URL::route('syarikat-delete', array($user->id) ) . '">Hapus</a> ] [ <a href="' . URL::route('syarikat-kemaskini', array($user->id) ) . '">Kemaskini</a> ]</td>
                                    </tr>';
                }

                $output .= '    </tbody>
                            </table>';

                if($users->count() == 0)
                    $output = '<table class="table table-striped table-bordered responsive">
                                <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>Nama</th>
                                    <th>No Telefon</th>
                                    <th>Speed Dial</th>
                                    <th>No Faks</th>
                                    <th>Alamat</th>
                                    <th>Pilihan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td colspan="7"><font color="red">Tiada Maklumat</font></td>
                                    </tr>
                                </tbody>
                                </table>';
                return $output;

            } else {
                return '';
            }
        }
    }

}