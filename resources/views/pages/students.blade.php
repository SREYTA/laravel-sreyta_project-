<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Students</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-warning text-center"> Get student from database</h1>
                <a href="studentform" class="btn btn-primary mb-3">Add Student</a>
                <table class="table table-bordered">
                    <tr class="bg-success text-light">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$student['id']}}</td>
                        <td>{{$student['Firstname']}}</td>
                        <td>{{$student['Lastname']}}</td>
                        <td>{{$student['Age']}}</td>
                        <td>
                            <a href="{{route('showeditform',$student->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('deletestudent', $student->id)}}" class="btn btn-danger ml-3" onclick="return confirm('Are you sure delete it?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>