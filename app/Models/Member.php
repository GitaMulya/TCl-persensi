<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable =['nama', 'jKelamin', 'umur','count'];
    protected $primaryKey = 'member_id';
}
