<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/home">Ph39 fesl</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('list-all-word') }}">@lang('user.all_word_list')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">@lang('user.all_course')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">@lang('user.activity')</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @lang('user.language')
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{!! route('change-language', ['en']) !!}">@lang('user.english')</a>
          <a class="dropdown-item" href="{!! route('change-language', ['vi']) !!}">@lang('user.vietname')</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="btn_logout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @lang('user.logout')
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </li>
    </ul>
  </div>
</nav>
