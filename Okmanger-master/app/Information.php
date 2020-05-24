<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'ville', 'codepostale', 'digicode', 'adresse', 'numappart', 'heurelivraison'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
