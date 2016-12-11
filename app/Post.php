<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'category', 'user_id'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucfirst($value);
    }

    public function user()
   {
       return $this->belongsTo('App\User', 'user_id', 'id');
   }
}
