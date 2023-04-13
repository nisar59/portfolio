<?php

namespace Modules\Experience\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['position_title','start_month_year','organization_name','end_month_year','description'];
    protected $table='experience';
    
    protected static function newFactory()
    {
        return \Modules\Experience\Database\factories\ExperienceFactory::new();
    }
}
