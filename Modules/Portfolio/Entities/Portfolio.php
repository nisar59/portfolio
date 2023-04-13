<?php

namespace Modules\Portfolio\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['category','title','client_name','project_date','project_url','description','image'];
    protected $table='portfolio';
    
    protected static function newFactory()
    {
        return \Modules\Portfolio\Database\factories\PortfolioFactory::new();
    }
}
