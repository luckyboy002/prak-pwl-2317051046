<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="/">PWL Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('user.create') }}">Tambah User</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/user') }}">Daftar User</a></li>
      </ul>
    </div>
  </div>
</nav>
