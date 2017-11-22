<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['name','description'];
    
    public function getAll(){
        $tasks = Tasks::all();
        return $tasks;
    }
    
}
