<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BibleApp extends Model
{
    protected $table = 'bible_app';
    protected $fillable = ['book', 'chapter', 'verse', 'text', 'book_name'];

    public function books()
    {
        return $this->hasMany(BibleApp::class);
    }

    public function chapters()
    {
        return $this->hasMany(BibleApp::class);
    }

    public function verses()
    {
        return $this->hasMany(BibleApp::class);
    }
}
