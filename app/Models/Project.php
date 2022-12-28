<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable= ['title','user_id','body','created_at'];


    public function tasks(){
        return $this->hasMany(Task::class);
    }
  
}
