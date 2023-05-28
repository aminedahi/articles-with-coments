<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commantaire extends Model
{
    use HasFactory;
    protected  $table = 'commantaire';

    protected  $fillable = ['content','date_pub'];

    function article(){
        return $this->belongsTo(article::class);
    }

}
