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
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-3"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Add New User</small></button>

    <!-- User Table -->
    <div class="row">
    <div class="col-sm-9">
        <div class="card bg-secondary" style="line-height: 15px;">
            <div class="card-header">
                <h1>Add New</h1>
                <p>Please fill in this form to create an account.</p>
            </div>
            <div class="card-body">
                <?php $attribute = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('adduser/add_user', $attribute); ?>
                <!-- First Name and last Name section -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?php echo form_label('FirstName'); ?>
                            <?php $data = array(
                                'class' => 'form-control',
                                'name' => 'fname',
                                'placeholder' => 'Enter your first name',
                                );
                                $value =set_value('fname');
                            ?>

                            <?php echo form_input($data,$value); ?>
                            <?php echo form_error('fname'); ?>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <?php echo form_label('LastName'); ?>

                            <?php  $data = array(
                                'class' => 'form-control',
                                'name' => 'lname',
                                'placeholder' => 'Enter your last name'
                                );
                                $value =set_value('lname');
                            ?>

                            <?php echo form_input($data,$value); ?>
                            <?php echo form_error('lname'); ?>
                        </div>
                    </div>
                </div>

                <!-- User Age and Email section -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <?php echo form_label('Age'); ?>

                            <?php  $data = array(
                                'class' => 'form-control',
                                'name' => 'age',
                                'type' => 'number',
                                'placeholder' => 'Enter your Age'
                                );
                                $value = set_value("age");
                            ?>

                            <?php echo form_input($data, $value); ?>
                            <?php echo form_error('age'); ?>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <?php echo form_label('Email'); ?>

                            <?php  $data = array(
                                'class' => 'form-control',
                                'name' => 'email',
                                'placeholder' => 'Enter your mail'
                                );
                                $value =set_value('email');
                            ?>

                            <?php echo form_input($data,$value); ?>
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>
                </div>

                <!-- Phone Number and Blood Group Section input -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <?php echo form_label('Phone Number'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'phoneNo',
                            'type' => 'number',
                            'placeholder' => 'Enter your phone no'
                        ); 
                            $value = set_value("phoneNo");
                        ?>

                        <?php echo form_input($data, $value); ?>
                        <?php echo form_error('phoneNo'); ?>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                        <?php echo form_label('Blood Group'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'bloodGroup',
                            'placeholder' => 'Enter your bloodGroup'
                        ); 
                            $value = set_value("bloodGroup");
                        ?>

                        <?php echo form_input($data, $value); ?>
                        <?php echo form_error('bloodGroup'); ?>
                        </div>
                    </div>
                </div>

                <!-- Last Donated date Section -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <?php echo form_label('Last Donated'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'lastDonated',
                            'type' => 'date',
                            'placeholder' => 'Enter your last Donated date'
                        ); 
                            $value = set_value("lastDonated");
                        ?>

                        <?php echo form_input($data, $value); ?>
                        <?php echo form_error('lastDonated'); ?>
                        </div>
                    </div>
                </div>

                <!-- User Latitude and LOngitude input -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <?php echo form_label('Latitude'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'lat1',
                            'type' => 'number',
                             'step' => 0.001,
                            'placeholder' => 'Enter your latitude'
                        ); 
                            $value = set_value("lat1");
                        ?>

                        <?php echo form_input($data,$value); ?>
                        <?php echo form_error('lat1'); ?>
                        </div>
                    </div>
                

                    <div class="col">
                        <div class="form-group">
                        <?php echo form_label('Longitude'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'lon1',
                            'type' => 'number',
                            'step' => 0.001,
                            'placeholder' => 'Enter your longitude'
                        ); 
                            $value = set_value("lon1");
                        ?>

                        <?php echo form_input($data, $value); ?>
                        <?php echo form_error('lon1'); ?>
                        </div>
                    </div>
                </div>

                <!-- Password and Confirm Password Section -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <?php echo form_label('Password'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'password',
                            'placeholder' => 'Enter your password'
                        ); ?>

                        <?php echo form_password($data); ?>
                        <?php echo form_error('password'); ?>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                        <?php echo form_label('Confirm Password'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'cnfrmPassword',
                            'placeholder' => 'Confirm your password'
                        ); ?>

                        <?php echo form_password($data); ?>
                        <?php echo form_error('cnfrmPassword'); ?>
                        </div>
                    </div>
                </div>

                <!-- Register button for Sinup -->
                <div class="form-group">
                    <?php  $data = array(
                        'class' => 'btn btn-primary',
                        'name' => 'add_user',
                        'value' => 'Add User'
                       ); 
                    ?>

                    <?php echo form_submit($data); ?>
                </div>

                <?php echo form_close(); ?>
                <p class="link mt-2"><a href="<?php echo base_url() ?>index.php/login/login_verify">Click to Login</a></p>
            </div>
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