<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    
         // Table name
         protected $table = 'companyProfile';
         // primary key
         public $primaryKey = 'id';
         //timestamps
         public $timestamps = true;
}
