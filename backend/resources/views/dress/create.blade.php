@extends('layouts.app')

@section('content')
<div>
  <form class="px-8 pt-6 pb-8 mb-4" action="{{ route('dress.store') }}" method="POST">
    @csrf
    <div class="mb-4">
      <label class="block mb-2 text-sm font-bold text-gray-700">
        ドレス名
      </label>
      <input class="w-full px-3 py-2 mb-3 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="text" name="name">
    </div>
    
    <div class="mb-6">
      <p class="mb-2 text-sm font-bold text-gray-700">スタンダード or ラテン</p>
      <label class="text-sm text-gray-700" for="standard">
        <input type="radio" id="standard" name="genre" value="standard" class="items-center">スタンダード
      </label>
      <label class="text-sm text-gray-700 " for="latin">
        <input type="radio" id="latin" name="genre" value="latin">ラテン
      </label>
    </div>
    
    <div class="mb-6">
      <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
        カラー
      </label>
      <select class="block px-4 py-2 pr-8 text-sm leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline" name="color">
        <option value="">カラーを選択</option>
        <option value="red">赤</option>
        <option value="blue">青</option>
        <option value="yellow">黃</option>
        {{-- <!-- @foreach ($groups as $group)
        <option value="{{ $group->resource }}"> {{ $group->name }}</option>
        @endforeach --> --}}
      </select>
    </div>
    
    <div class="text-center">
      <button class="px-4 py-2 text-base font-bold text-white rounded bg-cyan-600 hover:bg-cyan-800" type="submit">
        登録
      </button>
    </div>
  </form>
</div>
@endsection