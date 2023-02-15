@extends('layouts.app')



@section('content')
    @foreach ($user->groups as $group)
        <p>{{$group->name}}</p>
    @endforeach
@endsection

