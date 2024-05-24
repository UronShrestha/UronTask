<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['name', 'address','orgdesc'];

    public function software()
    {
        return $this->belongsToMany(Software::class, 'organization_software');
    }
}
