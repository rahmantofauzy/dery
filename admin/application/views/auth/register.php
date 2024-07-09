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
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="<?= base_url('auth/register');?>">
                    <div class="col-12">
                      <label for="Name" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" title="Name" placeholder="" required>
                      <!-- <?= form_error('name'); ?> -->
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="email" title="Email" placeholder="" required>
                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword1" class="form-label">Password</label>
                      <input type="password" name="password1" class="form-control" id="password1" title="Password1" placeholder="" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword2" class="form-label">Retype Password</label>
                      <input type="password" name="password2" class="form-control" id="password2" title="Password2" placeholder="" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Request Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"><a href="" title="Because our system is private-based control system, you should request an account to be accepted or you can contact administrator for an account.">Why request?</a></p>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?= base_url("auth/login");?>">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
</main><!-- End #main -->