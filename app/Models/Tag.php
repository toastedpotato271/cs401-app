<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public $fillable = [
        "tag_name",
        "slug"
    ];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, "post_tag");
    }
}
