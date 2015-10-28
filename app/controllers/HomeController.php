<?php

class HomeController extends BaseController {

	public function index()
	{

		if(Auth::check()) {

            $date = date('d');

            $aduan      = Aduan::where('sistem', '=', 'e-Direktori')
                            ->where('status', '=', 1)->count();

            $bilAduan   = Aduan::where('sistem', '=', 'e-Direktori')->count();

            $date = date('d');

            $hadis = Hadis::find($date);

            return View::make('/admin/dashboard')
                ->with('title', 'Dashboard')
                ->with('hadis', $hadis)
                ->with('aduans', $aduan)
                ->with('bilAduan', $bilAduan);

        } else {

//            if(\Request::getClientIp() == '10.142.1.46'){
//                $url = 'http://www.google.com.my';
//                return Redirect::to($url);
//            }

            return View::make('/admin/login')
                    ->with('title', 'Log Masuk');

        }
	}

    public function carianStaff() {

        $date = date('d');

        $hadis = Hadis::find($date);

        return View::make('/carian/index')
                ->with('title', 'Carian Staff')
                ->with('hadis', $hadis);
    }

    public function carian2($carian) {
        if(Request::ajax()) {

            if($carian != '') {

                $users = Staff::where('nama', 'like', '%' . $carian . '%')->get();

                $count = 1;
                $output =  '<table class="table table-striped table-bordered responsive">
                                <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>Nama</th>
                                    <th>Sambungan</th>
                                    <th>Speed Dial</th>
                                    <th>Jawatan</th>
                                </tr>
                                </thead>
                                <tbody>';


                foreach ($users as $user) {

                    $kemaskini = URL::route('staff-kemaskini').'/'.$user->noPekerja;
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
                                        <td class="center"><b>'.$user->jawatan.'</b></td>
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td colspan="6"><font color="red">Tiada Maklumat</font></td>
                                    </tr>
                                </tbody>
                                </table>';

                return $output;

            } else {
                return '';
            }
        }
    }

    public function carianSyarikat() {
        return View::make('/carian/index2')->with('title', 'Carian Syarikat');
    }

    public function carian3($carian) {

        if(Request::ajax()) {

            if($carian != '') {

                $users = Syarikat::where('nama', 'like', '%' . $carian . '%')->get();

                $count = 1;
                $output =  '<table class="table table-striped table-bordered responsive">
                                <thead>
                                <tr>
                                    <th>Bil...</th>
                                    <th>Nama</th>
                                    <th>No Telefon</th>
                                    <th>Speed Dial</th>
                                    <th>No Faks</th>
                                    <th>Alamat</th>
                                </tr>
                                </thead>
                                <tbody>';


                foreach ($users as $user) {
                    $output .=    '<tr>
                                        <td>'.$count++.'</td>
                                        <td class="center">'.$user->nama.'</td>
                                        <td class="center">'.$user->noTel.'<br />'.$user->noTel2.'<br />'.$user->noTel3.'</td>';

                                    $speedDial = '';
                                    if(strlen($user->speedDial) < 4)
                                        $speedDial = '# ' . $user->speedDial;
                                    else
                                        $speedDial = $user->speedDial;


                    $output .=      '   <td class="center">' . $speedDial . '</td>
                                        <td class="center">'.$user->noFaks.'</td>
                                        <td class="center">'.$user->alamat.'</td>
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td colspan="6"><font color="red">Tiada Maklumat</font></td>
                                    </tr>
                                </tbody>
                                </table>';
                return $output;

            } else {
                return '';
            }
        }
    }



    public function ajax() {
        return View::make('/admin/ajax/ajax')->with('title', 'AJAX Tutorial');
    }

}
