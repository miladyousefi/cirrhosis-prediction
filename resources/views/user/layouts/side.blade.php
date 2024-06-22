<div class="sidebar px-4">
    <div class="text-left" >
        <button class="btn btn-outline-light d-none" id="toggle-cross">بستن</button>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <img src="{{ asset('images/banner.jpg') }}" width="50" height="50" class="rounded-circle" alt="">

        </div>
        <div class="col-md-8">
             <h6>دکتر {{ auth()->user()->full_name }}</h6>
             <small>{{auth()->user()->expertation ?? null}}</small>

        </div>
    </div>
    <div class="menu">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home mx-2" style="font-size: 20px"></i> داشبورد</a>
        <a href="{{route('request')}}"><i class="fas fa-clone mx-2" style="font-size: 20px"></i> پیش بینی  </a>
        <a href="{{ route('user') }}" class="setting"><i class="fas fa-users mx-2" style="font-size: 20px"></i>بیماران</a>
        <a href="{{route('note')}}"><i class="fa fa-sticky-note mx-2" style="font-size: 20px"></i>یاداشت</a>
        <a href="{{route('setting')}}"><i class="fas fa-user-cog mx-2" style="font-size: 20px"></i>تنظیمات</a>

    </div>
    <div>
        <a href="{{ route('logout') }}" class="logout"><i class="fas fa-sign-out-alt mx-2"></i>خروج</a>
    </div>
</div>
