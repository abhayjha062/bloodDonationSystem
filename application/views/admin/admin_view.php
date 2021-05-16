<?php
  //Including header for admin 
  $this->load->view('admin/adminheader');
?>

<?php 

  $query = $this->db->get('userinfo');
  $no_users = $query->num_rows();
?>

<body>
    <!-- Nav bar for admin -->
    <?php 
      $this->load->view('admin/adminnav');
    ?>

    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

    <!-- Demo content -->
    <div class="row">
    <div class="col-lg-9">
      <h5 class="text-danger">Blood Donation And Management System </h5> 
      <div class="jumbotron p-4">
      <h3>Total Number of registered user</h3>
      <p class="alert alert-danger w-25"><?php echo $no_users ?></p>
      </div>

      <div class="jumbotron p-4">
      <h3>Available blood group</h3>
      <p class="alert alert-success w-25">
        <?php 
        
          $this->db->where('bloodgroup','A+');
          $query = $this->db->get('userinfo');
          $qty_avl = $query->num_rows();
          echo "A+ "."= ".$qty_avl." qty";
        ?>
      </p>
      <p class="alert alert-dark w-25">
        <?php 
        
          $this->db->where('bloodgroup','B+');
          $query = $this->db->get('userinfo');
          $qty_avl = $query->num_rows();
          echo "B+ "."= ".$qty_avl." qty";
        ?>
      </p>
      <p class="alert alert-secondary w-25">
        <?php 
        
          $this->db->where('bloodgroup','AB+');
          $query = $this->db->get('userinfo');
          $qty_avl = $query->num_rows();
          echo "AB+ "."= ".$qty_avl." qty";
        ?>
      </p>
      <p class="alert alert-light w-25">
        <?php 
        
          $this->db->where('bloodgroup','O+');
          $query = $this->db->get('userinfo');
          $qty_avl = $query->num_rows();
          echo "O+ "."= ".$qty_avl." qty";
        ?>
      </p>
      </div>

      <div class="jumbotron p-4">
        <h3>User Request</h3>
        <div class="alert alert-danger w-50">
          No new request 
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