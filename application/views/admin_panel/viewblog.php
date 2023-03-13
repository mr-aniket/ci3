<?php
  $this->load->view("admin_panel/header");

?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <br>
          <h2>View Blog</h2>
          <br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>S. No.</th>
                  <th>Title</th>
                  <th>Desc</th>
                  <th>Image</th>
                  <th>Modify</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($result)
                {
                  $counter=1;
                  foreach ($result as $key => $value)
                  {

                    echo "<tr>
                      <td>".$counter."</td>
                      <td>".$value['blog_title']."</td>
                      <td>".$value['blog_data']."</td>
                      <td><img src='".base_url().$value['blog_img']."' class='img-fluid' width='100'></td>
                      <td><a class=\"btn btn-info\" href='".base_url().'admin/blog/updateblog/1'."'>Update</a></td>
                      <td><a class=\"btn delete btn-danger\" href='#.' data-id='".$value['blog_id']."'>Delete</a></td>
                    </tr>";

                    $counter++;
                }

                }
                else{
                  echo "<tr><td colspan='6'>No records Found</td></tr>";
                }
                
                ?>
                
              </tbody>
            </table>
          </div>
          
          
        </main>
      </div>
    </div>
<?php
    $this->load->view("admin_panel/footer");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script type="text/javascript">
  $(".delete").click(function(){
    var delete_id = $(this).attr('data-id');
    var sure = confirm("Are you sure?\nYou want to delete");
    console.log(sure);
    if (sure)
    {
      alert("Deleting");
      $.ajax({
        url:'<?= base_url().'admin/blog/deleteblog/' ?>',
        type:'post',
        data:{'delete_id': delete_id},
        success: function(response)
        {
          console.log(response);
          if (response == "deleted")
          {
            location.reload();
          }
          else if (response == "notdeleted")
          {
            alert("Something went wrong");
          }
        }
      });
    }
    else
    {
      alert("Not Deleting");
    }
  });
  </script>