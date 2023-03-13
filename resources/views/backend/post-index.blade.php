@extends('backend.layouts.app')
@section('content')

    <div class="container">

        <h3 class="bg-primary text-white text-center">Post Create!</h3>

        <form class="text-center" action="{{route('post.store')}}" enctype="multipart/form-data" method="post">
            @Csrf
            <div class="d-flex justify-content-center">
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <div>{{$errors->first('category_id')}}</div>
                <input type="text" name="title" placeholder="title" value="{{old('title')}}">
                <div>{{$errors->first('title')}}</div>
                <input type="text" name="description" placeholder="description" value="{{old('description')}}">
                <div>{{$errors->first('description')}}</div>

                <input type="file" name="image">
                <div>{{$errors->first('image')}}</div>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Products Inventory</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"> Yearly Chart
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
    {{--                            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)--}}
    {{--                                <th>Status</th>--}}
    {{--                            @endif--}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td><img src="{{asset('storage/'.$post->image)}}" width="100px" alt=""></td>
    {{--                                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)--}}
    {{--                                    <td>--}}
    {{--                                            @if($post->status)--}}
    {{--                                                <span class="badge badge-sm bg-gradient-success">Active</span>--}}
    {{--                                            @else--}}
    {{--                                                <span class="badge badge-sm bg-gradient-secondary">In Active</span>--}}
    {{--                                            @endif--}}
    {{--                                    </td>--}}
    {{--                                @endif--}}
                                    <td>
                                        <a href="{{route('post.edit',$post->id)}}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{route('post.destroy',$post->id)}}" method="post" style="display: inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

