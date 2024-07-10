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

      <!-- General Profile Settings (Home Page) -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">General Profile Settings (Home Page)</h5>

          <!-- Success Alert on General Profile Settings -->
          <?php if($this->session->flashdata('success_general_profile_settings')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
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
                <input type="text" class="form-control" name="web_header_name" id="web_header_name" value="<?php echo $web_header_name;?>">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary">Go</button>
              </div>
            </div>
          </form>

          <hr>

          <!-- Web Title's name -->
          <form action="<?php echo base_url('settings/set_web_title_name');?>" method="post">
            <div class="row mb-3">
              <label for="web_title_name" class="col-3 col-form-label">Web Title Name</label>
              <div class="col-8">
                <input type="text" class="form-control" name="web_title_name" id="web_title_name" value="<?php echo $web_title_name;?>">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary">Go</button>
              </div>
            </div>
          </form>

          <hr>

          <!-- Skill's mentioned -->
          <form action="<?php echo base_url('settings/set_web_i_am_skill');?>" method="post">
            <div class="row mb-3">
              <label for="web_i_am_skill" class="col-3 col-form-label">Your Skills</label>
              <div class="col-8">
                <input type="text" class="form-control" name="web_i_am_skill" id="web_i_am_skill" value="<?php echo $web_i_am_skill;?>">
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary">Go</button>
              </div>
            </div>
          </form>

          <hr>

          <!-- Social Media -->
          <form action="<?php echo base_url('settings/set_social_media');?>" method="post">

            <!-- twitter -->
            <div class="row mb-3">
              <div class="col-2">
                <input class="col-form-label" type="checkbox" id="twitter_checkbox" name="twitter_checkbox"  <?php echo $twitter_checkbox;?>>
                <label for="twitter" class="col-form-label">Twitter</label>
              </div>
              <div class="col-10">
                <input type="text" class="form-control" name="twitter_link" id="twitter_link" placeholder="Insert link here..." value="<?php echo $twitter;?>">
              </div>
            </div>
            <!-- facebook -->
            <div class="row mb-3">
              <div class="col-2">
                <input class="col-form-label" type="checkbox" id="facebook_checkbox" name="facebook_checkbox"  <?php echo $facebook_checkbox;?>>
                <label for="facebook" class="col-form-label">Facebook</label>
              </div>
              <div class="col-10">
                <input type="text" class="form-control" name="facebook_link" id="facebook_link" placeholder="Insert link here..." value="<?php echo $facebook;?>">
                <!-- <small class="text-muted">Current link: <?php echo $facebook;?></small> -->
              </div>
            </div>
            <!-- instagram -->
            <div class="row mb-3">
              <div class="col-2">
                <input class="col-form-label" type="checkbox" id="instagram_checkbox" name="instagram_checkbox"  <?php echo $instagram_checkbox;?>>
                <label for="instagram" class="col-form-label">Instagram</label>
              </div>
              <div class="col-10">
                <input type="text" class="form-control" name="instagram_link" id="instagram_link" placeholder="Insert link here..." value="<?php echo $instagram;?>">
                <!-- <small class="text-muted">Current link: <?php echo $instagram;?></small> -->
              </div>
            </div>
            <!-- google_plus -->
            <div class="row mb-3">
              <div class="col-2">
                <input class="col-form-label" type="checkbox" id="google_plus_checkbox" name="google_plus_checkbox"  <?php echo $google_plus_checkbox;?>>
                <label for="google_plus" class="col-form-label">Google Plus</label>
              </div>
              <div class="col-10">
                <input type="text" class="form-control" name="google_plus_link" id="google_plus_link" placeholder="Insert link here..." value="<?php echo $google_plus;?>">
                <!-- <small class="text-muted">Current link: <?php echo $google_plus;?></small> -->
              </div>
            </div>
            <!-- linkedin -->
            <div class="row mb-3">
              <div class="col-2">
                <input class="col-form-label" type="checkbox" id="linkedin_checkbox" name="linkedin_checkbox"  <?php echo $linkedin_checkbox;?>>
                <label for="linkedin" class="col-form-label">LinkedIn</label>
              </div>
              <div class="col-10">
                <input type="text" class="form-control" name="linkedin_link" id="linkedin_link" placeholder="Insert link here..." value="<?php echo $linkedin;?>">
                <!-- <small class="text-muted">Current link: <?php echo $linkedin;?></small> -->
              </div>
            </div>

            <!-- Submit for Social Media -->
            <div-row>
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Go</button>
              </div>
            </div-row>

            <!-- Bypass form validation -->
            <input type="hidden" name="bypass" id="bypass" value="bypass" placeholder="bypass"></input>
          </form>

        </div>
      </div>

      <!-- About Profile Settings -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">About</h5>

            <!-- Success Alert on About Profile Settings -->
            <?php if($this->session->flashdata('success_about_profile_settings')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
              <?php echo $this->session->flashdata('success_about_profile_settings') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php } ?>

          <!-- Error Alert on About Profile Settings -->
          <?php if($this->session->flashdata('error_about_profile_settings')) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('error_about_profile_settings') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php } ?>

          <!-- Upload .docx for CV -->
          <form action="<?php echo base_url('settings/  ');?>" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="cv_file" class="col-3 col-form-label">Update CV <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Not ready</span></label>
              <div class="col-8">
                <input type="file" name="cv_file" id="cv_file" accept=".doc,.docx" class='form-control'>
                <small class='text'></small>
              </div>
              <div class="col-1">
                <button type="submit" class="btn btn-primary" disabled>Go</button>
              </div>
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