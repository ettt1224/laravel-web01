<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function subs()
    {
        return $this->hasMany(Menu::class,'parent_id');
    }

    public function main()
    {
        return $this->belongsTo(Menu::class,'parent_id');
    }
}
