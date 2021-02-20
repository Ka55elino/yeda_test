@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-success">
                <strong>Success!</strong> Message send to admin 
            </div>
            <a  class="btn btn-primary" href="{{route('home')}}">Return to form</a>
        </div>
    </div>
</div>
@endsection