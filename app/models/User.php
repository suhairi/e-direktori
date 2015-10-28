<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use \Laravel\Cashier\BillableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface, \Laravel\Cashier\BillableInterface {

	use UserTrait, RemindableTrait, BillableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'akses';

    protected $primaryKey = 'username';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');
    protected $dates = ['trial_ends_at', 'subscription_ends_at'];


//    public function getRememberToken()
//    {
//        return null; // not supported
//    }
//
//    public function setRememberToken($value)
//    {
//        // not supported
//    }
//
//    public function getRememberTokenName()
//    {
//        return null; // not supported
//    }

    /**
     * Overrides the method to ignore the remember token.
     */
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
    }

}
