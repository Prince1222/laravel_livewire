<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    use HasFactory;
    protected $fillable =['name','designation','fb_url','tw_url','in_url','status','image'];
}
