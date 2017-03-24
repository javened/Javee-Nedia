@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>
                <form method="post" action="/Add/Course-Subjects/{{$course}}">
                <h1>Current Subjects</h1>
                <table class="table table-striped task-table table-bordered table-hover table-condensed">
                	<thead>
                		<th>No.</th>
                		<th>Subject Name</th>
                	</thead>
                	<tbody>
                		@for($i = 0; $i < count($cs); $i++)
	                		<tr>
	                			<td>{{$i + 1}}</td>
	                			<td>{{$cs[$i]->subject_name}}</td>
	                		</tr>
                		@endfor
                	</tbody>
                </table>
                <h3>Other Subjects</h3>
                	{{csrf_field()}}
                    <?php $boolean = 0; ?>
                	@for($i = 0; $i < count($subjects); $i++)
                        @foreach($cs as $CS)
                            @if($CS->id == $subjects[$i]->id)
                                <?php $boolean = 1; ?>
                            @endif
                        @endforeach
                        @if($boolean == 0)
                    		<input type="checkbox" name="subjects[{{$i}}]" value="{{$subjects[$i]->id}}">{{$subjects[$i]->subject_name}}<br>
                        @endif
                        <?php $boolean = 0; ?>
                	@endfor
                	<input type="submit">
                </form>
                <div class="panel-body">
				</div>
            </div>
        </div>
    </div>
</div>
@endsection