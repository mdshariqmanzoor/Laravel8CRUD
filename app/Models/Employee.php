<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $PrimaryKey = 'id';
    protected $Fillable = ['name', 'age', 'gender', 'designation'];
}
