<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['degree_title','start_year','passing_year','uni_name','obtain_mark','total_marks','description'];
    protected $table='education';
    
    protected static function newFactory()
    {
        return \Modules\Education\Database\factories\EducationFactory::new();
    }
}
