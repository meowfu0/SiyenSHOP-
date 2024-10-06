<nav class="d-flex nav flex-column p-4 border-end min-vh-100" style="width: 240px">
    <a class="nav-link d-flex gap-4 fs-5 fw-medium mb-4 justify-content-center" href="#">
        <img class="logo-img" src="{{asset('images/logo.png')}}" alt="">
    </a>
    <a class="sidenav-link d-flex gap-4 fs-5 fw-medium" href="#">
        <img src="{{asset('images/dashboard.svg')}}" alt="">
        Dashboard
    </a>
    <a class="sidenav-link active d-flex gap-4 fs-5 fw-medium" href="#">
        <img src="{{asset('images/users.svg')}}" alt="">
        Products
    </a>
    <a class="sidenav-link active d-flex gap-4 fs-5 fw-medium" href="#">
        <img src="{{asset('images/shops.svg')}}" alt="">
        Orders
    </a>
    <a class="sidenav-link active d-flex gap-4 fs-5 fw-medium" href="{{ url('/busmngr/chat') }}">
        <img src="{{asset('images/chat.svg')}}" alt="">
        Chat
    </a>
    <!-- Spacer div that takes up remaining space -->
    <div class="mt-auto">
        <a class="sidenav-link active d-flex gap-4 fs-5 fw-medium" href="#">
            <img src="{{asset('images/logout.svg')}}" alt="">
            Logout
        </a>
    </div>
</nav>