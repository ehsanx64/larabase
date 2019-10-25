@extends('tpls/f_first/homepage')

@section('pagecontent')
<h1>Hello there</h1>
@endsection()


@section('pagefooter')
<div class="col l6 s12">
	<h5 class="white-text">محتوای فوتر</h5>
	<p class="grey-text text-lighten-4">می‌توانید از سطر و ستون ها برای مرتب کردن متن در اینجا استفاده کنید.</p>
</div>
<div class="col l4 offset-l2 s12">
	<h5 class="white-text">لینک‌ها</h5>
	<ul>
		<li><a class="grey-text text-lighten-3" href="#!">لینک ۱</a></li>
		<li><a class="grey-text text-lighten-3" href="#!">لینک ۲</a></li>
		<li><a class="grey-text text-lighten-3" href="#!">لینک ۳</a></li>
		<li><a class="grey-text text-lighten-3" href="#!">لینک ۴</a></li>
	</ul>
</div>
@endsection()
