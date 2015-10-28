<?php

class CarianController extends BaseController {

    public function carianStaf($carian) {

        if(Response::ajax())
        {
            if($carian != '')
                return 1;
            else
                return 0;
        }

    }
}