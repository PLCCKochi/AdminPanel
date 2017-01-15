@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/awards') }}">Award</a> :
@endsection
@section("contentheader_description", $award->$view_col)
@section("section", "Awards")
@section("section_url", url(config('laraadmin.adminRoute') . '/awards'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Awards Edit : ".$award->$view_col)

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
				{!! Form::model($award, ['route' => [config('laraadmin.adminRoute') . '.awards.update', $award->id ], 'method'=>'PUT', 'id' => 'award-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'advocate')
					@la_input($module, 'organization')
					@la_input($module, 'award')
					@la_input($module, 'year')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/awards') }}">Cancel</a></button>
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
	$("#award-edit-form").validate({
		
	});
});
</script>
@endpush
