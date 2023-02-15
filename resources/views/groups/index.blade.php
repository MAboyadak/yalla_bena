@extends('layouts.app')

@section('content')
    @foreach ($userGroups as $group)
        <p>{{$group->id}}</p>
    @endforeach
@endsection