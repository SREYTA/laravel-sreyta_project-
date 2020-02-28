@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="showPost" class="btn btn-primary mb-3">Add Post</a>                  
            <a href="#" class="btn btn-warning mb-3 float-right text-light">Show Post</a>             
            <div class="card">
                <div class="card-header">You are logged in as: </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <p>ID: {{ Auth::user()->id }}</p>
                        <p> Name: {{ Auth::user()->name }}</p>
                        <p>Email: {{ Auth::user()->email }}</p>                   
                        <p>Phone: {{ Auth::user()->profile->phone }}</p>                   
                        <p>Address: {{ Auth::user()->profile->address }}</p>
                              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
