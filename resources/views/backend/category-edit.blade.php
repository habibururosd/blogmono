@extends('backend.layouts.app')
@section('content')
    <div class="container">

        <h3 class="bg-dark text-white text-center">Category edit</h3>

        <form class="text-center" action="{{route('category.update',$category->id)}}" method="post">
            @Csrf
            @method('PUT')
            <div class="d-flex justify-content-center">
                <input type="text" name="name" placeholder="Name" value="{{$category->name}}">
                <div>{{$errors->first('name')}}</div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
