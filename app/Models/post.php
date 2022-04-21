<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class post extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable=['title','bady'];
    protected $fillable=['title','bady'];

}
