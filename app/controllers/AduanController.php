<?php

class AduanController extends BaseController {

    public function index() {

        $aduans = Aduan::orderBy('id', 'desc')->get();

        return View::make('admin/aduan/index')
            ->with('title', 'My Aduan')
            ->with('aduans', $aduans);
    }

    public function aduanPost() {

        if(Request::ajax()) {

            $data = Input::all();

            $aduan = new Aduan;

            $aduan->nama    = Auth::user()->username;
            $aduan->pengadu = Auth::user()->username;
            $aduan->sistem  = 'e-Direktori';
            $aduan->tarikh  = date('d-m-Y');
            $aduan->aduan   = $data['aduan'];

            if($aduan->save()) {

                // $to         = 'suhairi81@gmail.com';
                // $name       = 'Suhairi Abdul Hamid';
                // $subject    = 'Aduan Baru dari e-Direktori';
                // Mail::send('emails.aduan', $data, function($message) {
                //     $message->to($to, ['firstname' => $name])
                //     ->subject($subject);
                // });

                return 1;
            }
            else
                return 0;
        }
    }

    public function inbox() {

        $username = Auth::user()->username;
        $sistem = 'e-Direktori';

        $readAduan = Aduan::where('status', '=', 1)->get();

        foreach($readAduan as $status) {

            $status->status = 0;

            $status->save();
        }

        if($username == 'suhairi') {
            $aduans = Aduan::where('sistem', '=', $sistem)->orderBy('id', 'desc')->get();
        } else {
            $aduans = Aduan::where('pengadu', 'like', '%' . $username . '%')
                ->where('sistem', '=', $sistem)->orderBy('tarikh', 'desc')->get();
        }



        return View::make('admin/aduan/inbox')
            ->with('title', 'Inbox - My Aduan')
            ->with('aduans', $aduans);
    }


    public function newReply() {

        $username = Auth::user()->username;
        $sistem = 'e-Direktori';


        if($username == 'suhairi') {
            $aduans = Aduan::where('sistem', '=', $sistem)
                    ->where('status', '=', 1)
                    ->get();
        } else {
            $aduans = Aduan::where('pengadu', 'like', '%' . $username . '%')
                ->where('sistem', '=', $sistem)
                ->where('status', '=', 1)
                ->get();
        }

        $readAduan = Aduan::where('status', '=', 1)->get();

        foreach($readAduan as $status) {

            $status->status = 0;

            $status->save();
        }

        return View::make('admin/aduan/newReply')
            ->with('title', 'Maklumbalas Aduan Baru')
            ->with('aduans', $aduans);
    }

    public function padam($id) {

        $inbox = Aduan::find($id)->delete();

        $username = Auth::user()->username;
        $sistem = 'e-Aduan';

        $aduans = Aduan::where('pengadu', '=', $username)
            ->where('sistem', '=', $sistem)->get();

        return View::make('admin/aduan/inbox')
            ->with('title', 'Inbox - My Aduan')
            ->with('aduans', $aduans);

    }
}