<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['album_id','photo','title','size','description'];

    protected $table = 'photos';
    protected $primaryKey = 'id';
    public $timestamp = false;

    public function albums()
    {
    	return $this->belongsTo('App\Album');
    }
}
