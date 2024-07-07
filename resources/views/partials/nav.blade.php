@php
    $url='';
    switch (Auth::user()->role){
        case 1:
            $url='superadmin.dashboard';
            break;
        case 2:
            $url='admin.dashboard';
            break;
        default:
            $url='user.dashboard';
            break;
    }

@endphp

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route($url)}}"> <img alt="image" src="{{asset('public/assets/img/logo.png')}}" class="header-logo" />
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{route($url)}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Manage Paitent</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('patient.add')}}">Add Patient</a></li>
                    <li><a class="nav-link" href="{{route('patient.record')}}">Patient Record</a></li>
                    <li><a class="nav-link" href="{{route('patient.appointment')}}">Patient Appointment</a></li>
                </ul>
            </li>
            @if(Auth::user()->role==1 || Auth::user()->role==2)
            <li class="dropdown">
                <a href="{{route('doctor.list')}}" class="nav-link"><i data-feather="map-pin"></i><span>Doctor</span></a>
            </li>
            @endif
            @if(Auth::user()->role==1)
            <li class="dropdown">
                <a href="{{route('user.list')}}" class="nav-link"><i data-feather="user-check"></i><span>Users</span></a>
            </li>
            @endif
        </ul>
    </aside>
</div>