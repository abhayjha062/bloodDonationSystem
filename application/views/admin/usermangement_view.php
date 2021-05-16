<?php
  //Including header for admin 
  $this->load->view('admin/adminheader');
?>
<body>
    <!-- Nav bar for admin -->
    <?php 
      $this->load->view('admin/adminnav');
    ?>

    <!-- Page content holder -->
    <div class="page-content p-3" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-3"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">User Info Table</small></button>

    <!-- User Table -->
    <div class="row text-white">
    <div class="col-lg">
      
    <div class="container">
      <button class="btn btn-success mx-auto mb-3"><a class="text-danger" href="<?php echo base_url() ?>index.php/user/add_user">Add User</a></button>
      <?php 
        $query = $this->db->query('SELECT * FROM userinfo');
        
        if($query->num_rows() > 0) {
            //output of each row
            ?>
            <div class="table-responsive">
                <table class='table table-bordered table-sm bg-light'>
                    <thead class="thead-dark">
                    <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>username</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Age</th>
                    <th>bloodGroup</th>
                    <th>last Donated</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Update</th>
                    <th>Delete</th>
                    </tr>
                    </thread>
                <?php
                    foreach($query->result_array() as $row) {
                        $id = $row["id"];
                        $fname = $row["fname"];
                        $username = $row["username"];
                        $email = $row["email"];
                        $phoneNumber = $row["phoneNumber"];
                        $age = $row["age"];
                        $bloodgroup = $row["bloodgroup"];
                        $lastdonated = $row["lastdonated"];
                        $latitude = $row["latitude"];
                        $longitude = $row["longitude"];
                        $index = "index.php/user/edit/";
                ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $fname ?></td>
                            <td><?php echo $username ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $phoneNumber ?></td>
                            <td><?php echo $age ?></td>
                            <td><?php echo $bloodgroup ?></td>
                            <td><?php echo $lastdonated ?></td>
                            <td><?php echo $latitude ?></td>
                            <td><?php echo $longitude ?></td>
                            <td>
                                <a class='btn btn-success' href="<?php echo base_url().$index.$id ?>">
                                    Update
                                </a>
                            </td>
                            <td>
                                <a class='btn btn-danger' href="<?php echo base_url().'index.php/user/delete/'.$id ?>">
                                    delete
                                </a>
                            </td>
                        </tr> 
                <?php 
                }
            }
        ?>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script>
       $(function() {
          // Sidebar toggle behavior
          $('#sidebarCollapse').on('click', function() {
          $('#sidebar, #content').toggleClass('active');
          });
        });
    </script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>