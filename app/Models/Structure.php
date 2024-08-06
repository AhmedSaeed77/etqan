<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    protected $table = 'structures';
    protected $guarded = [];

    public function getDataAttribute ()
    {
        $locale=app()->getLocale();
        return json_decode($this->content)?->$locale;
    }
}
