<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'samples';

   protected $fillable = ['title', 'body','status'];


}