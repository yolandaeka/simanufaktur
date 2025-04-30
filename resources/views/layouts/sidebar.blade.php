<div class="d-flex flex-column bg-dark text-white vh-100 p-3" style="width: 250px; position: fixed;">
    <a href="{{ url('/') }}" class="d-flex align-items-center mb-3 mb-md-0 text-white text-decoration-none">
        <img src="{{ asset('img/logo.png') }}" alt="SIERTIFY Logo" style="width: 34px; height: 34px;" class="me-2">
        <span class="fs-5 fw-bold">SIMANUFAKTUR</span>
    </a>

    <hr>

    <!-- User Panel -->
    <div class="d-flex align-items-center mb-3">
        <div class="me-2">
            @if (Auth::user()->photo)
                <img src="{{ asset('img/' . Auth::user()->foto_profil) }}" alt="User Foto Profil"
                    class="rounded-circle" style="width: 34px; height: 34px; object-fit: cover;">
            @else
                <img src="{{ asset('img/profil-pic.png') }}" alt="Default Profile"
                    class="rounded-circle bg-white" style="width: 34px; height: 34px;">
            @endif
        </div>
        <div>
            <span>{{ Auth::user()->name }}</span>
        </div>
    </div>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : 'text-white' }}">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ url('/profil') }}" class="nav-link {{ Request::is('profil') ? 'active' : 'text-white' }}">
                <i class="fas fa-user-circle me-2"></i> Profil
            </a>
        </li>

        {{-- PPIC --}}
        @if (in_array(Auth::user()->getRoleName(), ['PPIC', 'SUPERADMIN']))
            <li>
                <a href="{{ url('/perencanaan') }}" class="nav-link {{ Request::is('perencanaan') ? 'active' : 'text-white' }}">
                    <i class="fas fa-cogs me-2"></i> Rencana Produksi
                </a>
            </li>
        @endif

        {{-- GUDANG --}}
        @if (in_array(Auth::user()->getRoleName(), ['GUDANG', 'SUPERADMIN']))
            <li>
                <a href="{{ url('/material') }}" class="nav-link {{ Request::is('material') ? 'active' : 'text-white' }}">
                    <i class="fas fa-flask me-2"></i> Master Data Material
                </a>
            </li>
            <li>
                <a href="{{ url('/batchmaterial') }}" class="nav-link {{ Request::is('batch') ? 'active' : 'text-white' }}">
                    <i class="fas fa-cubes me-2"></i> Batch Material
                </a>
            </li>
            <li>
                <a href="{{ url('/approval') }}" class="nav-link {{ Request::is('approval') ? 'active' : 'text-white' }}">
                    <i class="fas fa-check-square me-2"></i> Approval Request
                </a>
            </li>
        @endif

        {{-- PRODUKSI --}}
        @if (in_array(Auth::user()->getRoleName(), ['PROD', 'SUPERADMIN']))
            <li>
                <a href="{{ url('/productionorder') }}" class="nav-link {{ Request::is('productionorder') ? 'active' : 'text-white' }}">
                    <i class="fas fa-server me-2"></i> Production Order
                </a>
            </li>
        @endif

        {{-- SUPERADMIN --}}
        @if (Auth::user()->getRoleName() == 'SUPERADMIN')
            <li class="mt-3 text-uppercase text-muted small">Kelola Pegawai</li>
            <li>
                <a href="{{ url('/pegawai') }}" class="nav-link {{ Request::is('pegawai') ? 'active' : 'text-white' }}">
                    <i class="fas fa-users me-2"></i> Data Pegawai
                </a>
            </li>
            <li>
                <a href="{{ url('/akunpegawai') }}" class="nav-link {{ Request::is('akunpegawai') ? 'active' : 'text-white' }}">
                    <i class="fas fa-address-card me-2"></i> Data Akun Pegawai
                </a>
            </li>
            <li>
                <a href="{{ url('/role') }}" class="nav-link {{ Request::is('role') ? 'active' : 'text-white' }}">
                    <i class="fas fa-sitemap me-2"></i> Data Role
                </a>
            </li>
        @endif
    </ul>
</div>
