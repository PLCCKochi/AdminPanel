@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/blog_posts') }}">Blog Post</a> :
@endsection
@section("contentheader_description", $blog_post->$view_col)
@section("section", "Blog Posts")
@section("section_url", url(config('laraadmin.adminRoute') . '/blog_posts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Blog Posts Edit : ".$blog_post->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($blog_post, ['route' => [config('laraadmin.adminRoute') . '.blog_posts.update', $blog_post->id ], 'method'=>'PUT', 'id' => 'blog_post-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'title')
					@la_input($module, 'photo')
					@la_input($module, 'content')
					@la_input($module, 'stamp')
					@la_input($module, 'author')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/blog_posts') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#blog_post-edit-form").validate({
		
	});
});
</script>
@endpush
