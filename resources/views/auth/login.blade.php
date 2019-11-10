@extends("$template/blank")

@section('custom-page-title', sprintf("%s - %s", ENV('APP_TITLE'), __('Login to system')))

@section('page-content')
	<div class="section"></div>
	<main>
		{{--
		<img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif"/>
		<div class="section"></div>
		--}}

		<h5 class="indigo-text">{{ __('Login to system') }}</h5>
		<div class="section"></div>

		<div class="container">
			<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

				<form class="col s12" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}

					<div class='row'>
						<div class='col s12'>
						</div>
					</div>

					<div class='row'>
						<div class='input-field col s12'>
							<input class='validate' type='email' name='email' id='email' value="{{ old('email') }}" required autofocus/>
							<label for='email'>{{ __('Enter your email') }}</label>
						</div>
					</div>

					<div class='row'>
						<div class='input-field col s12'>
							<input class='validate' type='password' name='password' id='password' required/>
							<label for='password'>{{ __('Enter your password') }}</label>
						</div>

						<label style='float: right;'>
							<a class='pink-text' href='{{ route('password.request') }}'><b>{{ __('Forgot Password?') }}</b>
							</a>
						</label>
					</div>

					<br/>
					<center>
						<div class='row'>
							<button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>
								{{ __('Login') }}
							</button>
						</div>
					</center>
				</form>
			</div>
		</div>
		<a href="#!">{{ __('Create account') }}</a>

		<div class="section"></div>
		<div class="section"></div>
	</main>
@endsection
