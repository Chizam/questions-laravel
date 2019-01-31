<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
     
    // url Assesor
    public function getUrlAttribute()
    {
        return route('questions.show', $this->id );
    }
    // created date Assesor
    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('d/m/Y');

        // another wat of formating date
        // return $this->created_at->diffForHumans();

    }
}
