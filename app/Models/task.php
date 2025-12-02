<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
   protected $fillable = [
     'name',
     'status',
     'priorty',
     'due_date',
   ];

   protected $casts =[
    'status' => 'boolean',
    'due_date' => 'date',
   ];
   
   protected $attributes =[
    'status' => false,
    'prioety' => 3,
   ];

}
