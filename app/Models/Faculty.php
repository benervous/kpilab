<?php
 namespace App\Models;
 use Backpack\CRUD\app\Models\Traits\CrudTrait;
 use Illuminate\Database\Eloquent\Model;

 class faculty extends Model{
   use CrudTrait;
   protected $table='faculty';
   protected $fillable = [
     'name',
     'short_name',
     'password'
   ]
 }
