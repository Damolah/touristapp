<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use DB;

class StoryTeller extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function deleteStory($id)
    {
        DB::table('	story_tellers')
        ->where('id', $id)
        ->delete();
    }
}
