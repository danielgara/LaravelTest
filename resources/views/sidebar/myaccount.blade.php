<div class="sidebar nobottommargin">
    <div class="sidebar-widgets-wrap">

        <div class="clearfix">

        <div class="list-group">
            <a class="list-group-item list-group-item-action clearfix" href="{{ route('myaccount') }}">My account <i class="icon-user float-right"></i></a>
            <a class="list-group-item list-group-item-action clearfix" href="#">My orders <i class="icon-shopping-cart1 float-right"></i></a>
            <a class="list-group-item list-group-item-action clearfix" href="{{ route('myaccountwishlist')}}">Wishlist <i class="icon-shopping-basket float-right"></i></a>
            <a class="list-group-item list-group-item-action clearfix" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                {{ __('Logout') }} <i class="icon-line2-logout float-right"></i>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></a>
</div>

        </div>
    </div>
</div>