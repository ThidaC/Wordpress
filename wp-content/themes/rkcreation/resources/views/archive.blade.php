@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    <div class="content2">
		<?php echo do_shortcode("[widgets_on_pages id='Widgets']");  ?>
		<div class="divArticle">
		  @while(have_posts()) @php(the_post())
		    @include('partials.content')
		  @endwhile
		</div>
	</div>
@endsection

