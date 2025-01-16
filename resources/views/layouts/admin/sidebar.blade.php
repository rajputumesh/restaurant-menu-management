<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{url('admin')}}">
            <img src="{{asset('images/logo.png')}}" alt="" class="dark-logo w-100 p-3" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-newspaper"></span><span class="mtext">Restaurants</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('restaurant.index')}}">View Restaurant</a></li>
                        <li><a href="{{route('restaurant.create')}}">Add Restaurant</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>