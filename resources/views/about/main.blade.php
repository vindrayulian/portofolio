<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <section id="navbar">
        <nav class="navbar sticky-top p-3 navbar-dark" style="background: #1F203A">
            <div class="container">
                <a class="navbar-brand" href="#">Vindra Arya Yulian</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" style="background: #1F203A" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Vindra Arya Yulian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <main>
        <section>
            <div class="position-relative" style="height: 300px; background: #ddd">
                <img src="{{ asset('asset/img/vindra.png') }}" width="400" class="img-thumbnail position-absolute top-100 start-50 translate-middle rounded-circle" alt="...">
            </div>
            <div class="" style="height: 220px;"></div>
            <div class="text-center fw-bold">
                <h1>Vindra Arya Yulian</h1>
            </div>
            <div class="">

            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
