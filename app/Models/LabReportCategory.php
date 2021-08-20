<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabReportCategory extends Model
{
    use HasFactory;
    public function Report(){
        return $this->hasMany(LabReport::class,'labreportcategory_id','id');   
    }
}
