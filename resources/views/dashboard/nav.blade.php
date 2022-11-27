@auth
    <div class="aside-left bg-white px-3 pb-2 min-vh-100 shadow">
        <ul class="menu" style="list-style-type: none">
            <li class="brand-icon">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset(\App\Custom::$info['c-logo']) }}" class="brand-icon-img">
                        <small class="text-primary font-weight-bold h5 mb-0 ml-2">{{ \App\Custom::$info['short_name'] }}</small>
                    </div>
                    <button class="btn btn-light d-block d-lg-none aside-menu-close">
                        <i class="feather-x fa-2x"></i>
                    </button>
                </div>
            </li>
            <li>
                <a class="menu-item mt-3" href="{{ route('home') }}">
                    <span>
                        <i class="feather-home"></i>
                        Dashboard
                    </span>
                </a>
            </li>

            @component("component.nav-item")
                @slot("icon") <i class="feather-file"></i> @endslot
                @slot("name") Sample @endslot
                @slot("link") {{ route('sample') }} @endslot
            @endcomponent

            @component('component.nav-spacer') @endcomponent

            @component("component.nav-title") Sample Menu Title @endcomponent

            @component("component.nav-item")
                @slot("icon") <i class="feather-plus-circle"></i> @endslot
                @slot("name") Add Item @endslot
                @slot("link") # @endslot
            @endcomponent

            @component("component.nav-item-count")
                @slot("icon") <i class="feather-list"></i> @endslot
                @slot("name") Item List @endslot
                @slot("link") # @endslot
                @slot("count") 50 @endslot
            @endcomponent

            @component('component.nav-spacer') @endcomponent
            @component("component.nav-title") Profile Management @endcomponent
            @component("component.nav-item")
                @slot("icon") <i class="feather-user"></i> @endslot
                @slot("name") Edit Profile @endslot
                @slot("link") {{ route('profile.edit') }} @endslot
            @endcomponent




        @component('component.nav-spacer') @endcomponent
            <li>
                <a class="menu-item alert-secondary" onclick="logout()" href="#">
                    <span>
                        <i class="fas fa-lock"></i>
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </div>


@endauth
