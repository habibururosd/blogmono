@extends('backend.layouts.app')
@section('content')
    <div class="bg-light container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="class">

                    <h3 class="bg-primary text-white text-center my-4">Category Add page!</h3>
                    <form class="text-center" action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
                            <div>{{$errors->first('name')}}</div>
                            <button type="submit ">Submit</button>
                        </div>
                    </form>
                    <a href="{{route('category.index')}}" class="btn btn-primary my-2">category list</a>
                </div>
            </div>
        </div>
    </div>
@endsection
