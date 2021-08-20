<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabReport extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(LabReportCategory::class,'labreportcategory_id','id');
    }
}
