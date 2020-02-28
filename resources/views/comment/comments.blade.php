<link rel="stylesheet" href="css/app.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<h1>List All Comment</h1>
<a href="{{route('comments.create')}}" class="btn btn-primary mt-3">Add New</a>
<table class="table table-bordered">
    <thead class="bg-success">
        <tr>
            <th>ID</th>
            <th>Comment</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($comment as $item)
    <tbody>
        <tr>
            <td>{{$item -> id}}</td>
            <td>{{$item -> Comment}}</td>
            <td>
                <a href="{{route('comments.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                    Delete
                </button>
                
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Delete Comment</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body">
                            Are you sure Delete it?
                        </div>
                
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <form action="{{route('comments.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                
                    </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
