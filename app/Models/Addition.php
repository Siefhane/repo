<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\orderItems;


class Addition extends Model
{
    use HasFactory;
   protected $fillable = ['name', 'img', 'price','description'];



}
