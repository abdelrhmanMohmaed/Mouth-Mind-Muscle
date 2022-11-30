<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Mouth Mind Muscle</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="true">
                <li class="nav-header">MISCELLANEOUS</li>

                <li class="nav-item ">
                    <a href="{{ route('patient.index') }}"
                        class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'patient' ? 'active' : '' ?>">
                        <i class="fa fa-id-card" aria-hidden="true"></i> &nbsp;
                        <p>Patients</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('macro.index') }}"
                        class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'distribution' ? 'active' : '' ?>">
                        <i class="fa fa-cogs" aria-hidden="true"></i> &nbsp;
                        <p>Macro Distribution</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('schedule.index') }}"
                        class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'schedule' ? 'active' : '' ?>">
                        <i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;
                        <p>Schedule</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@section('script')
@endsection
