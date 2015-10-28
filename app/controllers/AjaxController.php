<?php

class AjaxController extends BaseController {

    public function getCawangan($bahagian) {

        if(Request::ajax()) {

            $output = '<select data-rel="chosen" name="cawangan" data-rel="chosen">
                        <option selected>Cawangan</option>';

            $cawangan = Cawangan::where('bahagian', '=', $bahagian)->get();

           foreach($cawangan as $tempat) {
               $output .= "<option value='".$tempat->id."'>".$tempat->nama."</option>";
           }
            $output .= '</select>';

            return $output;
        }

    }
}