<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcomingExam extends Model
{
    use HasFactory;
    protected $table ='upcoming_exam';
    protected $primaryKey = "id";
}
