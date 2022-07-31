<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;



class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens , Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'fb_id' , 'apple_id' , 'g_id' , 'mobile_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'updated_at', 'deleted_at' , 'role_id' , 'email_verified_at' , 'settings' , 'avatar'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at'];

    public function Profile(){
        return $this->hasOne('App\UserProfile');
    }


    public function Addresses(){
        return $this->hasMany('App\UserAddress');
    }

    public function RateUser(){
        return $this->hasOne('App\RateUser');
    }
    



    public function setِAdsNotificationsShoweAttribute($value)
    {
        $this->settings = $this->settings->merge(['ads_notifications_show' => $value]);
    }

    public function getAdsNotificationsShowAttribute()
    {
        return $this->settings->get('ads_notifications_show');
    }
  


}
