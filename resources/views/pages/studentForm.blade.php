<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <div class="col-3"></div>
                <div class="col-6 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-warning text-center">Add Student</h1>
                        </div>
                        <div class="card-body">
                                <form action="createstudent" method="POST">
                                    <ul>
                                        @foreach ($errors -> all() as $error)
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <div class="alert alert-success">       
                                                {{$error}}
                                            </div>
                                        @endforeach
                                    </ul>

                                    @csrf
                                    <div class="form-group">
                                        <label> Firstname </label>
                                        <input type="text" name="firstname" placeholder="Firstname..." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label> Lastname </label>
                                        <input type="text" name="lastname" placeholder="Lastname..." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label> Age </label>
                                        <input type="number" name="age" placeholder="Age..." class="form-control">
                                    </div>
                    
                                    <button type="submit" class="btn btn-info float-right">Create</button>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</body>
</html>