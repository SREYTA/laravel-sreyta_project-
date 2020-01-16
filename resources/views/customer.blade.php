{!!$text!!}
{{-- @if (count($customer)>0)
    @foreach ($customer as $item)
        {{$item}}
    @endforeach
@else
    No Customer Yet
@endif --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach ($customer as $rows)
                <tr>
                    <td>{{$rows['id']}}</td>     
                    <td>{{$rows['name']}}</td>     
                    <td>{{$rows['email']}}</td>     
                </tr>       
                @endforeach
            </table>
        </div>
    </div>
</div>

{{-- @foreach ($customer as $rows)
    {{$rows['id']}}   
@endforeach --}}
    