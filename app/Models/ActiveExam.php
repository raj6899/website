<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveExam extends Model
{
    use HasFactory;
    protected $table ='active_exam';
    protected $primaryKey = "id";
}
