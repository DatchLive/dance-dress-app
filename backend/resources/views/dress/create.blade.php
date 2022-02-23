@extends('layouts.app')

@section('content')
<div>
  <form class="px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
        ドレス名
      </label>
      <input class="w-full px-3 py-2 mb-3 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="">
    </div>
    
    <div class="mb-6">
      <p class="mb-2 text-sm font-bold text-gray-700">スタンダード or ラテン</p>
      <div>
        
        <label class="text-sm text-gray-700" for="password">
          <input type="radio" id="" name="genre" value="standard" class="items-center">スタンダード
        </label>
      </div>
        <label class="text-sm text-gray-700 " for="password">
          <input type="radio" id="" name="genre" value="latin">ラテン
        </label>

    </div>
    
    <div class="mb-6">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
        カラー
      </label>
      <select class="block px-4 py-2 pr-8 text-sm leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
        <option value="">カラーを選択</option>
        {{-- <!-- @foreach ($groups as $group)
        <option value="{{ $group->resource }}"> {{ $group->name }}</option>
        @endforeach --> --}}
      </select>
    </div>
    
    <div class="text-center">
      <button class="px-4 py-2 text-base font-bold text-white rounded bg-cyan-600 hover:bg-cyan-800" type="button">
        登録
      </button>
    </div>
  </form>
</div>
@endsection