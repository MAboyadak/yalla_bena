@extends('layouts.app')

@section('content')
    @foreach ($groups as $group)
        <p>{{$group->id}}</p>
    @endforeach
@endsection