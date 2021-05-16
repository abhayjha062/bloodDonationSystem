<!-- Loading header for app -->
<?php $this->load->view('layout/header'); ?>

<body>
    <!-- Loading main navigation here -->
    <?php $this->load->view('layout/nav'); ?>

    <div class="bg-light">
        <div class="container">
          <!--Info about page-->
          <h4 class="text-danger font-italic pt-3">Welcome to BloodBank & Donor Management System</h4>

          <!-- Marketing Icons Section -->
          <div class="row">
            <div class="col font-italic pb-4">
                Please login with your credential and if you want any change please email us
                <br/>
                If you have donated your blood in recent time please update the same in your profile
            </div>
          </div>
        </div>
    </div>

    <!--User Form Login-->
    <div class="container my-5">
        <div class="row">
        <div class="col">
        <div class="card bg-info w-75 mx-auto">
        <div class="card-header text-center text-danger font-italic lead font-weight-bold bg-light">User Login</div>
            <div class="card-body">
                <?php $attribute = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('login/login_verify', $attribute); ?>
                    <div class="form-group w-75 ml-5">
                        <?php echo form_label('Email'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'log_email',
                            'placeholder' => 'Enter your mail'
                            ); 
                            $value =set_value('log_email');
                        ?>

                        <?php echo form_input($data,$value); ?>
                        <?php echo form_error('log_email'); ?>
                    </div>

                    <div class="form-group w-75 ml-5">
                        <?php echo form_label('Password'); ?>

                        <?php  $data = array(
                            'class' => 'form-control',
                            'name' => 'log_password',
                            'placeholder' => 'Enter your password'
                            ); 
                        ?>

                        <?php echo form_input($data); ?>
                        <?php echo form_error('log_password'); ?>
                    </div>

                    <div class="form-group w-75 ml-5">
                        <?php  $data = array(
                            'class' => 'btn btn-primary',
                            'name' => 'login',
                            'value' => 'login'
                            ); 
                        ?>

                        <?php echo form_submit($data); ?>
                    </div>

                <?php echo form_close(); ?>
            </div>
        </div>
        </div>
    
    <!--Admin Form login-->
      <div class="col">
      <div class="card bg-info w-75 mx-auto">
      <div class="card-header text-center text-danger font-italic lead font-weight-bold bg-light">Admin Login</div>
        <div class="card-body">
            <?php $attribute = array('id' => 'admin_register_form', 'class' => 'form_horizontal'); ?>
            <?php echo form_open('adminlogin/admin_login', $attribute); ?>
                <div class="form-group w-75 ml-5">
                <?php echo form_label('Email'); ?>

                <?php  $data = array(
                'class' => 'form-control',
                'name' => 'log_email',
                'placeholder' => 'Enter your mail'
                ); ?>

                <?php echo form_input($data); ?>
                </div>

                <div class="form-group w-75 ml-5">
                    <?php echo form_label('Password'); ?>

                      <?php  $data = array(
                      'class' => 'form-control',
                      'name' => 'log_password',
                      'placeholder' => 'Enter your password'
                      ); ?>

                      <?php echo form_input($data); ?>
                </div>

                <div class="form-group w-75 ml-5">
                 <?php  $data = array(
                    'class' => 'btn btn-primary',
                    'name' => 'admin_login',
                    'value' => 'login'
                 ); ?>

                 <?php echo form_submit($data); ?>
                </div>
                
            <?php echo form_close(); ?>
        </div>
       </div>
       </div>
       </div>
    </div>

    <!-- Loading footer of website -->
    <?php $this->load->view('layout/footer'); ?>

</body>
</html>