<?php

namespace Modules\PortfolioCategories\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioCategories extends Model
{
    use HasFactory;

    protected $fillable = ['name','icone','description'];
    protected $table='portfoliocategories';
    
    protected static function newFactory()
    {
        return \Modules\PortfolioCategories\Database\factories\PortfolioCategoriesFactory::new();
    }
}
