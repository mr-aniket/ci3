<?php
  $this->load->view("admin_panel/header");

?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h1" style="color: white;" >Dashboard</h1>
          </div>
<div class="row">
  <div class="col-md-5">
    <a href="<?= base_url().'admin/blog/'?>">
      <button style="height: 150px; font-size:50px;" class="w-100 btn btn-lg btn-primary" type="submit">View Blog</button>
    </div>
    <div class="col-md-5">
      <a href="<?= base_url().'admin/blog/addblog'?>">
        <button style="height: 150px; font-size:50px;" class="w-100 btn btn-lg btn-primary" type="submit">Add Blog</button>
      </div>
    </div>
  </div>

        </main>
      <!-- </div>
    </div> -->
<?php
    $this->load->view("admin_panel/footer");
?>