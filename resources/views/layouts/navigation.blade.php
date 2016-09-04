<div class="ui fixed inverted menu">
    <div class="header item">
        <img title="Copacetic Consulting" alt="Blissful Software Delivery" src="/images/copacetic-face.png">
    </div>
    <div class="header item">
        @if (Auth::user())
            <p>Signed in as {{ Auth::user()->name }}</p>
        @endif
    </div>
    <div class="ui simple dropdown item right">
        Copacetic <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="{{ url('dashboard') }}">Dashboard</a>
        </div>
    </div>
    @if (Auth::user())
        <a class="item" href="/logout">Logout</a>
    @endif
</div>
