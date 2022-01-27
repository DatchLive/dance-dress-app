<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                @foreach($posts as $post)
                <div>{{$post->title}}</div>
                <div>カテゴリー名：{{$post->category->category_name}}</div>
                <div>投稿者：{{$post->user->name}}</div>
                <div>{{$post->content}}</div>
                @endforeach
              </div>
          </div>
      </div>
  </div>
</x-app-layout>