<!-- Loading header for app -->
<?php $this->load->view('layout/header'); ?>
    <body>
        <!-- Loading main navigation here -->
        <?php $this->load->view('layout/nav'); ?>

        <!--Info About Blood Management-->
        <div class="bg-light">
            <div class="container">
            <!--Info about page-->
            <h4 class="py-3 text-danger font-italic">Welcome to BloodBank & Donor Management System</h4>

            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col font-italic pb-2 text-info">
                    Please Find your respective blood group and contact the person for same
                    <br>
                    Showing result for persons within 20 km of your area
                </div>
            </div>
            </div>
        </div>

        <?php
            
            //$lat1 = 28.635955199999998;
            //$lon1 = 77.2308992;
            //get the q parameter from URL
            if(isset($_REQUEST['lat']) || isset($_REQUEST['long'])) {
                $lat1 = $_REQUEST["lat"];
                $lon1 = $_REQUEST["lon"];
                $_SESSION['lat1'] = $lat1;
                $_SESSION['lon1'] = $lon1;
            }

            if(isset($_POST['submit'])) {
                //Getting Search Data
                $search = strip_tags($_POST['search']); //Remove html tags
                $search = str_replace(' ', '', $search); //remove spaces
                $search = strtoupper($search); //Uppercase first letter
                $_SESSION['search'] = $search; //Stores first name into session variable

                $query = "";
                if($search == 'A+' || $search == 'A-') {
                    $where = "bloodgroup='A+' OR bloodgroup='A-' OR bloodgroup='O+'";
                    $this->db->where($where);
                    $query = $this->db->get('userinfo');
                }elseif($search == 'B+' || $search == 'B-') {
                    $where = "bloodgroup='B+' OR bloodgroup='B-' OR bloodgroup='O+'";
                    $this->db->where($where);
                    $query = $this->db->get('userinfo');
                }elseif($search == 'AB+' || $search == 'AB-') {
                    $where = "bloodgroup='AB+' OR bloodgroup='AB-' OR bloodgroup='A+' OR bloodgroup='A-' OR bloodgroup='B+' OR bloodgroup='B-' OR bloodgroup='O+' OR bloodgroup='O-' ";
                    $this->db->where($where);
                    $query = $this->db->get('userinfo');
                }elseif($search == 'O+' || $search == 'O-') {
                    $where = "bloodgroup='O+' OR bloodgroup='O-' ";
                    $this->db->where($where);
                    $query = $this->db->get('userinfo');
                }
                
                $result = $query->result();
                //Calculating Distance
                function distance($lat1, $lon1, $lat2, $lon2, $unit) {
                    if (($lat1 == $lat2) && ($lon1 == $lon2)) {
                        return 0;
                    }
                    else {
                        $theta = $lon1 - $lon2;
                        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                        $dist = acos($dist);
                        $dist = rad2deg($dist);
                        $miles = $dist * 60 * 1.1515;
                        $unit = strtoupper($unit);
                    
                        if ($unit == "K") {
                        return ($miles * 1.609344);
                        } else {
                        return $miles;
                        }
                    }
                }
                //Search for the bloodgroup in database if found display the same
        ?>
                <div class="container">
                  <div class="row">
                    <?php
                     if($query->num_rows() > 0) {
                        foreach($query->result_array() as $row) {
                             $lat2 = $row['latitude'];
                             $lon2 = $row['longitude'];
                             $dist = distance($_SESSION['lat1'],$_SESSION['lon1'],$lat2,$lon2,"K");
                             if(intval($dist) < 20 ) {
                    ?>
                              <div class="col-md-4 mb-4">
                                  <div class='card'>
                                   <div class='card-header'>Donor Info</div>
                                   <div class='card-body bg-danger text-warning'>
                                    <?php 
                                        echo "Name: ".$row['fname'];
                                        echo "<br>";
                                        echo "Age: ".$row['age'];
                                        echo "<br>";
                                        echo "BloodGroup: ".$row['bloodgroup'];
                                        echo "<br>";
                                        echo "Email: ".$row['email'];
                                        echo "<br>";
                                        echo "PhoneNumber: ".$row['phoneNumber'];
                                        echo "<br>";
                                        echo "Last Donated: ".$row['lastdonated'];
                                    ?>
                                   </div>
                                   <div class='card-footer'>For more please consult to given person</div>
                                  </div>
                               </div>
                   <?php      
                            }   
                        }
                    }
                   ?>

                  </div>
                </div>
        <?php        
            }
        ?>

        <!-- Loading footer of website -->
        <?php $this->load->view('layout/footer'); ?>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>