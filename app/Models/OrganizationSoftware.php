<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationSoftware extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'organization_software';

    protected $fillable = [
        'organization_id',
        'software_id',
    ];
}
