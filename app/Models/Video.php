<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    use HasSlug;

        public function getSlugOptions() : SlugOptions
      {
          return SlugOptions::create()
              ->generateSlugsFrom('title')
              ->saveSlugsTo('slug');
      }
}
