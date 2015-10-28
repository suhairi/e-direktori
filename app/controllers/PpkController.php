<?php

class PpkController extends BaseController {

    public function kemaskini($id) {

        $ppk = Ppk::find($id);

        return View::make('admin.kemaskini.ppk')
            ->with('title', 'Kemaskini PPK')
            ->with('ppk', $ppk);
    }
}