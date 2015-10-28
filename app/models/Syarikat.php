<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Syarikat extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'syarikat';

    protected $primaryKey = 'id';

    protected $fillable = array('id', 'nama', 'noTel', 'noTel2', 'noTel3', 'sambungan', 'speedDial', 'noFaks', 'alamat');

    public $timestamps = false;

}
