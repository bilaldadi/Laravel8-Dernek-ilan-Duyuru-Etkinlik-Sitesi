<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;


    public function menu(){

        return $this->belongsTo(Menu::class);
    }

    public function parent(){
        return $this->belongsTo(Content::class, 'parent_id');

    }

    public function children(){
        return $this->hasMany(Content::class, 'parent_id');

    }

}
