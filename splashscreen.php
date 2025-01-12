<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Guidance System for Future University </title>
  <link rel="shortcut icon" type="image/jpg" href="images/logo1.png"/>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Bootstrap Icons CSS -->
  <link rel="stylesheet" href="bootstrap/icons/font/bootstrap-icons.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="style.css">


</head>

<body style="background-color: #dde5eb;">
  <div class="text-white p-5 container align-items-center">
    <center>
      <img src="images/logo1.png" class="img-fluid">
      <h1 style="color:black";>Guidance System for Future University </h1>
      <h6 style="color:black";>Take the test to know your specialty.</h6>
      <a href="controller.php?page=register" class="btn btn-secondary active">Register</a>
      <a href="controller.php?page=login" class="btn btn-primary active">Login</a><br>
      <div class="mt-3 align-items-center">
        <a style="color:black"; href="single.php?id=8" class="a-link" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
        <span style="color:black"; href="" class="a-link">|</span>
        <a  style="color:black"; href="single.php?id=9" class="a-link" target="_blank" rel="noopener noreferrer">Terms And Conditions</a>
        
      </div>
        <span style="color:black"; >All Rights Reserved. Copyright &copy; 2024</span>
    </center>
  </div>
</body>
<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
      theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
  });
</script>

</html>
