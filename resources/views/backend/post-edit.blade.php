@extends('backend.layouts.app')
@section('content')
    <div class="container">

        <h3 class="bg-dark text-white text-center">Category edit</h3>

        <form class="text-center" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data" method="post">
            @Csrf
            @method('PUT')
            <div class="d-flex justify-content-center">
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" @isset($post) {{$post->category_id == $category->id ? 'selected' : ''}}@endisset>{{$category->name}}</option>
                    @endforeach
                </select>
                <input type="file" name="image">
                <input type="text" name="title" placeholder="Name" value="{{$post->title}}">
                <div>{{$errors->first('name')}}</div>
                <input type="text" name="description" placeholder="Name" value="{{$post->description}}">
                <div>{{$errors->first('name')}}</div>
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                    <select name="status">
                        <option value="1" @isset($post) {{$post->status == 1 ? 'selected' : ''}}@endisset>Active</option>
                        <option value="0" @isset($post) {{$post->status == 0 ? 'selected' : ''}}@endisset>In Active</option>
                    </select>
                @endif
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
