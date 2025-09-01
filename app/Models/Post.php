<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
 
class Post extends Model
{
    use HasUuids;
 
     protected $fillable = [
        'title','id','description','user_id'
       
    ];
}