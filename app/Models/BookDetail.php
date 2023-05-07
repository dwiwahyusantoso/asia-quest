<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookDetail extends Model
{
	
	use HasFactory, SoftDeletes;

    protected $connection = 'mysql';

    protected $table = 'book_detail';
}