@extends('layouts.app')

@section('content')
<div class="mb-2 text-xl font-bold">{{$dresses->name}}</div>
<div class="mb-2 text-xl font-bold">{{$dresses->genre}}</div>
<div class="mb-2 text-xl font-bold">{{$dresses->color}}</div>
@endsection