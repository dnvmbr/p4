<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    public function degree() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Degree');
    }

    // public function tags() {
    //     return $this->belongsToMany('\App\Tag')->withTimestamps();;
    // }
}
