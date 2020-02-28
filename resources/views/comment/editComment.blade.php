<link rel="stylesheet" href="../../css/app.css">
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card shadow mt-5">
                <div class="card-header">
                    <h1 class="text-info text-center">Form Comment</h1>
                </div>
                <div class="card-body">

                    <form action="{{route('comments.update', $comment -> id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Comment</label>
                            <input type="text" value="{{$comment -> Comment}}" name="comment" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-outline-success">Edit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
    
