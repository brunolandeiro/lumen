<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    protected $table = 'serie';
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}