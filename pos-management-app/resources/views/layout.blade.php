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
                    <a class="navbar-brand" href="#"><h4>Cashier</h4></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ url('/category') }}">Category</a>
                        <a class="nav-link active" aria-current="page" href="#">Brand</a>
                        <a class="nav-link active" aria-current="page" href="#">Product</a>
                        <a class="nav-link active" aria-current="page" href="#">Sales</a>
                    </div>
                    </div>
                </div>
                </nav>
            </div>
            </div>
                @yield('content')
        </div>
    </div>

    @include('libraries.script')
</body>
</html>
