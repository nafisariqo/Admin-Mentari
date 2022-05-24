<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    // protected $guarded = [];
    // protected $table= 'quizzes';

    protected $table = "quizzes";
    protected $primaryKey = "id";
    protected $fillable = ['juduls_id', 'pertanyaan', 'jawaban', 'answer'];
    public $timestamps = true; 

    public function judul(){
        return $this->belongsTo(Judul::class);
    }
} 
