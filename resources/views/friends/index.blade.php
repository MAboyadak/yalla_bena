@extends('layouts.app')
@section('content')
<div class="mt-5 w-50 m-auto">
    <h1>Friends</h1>

        <div class="form-group mb-2 d-inline">
            
            <form action="{{route('friends.store')}}" method="POST" class="col-8  justify-content-btween">
                @csrf
                <input type="email" name="email" id="" class="col-7">
                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                <input type="submit" value="Add" name=""  class="col-2 btn btn-success">
            </form>
        </div>
    <h1 class="mt-5">Your Friends List</h1>
    <!-- {{dd($friends)}} -->
    @foreach($friends as $friend)
    <p>ssssssssss</p>
    {{dd(auth()->user())}}
    <!-- <p>{{$friend->email}}</p> -->
    @endforeach
</div>

@endsection
