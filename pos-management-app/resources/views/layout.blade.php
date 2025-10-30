<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('libraries.style')
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
                <div class="container-fluid w-100">
                    <a class="navbar-brand" href="{{ url('/') }}"><h4>Cashier</h4></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ url('/category') }}">Category</a>
                        <a class="nav-link active" aria-current="page" href="{{ url('/brand') }}">Brand</a>
                        <a class="nav-link active" aria-current="page" href="{{ url('/product') }}">Product</a>
                        <a class="nav-link active" aria-current="page" href="#">Sales</a>
                    </div>
                    </div>
                </div>
                </nav>
            </div>
            </div>
                @yield('content')
        </div>

        {{-- Tampilkan blok intro hanya di halaman awal (home) atau route tertentu --}}
        @if(url()->current() == url('/') || Request::is('home') || Request::routeIs('home'))
        <div class="main-content">
            <div class="font-weight-bold text-start p-3 mb-3 mt-10">
                <h1>Point Of Sale Management</h1>
            </div>
            <div class="font-size-16 text-start p-3 mb-3">
                <h2>What is Point Of Sale Management?</h2>
                <p class="fs-5 ">Point of Sale (POS) Management refers to the process of overseeing and controlling the transactions that occur at the point of sale in a retail environment. This includes managing sales, inventory, customer data, and financial reporting to ensure efficient and accurate operations.</p>
            </div>

            @yield('main-content')
        </div>
        @endif
    </div>

    @include('libraries.script')
</body>
</html>
