<!-- Loading header for app -->
<?php $this->load->view('layout/header'); ?>

<body>

    <!-- Loading main navigation here -->
    <?php $this->load->view('layout/nav'); ?>

    <!-- Loading some info about app  -->
    <?php $this->load->view('layout/mainInfo'); ?>

    <div class="container">
        <?php echo validation_errors("<p class='bg-danger'>"); ?>
        <div class="card my-4">
        <div class="card-header text-center text-info font-italic lead font-weight-bold">Update User Profile</div>
        <div class="row">
            <!--Update Form for Email-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Email</div>
                <div class="card-body">
                <?php $attribute = array('id' => 'updateemail_register_form', 'class' => 'form_horizontal'); ?>
                <?php echo form_open('updateuser/update_email', $attribute); ?>
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
                <?php echo form_open('updateuser/update_phoneNumber', $attribute); ?>
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

            <!--Update Form for Last Donated-->
            <div class="col">
                <div class="card text-white bg-info my-5 mx-auto" style="max-width: 20rem;">
                <div class="card-header">Update Last Donated</div>
                <div class="card-body">
                    <?php $attribute = array('id' => 'updatelastDonated_register_form', 'class' => 'form_horizontal'); ?>
                    <?php echo form_open('updateuser/update_lastDonated', $attribute); ?>
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


    <!-- Loading footer of website -->
    <?php $this->load->view('layout/footer'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>