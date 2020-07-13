<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #55a630;">
    <!-- <div class="container"> -->
    <a class="navbar-brand text-uppercase font-weight-bold text-sm" href="/">Pelayanan data iklim</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link <?= ($cat == 1) ? 'active' : ''; ?>" href="/">Home</a>
            <a class="nav-item nav-link <?= ($cat == 2) ? 'active' : ''; ?>" href="/input">Input Data</a>
            <a class="nav-item nav-link <?= ($cat == 3) ? 'active' : ''; ?>" href="/monitor">Monitoring</a>
            <a class="nav-item nav-link <?= ($cat == 4) ? 'active' : ''; ?>" href="/about">About Us</a>

        </div>
    </div>

    <!-- </div> -->
</nav>