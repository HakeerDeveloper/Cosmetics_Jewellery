<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class p_review extends Model
{
    use HasFactory;
    protected $table = 'p_reviews';
    protected $primaryKey = 'p_r_id';

}
