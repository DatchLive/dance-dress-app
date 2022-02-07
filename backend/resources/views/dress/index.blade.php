<h2>ドレス一覧</h2>

@foreach($dresses as $dress)
<div class="max-w-sm mb-6 overflow-hidden rounded shadow-lg">
  <img class="w-full" src="https://placehold.jp/200x200.png" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="mb-2 text-xl font-bold">{{$dress->name}}</div>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">{{$dress->color}}</span>
  </div>
</div>
@endforeach