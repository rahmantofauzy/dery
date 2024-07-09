<main>
  <div class="container">
    
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="<?= base_url("assets/img/logo.png")?>" alt="">
                <span class="d-none d-lg-block">NiceDery</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <!-- Success Alert -->
                  <?php if($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?php echo $this->session->flashdata('success') ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php } ?>
                  <!-- Title -->
                  <h5 class="card-title text-center pb-0 fs-4">Welcome to NiceDery</h5>
                  <p class="text-center small">Choose your option below to proceed</p>
                </div>

                <div class="row">
                  <div class="col-6">
                    <a href="<?= base_url("auth/login")?>">
                      <button class="btn btn-primary w-100" type="button">Login</button>
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="<?= base_url("auth/register")?>">
                      <button class="btn btn-primary w-100" type="button">Register</button>
                    </a>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->