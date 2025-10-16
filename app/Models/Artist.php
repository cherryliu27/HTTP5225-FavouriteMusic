<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'genre',
        'active',
        'origin',
        'image',
    ];

    public function albums()
    {
        return $this->hasMany(Albums::class, 'artist_id');
    }

    public function setImageAttribute($value) {

        // Each time a image is uploaded, Laravel will correct it automatically
    if ($value) {
        // Reemplaza tanto "?dl=0" como "&dl=0" o "?dl=1" y "&dl=1"
        $value = preg_replace('/(\?|&)dl=\d/', '&raw=1', $value);
        $this->attributes['image'] = $value;
    }
    }

}
