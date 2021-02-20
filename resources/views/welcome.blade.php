
@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form method="POST" action="{{route('send')}}">
            @csrf
            <div class="form-group">
                <label for="Email1">Email address</label>
                <input name="email" type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Name">Name</label>
                <input name="name" type="text" class="form-control" id="Name" placeholder="Name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Surname">Surname</label>
                <input name="surname" type="text" class="form-control" id="Surname" placeholder="Surname">
                @error('surname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection