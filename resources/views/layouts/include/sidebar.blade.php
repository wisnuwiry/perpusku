<div class="sidebar sdw">
    <ul class="nav list-unstyled">
        <li class="pt-2">
            <div class="text-center">
                <img src="{{asset('img/default.jpg')}}" alt="" class="img-rounded">
                <h5>Admin Ku</h5>
                <small class="text-muted">admin</small>
            </div>
        </li>
        <h6 class="font-weight-bold px-4 mb-3">Menu</h6>
        <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}"><a class="nav-link" href="/dashboard">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">User</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Buku</a></li>
        <li class="nav-item active"><a class="nav-link" href="#">Transaksi</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="#">LogOut</a></li>
    </ul>
</div>