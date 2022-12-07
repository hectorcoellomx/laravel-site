<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Tienda Virtual <?php echo isset($id) ? $id : ''; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php echo ($page=='home') ? 'active' : ''; ?>" aria-current="page" href="{{ url('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($page=='about') ? 'active' : ''; ?>" href="{{ url('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($page=='products') ? 'active' : ''; ?>" href="{{ url('products') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($page=='contact') ? 'active' : ''; ?>" href="{{ url('contact') }}">Contact</a>
            </li>
        </ul>
        </div>
    </div>
</nav>