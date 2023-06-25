<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'url',
        'thumbnail',
        'slug',
        'length',
        'description',
    ]; 

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getLengthAttribute($value)
    {
         return gmdate('H:s',$value);
    }
    public function getCreatedAtAttribute($value)
    {
        return(Verta($value))->formatDifference();
    }

    public function relatedVideos(int $count = 6)
    {
        return Video::all()->random($count);
    }
}
