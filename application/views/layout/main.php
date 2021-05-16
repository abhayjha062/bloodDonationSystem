<!-- Loading header for app -->
<?php $this->load->view('layout/header'); ?>

<body>

    <!-- Loading main navigation here -->
    <?php $this->load->view('layout/nav'); ?>

    <!-- Loading some info about app  -->
    <?php $this->load->view('layout/mainInfo'); ?>

    <!-- Loading sliding image -->
    <?php $this->load->view('layout/slider'); ?>

    <!-- Loading sliding image -->
    <?php $this->load->view('layout/bloodgroupInfo'); ?>

    <!-- Loading footer of website -->
    <?php $this->load->view('layout/footer'); ?>

    <!--<script>alert('Please click on allow location and than search your respective blood group');</script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    //alert("please click on allow location than search for blood group");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            document.getElementById("txtHint").innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        if (position.coords.latitude == 0 || position.coords.longitude == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            console.log(lat,lon);
            window.location.href = "user/search?lat=" + lat + "&lon=" + lon;
        }
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>

</body>

</html>