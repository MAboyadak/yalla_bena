@extends('layouts.app')
@section('content')
<div class="mt-5 w-50 m-auto">
    <h1>Friends</h1>
    <form  class="row g-3 needs-validation" action="" method="post" novalidate>
        @csrf

        <div class="form-group mb-2 d-inline">
            <label for="validationCustom02" class="form-label">Your friend email</label>
            <form action="{{route('friends.store')}}" method="POST" class="col-8  justify-content-btween">
                @csrf
                <input type="email" name="email" id="" class="col-7">
                <input type="submit" value="Add" name=""  class="col-2 btn btn-success">
            </form>
        </div>
    </form>
    <h1 class="mt-5">Your Friends List</h1>
    <div style="height:400px; border:1px solid black">
    @foreach((array)$user->friend_user as $friend)
    <p>{{$friend->email}}</p>

    @endforeach
    </div>
</div>

@endsection
