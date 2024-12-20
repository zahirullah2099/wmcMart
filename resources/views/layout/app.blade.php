<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') ecomm</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary py-3 px-lg-2">
        <div class="container-fluid">
          <!-- Logo -->
          <a class="navbar-brand text-danger mx-lg-3" href="#" style="font-weight: bold">Logo</a>
          <!-- Toggler Button -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Collapsible Content -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search Box -->
            <form class="d-flex mx-auto w-50">
                <div class="input-group col-lg-8 mx-auto">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                  <button class="btn text-light bg-danger" type="submit">
                    <i class="bi bi-search"></i>
                  </button>
                </div>
              </form>
              
              
            <!-- Icons -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
              <li class="nav-item">
                <div class="position-relative me-3">
                  <i class="bi bi-heart text-danger fs-4"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    0
                  </span>
                </div>
              </li>
              <!-- User Icon -->
              <li class="nav-item mx-lg-4">
                <div class="position-relative me-3">
                  <i class="bi bi-person-circle text-danger fs-4"></i>
                </div>
              </li>
              <!-- Cart Icon -->
              <li class="nav-item">
                <div class="position-relative">
                  <i class="bi bi-cart text-danger fs-4"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    0
                  </span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield('content')



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
