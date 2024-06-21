<div class="header pt-3" >
    <div class="navbar" style="padding-bottom: 0px !important;">
        <div class="user-name">
            <h6>{{ verta()->format('Y/m/d') }}</h6>
        </div>
        <button class="btn btn-outline-light d-none toggle-side" id="toggleSidebar"><i class="fas fa-bars"></i></button>

        <div class="date-display">
            <a class="text-danger btn p-0" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt" style="font-size: 25px"></i></a>
        </div>
    </div>
</div>
<hr>
