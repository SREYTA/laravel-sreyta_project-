<h1> Subjects List </h1>
<div class="container">
    <div class="row">
        <table>
            <tr>
                <th>name</th>
                <th>score</th>
            </tr>
            @foreach ($subjects as $subject)    
            <tr>
                <td>{{$subject['name']}}</td>
                <td>{{$subject['score']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>