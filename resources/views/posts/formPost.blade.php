<link rel="stylesheet" href="../css/app.css">

<form action="{{route('addPost')}}" method="POST">
    @csrf
    <input type="text" placeholder="Text..." name="title">
    <input type="text" placeholder="Body..." name="body">
    <button type="submit"> Add Post </button>

</form>










 