@extends('app')
@section('content')

    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="login-box">
            <img class="mx-auto d-block img-circle" src="{{URL::asset('/logo/MoveIt_Circle.png')}}">
            
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Username <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                </div>
                <div class="mb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control mb-2 mt-2">Login</button>
                    <a class="btn btn-danger form-control" href="{{ route('home') }}">Back</a>
                </div>
            </form>
        </div>
    </div>

@endsection