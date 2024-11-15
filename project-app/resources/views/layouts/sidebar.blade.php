<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html"
                class="b-brand text-primary"><!-- ========   Change your logo from here   ============ -->
                <img src="/assets/images/my-logo-transparant.png" class="img-fluid" width="80" height="auto"
                    alt="logo" />
            </a>
            <h4>KAS app</h4>
            <span class="badge bg-light-success rounded-pill ms-2 theme-version"> v9.4.3</span>
        </div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image"
                                class="user-avtar wid-45 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{ Auth::user()->username }}</h6>
                            <small>{{ Auth::user()->role }}</small>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pc-navbar">
                <li class="pc-item pc-caption"><label>Navigation</label></li>
                <li class="pc-item {{ URL::current() == route('user') ? 'active' : '' }}">
                    <a href="{{ route('user') }}" class="pc-link"><span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-user"></use>
                            </svg></span><span class="pc-mtext">Users</span></a>
                </li>
                <li class="pc-item">
                    <a href="../widget/w_data.html" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-fatrows"></use>
                            </svg> </span><span class="pc-mtext">Kelas</span></a>
                </li>
                <li class="pc-item">
                    <a href="../widget/w_chart.html" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-user-square"></use>
                            </svg> </span><span class="pc-mtext">Siswa</span></a>
                </li>
                <li class="pc-item">
                    <a href="../widget/w_chart.html" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-presentation-chart"></use>
                            </svg> </span><span class="pc-mtext">Transaksi</span></a>
                </li>
                <li class="pc-item">
                    <a href="../widget/w_chart.html" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-dollar-square"></use>
                            </svg> </span><span class="pc-mtext">Transaksi</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
