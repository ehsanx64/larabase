<footer class="page-footer teal">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				@if ($page_language == 'fa')
					<h5 class="white-text">درباره لارابیس</h5>
					<p class="grey-text text-lighten-4">لارابیس یک چارچوب برای انتشار محتوا، پیاده‌سازی وب سرویس و توسعه اپلیکیشن تحت وب با استفاده از فریم‌ورک لاراول است.</p>
				@else
					<h5 class="white-text">About Larabase</h5>
					<p class="grey-text text-lighten-4">Larabase is a platform for content publishing, web service implementation and web application development using the Laravel framework.</p>
				@endif

			</div>
			<div class="col l3 s12">
				<h5 class="white-text">Settings</h5>
				<ul>
					<li>
						<a class="white-text" href="#!">Link 1</a>
					</li>
					<li>
						<a class="white-text" href="#!">Link 2</a>
					</li>
					<li>
						<a class="white-text" href="#!">Link 3</a>
					</li>
					<li>
						<a class="white-text" href="#!">Link 4</a>
					</li>
				</ul>
			</div>
			<div class="col l3 s12">
				<h5 class="white-text">Connect</h5>
				<ul>
					<li>
						<a class="white-text" href="#!">Link 1</a>
					</li>
					<li>
						<a class="white-text" href="#!">Link 2</a>
					</li>
					<li>
						<a class="white-text" href="#!">Link 3</a>
					</li>
					<li>
						<a class="white-text" href="#!">Link 4</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			@if ($page_language === 'fa')
				این قالب بر اساس فریم‌ورک
				<a class="brown-text text-lighten-3" href="http://materializecss.com">متریالایز</a>
				پیاده‌سازی شده است.
			@else
                Based on
				<a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			@endif
		</div>
	</div>
</footer>


<!--  Scripts-->
<script src="{{ $assets }}/js/jquery.min.js"></script>
<script src="{{ $assets }}/js/materialize.js"></script>
<script src="{{ $assets }}/js/init.js"></script>

</body>
</html>
