@extends('layouts.app')

@section('content')
<div class="mb-10 text-center">
  <a href="{{ route('dress.create') }}" class="px-4 py-2 text-base font-bold text-white rounded bg-cyan-600 hover:bg-cyan-800">
    投稿する
  </a>
</div>
<h2 class="px-4 text-xl">Products</h2>
<div class="grid grid-cols-3 gap-3">
  @foreach($dresses as $dress)
  <div class="bg-white">
    <div class="max-w-2xl px-4 py-4">
      <a href="{{ route('dress.show', ['d_id'=>$dress->d_id]) }}" class="group">
        <div class="w-full overflow-hidden bg-gray-200 rounded-lg aspect-w-1 aspect-h-1 xl:aspect-w-7 xl:aspect-h-8">
          <img class="w-full" src="https://placehold.jp/200x200.png" alt="Sunset in the mountains"  class="object-cover object-center w-full h-full group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-lg text-gray-700">{{$dress->name}}</h3>
        <p class="mt-1 text-sm font-medium text-gray-900">{{$dress->color}}</p>
      </a>
    </div>
  </div>
  @endforeach
</div>
@endsection