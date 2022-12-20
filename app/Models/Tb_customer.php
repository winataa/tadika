<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_customer extends Model
{
    public $table = 'tb_customer';
    public $primaryKey = 'id_customer';
    public $incrementing = true;
    public $timestamp = false;
    
}
