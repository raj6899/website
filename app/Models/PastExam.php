<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastExam extends Model
{
    use HasFactory;
    protected $table ='past_exam';
    protected $primaryKey = "id";
}
