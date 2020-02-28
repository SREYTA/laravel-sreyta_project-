<link rel="stylesheet" href="../../css/app.css">

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card shadow">
            <div class="card-header center">
                <h1>Form Comment</h1>
            </div>
            <div class="card-body">
                <form action="{{route('comments.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Comment</label>
                        <input type="text" placeholder="Comment" name="comment" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-outline-info">Create</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>