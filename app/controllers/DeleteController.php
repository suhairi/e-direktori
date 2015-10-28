<?php

class DeleteController extends BaseController {

    public function staff($id) {

        $staff = Staff::find($id);


        if($staff->delete()) {
            Session::flash('success', 'Staff Berjaya dihapus.');
        } else {
            Session::flash('fail', 'Staff gagal dihapus');
        }

//        return Session::get('success');

        return Redirect::to('admin/carian/staff');
    }

    public function penempatan($id) {

        if(Request::ajax()) {

            $penempatan = Penempatan::find($id);

            $penempatan->delete();

            return $penempatan->nama;
        }
    }

    public function bahagian($id) {

        if(Request::ajax()) {

            $bahagian = Bahagian::find($id);

            $bahagian->delete();

            return $bahagian->nama;
        }
    }

    public function cawangan($id) {

        if(Request::ajax()) {

            $cawangan = Cawangan::find($id);

            $cawangan->delete();

            return $cawangan->nama;
        }
    }

    public function ppk($id) {

        if(Request::ajax()) {

            $ppk = Ppk::find($id);

            $ppk->delete();

            return $ppk->nama;
        }
    }

    public function syarikat($id) {

        $syarikat = Syarikat::find($id);

        if ($syarikat->delete())
            echo "<script>alert('Hapus Syarikat Berjaya')</script>";
        else
            echo "<script>alert('Hapus Syarikat Gagal')</script>";

        return View::make('admin/carian/carianSyarikat')->with('title', 'Carian Syarikat');
    }

}