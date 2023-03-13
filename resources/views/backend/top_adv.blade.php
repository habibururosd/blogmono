@extends('backend.layouts.app')
@section('content')
    <div class="bg-light container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="class">

                    <h3 class="bg-primary text-white text-center my-4">Top advertisement</h3>
                    <form class="text-center" action="{{route('top-adv.store')}}"enctype="multipart/form-data" method="post">
                        @csrf

                        <input type="text" name="top_ad" placeholder="topads" value="{{old('top_ad')}}">
                        <div>{{$errors->first('top_ad')}}</div>
                        <input type="text" name="top_ad_url" placeholder="topadsurl" value="{{old('top_ad_url')}}">
                        <div>{{$errors->first('top_ad_url')}}</div>
                        <input type="text" name="top_ad_status" placeholder="topadsstatus" value="{{old('top_ad_status')}}">
                        <div>{{$errors->first('top_ad_status')}}</div>
                        <div class="d-flex justify-content-center">
                            <input type="file" name="image">
                            <div>{{$errors->first('image')}}</div>
                            <button type="submit" class="btn btn-sm btn-success">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection
