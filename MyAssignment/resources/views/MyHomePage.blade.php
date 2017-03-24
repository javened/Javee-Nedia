<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
    <h1>Registered Students</h1>
        <table class="table table-striped task-table table-bordered table-hover table-condensed">
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Initial</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>Student no.</th>
                <th>Guardian</th>
            </thead>
            <tbody>
                @foreach($unique as $uniques)
                <tr>
                    <td>{{$uniques->id}}</td>
                    <td>{{$uniques->first_name}}</td>
                    <td>{{$uniques->middle_initial}}</td>
                    <td>{{$uniques->last_name}}</td>
                    <td>{{$uniques->course}}</td>
                    <td>{{$uniques->student_number}}</td>
                    <td>{{$uniques->guardian}}</td>
                    <td><a href="/Edit/{{$uniques->id}}"> Edit</a></td>
                    <td><form method="Post" action="/delete/{{$uniques->id}}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit">Delete</button>
                    </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>