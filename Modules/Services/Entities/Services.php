<?php

namespace Modules\Services\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ['service_title','icone','description'];
    protected $table='services';
    
    protected static function newFactory()
    {
        return \Modules\Services\Database\factories\ServicesFactory::new();
    }
}
