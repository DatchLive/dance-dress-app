<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6">
          <span class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{ route('posts.create')}}">投稿する</a>
          </span>
        </div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          @foreach($posts as $post)
          <div class="p-6 bg-white border-b border-gray-200">
            <div class="py-4">
              <div class="font-bold text-xl mb-2">{{$post->title}}</div>
              <p class="text-gray-700">{{$post->content}}</p>
            </div>
            <div class="mb-1 text-base">category:{{$post->category->category_name}}</div>
            <div class="mb-1 text-base">Contributor:{{$post->user->name}}</div>
            <span  class="inline-block bg-blue-500 hover:bg-blue-700 text-white rounded px-3 py-1 text-sm font-semibold mr-2 mb-2">
              <a href="{{ route('posts.show', $post->id)}}">詳細</a>
            </span>
          </div>
          @endforeach
        </div>
      </div>
  </div>
</x-app-layout>
