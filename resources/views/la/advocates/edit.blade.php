@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/advocates') }}">Advocate</a> :
@endsection
@section("contentheader_description", $advocate->$view_col)
@section("section", "Advocates")
@section("section_url", url(config('laraadmin.adminRoute') . '/advocates'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Advocates Edit : ".$advocate->$view_col)

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
				{!! Form::model($advocate, ['route' => [config('laraadmin.adminRoute') . '.advocates.update', $advocate->id ], 'method'=>'PUT', 'id' => 'advocate-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'shortname')
					@la_input($module, 'username')
					@la_input($module, 'title')
					@la_input($module, 'photo')
					@la_input($module, 'department')
					@la_input($module, 'proexp')
					@la_input($module, 'caption')
					@la_input($module, 'fb')
					@la_input($module, 'tw')
					@la_input($module, 'li')
					@la_input($module, 'skype')
					@la_input($module, 'mobile')
					@la_input($module, 'office')
					@la_input($module, 'email')
					@la_input($module, 'clients')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/advocates') }}">Cancel</a></button>
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
	$("#advocate-edit-form").validate({
		
	});
});
</script>
@endpush
