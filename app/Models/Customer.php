<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id';


public function setNameAttribute($value){

    $this->attributes['name'] = ucwords($value);
}
public function setEmailAttribute($value){
    $this->attributes['email'] = strtolower($value);

}


}
