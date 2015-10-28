<?php

class DaftarController extends BaseController {

    public function daftarPekerja() {
        return View::make('/admin/daftar/pekerja')
            ->with('title', 'Daftar Staff');
    }

    public function daftarPekerja2() {
        return View::make('/admin/daftar/pekerja2')
            ->with('title', 'Daftar Staff Pencen');
    }

    public function daftarPekerjaPost() {

        if(Request::ajax()) {
            $data = Input::all();

            $staff = new Staff;

            $staff->noPekerja   = $data['noPekerja'];
            $staff->nama        = $data['nama'];
            $staff->noKP        = $data['noKP'];
            $staff->jawatan     = $data['jawatan'];
            $staff->penempatan  = $data['penempatan'];
            $staff->bahagian    = $data['bahagian'];
            $staff->cawangan    = $data['cawangan'];
            $staff->sambungan   = $data['sambungan'];
            $staff->faks        = $data['faks'];
            $staff->speedDial   = $data['speedDial'];
            $staff->noPhone     = $data['noPhone'];
            $staff->status      = $data['status'];
            $staff->catatan     = $data['catatan'];

            if($staff->save())
                return 1;
            else
                return 0;
        }
    }

    public function daftarPekerjaPost2() {

        if(Request::ajax()) {
            $data = Input::all();

            $noPekerja_ = 10000;
            $noPekerja = DB::table('staff')->where('noPekerja', '>=', 10000)->orderBy('noPekerja', 'desc')->first();

//            dd($noPekerja);

            if(isset($noPekerja))
                $noPekerja_ = $noPekerja->noPekerja + 1;


//            dd($noPekerja_);

            $staff = new Staff;

            $staff->noPekerja   = $noPekerja_;
            $staff->nama        = $data['nama'];
            $staff->noKP        = $data['noKP'];
            $staff->jawatan     = $data['jawatan'];
            $staff->penempatan  = $data['penempatan'];
            $staff->bahagian    = $data['bahagian'];
            $staff->cawangan    = $data['cawangan'];
            $staff->noPhone     = $data['noPhone'];
            $staff->status      = $data['status'];
            $staff->catatan     = $data['catatan'];

            if($staff->save())
                return $noPekerja_;
            else
                return $noPekerja_;
        }
    }

    public function daftarPenempatan() {
        return View::make('/admin/daftar/penempatan')
            ->with('title', 'Daftar Penempatan');
    }

    public function daftarPenempatanPost() {

        if(Request::ajax()) {

            $data = Input::all();

            $penempatan = new Penempatan;

            $penempatan->nama = strtoupper($data['input']);


            if($penempatan->save())
                return 1;
            else
                return 0;
        }
    }

    public function daftarBahagian() {
        return View::make('/admin/daftar/bahagian')
            ->with('title', 'Daftar Bahagian');
    }

    public function daftarBahagianPost() {

        if(Request::ajax()) {

            $data = Input::all();

            $bahagian = new Bahagian;

            $bahagian->nama = strtoupper($data['input']);

            if($bahagian->save())
                return 1;
            else
                return 0;
        }
    }

    public function daftarCawangan() {
        return View::make('/admin/daftar/cawangan')
            ->with('title', 'Daftar Cawangan');
    }

    public function daftarCawanganPost() {

        if(Request::ajax()) {

            $data = Input::all();


            $cawangan = new Cawangan;

            $cawangan->nama     = strtoupper($data['cawangan']);
            $cawangan->bahagian = $data['bahagian'];

            if($cawangan->save())
                return 1;
            else
                return 0;
        }
    }

    public function daftarPPK() {
        return View::make('/admin/daftar/ppk')
            ->with('title', 'Daftar PPK');
    }

    public function daftarPpkPost() {

        if(Request::ajax()) {

            $data = Input::all();

            $ppk = new Ppk;

            $ppk->nama = strtoupper($data['nama']);
            $ppk->noTel = $data['noTel'];
            $ppk->speedDial = $data['speedDial'];
            $ppk->noFaks = $data['noFaks'];
            $ppk->alamat = strtoupper($data['alamat']);

            if($ppk->save())
                return 1;
            else
                return 0;
        }
    }

    public function daftarSyarikat() {
        return View::make('/admin/daftar/syarikat')
            ->with('title', 'Daftar Syarikat');
    }

    public function daftarSyarikatPost() {

        if(Request::ajax()) {

            $data = Input::all();

            $syarikat = new Syarikat;

            $syarikat->nama         = strtoupper($data['nama']);
            $syarikat->noTel        = $data['noTel'];
            $syarikat->noTel2       = $data['noTel2'];
            $syarikat->noTel3       = $data['noTel3'];
            $syarikat->sambungan    = $data['sambungan'];
            $syarikat->speedDial    = $data['speedDial'];
            $syarikat->noFaks       = $data['noFaks'];
            $syarikat->alamat       = strtoupper($data['alamat']);

            if($syarikat->save())
                return 1;
            else
                return 0;
        }
    }
}