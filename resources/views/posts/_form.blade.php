{{ csrf_field() }}

{!! TH::textField('title', '') !!}
{!! TH::textArea('excerpt') !!}
{!! TH::textArea('content') !!}
{!! TH::textField('published_at', 'Publish Date') !!}
{!! TH::submit() !!}

{{--<div class="input-field col s12">--}}
	{{--<input id="title" name="title" type="text" class="validate" value="{{ isset($post->title) ? $post->title : '' }}">--}}
	{{--<label for="title">{{ __('Title') }}</label>--}}
{{--</div>--}}

{{--<div class="input-field col s12">--}}
	{{--<textarea id="excerpt" name="excerpt" class="materialize-textarea">{{ isset($post->excerpt) ? $post->excerpt : '' }}</textarea>--}}
	{{--<label for="excerpt">{{ __('Excerpt') }}</label>--}}
{{--</div>--}}

{{--<div class="input-field col s12">--}}
	{{--<textarea id="content" name="content" class="materialize-textarea">{{ isset($post->content) ? $post->content : '' }}</textarea>--}}
	{{--<label for="content">{{ __('Content') }}</label>--}}
{{--</div>--}}

{{--<div class="input-field col s12">--}}
	{{--<input id="published_at" name="published_at" type="text" class="validate" value="{{ isset($post->published_at) ? $post->published_at : '' }}">--}}
	{{--<label for="published_at">{{ __('Publish Date') }}</label>--}}
{{--</div>--}}

{{--<div class="col s12">--}}
	{{--<input type="submit" class="waves-effect waves-light btn" value="{{ __('Create') }}" />--}}
{{--</div>--}}
