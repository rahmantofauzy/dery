<main id="main" class="main">

<div class="pagetitle">
  <h1>About Settings</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Dashboard</a></li>
      <li class="breadcrumb-item">Settings</li>
      <li class="breadcrumb-item active">About</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8">

      <!-- About Profile Settings (CV) -->

      <!-- Success Alert -->
      <?php if($this->session->flashdata('success_about_settings')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="bi bi-check-circle me-1"></i>
          <?php echo $this->session->flashdata('success_about_settings') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>

      <!-- Error Alert -->
      <?php if($this->session->flashdata('error_about_settings')) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php echo $this->session->flashdata('error_about_settings') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>

      <!-- Warning Alert -->
      <?php if($this->session->flashdata('warning_about_settings')) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?php echo $this->session->flashdata('warning_about_settings') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>

      <!-- About Profile Settings -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Curriculum Vitae</h5>

          <!-- Edit CV -->
          <div class="row mb-3">
            <div class="col-12">
              <p>Update your current curriculum vitae (CV) from your main website here</p>
              <br>

              <form action="<?php echo base_url('settings/upload_cv');?>" method="post">

                <!-- TinyMCE Editor -->
                <textarea class="tinymce-editor" name="cv_content" id="cv_content">
                  <?php echo $cv_available;?>
                </textarea><!-- End TinyMCE Editor -->

                <div class="text-end mt-4">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save & Apply</button>
                </div>

              </form>

            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="col-lg-4">
    </div>

  </div>
</section>

</main><!-- End #main -->

<div class="modal fade" id="ExtralargeModal" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

    <form action="<?php echo base_url('settings/upload_cv');?>" method="post">

      <div class="modal-header">
        <h5 class="modal-title">Update CV</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- TinyMCE Editor -->
        <textarea class="tinymce-editor" name="cv_content" id="cv_content">
          <?php echo $cv_available;?>
        </textarea><!-- End TinyMCE Editor -->

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save & Apply</button>
      </div>

    </form>
    </div>
  </div>
</div><!-- End Extra Large Modal-->