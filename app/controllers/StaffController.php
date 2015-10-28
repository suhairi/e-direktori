<?php

class StaffController extends BaseController {

    public function kemaskini($id) {

        $staff = Staff::find($id);


//        echo '<pre>', var_dump($staff), '</pre>';

        return View::make('admin.kemaskini.staff')
            ->with('title', 'Kemaskini Staff')
            ->with('staff', $staff);
    }
}