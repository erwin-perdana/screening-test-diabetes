<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_id',
        'option_id',
        'poin',
        'option_information'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id', 'id');
    }

    public function option() {
        return $this->belongsTo(Option::class, 'option_id', 'id'); 
    }
}
