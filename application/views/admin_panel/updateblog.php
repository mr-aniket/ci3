<?php
  // echo "<pre>";
  // print_r($result);
  // die();

?>

<?php
  $this->load->view("admin_panel/header");

?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <br>
          <h2>Update Blog</h2>
          <br>

          <form enctype="multipart/form-data" action="<?= base_url().'admin/blog/updateblog_post' ?>" method="post">
          <select class="custom-select" name="publish_unpublish">
            <option value="1" <?= ($result[0]['status'] == "1" ? "selected": ""); ?>>Publish</option>
            <option value="0" <?= ($result[0]['status'] == "0" ? "selected": ""); ?>>Unpublish</option>
          </select>
          <input type="hidden" name="blog_id" value="<?= $blog_id ?>">
          <div class="form-group" style="margin-top: 15px;">
            <input type="text" value="<?= $result[0]['blog_title'] ?>" class="form-control" name="blog_title" placeholder="Title">
          </div>

          
          <div class="form-group">
            <textarea type="text" id="editor1" class="form-control ckeditor" name="desc" placeholder="Description"><?= $result[0]['blog_data'] ?></textarea>
            
          </div>

          <div class="form-group">
            <img width= 200 src="<?= base_url().$result[0]['blog_img']?>">
            <input type="file" class="form-control" name="file" placeholder="File">
          </div>

          <button type="submit" class="btn btn-primary">Update Blog</button>

          
          
        
        </form>
          
        </main>
      </div>
    </div>
<?php
    $this->load->view("admin_panel/footer");
?>


  <script src="<?= base_url();?>assets/static/Editor/ckeditor.js" ></script>
<script>
  ClassicEditor.create(document.getElementById('editor1'));
</script>

<script type="text/javascript">
    <?php
    if (isset($_SESSION['inserted']))
    {
        if ($_SESSION['inserted'])
        {
            echo "alert('Data inserted successfully!');";
        }
        else
        {
            echo "alert('Data not inserted!');";
        }
    }
    ?>
</script>