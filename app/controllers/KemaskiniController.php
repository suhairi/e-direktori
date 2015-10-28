<?php

class KemaskiniController extends BaseController {

    public function kemaskiniStaff() {

        if(Request::ajax()) {

            $data = Input::all();

            $noPekerja = $data['noPekerja'];

            $staff = Staff::find($noPekerja);

            $staff->nama        = $data['nama'];
            $staff->noKP        = $data['noKP'];
            $staff->jawatan     = $data['jawatan'];
            $staff->penempatan  = $data['penempatan'];
            $staff->bahagian    = $data['bahagian'];
            $staff->cawangan    = $data['cawangan'];
            $staff->sambungan   = $data['sambungan'];
            $staff->faks        = $data['faks'];
            $staff->speedDial   = $data['speedDial'];
            $staff->status      = $data['status'];
            $staff->catatan     = $data['catatan'];

            if($noPekerja == '3374') {
                $staff->noPhone     .= '.';
                $staff->catatan     = '';
                $staff->jawatan     = 'PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT (F29)';
                $staff->noKP        = '**013002****';
                $staff->speedDial   = '000';
            } else {
                $staff->noPhone = $data['noTel'];
            }



            if($staff->save())
                return 'Save Succeeded';
            else
                return 'Failed to save';
        }
    }

    public function kemaskiniSyarikat() {

        if(Request::ajax()) {

            $data = Input::all();

            $id = $data['id'];

            $syarikat = Syarikat::find($id);


            $syarikat->nama         = $data['nama'];
            $syarikat->noTel        = $data['noTel'];
            $syarikat->noTel2       = $data['noTel2'];
            $syarikat->noTel3       = $data['noTel3'];
            $syarikat->sambungan    = $data['sambungan'];
            $syarikat->speedDial    = $data['speedDial'];
            $syarikat->noFaks       = $data['noFaks'];
            $syarikat->alamat       = $data['alamat'];

            if($syarikat->save())
                return 'Save Succeeded';
            else
                return 'Failed to save';
        }
    }

    public function kemaskiniPpk() {

        if(Request::ajax()) {

            $data = Input::all();

            $id = $data['id'];

            $ppk = Ppk::find($id);


            $ppk->nama         = $data['nama'];
            $ppk->noTel        = $data['noTel'];
            $ppk->speedDial    = $data['speedDial'];
            $ppk->noFaks       = $data['noFaks'];
            $ppk->alamat       = $data['alamat'];

            if($ppk->save())
                return 'Save Succeeded';
            else
                return 'Failed to save';
            return 1;
        }
    }



}