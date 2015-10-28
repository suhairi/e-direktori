<?php

class SenaraiController extends BaseController {

    public function senaraiKhidmatPengurusan() {
        return View::make('/admin/senarai/bahagian/khidmat-pengurusan')
            ->with('title', 'Khidmat Pengurusan');
    }

    public function senaraiBptm() {
        return View::make('/admin/senarai/bahagian/bptm')
            ->with('title', 'Perancangan dan Teknologi Maklumat');
    }

    public function senaraiPengurusanWilayah() {
        return View::make('/admin/senarai/bahagian/pengurusan-wilayah')
            ->with('title', 'Pengurusan Wilayah');
    }

    public function senaraiIndustriPadi() {
        return View::make('/admin/senarai/bahagian/industri-padi')
            ->with('title', 'Industri Padi');
    }

    public function senaraiIat() {
        return View::make('/admin/senarai/bahagian/iat')
            ->with('title', 'Industri Asas Tani dan Bukan Padi');
    }

    public function senaraiPip() {
        return View::make('/admin/senarai/bahagian/pip')
            ->with('title', 'Pengurusan Institusi Peladang');
    }

    public function senaraiMekanikal() {
        return View::make('/admin/senarai/bahagian/mekanikal')
            ->with('title', 'Mekanikal dan Infrastruktur');
    }

    public function senaraiPengairan() {
        return View::make('/admin/senarai/bahagian/pengairan')
            ->with('title', 'Perkhidmatan Pengairan dan Saliran');
    }

    public function senaraiEmpangan() {
        return View::make('/admin/senarai/bahagian/empangan')
            ->with('title', 'Pengurusan Empangan dan Sumber Air');
    }

    public function senaraiLain() {
        return View::make('/admin/senarai/lain')
            ->with('title', 'Senarai Penempatan Lain');
    }


    public function senaraiWilayah1() {
        return View::make('/admin/senarai/wilayah/wilayah1')
            ->with('title', 'Wilayah 1');
    }

    public function senaraiWilayah2() {
        return View::make('/admin/senarai/wilayah/wilayah2')
            ->with('title', 'Wilayah 2');
    }

    public function senaraiWilayah3() {
        return View::make('/admin/senarai/wilayah/wilayah3')
            ->with('title', 'Wilayah 3');
    }

    public function senaraiWilayah4() {
        return View::make('/admin/senarai/wilayah/wilayah4')
            ->with('title', 'Wilayah 4');
    }

    public function senaraiWorksyop() {
        return View::make('/admin/senarai/worksyop')
            ->with('title', 'Worksyop');
    }

    public function senaraiSppm() {
        return View::make('/admin/senarai/sppm')
            ->with('title', 'SPPM / KLM');
    }

    public function senaraiFaks() {
        return View::make('/admin/senarai/faks')
            ->with('title', 'Faks HQ');
    }

    public function senaraiPengarah() {
        return View::make('/admin/senarai/pengarah')
            ->with('title', 'Pengarah / PA');
    }

    public function senaraiSpeedDial() {
        return View::make('/admin/senarai/speedDial')
            ->with('title', 'Senarai Speed Dial');
    }

    public function senaraiSpeedDial2() {

        $staff = Staff::where('speedDial', '<>', '0')
            ->where('speedDial', '<>', '')
            ->orderBy('speedDial', 'asc')
            ->get();

        $syarikat = Syarikat::where('speedDial', '<>', '')
            ->where('speedDial', '<>', '0')
            ->orderBy('speedDial', 'asc')
            ->get();

        $speedDialData[] = '';

        foreach($staff as $staf) {

            $speedDialData[$staf->speedDial] = [
                'nama'      => $staf->nama,
                'bahagian'  => $staf->bahagian,
                'speedDial' => $staf->speedDial,
                'noPhone'   => $staf->noPhone
            ];
        }

        foreach($syarikat as $sykt){
            $speedDialData[$sykt->speedDial] = [
                'nama'      => $sykt->nama,
                'bahagian'  => $sykt->alamat,
                'speedDial' => $sykt->speedDial,
                'noPhone'   => $sykt->noTel
            ];
        }

        echo '<pre>', var_dump($speedDialData), '</pre>';

        foreach($speedDialData as $data){
            echo $data->nama;
        }

        return 'done';
        return View::make('/admin/senarai/speedDial2')
            ->with('title', 'Senarai Speed Dial')
            ->with('data', $speedDialData);
    }

    public function senaraiMuda() {
        return View::make('/admin/senarai/empangan/muda')
            ->with('title', 'Empangan Muda');
    }

    public function senaraiPedu() {
        return View::make('/admin/senarai/empangan/pedu')
            ->with('title', 'Empangan Pedu');
    }

    public function senaraiAhning() {
        return View::make('/admin/senarai/empangan/ahning')
            ->with('title', 'Empangan Ahning');
    }





}