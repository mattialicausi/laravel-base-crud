<?php
  $links = config('presents.navbar');

?>

<header class="d-flex align-items-center">
    <div class="container p-0 d-flex align-items-center">
        <div class="logo">
            <img src="{{Vite::asset('/resources/img/logo-red.PNG')}}" alt="" class="logo">
        </div>
        <nav class="navbar-nav container p-0 navbar-light">
            <ul class="d-flex list-unstyled justify-content-end list-links text-uppercase fw-bold m-0">
                @foreach ($links as $link)
                    <li class="nav-item links">
                        <a class="{{(Route::currentRouteName() == $link['url']) ? 'active' : ''}}" href="{{route($link['url'])}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header> 
