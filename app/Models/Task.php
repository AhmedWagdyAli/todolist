<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable= ['title','user_id','project_id','body','created_at'];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function projects(){
        return $this->belongsTo(Project::class);
    }


}
