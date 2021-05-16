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
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-3"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

    <!-- User Table -->
    <div class="row text-white">
    <div class="col-lg">
      
    <div class="container">
        <div class="card my-4">
        <div class="card-header text-center text-info font-italic lead font-weight-bold">Edit User Profile</div>
        <div class="row">
            <!--Update Form for First Name-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update User</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updatefirst_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_firstName">First Name</label>
                        <input type="text" class="form-control" name="updated_fname" placeholder="Enter Your first name" value="<?php echo set_value('updated_fname') ?>">
                        <br>
                        <?php echo form_error('updated_email'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_fname">Update fname</button>
                </form>
                </div>
                </div>
            </div>

            <!--Update Form for Last Name-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Last Name</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updateemail_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_email">Last Name</label>
                        <input type="email" class="form-control" name="updated_email" placeholder="Enter Your last name" value="<?php echo set_value('updated_lname') ?>">
                        <br>
                        <?php echo form_error('updated_lname'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_lname">Update lname</button>
                </form>
                </div>
                </div>
            </div>

            <!--Update Form for Age-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Age</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updateage_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_email">Age</label>
                        <input type="number" class="form-control" name="updated_age" placeholder="Enter Your age" value="<?php echo set_value('updated_age') ?>">
                        <br>
                        <?php echo form_error('updated_email'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_age">Update Age</button>
                </form>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Update Form for Blood Donation-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Blood Group</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updatebloodgroup_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_email">Blood Group</label>
                        <input type="email" class="form-control" name="updated_bloodgroup" placeholder="Enter Your blood group" value="<?php echo set_value('updated_bloodgroup') ?>">
                        <br>
                        <?php echo form_error('updated_bloodgroup'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_bloodgroup">Update Blood Group</button>
                </form>
                </div>
                </div>
            </div>

            <!--Update Form for Latitude-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Latitude</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updatelatitude_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_email">Latitude</label>
                        <input type="email" class="form-control" name="updated_latitude" placeholder="Enter Your Latitude" value="<?php echo set_value('updated_latitude') ?>">
                        <br>
                        <?php echo form_error('updated_email'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_latitude">Update Latitude</button>
                </form>
                </div>
                </div>
            </div>

            <!--Update Form for Longitude-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Longitude</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updatelongitude_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_email">Longitude</label>
                        <input type="email" class="form-control" name="updated_longitude" placeholder="Enter Your Longitude" value="<?php echo set_value('updated_longitude') ?>">
                        <br>
                        <?php echo form_error('updated_longitude'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_longitude">Update Longitude</button>
                </form>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Update Form for Password-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Password</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updatepassword_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_password">Password</label>
                        <input type="password" class="form-control" name="updated_password" placeholder="Enter Your password" value="<?php echo set_value('updated_password') ?>">
                        <br>
                        <?php echo form_error('updated_password'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_password">Update Password</button>
                </form>
                </div>
                </div>
            </div>

            <!--Update Form for Email-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Email</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updateemail_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_email">Email address</label>
                        <input type="email" class="form-control" name="updated_email" placeholder="Enter Your Latest email address" value="<?php echo set_value('updated_email') ?>">
                        <br>
                        <?php echo form_error('updated_email'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_email">Update Profile</button>
                </form>
                </div>
                </div>
            </div>

            <!--Update form for Phone Number-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Phone Number</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updatephone_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_phoneNumber">Phone Number</label>
                        <input type="number" class="form-control" name="updated_phoneNumber" placeholder="Enter Your Updated Phone Number" value="<?php echo set_value('updated_phoneNumber') ?>">
                        <br>
                        <?php echo form_error('updated_phoneNumber'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_phoneNumber">Update Profile</button>
                </form>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Update Form for Last Donated-->
            <div class="col">
                <div class="card text-white bg-info my-5" style="max-width: 20rem;">
                <div class="card-header">Update Last Donated</div>
                <div class="card-body">
                    <?php $attribute = array('id' => 'updatelastDonated_register_form', 'class' => 'form_horizontal'); ?>
                    <?php echo form_open('user/edit_user', $attribute); ?>
                    <div class="form-group">
                        <label for="updated_LastDonated">Last Donated</label>
                        <input type="date" class="form-control" name="updated_lastDonated" placeholder="Update your last donated date" value="<?php echo set_value('updated_lastDonated') ?>">
                        <br>
                        <?php echo form_error('updated_lastDonated'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary bg-danger" name="update_lastDonated">Update Profile</button>
                    </form>
                </div>
                </div>
            </div>
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