<nav>
  <div class="flex justify-between w-full p-4 text-white bg-blue-900">
      <div class="flex justify-start gap-4">
        <a href="/">{{ __('Home') }} </a>
        <a href="/settings">{{ __('Settings') }} </a>
        <a href="/parser">{{ __('Parser') }} </a>
        <a href="/chat">{{ __('Chat') }} </a>
      </div>

      <div class="flex justify-start gap-4">
        @if (auth()->check())
          <a href="/logout">{{ __('Logout') }} </a>
        @else
          <a href="/login">{{ __('Login') }} </a>
        @endif
      </div>
  </div>
</nav>