@extends('layouts.app')

@section('content')
@foreach($dresses as $dress)
<div class="max-w-sm mb-6 overflow-hidden rounded shadow-lg">
  <img class="w-full" src="https://placehold.jp/200x200.png" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="mb-2 text-xl font-bold text-orange-200">{{$dress->name}}</div>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">{{$dress->color}}</span>
  </div>
  <p><a href="{{ route('dress.show', ['d_id'=>$dress->d_id])}}">詳細</a></p>
</div>
@endforeach
@endsection