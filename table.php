<?php
   include("init.php");
   session_start();
   ?>
   <html>
<head>

      <style type="text/css">
         table.one {border-collapse:collapse;}
         table.two {border-collapse:separate;}
         td.a {
            border-style:dotted;
            border-width:3px;
            border-color:#000000; 
            padding: 10px;
         }
         td.b {
            border-style:solid;
            border-width:3px;
            border-color:#333333;
            padding:10px;
         }
      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<center><h1>Registered User Details</h1></center><br><br>
<table class="table table-striped">
 <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>DOB</th>
        <th>Experience</th>
        <th>Primary Skill</th>
        <th>Secondary Skill</th>
      </tr>
    </thead>
    <tbody>
<?php
$sql="SELECT firstname,lastname,dob,experience,primaryskill,secondaryskill from registerdata;";
  $result = mysqli_query($con,$sql);
  if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
              $fname = $row["firstname"];
              $lname = $row["lastname"];
              $udob = $row["dob"];
              $uexperience = $row["experience"];
              $uprimary = $row["primaryskill"];
              $usecondary = $row["secondaryskill"];
              echo "<tr>";
  echo "<tr>";
  echo "<td>" . $fname. "</td>";
  echo "<td>" . $lname. "</td>";
  echo "<td>" . $udob. "</td>";
  echo "<td>" . $uexperience. "</td>";
  echo "<td>" . $uprimary. "</td>";
  echo "<td>" . $usecondary. "</td>";
  echo "</tr>";

}
}


  
echo "</table>";
?>
</div></body>


</html>
