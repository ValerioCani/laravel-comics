<header>
    <div class="container">
        <a href="{{route('homepage')}}">
            <img src="{{asset('images/dc-logo.png')}}" alt="DC logo">
        </a>
        <ul>
            @foreach(config('navbar_links') as $link)
            <li>
                <a href="{{route($link['url'])}}">{{$link['text']}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</header>