@extends('backend.layouts.app')
@section('content')

    <div class="bg-light container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="class">
                    <a href="{{route('category.create')}}" class="btn btn-primary my-2">Add category</a>
                    <h2 class="bg-primary text-center text-white">Category-List</h2>
                </div>
                <div class="class">
                    <table class="col-md-10 offset-md-1 table-bordered">

                        <tr class="text-center">
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>

                                <td>
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning btn-sm">edit</a>
                                    <form action="{{route('category.destroy' ,$category->id) }}" method="post"
                                          style="display: inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>


            </div>
        </div>
    </div>

@endsection
