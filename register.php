<?php
include("init.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") 
 {
$fname=  $_POST["name1"];
$lname=  $_POST["name2"];
$uDOB=  $_POST["dob"];
$uphoneno=  $_POST["no"];
$uemail=  $_POST["mail"];
$upassword=  $_POST["password"];
$uugper=  $_POST["per1"];
$uugyear=  $_POST["yr1"];
$upgper=  $_POST["per2"];
$upgyear=  $_POST["yr2"];
$uslper=  $_POST["per3"];
$uslyear=  $_POST["yr3"];
$uexp=  $_POST["exp"];
$uprskil=  $_POST["pri"];
$usrskil=  $_POST["sec"];
$ucctc=  $_POST["ctc"];
$uectc=  $_POST["expctc"];
$ureason=  $_POST["res"];
$unotice=  $_POST["notper"];
$uwhatoffer=  $_POST["yes"];
$ucurlocation=  $_POST["curloc"];
$uplocation=  $_POST["preloc"];
$udetails=  $_POST["uniqueid"];
$ugender  = $_POST["gen"];
           $sql_query = "insert into registerdata values('$fname','$lname','$uDOB','$uphoneno','$uemail','$upassword','$uexp','$uprskil','$usrskil','$ucctc','$uectc','$ureason','$unotice','$uwhatoffer','$ucurlocation','$uplocation','$udetails');";
            if(mysqli_query($con,$sql_query))
              {
                       ?>
                          <script type="text/javascript">
                          alert('Registration Successful');
                          document.location.href='index.php';
                          </script>
                          <?php
                          
              }
            else
              {   
                   ?>
                          <script type="text/javascript">
                          alert('Registration Failed.Check the internet connection');
                          </script>
                          <?php
                          
              }
 }
?>

<!DOCTYPE HTML>
<html>
  <head>
  	<title>REGISTER PAGE</title>
  	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="expscript.js"></script>
  <link rel="stylesheet" href="style.css" />
  <style type="text/css">
    .jumbotron {
      background: rgba(0,0,0, 0.8);
      color: white;
    }
    ::-webkit-input-placeholder { /* WebKit browsers */
    color:    red;
     opacity: 0.5 !important;
}
  </style>

  <script type="text/javascript">
             function email() 
                { 
                    var mail = document.getElementById('mail');
                    var element = document.getElementById("span5");
                    var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (!pattern.test(mail.value)) {
                    element.innerHTML = "Invalid email";
                    element.style.color = "yellow";
                    mail.style.color="red";
                      mail.focus;
                        }
                      else{
                    element.innerHTML = "";
                    element.style.color = "black";
                    mail.style.color="black";
                      }       
                   
                  }
                  function pass() 
                { 
                          
                    var pass = document.getElementById('password');
                    var element = document.getElementById("span6");
                    var pattern = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                    if (!pattern.test(pass.value)) {
                    element.innerHTML = "one upper case and one symbol and should atleast be 8 characters long";
                    element.style.color = "yellow";
                    pass.style.color="red";
                    }
                      else{
                    element.innerHTML = "";
                    element.style.color = "black";
                    pass.style.color="black";
                      }
                    }
                       function radio21()
                    {
                      if (document.getElementById('r21').checked) {
                       document.getElementById("notice").disabled=false;
                      
                      }
                      else{
                         document.getElementById("notice").disabled=true;

                      }
                      
                    }
                    function checkradio22()
                    {
                      if (document.getElementById('r22').checked) {
                       document.getElementById("notice").disabled=true;
                    }
                      else{
                         document.getElementById("notice").disabled=false;

                      }
                      
                    }
                     function submitagree()
                    {
                    if (document.getElementById('agree').checked)
                    {
                      document.getElementById("submit").disabled = false;
                    } 
                    }
                     function first()
                     {
                       var firstname=document.getElementById('name1');
                      var pattern=/(.)\1\1/;
                      element=document.getElementById('span1');
                      if(pattern.test(firstname.value))
                      {
                        element.innerHTML = "Firstname should not have 3 consecutive characters";
                      element.style.color = "yellow";
                      firstname.style.color = "red";
                      }
                      else{
                        element.innerHTML = "";
                      firstname.style.color = "black";
                      }

                     }
                     function last() 
                      {
                        var firstname = document.getElementById('name1').value;
                        var lastname = document.getElementById('name2').value;
                        var element = document.getElementById("span2");
                        if(firstname == lastname)
                    {
                      element.innerHTML = "Last Name should not be same as First Name";
                      element.style.color = "yellow";
                      lastname.style.color = "red";
                    }   
                    else
                    {
                      element.innerHTML = "";
                      lastname.style.color = "black";
                    }               
                  }
                  function date()
                  {
                    var dob1=document.getElementById("dob").value;
                    var date=new Date(dob1);
                    var year=date.getFullYear();
                    var cur= new Date();
                    var curyear=cur.getFullYear();
                    var age=curyear-year-1;
                    var element=document.getElementById("para");
                    if(age<18)
                    {
                      element.innerHTML = "Your age should be above 18 before 2017";
                      element.style.color = "yellow";
                      dob1.style.color = "red";
                    }
                    else{
                      element.innerHTML = "";
                      dob1.style.color = "black";
                    }

                  }
                function verifyID()
                  {
                    if (document.getElementById('pan').checked) {
                    var ucard = document.getElementById('uniqueid');
                    var element = document.getElementById("spanid");
                    var pattern = /(?=^.{10}$)((?=.*\d))(?![.\n])(?=.*[A-Z]).*$/;
                    if (!pattern.test(ucard.value)) {
                    element.innerHTML = "Invalid Pan number";
                    element.style.color = "red";
                    ucard.style.color="red";
                    }
                      else{
                    element.innerHTML = "";
                    element.style.color = "black";
                    ucard.style.color="black";
                          }
                     }
                     if (document.getElementById('aadhar').checked){
                    var ucard = document.getElementById('uniqueid');
                    var element = document.getElementById("spanid");
                    var pattern = /(?=^.{12}$)((?=.*\d)).*$/;
                    if (!pattern.test(ucard.value)){
                    element.innerHTML = "Invalid Aadhar number";
                    element.style.color = "red";
                    ucard.style.color="red";
                    }
                      else{
                    element.innerHTML = "";
                    element.style.color = "black";
                    ucard.style.color="black";
                          }
                     }
                     else{
                    var ucard = document.getElementById('uniqueid');
                    var element = document.getElementById("spanid");
                    var pattern = /[A-Z]{1}\d{2}\s\d{5}/;
                    if (!pattern.test(ucard.value)){
                    element.innerHTML = "Invalid Passport";
                    element.style.color = "red";
                    ucard.style.color="red";
                    }
                      else{
                    element.innerHTML = "";
                    element.style.color = "black";
                    ucard.style.color="black";
                          }
                     }
                  }
                

           </script>
  </head>
  <body style="background-image: src("img1.jpg");">

       <div class="col-3"></div><br><br>
  <div class="container jumbotron col-sm-offset-1 col-sm-10">
    <h1 style="color: #FFFFFF;text-align:center " ><b>REGISTER</b></h1>
    <form class="form-horizontal" method="POST" id="main" >
           <div class="form-group">
           <label class="control-label col-sm-2 " for="first">First Name:</label>
           <div class="col-sm-8">
              <input type="text" class="form-control" name="name1" id="name1" onblur="first()" required="true" placeholder="First Name">
              <span id="span1" class="pull-right"></span>
           </div>

           </div>
           <div class="form-group">
             <label class="control-label col-sm-2 " for="last">Last Name:</label>
             <div class="col-sm-8">
             <input type="text" class="form-control" name="name2" id="name2" placeholder="Last Name"  onblur="last()"  >
             <span id="span2" class="pull-right"></span></div>
           </div>

           <div class="form-group">
              <label class="control-label col-sm-2 " for="dob">Date Of Birth</label>
              <div class="col-sm-8">
             <input type="Date" class="form-control" name="dob" id="dob" placeholder="DD-MM-YYYY" required="true" required="true" onblur="date()" >
             <span id="para" class="pull-right"></span>
           </div>
           </div>

           <div class="form-group">
              <label class="control-label col-sm-2 " for="gen">Gender</label>
          <div class="col-sm-8">
             <label class="radio-inline col-sm-2" ><input type="radio" value="MALE" name="gen" >MALE   </label>
             <label class="radio-inline col-sm-2"><input type="radio" value="FEMALE" name="gen">FEMALE    </label>
             <label class="radio-inline col-sm-2"><input type="radio" value="TRANS" name="gen">OTHERS </label>
           </div></div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="no">Phone No:</label>
              <div class="col-sm-8">
             <input type="tel" class="form-control" name="no" required="true" id="no" placeholder="Mobile-No (+91XXXX-XX-XXXX)" pattern="^\+91(\s+)?[0-9]{4}-?[0-9]{2}-?[0-9]{4}$"  ></div>
           </div>

            <div class="form-group">
              <label class="control-label col-sm-2 " for="mail">Mail-id</label>
              <div class="col-sm-8">
             <input type="text" class="form-control" name="mail" required="true"  id="mail" onblur="email()" placeholder="Email-id"  >
             <span id="span5" class="pull-right"></span>
           </div>
           </div>

            <div class="form-group">
              <label class="control-label col-sm-2 " for="pass">Password</label>
              <div class="col-sm-8">
             <input type="password" class="form-control" name="password" id="password" required="true" onblur="pass()" placeholder="***********"  >
                         <span id="span6" class="pull-right"></span>

           </div>
           </div>


           



           
           <div class="form-group">
           <label class="control-label col-sm-offset-1  " for="edu"><h4><b>Educational Qualification</b></h4></label></div>

                           <div class="form-group">
                              <label class="control-label col-sm-2 " for="sch">School</label>
                              <div class="col-sm-4">
                              <input type="number" class="form-control" name="per1" id="per1" placeholder="%"  ></div>
                            <div class="col-sm-4">  
                              <input type="Year" class="form-control" name="yr1" id="yr1" placeholder="year"  >
                            </div>
                           </div>



                           <div class="form-group">
                              <label class="control-label col-sm-2 " for="ug">UG</label>
                              <div class="col-sm-4">
                              <input type="number" class="form-control" name="per2" id="per2" placeholder="%"  ></div>
                            <div class="col-sm-4">  
                              <input type="year" class="form-control" name="yr2" id="yr2" placeholder="year"  >
                            </div>
                           </div>



                           <div class="form-group">
                              <label class="control-label col-sm-2 " for="pg">PG</label>
                              <div class="col-sm-4">
                              <input type="number" class="form-control" name="per3" id="per3" placeholder="%"  ></div>
                            <div class="col-sm-4">  
                              <input type="year" class="form-control" name="yr3" id="yr3" placeholder="year"  >
                            </div>
                           </div><br><br>

            <div class="form-group">
              <label class="control-label col-sm-2 " for="exp">Exprience</label>
              <div class="col-sm-8">
             <input type="number" class="form-control" name="exp" placeholder="year"  ></div>
           </div>

            <div class="form-group">
              <label class="control-label col-sm-2 " for="pri">Primary Skill</label>
              <div class="col-sm-8">
             <input type="text" class="form-control" name="pri" required="true" placeholder="write ur skills"  ></div>
           </div>

            <div class="form-group">
              <label class="control-label col-sm-2 " for="sec">Secondary Skill</label>
              <div class="col-sm-8">
             <input type="text" class="form-control" name="sec" placeholder="write ur skills"  ></div>
           </div>

           <div class="form-group">
              <label class="control-label col-sm-2" for="ctc">Current CTC</label>
              <div class="col-sm-8">
             <input type="number" class="form-control" name="ctc" placeholder="income"  ></div>
           </div>
           <div class="form-group">
              <label class="control-label col-sm-2" for="ctc">Expected CTC</label>
              <div class="col-sm-8">
             <input type="number" class="form-control" name="expctc" placeholder="expected income"  ></div>
           </div>

           <div class="form-group">
              <label class="control-label col-sm-2" for="sec">Reason For Change</label>
              <div class="col-sm-8">
             <input type="text" class="form-control" name="res" placeholder="Reason????"  ></div>
           </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="sec">Notice Period</label>
              <div class="col-sm-8">
             <input type="number" class="form-control" name="notper" placeholder="Notice period"  ></div>
           </div>
           
           <div class="form-group">
              <label class="control-label col-sm-2" for="sec">Are you serving notice?</label>
              <div class="col-sm-8">
            <label class="radio-inline"><input type="radio" id="r21" value="1" name="optradio1" onclick ="radio21()" >Yes   </label>
             <label class="radio-inline"><input type="radio" id="r22" value="0" name="optradio1" onclick="radio22()" >No    </label></div>
           <div class="col-sm-offset-2 col-sm-8">
           <input type="text" class="form-control" name="yes" id="notice" placeholder="If Yes only" disabled="disabled" ></div>
         </div>
           
           <div class="form-group">
              <label class="control-label col-sm-2" for="cur">Current Location</label>
              <div class="col-sm-8">
             <input type="text" class="form-control" required="true" name="curloc" id="curloc" placeholder=""  ></div>
           </div>

          <div class="form-group">
              <label class="control-label col-sm-2" for="pre">Preferred Location</label>
              <div class="col-sm-8">
             <input type="text" class="form-control" required="true" name="preloc" id="preloc" placeholder=""  ></div>
           </div>

           <div class="form-group">
              <label class="control-label col-sm-2 " for="gen">Uniqueid</label>
          <div class="col-sm-8">
             <label class="radio-inline col-sm-2" ><input type="radio" id="pan" name="optradio1" >Pan   </label>
             <label class="radio-inline col-sm-2"><input type="radio" id="aadhar" name="optradio1">Aadhar    </label>
             <label class="radio-inline col-sm-2"><input type="radio" name="optradio1">Passport</label>
           </div>
           <div class="col-sm-offset-2 col-sm-8">
             <input type="text" class="form-control" required="true" name="uniqueid" placeholder="ID" onblur="verifyID()" >
             <span id="spanid" class="pull-right"></span>
           </div>
           </div>

           <center>
           <div class="form-group">
            <label class="check-inline"><input type="checkbox" name="agree" id="agree" onclick="submitagree()"" >I agree to the above info</label>
           </div>

           
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-4">
           <button type="submit" class="btn btn-info" id="submit" disabled="disabled" ">Submit</button></div></div></center>

        </form>
  </div>
  <div class="col-3"></div>
  </body>
</html>