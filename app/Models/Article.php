<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    protected  $table = 'article';
    protected  $fillable = ['title','content','date_pub'];

    public function commantaire()
    {
        return $this->hasMany(commantaire::class);
    }

}
