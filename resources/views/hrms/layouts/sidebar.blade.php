<!-- -------------- Sidebar - Author -------------- -->
<div class="sidebar-widget author-widget">
    <div class="media">
        <a href="/profile" class="media-left">
            @if(isset(Auth::user()->employee->photo))
            <img src="{{asset('photos/'.Auth::user()->employee->photo)}}" width="40px" height="30px" class="img-responsive">
            @else
            <img src="/assets/img/avatars/profile_pic.png" class="img-responsive">
            @endif

        </a>

        <div class="media-body">
            <div class="media-author"><a href="/profile">{{Auth::user()->name}}</a></div>
        </div>
    </div>
</div>

<!-- -------------- Sidebar Menu  -------------- -->
<ul class="nav sidebar-menu scrollable">
    <li class="active">
        <a href="{{route('dashboard')}}">
            <span class="fas fa-tachometer-alt"></span>
            <span class="sidebar-title">Dashboard</span>
        </a>
    </li>
    @if(Auth::user()->isHR())
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-group"></span>
            <span class="sidebar-title">Team</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('add-team')}}">
                    <span class="glyphicon glyphicon-book"></span> Tambah Team </a>
            </li>
            <li>
                <a href="{{route('team-listing')}}">
                    <span class="glyphicon glyphicon-modal-window"></span> Data Team </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-user"></span>
            <span class="sidebar-title">Proyek</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('add-project')}}">
                    <span class="glyphicon glyphicon-tags"></span> Tambah Proyek </a>
            </li>

            <li>
                <a href="{{route('list-project')}}">
                    <span class="glyphicon glyphicon-tags"></span> Data Proyek</a>
            </li>

            <li>
                <a href="{{route('assign-project')}}">
                    <span class="glyphicon glyphicon-tags"></span> Pilih Karyawan</a>
            </li>

            <li>
                <a href="{{route('project-assignment-listing')}}">
                    <span class="glyphicon glyphicon-tags"></span> List Karyawan Proyek</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-graduation-cap"></span>
            <span class="sidebar-title">Divisi</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('add-role')}}">
                    <span class="glyphicon glyphicon-book"></span> Tambah Divisi </a>
            </li>
            <li>
                <a href="{{route('role-list')}}">
                    <span class="glyphicon glyphicon-modal-window"></span> Data Divisi </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-user"></span>
            <span class="sidebar-title">Agen</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('add-client')}}">
                    <span class="glyphicon glyphicon-tags"></span> Tambah Agen </a>
            </li>

            <li>
                <a href="{{route('list-client')}}">
                    <span class="glyphicon glyphicon-tags"></span> Data Agen </a>
            </li>
        </ul>
    </li>
    @endif
    @if(\Auth::user()->iskeuangan())
    <li>
        <a href="/bank-account-details">
            <span class="fa fa-bank"></span>
            <span class="sidebar-title">Bank</span>

        </a>
    </li>
    @endif
    @if(\Auth::user()->isgudang())
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa fa-gas-pump"></span>
            <span class="sidebar-title">Produk</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('add-asset')}}">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Tambah Produk </a>
            </li>
            <li>
                <a href="{{route('asset-listing')}}">
                    <span class="glyphicon glyphicon-calendar"></span> Data Produk </a>
            </li>
            <!-- <li>
                    <a href="{{route('assign-asset')}}">
                        <span class="fa fa-desktop"></span> Assign Asset </a>
                </li>
                <li>
                    <a href="{{route('assignment-listing')}}">
                        <span class="fa fa-clipboard"></span> Assignment Listings </a>
                </li> -->
        </ul>
    </li>
    @endif
    @if(Auth::user()->isSdm())
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-user"></span>
            <span class="sidebar-title">Karyawan</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('add-employee')}}">
                    <span class="glyphicon glyphicon-tags"></span> Tambah Karyawan </a>
            </li>
            <li>
                <a href="{{route('employee-manager')}}">
                    <span class="glyphicon glyphicon-tags"></span> Data Karyawan </a>
            </li>
            <!-- <li>
                    <a href="{{route('upload-emp')}}">
                        <span class="glyphicon glyphicon-tags"></span> Upload </a>
                </li> -->
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-money"></span>
            <span class="sidebar-title">Gaji</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('add-expense')}}">
                    <span class="glyphicon glyphicon-book"></span> Tambah Gaji </a>
            </li>
            <li>
                <a href="{{route('expense-list')}}">
                    <span class="glyphicon glyphicon-modal-window"></span> Data Gaji</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-envelope"></span>
            <span class="sidebar-title">Karyawan Cuti</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('apply-leave')}}">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Tambah Cuti </a>
            </li>
            <li>
                <a href="{{route('my-leave-list')}}">
                    <span class="glyphicon glyphicon-calendar"></span> Data Karyawan Cuti </a>
            </li>
            <li>
                <a href="{{route('add-leave-type')}}">
                    <span class="fa fa-desktop"></span> Alasan Cuti </a>
            </li>
            <li>
                <a href="{{route('leave-type-listing')}}">
                    <span class="fa fa-clipboard"></span> Data Alasan Cuti </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fas fa-arrow-circle-up"></span>
            <span class="sidebar-title">Kenaikan Jabatan</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="/promotion">
                    <span class="glyphicon glyphicon-book"></span> Promosi jabatan </a>
            </li>
            <li>
                <a href="/show-promotion">
                    <span class="glyphicon glyphicon-modal-window"></span> Jabatan </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-clock-o"></span>
            <span class="sidebar-title"> Kehadiran </span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('attendance-upload')}}">
                    <span class="glyphicon glyphicon-book"></span> Upload absensi</a>
            </li>

        </ul>
    </li>

    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-tree"></span>
            <span class="sidebar-title">Liburan</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="/add-holidays">
                    <span class="glyphicon glyphicon-book"></span> Tambah hari libur </a>
            </li>
            <li>
                <a href="/holiday-listing">
                    <span class="glyphicon glyphicon-modal-window"></span> Data Hari libur </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa fa-gavel"></span>
            <span class="sidebar-title">Magang</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">

            <li>
                <a href="/add-training-program">
                    <span class="fa fa-adn"></span> Tambah Program Magang </a>
            </li>

            <li>
                <a href="/show-training-program">
                    <span class="glyphicon glyphicon-calendar"></span> Data Program Magang </a>
            </li>
            <li>
                <a href="/add-training-invite">
                    <span class="fa fa-desktop"></span> Tambah Karyawan Magang </a>
            </li>
            <li>
                <a href="/show-training-invite">
                    <span class="fa fa-clipboard"></span> Data Karyawan Magang </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="/create-meeting">
            <span class="fa fa-calendar-o"></span>
            <span class="sidebar-title"> Rapat Internal </span>
        </a>
    </li>


    <li>
        <a href="/create-event">
            <span class="fa fa-calendar-o"></span>
            <span class="sidebar-title"> Event internal Kantor </span>
        </a>
    </li>
    @endif
    @if(\Auth::user()->isAgen())
    <li>
        <a class="accordion-toggle" href="{{route('list-client')}}">
            <span class="fa fa-user"></span>
            <span class="sidebar-title">Agen</span>
            <span class="caret"></span>
        </a>
    </li>
    @endif
    <p> &nbsp; </p>
</ul>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!-- -------------- /Sidebar Menu  -------------- -->