<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Ppk extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ppk';

    protected $primaryKey = 'id';

    protected $fillable = array('id', 'nama', 'noTel', 'noFaks', 'alamat');

    public $timestamps = false;

}
