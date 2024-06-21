<div class="sidebar">
    <div class="text-left" >
        <button class="btn btn-outline-light d-none" id="toggle-cross">بستن</button>
    </div>
    <div class="text-center mt-3">
        <h4>{{ auth('admin')->user()->full_name }}</h4>
    </div>
    <div class="menu">
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home mx-2"></i> داشبورد</a>
        <a href="{{route('admin.request')}}"><i class="fas fa-graduation-cap mx-2"></i> درخواست ها </a>
        <a href="{{route('admin.patient')}}"><i class="fas fa-graduation-cap mx-2"></i> بیماران </a>
        <a href="{{route('admin.user')}}"><i class="fas fa-graduation-cap mx-2"></i> پزشکان </a>

    </div>    
    <div>
        <a href="{{route('admin.setting')}}" class="setting"><i class="fas fa-user-cog mx-2"></i>تنظیمات</a>
        <a href="{{ route('logout') }}" class="logout"><i class="fas fa-sign-out-alt mx-2"></i>خروج</a>
    </div>
</div>
