<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_cates extends Model
{
    use HasFactory;
    protected $table = 'sub_cates';  
    protected $primaryKey = 'sub_cate_id';  
}
