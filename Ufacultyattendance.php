<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Faculty attendance</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="/assets/favicon.ico">
  <link rel="stylesheet" href="/assets/dcode.css">
  <link rel="stylesheet" href="Ufacultyattendance.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <div class="menu-bar">
<ul>
   <li><a href="home.html"><i class="fa fa-home"></i>Home</a></li>
   <li><a href="#Student profile"><i class="fa fa-graduation-cap"></i>Student Profile</a>
   <div class="menu1">
     <ul>
   <li><a href="Astudentprofile.html"><i class="fa fa-address-book"></i>Add Student Profile</a></li>
   <li><a href="Vstudentprofile.php"><i class="fa fa-address-book"></i>View Student Profile</a></li>
   <li><a href="Estudentprofile.html"><i class="fa fa-address-book"></i>Edit Student Profile</a></li>
 </ul>
   </div>
 </li>
   <li><a href="#faculty Profile"><i class="fa fa-users"></i>Faculty Profile</a>
   <div class="menu2">
     <ul>
   <li><a href="Afacultyprofile.html"><i class="fa fa-address-book"></i>Add Faculty Profile</a></li>
   <li><a href="Vfacultyprofile.php"><i class="fa fa-address-book"></i>View Faculty Profile</a></li>
   <li><a href="Efacultyprofile.html"><i class="fa fa-address-book"></i>Edit Faculty Profile</a></li>
 </ul>
   </div>
 </li>
   <li><a href="#Faculty attendance"><i class="fa fa-address-book"></i>Faculty Attendance</a>
<div class="menu3">
  <ul>
<li><a href="Afacultyattendance.html"><i class="fa fa-address-book"></i>Add Attendance</a></li>
<li><a href="Vfacultyattendance.php"><i class="fa fa-address-book"></i>View Attendance</a></li>
<li><a href="Efacultyattendance.html"><i class="fa fa-address-book"></i>Edit Attendance</a></li>
</ul>
</div>
</li>
</ul>
</div>
<br><br><br><br><br><br><br>
<div class="regform"><h1>Update Faculty Attendance</h1></div>
<div class="main">
  <form action="" method="POST">
   <div class="name">Id</div>
   <input type="text" class=id name= id>
   <div class="name">Date</div>
   <input type="date" class="date" name="Date1">
   <div class="name">Varsha Kinge *</div>
   <select class="option" name="Varsha_kinge" required>
   <option disabled="disabled" selected="selected">--Choose option </option>
   <option>Present</option>
   <option>Absent</option>
   </select>
   <div class="name">Snehal Suryavanshi *</div>
   <select class="option" name="Snehal_suryavanshi" required>
   <option disabled="disabled" selected="selected">--Choose option </option>
   <option>Present</option>
   <option>Absent</option>
   </select>
   <div class="name">Niti_patel *</div>
   <select class="option" name="Niti_patel" required>
   <option disabled="disabled" selected="selected">--Choose option </option>
   <option>Present</option>
   <option>Absent</option>
   </select>
   <div class="name">Rupali Patil *</div>
   <select class="option" name="Rupali_patil" required>
   <option disabled="disabled" selected="selected">--Choose option </option>
   <option>Present</option>
   <option>Absent</option>
   </select>
   <input type="submit" class="button" name=update value=UPDATE>
</div>
</form>
</body>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'college_automation');

if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $query = "UPDATE add_facultyattendance SET Date1='$_POST[Date1]', Varsha_kinge='$_POST[Varsha_kinge]',
  Snehal_suryavanshi ='$_POST[Snehal_suryavanshi]', Niti_patel='$_POST[Niti_patel]', Rupali_patil='$_POST[Rupali_patil]',
  where Date1='$_POST[Date1]' ";

  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Data Update ")</script>';
  }
  else{
    echo '<script type="text/javascript"> alert("Data not Update ")</script>';
  }
}

 ?>
