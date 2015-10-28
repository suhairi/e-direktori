<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Aduan extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $connection = 'mysql2';

    protected $table = 'aduan';

    protected $primaryKey = 'id';

    public function status() {
        return $this->hasOne('AduanStatus', 'aduan_id');
    }

    protected $fillable = array('id', 'nama', 'pengadu', 'sistem', 'tarikh', 'aduan', 'maklumbalas');

    public $timestamps = false;

}
