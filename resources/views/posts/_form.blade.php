{{ csrf_field() }}

<div class="form-group">
	<label for="title">Title:</label>
	<input type="text" class="form-control" name="title" />
</div>

<div class="form-group">
	<label for="excerpt">Excerpt:</label>
	<input type="text" class="form-control" name="excerpt" />
</div>

<div class="form-group">
	<label for="content">Content:</label>
	<textarea class="form-control" name="content" id="" cols="30" rows="3"></textarea>
</div>

<div class="form-group">
	<label for="published_at">Publish Date:</label>
	<input type="text" class="form-control" name="published_at" />
</div>

<input class="btn btn-primary" type="submit" value="Submit" />
