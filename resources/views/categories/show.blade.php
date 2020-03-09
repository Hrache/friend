@extends('app')

@if ($categories->count())
	@section('content')
	<main id="pagecontent" class="container">
		<section class="row">
			@foreach($categories as $category)
			<Category imgpath="/imgs/" vuepath="/js/vue/" url="{{ route('categories.show', ['category' => $category]) }}" :category="{{ $category->toJson() }}"></Category>
			@endforeach

			<!-- Categories wrapper -->
			<nav class="col-12 p-2">
				{!! $categories->links() !!}
			</nav>
		</section>
	</main>
	@endsection

	@push('groundrsc')
	<script>
		var pagecontent = new Vue({
			el: '#pagecontent',
			mounted() {
				let snd = new Audio('/js/vue/snd/cat-enter.mp3');
						snd.load();
						snd.play();
			},
			components: {
				'Category': window.httpVueLoader('/js/vue/Category.vue')
			}
		});
	</script>
	@endpush
@endif