@extends('layouts.app')
@section('content')

<section id="page-content">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-white">
    <div class="d-flex">

        <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
            <li>
                <a href="/home" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='home'?'active':''}}" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                    <i class="bi-house fs-3"></i> <br />
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/customers" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='customers'?'active':''}}"
                    title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                    <i class="bi-people fs-3"></i> <br />
                    Customers
                </a>
            </li>
            <li>
                <a href="/app" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='app'?'active':''}}" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="App">
                    <i class="bi-phone fs-3"></i> <br />
                    App Stats
                </a>
            </li>
            <li>
                <a href="/promocodes"
                    class="nav-link py-3 px-2 {{Route::currentRouteName() ==='promocodes'?'active':''}}" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                    <i class="bi-qr-code fs-3"></i>
                    <br>
                    Promo Codes
                </a>
            </li>
            <li>
                <a href="/orders" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='orders'?'active':''}}"
                    title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                    <i class="bi-view-list fs-3"></i>
                    <br>
                    Orders
                </a>
            </li>
            <li>
                <a href="/products" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='products'?'active':''}}"
                    title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                    <i class="bi-postage fs-3"></i>
                    <br>
                    All Products
                </a>
            </li>
            <li>
                <a href="/productsadd" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='productsadd'?'':''}}"
                    title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                    <i class="bi-postage fs-3"></i>
                    <br>
                 Products
                </a>
            </li>
            <li>
                <a href="/redeemed" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='redeemed'?'active':''}}" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Redeemed">
                    <i class="bi-postage fs-3"></i>
                    <br>
                    Redeemed
                </a>
            </li>
            <li>
                <a href="/tax" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='tax'?'active':''}}" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Tax">
                    <i class="bi bi-wallet fs-3"></i>
                    <br>
                    Tax
                </a>
            </li>
            <li>
                <a href="/push" class="nav-link py-3 px-2 {{Route::currentRouteName() ==='push'?'active':''}}" title=""
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Push">
                    <i class="bi bi-bell fs-3"></i> <br />
                    Push
                </a>
            </li>

            <li>
                <a href="#" class="nav-link py-3 px-2" id="dropdownUser" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img width="48" class="rounded-circle mb-2 img-thumbnail"
                        src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&size=64&background=000000&color=fff" />
                    <br>
                    Account
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
                    <li><a class="dropdown-item" href="#">+ New Product</a></li>
                    <li><a class="dropdown-item" href="/accounts/change-password">Change Password</a></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </li>

        </ul>

    </div>
</div>


        </section>
      
    </div>
</section>
@endsection
