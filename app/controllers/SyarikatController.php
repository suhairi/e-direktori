<?php

class SyarikatController extends BaseController {

    public function kemaskini($id) {

        $syarikat = Syarikat::find($id);


        return View::make('admin.kemaskini.syarikat')
            ->with('title', 'Kemaskini Syarikat')
            ->with('syarikat', $syarikat);
    }
}