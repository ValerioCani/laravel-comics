<footer>
        <section id="upper_footer">
            <div class="container">

                <div class="columns">
                    <div>
                        <div>
                            <h3>{{config('footer_lists.comicsLinkList.title')}}</h3>
                            <ul>
                                @foreach(config('footer_lists.comicsLinkList.links') as $link)
                                <li>
                                    <a href="{{route($link['url'])}}">{{$link['text']}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h3>{{config('footer_lists.shopLinkList.title')}}</h3>
                            <ul>
                                @foreach(config('footer_lists.shopLinkList.links') as $link)
                                <li>
                                    <a href="{{route($link['url'])}}">{{$link['text']}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h3>{{config('footer_lists.dcLinkList.title')}}</h3>
                        <ul>
                            @foreach(config('footer_lists.dcLinkList.links') as $link)
                            <li>
                                <a href="">{{$link['text']}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3>{{config('footer_lists.sitesLinkList.title')}}</h3>
                        <ul>
                            @foreach(config('footer_lists.sitesLinkList.links') as $link)
                            <li>
                                <a href="">{{$link['text']}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="{{asset('images/dc-logo-bg.png')}}" alt="">
                </div>
            </div>
                        
        </section>
        <section id="lower_footer">
            <div class="container">
                <button>SIGN-UP NOW!</button>
                <div>
                    <h3>FOLLOW US</h3>
                    @foreach(config('footer_lists.iconlist') as $social)
                    <a>
                        <img src="{{asset('images/footer-'. $social['icon'] .'.png')}}" alt="">
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
    </footer>