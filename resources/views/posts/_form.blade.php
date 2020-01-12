{{ csrf_field() }}

<div class="form-group">
	<label for="title">{{__('Title')}}:</label>
	<input type="text" class="form-control" name="title" />
</div>

<div class="form-group">
	<label for="excerpt">{{__('Excerpt')}}:</label>
	<input type="text" class="form-control" name="excerpt" />
</div>

<div class="form-group">
	<label for="content">{{__('Content')}}:</label>
	<textarea class="form-control" name="content" id="" cols="30" rows="3"></textarea>
</div>

<div class="form-group">
	<label for="published_at">{{__('Publish Date')}}:</label>
	<input type="text" class="form-control" name="published_at" />
</div>

<input class="btn btn-primary" type="submit" value="{{ __('Save') }}" />
