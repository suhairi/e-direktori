<?php

class TestController extends BaseController {

    public function stripe() {
        return View::make('admin/test/index')->with('title', 'STRIPE');
    }
}