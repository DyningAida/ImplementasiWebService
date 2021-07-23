<nav class="container navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="#">PT. Wijaya Sentosa, Tbk</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link {{ ($title === "data_barang") ? 'active' : '' }}" href="/data">Data Barang</a>
        <a class="nav-link {{ ($title === "data_cabang") ? 'active' : '' }}" href="/cabang">Anak Perusahaan</a>
        <a class="nav-link {{ ($title === "data_pemesanan") ? 'active' : '' }}" href="/pemesanan">Data Pemesanan</a>
        <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/about">About</a>
      </div>
    </div>
  </nav>
