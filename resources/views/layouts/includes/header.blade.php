<header>
    <nav>
        {{-- nav link start --}}
        <!-- <a href="{{ route('order') }}">Order Management</a>
        <a href="{{ route('product') }}">Product Management</a>
        <a href="{{ route('slider') }}">Slider Management</a> -->

  <nav class="navbar navbar-expand-lg navbar-dark sticky-top brown">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" class="logo-img" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ms-auto mb-3 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active fs-5 mx-4" aria-current="page" href="{{ route('order') }}">Order Management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5 mx-4" href="{{ route('product') }}">Product Management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5 mx-4" href="{{ route('slider') }}">Slider Management</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        {{-- nav link end --}}
    </nav>
</header>
