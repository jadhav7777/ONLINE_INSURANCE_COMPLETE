<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;





class Payment extends Model
{
    //


    use Notifiable;
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'id','ownername','aadharno','mobno','email','carreg','modelnumber','chassisnumber','purchasingdate','price','uploadbill','uploadcarphoto','uploadchassisnumberphoto','uploadfront','uploadback','created_at','updated_at',
      ];

      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */
      protected $hidden = [
          'password', 'remember_token',
      ];

}
