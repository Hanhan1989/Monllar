<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        
        <div class="col-md-1 col-3 logo">
            <img src="media/images/logo.png" alt="">
        </div>
        <div class="col-md-9 col-4 text-center spacelogo">
            <a class="blog-header-logo text-dark" href="{{url('/')}}">Monllar</a>
        </div>

        @if (Auth::guest())
            <div class="col-4 justify-content-end align-items-center spacelogo">
                <a class="btn btn-sm btn-outline-secondary" href="{{url('login')}}">Login Admin <img class="glyph-icon" src="{{asset('lib/glyph-iconset/svg/si-glyph-sign-in.svg')}}"></a>
            </div>
        @else
            <div class="col-4 justify-content-end align-items-center spacelogo">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout Admin <img class="glyph-icon" src="{{asset('lib/glyph-iconset/svg/si-glyph-sign-out.svg')}}"></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </div>
        @endif
    </div>
</header>