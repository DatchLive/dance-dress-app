<nav>
  <div class="px-4 pb-2">
    <div class="flex justify-end">
      <span>{{ Auth::user()->name }}</span>
      <span class="px-2">/</span>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" class="hover:text-slate-500 transition duration-150">
          {{ __('ログアウト') }}
        </a>
      </form>
    </div>
  </div>
</nav>
