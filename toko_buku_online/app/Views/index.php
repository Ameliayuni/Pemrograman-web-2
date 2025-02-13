<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">Toko Buku Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
        </li>
            
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari judul buku" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    <div class="ml-3">
        <a href="<?= base_url('cart') ?> " class="btn btn-secondary position-relative">Cart
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+<span class="visually-hidden">unread messages</span>
  </span></a>
  </div>
    </div>
  </div>
</nav>

    <div class="container p-5 bg-danger-subtle rounded-bottom-4">
        <h1>Selamat Datang di Toko Buku Online</h1>
        <h5>Kami Menyediakan berbagai jenis buku dari penerbit terpecaya</h5>
        <a href="<?= base_url() ?>" class="btn btn-primary">Lihat Produk</a>
    </div>

    <div class="container">
    <h2 class="mt-5">Buku Best Seller</h2>
        <div class="row">
            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url("images/images1.jpg") ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tetaplah Sendiri</h5>
              <p class="card-text">Rp.90.000</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
      </div>
    </div>
  </div>
            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url("images/images2.jpg") ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Teluk alaska</h5>
              <p class="card-text">Rp.85.000</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
      </div>
    </div>
            </div>
            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url("images/images1.jpg") ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tetaplah Sendiri</h5>
              <p class="card-text">Rp.90.000</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
      </div>
    </div>
            </div>
            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="<?= base_url("images/images1.jpg") ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tetaplah Sendiri</h5>
              <p class="card-text">Rp.90.000</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
       </div>
     </div>
   </div>
  </div>
  
        <footer class="bg-danger-subtle py-5">
          <div class="container">
          <span>CopyLight &copy; 2024. E-Commerce kelas 3C. All rights reserved. </span>
          </div>
          </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>