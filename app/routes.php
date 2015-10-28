<?php

Route::get('/', array(
    'as'    => 'home',
    'uses'  => 'HomeController@index'
));

Route::get('https://www.google.com.my', array(
    'as'    => 'blacklist'
));

    /*
     *  Carian Umum
     */

Route::get('/carian', array(
    'as'    => 'carian-umum-staff',
    'uses'  => 'HomeController@carianStaff'
));

Route::get('/carian/{carian}', array(
    'as'    => 'carian-staff',
    'uses'  => 'HomeController@carian2'
));

Route::get('/carian2', array(
    'as'    => 'carian-umum-syarikat',
    'uses'  => 'HomeController@carianSyarikat'
));

Route::get('/carian2/{carian}', array(
    'as'    => 'carian-umum2',
    'uses'  => 'HomeController@carian3'
));


    /*
     *  Login Process
     */

Route::group(array('before' => 'guest'), function() {

    Route::get('/admin/login', array(
        'as'    => 'login',
        'uses'  => 'LoginController@login'
    ));

    Route::group(array('before' => 'csrf'), function() {

        Route::post('/admin/login', array(
            'as'    => 'login-post',
            'uses'  => 'LoginController@loginPost'
        ));
    });
});


    /*
     *  Login
     */


Route::get('/login', array(
    'as'    => 'login',
    'uses'  => 'LoginController@login'
));

Route::group(array('before' => 'auth'), function() {

    Route::get('/admin/dashboard', array(
        'as'    => 'dashboard',
        'uses'  => 'LoginController@getDashboard'
    ));

    Route::get('/admin/logout', array(
        'as'    => 'logout',
        'uses'  => 'LoginController@logout'
    ));

    /*
     * Search Staff
     */

    Route::get('admin/carian/staff', array(
        'as'    => 'carian-staff',
        'uses'  => 'SearchController@carianStaff'
    ));

    Route::get('admin/carian/staff/{carian}', array(
        'as'    => 'carian',
        'uses'  => 'SearchController@carian'
    ));

    Route::get('admin/carian/staff/api/{username}', [
        'as'    => 'api.carian',
        'uses'  => 'SearchController@apiSearch'
    ]);

    /*
     * Search Syarikat
     */

    Route::get('admin/carian/syarikat', array(
        'as'    => 'carian-syarikat',
        'uses'  => 'SearchController@carianSyarikat'
    ));

    Route::get('admin/carian/syarikat/{carian}', array(
        'as'    => 'carian2',
        'uses'  => 'SearchController@carian2'
    ));

    /*
     *  Senarai
     */

    Route::get('/admin/senarai-khidmat-pengurusan', array(
        'as'    => 'senarai-khidmat-pengurusan',
        'uses'  => 'SenaraiController@senaraiKhidmatPengurusan'
    ));

    Route::get('/admin/senarai-bptm', array(
        'as'    => 'senarai-bptm',
        'uses'  => 'SenaraiController@senaraiBptm'
    ));

    Route::get('/admin/senarai-pengurusan-wilayah', array(
        'as'    => 'senarai-pengurusan-wilayah',
        'uses'  => 'SenaraiController@senaraiPengurusanWilayah'
    ));

    Route::get('/admin/senarai-industri-padi', array(
        'as'    => 'senarai-industri-padi',
        'uses'  => 'SenaraiController@senaraiIndustriPadi'
    ));

    Route::get('/admin/senarai-iat', array(
        'as'    => 'senarai-iat',
        'uses'  => 'SenaraiController@senaraiIat'
    ));

    Route::get('/admin/senarai-pip', array(
        'as'    => 'senarai-pip',
        'uses'  => 'SenaraiController@senaraiPip'
    ));

    Route::get('/admin/senarai-mekanikal', array(
        'as'    => 'senarai-mekanikal',
        'uses'  => 'SenaraiController@senaraiMekanikal'
    ));

    Route::get('/admin/senarai-pengairan', array(
        'as'    => 'senarai-pengairan',
        'uses'  => 'SenaraiController@senaraiPengairan'
    ));

    Route::get('/admin/senarai-empangan', array(
        'as'    => 'senarai-empangan',
        'uses'  => 'SenaraiController@senaraiEmpangan'
    ));

    Route::get('/admin/senarai-lain', array(
        'as'    => 'senarai-lain',
        'uses'  => 'SenaraiController@senaraiLain'
    ));

    Route::get('admin/wilayah1', array(
        'as'    => 'senarai-wilayah-1',
        'uses'  => 'SenaraiController@senaraiWilayah1'
    ));

    Route::get('admin/wilayah2', array(
        'as'    => 'senarai-wilayah-2',
        'uses'  => 'SenaraiController@senaraiWilayah2'
    ));

    Route::get('admin/wilayah3', array(
        'as'    => 'senarai-wilayah-3',
        'uses'  => 'SenaraiController@senaraiWilayah3'
    ));

    Route::get('admin/wilayah4', array(
        'as'    => 'senarai-wilayah-4',
        'uses'  => 'SenaraiController@senaraiWilayah4'
    ));

    Route::get('admin/worksyop', array(
        'as'    => 'senarai-worksyop',
        'uses'  => 'SenaraiController@senaraiWorksyop'
    ));

    Route::get('admin/sppm', array(
        'as'    => 'senarai-sppm',
        'uses'  => 'SenaraiController@senaraiSppm'
    ));

    Route::get('admin/faks', array(
        'as'    => 'senarai-faks',
        'uses'  => 'SenaraiController@senaraiFaks'
    ));

    Route::get('admin/pengarah', array(
        'as'    => 'senarai-pengarah',
        'uses'  => 'SenaraiController@senaraiPengarah'
    ));

    Route::get('admin/speedDial', array(
        'as'    => 'senarai-speed-dial',
        'uses'  => 'SenaraiController@senaraiSpeedDial'
    ));

    Route::get('admin/speedDial2', array(
        'as'    => 'senarai-speed-dial2',
        'uses'  => 'SenaraiController@senaraiSpeedDial2'
    ));


    Route::get('admin/empangan/muda', array(
        'as'    => 'senarai-empangan-muda',
        'uses'  => 'SenaraiController@senaraiMuda'
    ));

    Route::get('admin/empangan/pedu', array(
        'as'    => 'senarai-empangan-pedu',
        'uses'  => 'SenaraiController@senaraiPedu'
    ));

    Route::get('admin/empangan/ahning', array(
        'as'    => 'senarai-empangan-ahning',
        'uses'  => 'SenaraiController@senaraiAhning'
    ));

    /*
     *  Aduan
     */

    Route::get('admin/myaduan', array(
        'as'    => 'myaduan',
        'uses'  => 'AduanController@index'
    ));

    Route::get('admin/myaduan/inbox', array(
        'as'    => 'myaduan-inbox',
        'uses'  => 'AduanController@inbox'
    ));

    Route::get('admin/myaduan/new-reply', array(
        'as'    => 'myaduan-new-reply',
        'uses'  => 'AduanController@newReply'
    ));

    Route::get('admin/myaduan/padam/{id}', array(
        'as'    => 'myaduan-padam',
        'uses'  => 'AduanController@padam'
    ));

    /*
     *  Daftar
     */

    Route::get('/admin/daftar/pekerja', array(
        'as'    => 'daftar-pekerja',
        'uses'  => 'DaftarController@daftarPekerja'
    ));

    Route::get('/admin/daftar/pekerja2', array(
        'as'    => 'daftar-pekerja2',
        'uses'  => 'DaftarController@daftarPekerja2'
    ));

    Route::get('/admin/daftar/penempatan', array(
        'as'    => 'daftar-penempatan',
        'uses'  => 'DaftarController@daftarPenempatan'
    ));

    Route::get('/admin/daftar/bahagian', array(
        'as'    => 'daftar-bahagian',
        'uses'  => 'DaftarController@daftarBahagian'
    ));

    Route::get('/admin/daftar/cawangan', array(
        'as'    => 'daftar-cawangan',
        'uses'  => 'DaftarController@daftarCawangan'
    ));

    Route::get('/admin/daftar/ppk', array(
        'as'    => 'daftar-ppk',
        'uses'  => 'DaftarController@daftarPPK'
    ));

    Route::get('/admin/daftar/syarikat', array(
        'as'    => 'daftar-syarikat',
        'uses'  => 'DaftarController@daftarSyarikat'
    ));

    /*
     *  Kemaskini - Staf & Syarikat & ppk
     */

    Route::get('admin/kemaskini/staff/{id}', array(
        'as'    => 'staff-kemaskini',
        'uses'  => 'StaffController@kemaskini'
    ));

    Route::get('admin/kemaskini/syarikat/{id}', array(
        'as'    => 'syarikat-kemaskini',
        'uses'  => 'SyarikatController@kemaskini'
    ));

    Route::get('admin/kemaskini/ppk/{id}', array(
        'as'    => 'ppk-kemaskini',
        'uses'  => 'PpkController@kemaskini'
    ));

    /*
     *  Delete
     */

    Route::get('admin/staff/delete/{id}', array(
        'as'    => 'staff-delete',
        'uses'  => 'DeleteController@staff'
    ));

    Route::get('admin/penempatan/delete/', array(
        'as'    => 'penempatan-delete_',
        'uses'  => 'DeleteController@penempatan'
    ));

    Route::get('admin/penempatan/delete/{id}', array(
        'as'    => 'penempatan-delete',
        'uses'  => 'DeleteController@penempatan'
    ));

    Route::get('admin/bahagian/delete/', array(
        'as'    => 'bahagian-delete_',
        'uses'  => 'DeleteController@bahagian'
    ));

    Route::get('admin/bahagian/delete/{id}', array(
        'as'    => 'bahagian-delete',
        'uses'  => 'DeleteController@bahagian'
    ));

    Route::get('admin/cawangan/delete/', array(
        'as'    => 'cawangan-delete_',
        'uses'  => 'DeleteController@cawangan'
    ));

    Route::get('admin/cawangan/delete/{id}', array(
        'as'    => 'ppk-delete',
        'uses'  => 'DeleteController@ppk'
    ));

    Route::get('admin/ppk/delete/', array(
        'as'    => 'ppk-delete_',
        'uses'  => 'DeleteController@ppk'
    ));

    Route::get('admin/ppk/delete/{id}', array(
        'as'    => 'ppk-delete',
        'uses'  => 'DeleteController@ppk'
    ));

    Route::get('admin/syarikat/delete/', array(
        'as'    => 'syarikat-delete_',
        'uses'  => 'DeleteController@syarikat'
    ));

    Route::get('admin/syarikat/delete/{id}', array(
        'as'    => 'syarikat-delete',
        'uses'  => 'DeleteController@syarikat'
    ));

    /*  ##################################################################################
     *                                      AJAX
     */ ##################################################################################

    Route::get('admin/ajax/getCawangan/', array(
        'as'    => 'getCawangan1',
        'uses'  => 'AjaxController@getCawangan'
    ));

    Route::get('admin/ajax/getCawangan/{id}', array(
        'as'    => 'getCawangan2',
        'uses'  => 'AjaxController@getCawangan'
    ));


    /*  ##################################################################################



    /*  ##################################################################################
     *                                Test - Stripe
     */ ##################################################################################

    Route::get('admin/test', array(
        'as'    => 'test',
        'uses'  => 'TestController@stripe'
    ));

    Route::post('admin/test', function() {

        $token = Input::get('stripeToken');

        Auth::User()->subscription('monthly')->create($token);


//        return '<a href=/admin/test/toying/>Done</a>';
        return View::make('admin/test/index')
            ->with('title', 'Stripe Test')
            ->with('message', 'Success');
    });

    Route::get('admin/test/toying', function() {
        dd(Auth::user()->subscribed);
    });

    /*  ##################################################################################
     *                                END of Test - Stripe
     */ ##################################################################################

    /*
     *  Posts
     */

    Route::group(array('before' => 'csrf'), function() {

        Route::post('/admin/daftar/pekerja', array(
            'as'    => 'daftar-pekerja-post',
            'uses'  => 'DaftarController@daftarPekerjaPost'
        ));

        Route::post('/admin/daftar/pekerja2', array(
            'as'    => 'daftar-pekerja-post-2',
            'uses'  => 'DaftarController@daftarPekerjaPost2'
        ));

        Route::post('/admin/daftar/ppk', array(
            'as'    => 'daftar-ppk-post',
            'uses'  => 'DaftarController@daftarPPKPost'
        ));

        Route::post('/admin/daftar/penempatan', array(
            'as'    => 'daftar-penempatan-post',
            'uses'  => 'DaftarController@daftarPenempatanPost'
        ));

        Route::post('/admin/daftar/bahagian', array(
            'as'    => 'daftar-bahagian-post',
            'uses'  => 'DaftarController@daftarBahagianPost'
        ));

        Route::post('/admin/daftar/cawangan', array(
            'as'    => 'daftar-cawangan-post',
            'uses'  => 'DaftarController@daftarCawanganPost'
        ));

        Route::post('/admin/daftar/ppk', array(
            'as'    => 'daftar-ppk-post',
            'uses'  => 'DaftarController@daftarPpkPost'
        ));

        Route::post('/admin/daftar/syarikat', array(
            'as'    => 'daftar-syarikat-post',
            'uses'  => 'DaftarController@daftarSyarikatPost'
        ));

        Route::post('admin/staff/kemaskini', array(
            'as'    => 'staff-kemaskini-post',
            'uses'  => 'KemaskiniController@kemaskiniStaff'
        ));

        Route::post('admin/syarikat/kemaskini', array(
            'as'    => 'syarikat-kemaskini-post',
            'uses'  => 'KemaskiniController@kemaskiniSyarikat'
        ));

        Route::post('admin/ppk/kemaskini', array(
            'as'    => 'ppk-kemaskini-post',
            'uses'  => 'KemaskiniController@kemaskiniPpk'
        ));

        Route::post('admin/aduan', array(
            'as'    => 'aduan-post',
            'uses'  => 'AduanController@aduanPost'
        ));

    });

    Route::get('admin/daftar/pekerja/{bahagian}', array(
        'as'    => 'ajax-penempatan',
        'uses'  => 'AjaxController@getCawangan'
    ));


});


