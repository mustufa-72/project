<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student Profile</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="/assets/favicon.ico">
  <link rel="stylesheet" href="/assets/dcode.css">
  <link rel="stylesheet" href="Ustudentprofile.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <div class="menu-bar">
<ul>
   <li><a href="home.html"><i class="fa fa-home"></i>Home</a></li>
   <li><a href="#Student profile"><i class="fa fa-graduation-cap"></i>Student Profile</a>
   <div class="menu1">
     <ul>
   <li><a href=Astudentprofile.html><i class="fa fa-address-book"></i>Add Student Profile</a></li>
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
<div class="regform"><h1>Edit Student Profile</h1></div>
<div class="main">
  <form action="" method="POST">
    <div class="name">ID *</div>
    <input type="text" class="firstname" name="id" required><br><br>
  <div id="name">
   <div class="name">First Name *</div>
   <input type="text" class="firstname" name="first_name" required><br><br>
 </div>

   <div class="name">Last Name *</div>
   <input type="text" class="lastname" name="last_name" required><br><br>

   <div class="name">CandidateType *</div>
   <input type="text" class="candidatetype" name="ctype" required><br><br>

   <div class="name">Gender *</div>
   <select class="option" name="gender" required>
   <option disabled="disabled" selected="selected">--Choose option </option>
   <option>Male</option>
   <option>Female</option>
   </select>

   <div class="name">Branch *</div>
   <select class="option" name="branch" required>
   <option disabled="disabled" selected="selected">--Choose option </option>
   <option>Civil Engineering</option>
   <option>Computer Engineering</option>
   <option>Mechanical Engineering</option>
   <option>Electrical Engineering</option>
   </select>

   <div class="name">Year of Study *</div>
   <select class="option" name="year" required>
   <option disabled="disabled" selected="selected">--Choose option </option>
   <option>1st Year</option>
   <option>2nd Year</option>
   <option>3rd Year</option>
   </select>

   <div class="name">Email *</div>
   <input type="email" class="email" name="email" required><br><br>

   <div class="name">Phone No *</div>
   <input type="text" class="phone" name="phone" required><br><br>
   <input type="submit" class= "button" name= "update" value= "UPDATE">

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

  $query = "UPDATE add_studentprofile SET first_name='$_POST[first_name]', last_name='$_POST[last_name]', ctype='$_POST[ctype]',
  gender='$_POST[gender]', branch='$_POST[branch]', year='$_POST[year]', email='$_POST[email]', phone='$_POST[phone]'
  where first_name='$_POST[first_name]' ";

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