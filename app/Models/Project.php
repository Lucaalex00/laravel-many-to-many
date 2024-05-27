<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Technology;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'link', 'content', 'cover_image', 'video'];

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}
