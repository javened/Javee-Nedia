@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>
                <div class="panel-body">
					<div style="padding-left: 20px;">
					<h1><strong>Add-Subject</strong></h1>
					<form method="post" action="/Add/Subject">
						{{csrf_field()}}
						<input style="border-color: black;" placeholder="Subject Name" class="btn btn-block"  type="text" name="subject_name">
						@if ($errors->has('name'))
                                    <span class="help-block alert alert-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
						<button style="margin-top: 10px;" type="submit" class="btn btn-primary"> Submit </button>
					</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

@endsection