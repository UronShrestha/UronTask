<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class software extends Model
{
    use HasFactory;
    protected $table = 'softwares';
    public $timestamps=false;
    protected $fillable = ['name', 'url','softwaredesc'];


    public function organizations()
    {
        return $this->belongsToMany(Organization::class, 'organization_software');
    }
}
