<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	// List of mass assignable fields
	protected $fillable = ['title', 'content', 'excerpt', 'published_at'];

	// List of fields that should be converted to Carbon instances
	protected $dates = ['published_at'];

	// This is a mutator
	public function setPublishedAtAttribute($date) {
		$this->attributes['published_at'] = Carbon::parse($date);
	}

	// This is a query scope
	public function scopePublished($query) {
		$query->where('published_at', '<=', Carbon::now());
	}
}
