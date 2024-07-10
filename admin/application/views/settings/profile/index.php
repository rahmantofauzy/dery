<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile Settings</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Settings</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">General Profile Settings</h5>

          <!-- Success Alert on General Profile Settings -->
          <?php if($this->session->flashdata('success_general_profile_settings')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('success_general_profile_settings') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php } ?>

          <!-- Error Alert on General Profile Settings -->
          <?php if($this->session->flashdata('error_general_profile_settings')) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('error_general_profile_settings') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php } ?>

          <!-- Web Header's name -->
          <form action="<?php echo base_url('settings/set_web_header_name');?>" method="post">
            <div class="row mb-3">
              <label for="web_header_name" class="col-3 col-form-label">Web Header Name</label>
              <div class="col-8">
                <input type="text" class="form-control" name="web_header_name" id="web_header_name">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary">Go</button>
              </div>
              <small class="text-muted">Current: <?php echo $web_header_name;?></small>
            </div>
          </form>

          <hr>

          <!-- Web Title's name -->
          <form action="<?php echo base_url('settings/set_web_title_name');?>" method="post">
            <div class="row mb-3">
              <label for="web_title_name" class="col-3 col-form-label">Web Title Name</label>
              <div class="col-8">
                <input type="text" class="form-control" name="web_title_name" id="web_title_name">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary">Go</button>
              </div>
              <small class="text-muted">Current: <?php echo $web_title_name;?></small>
            </div>
          </form>

          <hr>

          <!-- Skill's mentioned -->
          <form action="<?php echo base_url('settings/set_web_i_am_skill');?>" method="post">
            <div class="row mb-3">
              <label for="web_i_am_skill" class="col-3 col-form-label">Your Skills</label>
              <div class="col-8">
                <input type="text" class="form-control" name="web_i_am_skill" id="web_i_am_skill">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary">Go</button>
              </div>
              <small class="text-muted">Current: <?php echo $web_i_am_skill;?></small>
            </div>
          </form>

          <hr>

          <!-- Social Media -->
          <form action="<?php echo base_url('settings/set_web_i_am_skill');?>" method="post">
            <div class="row mb-3">
              <div class="col-2">
                <input class="form-check-input col-form-label" type="checkbox" id="gridCheck1">
                <label for="instagram" class="col-form-label">Twitter</label>
              </div>
              <div class="col-9">
                <input type="text" class="form-control" name="instagram" id="instagram">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary">Go</button>
              </div>
              <small class="text-muted">Current: <?php echo $web_i_am_skill;?></small>
            </div>
          </form>

        </div>
      </div>

    </div>

    <div class="col-lg-4">
    </div>

  </div>
</section>

</main><!-- End #main -->