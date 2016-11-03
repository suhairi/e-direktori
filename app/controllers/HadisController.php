<?php

class HadisController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $date = rand(1,40);

        $hadis = Hadis::find($date);
        
        // return View::make('emails.aduan');

        Mail::send('emails.aduan', ['title' => 'Aduan Baru'], function($message) {
            $message->to('suhairi81@gmail.com');
            $message->subject('Aduan baru dari Sistem e-Direktori');
        });

        print_r(error_get_last());

        return View::make('admin.hadis')
            ->with('title', 'Hadis')
            ->with('hadis', $hadis);
	}


}
