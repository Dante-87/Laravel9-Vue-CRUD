<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description',
        'price',
        'created_at',
        'updated_at'
    ];
}



// $table->increments('id');
// $table->string('name');
// $table->text('description');
// $table->decimal('price', 10, 4);
// $table->dateTime('created_at');
// $table->dateTime('updated_at');