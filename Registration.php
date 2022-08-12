<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="ABC School.css" >


    <style>
      body{
          background-color: rgb(9, 122, 160);
      }
      .navbar{
       display: flex;
       background-color:rgb(9, 122, 160) ;
      flex-direction: row;
      }
      ul{
          display: flex;
          list-style: none;
          font-weight: bold;
      }
          input{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        
      }
      
        input[type="text"]::placeholder {  
          padding-left: 7px; 
          font-size: 12px;

         
      }
      input[type=radio]
        {
            width:20px;
            margin:20px;
        }
      #LinkSchool{
          text-decoration: none;
      }
      /* ul li{
         padding: 20px;
      } */
      ul a{
          text-decoration: none;
          /* margin:10px; */
          margin-left: 93px;
          margin-right: 33px;
          padding:14px;
          border-radius: 50px;
          /* background-color: aqua; */
          cursor: pointer;
          color: white;
       }
      ul li a:hover{
          background-color:rgb(212, 68, 203);
      }
      #ft{
          background-color: rgb(9, 122, 160);
          text-align: center;
      }
      #ft li a{
         margin-left:143px;
         font-size: 20px;
      } 
  </style>


  <style>
          .container {
position: relative;
text-align: center;
color: rgb(18, 5, 5);
font-weight: bold;
font-size: 40px;
/* padding-bottom: 300px; */
}

/* This is for Constact Address Text Name as CSS Bottom left text */
.bottom-left {
position: absolute;
bottom: 8px;
left: 16px;
}
/* Centered text */
.centered {
position: absolute;
text-align: left;
top: -30%;
margin: 320px;
}

      button{
        font-size: 20px;
        font-weight: bold;
        background-color: orange;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;}

        button:hover {
        opacity: 0.8;}
      
        .container{
          padding: 100px;
        }
        .MainContent{
                font-size: 16px;
                margin-left: 0px;
                }
                #FillStyle{
                  font-size: 33px;
           text-align: center;
                }
                #FillStyle2{
                  font-size: 33px;
           text-align: center;

                }
                .FillStyle1{
                  width: 60%;
          font-size: 33px;
          font-weight: bold;
          margin-left: 565px;
          color: black;
          /* padding: -200px; */
                }
                .Real{
                    text-align: left;
                    font-weight: bold;
                    color: black;
                    margin: 10px;
                    
                }
          </style>

    
</head>
<body>
    <center>
        <h1>  ABC School Siwan Bihar</h1>
    </center>
    
    <div class="navbar">
    <ul>
        <li><a href="Homepage.html">Home</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="Registration.php">Registration</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li><a href="Notice.html">Notice</a></li>
        <li><a href="About.html">About</a></li>
      </ul> 
    </div>
    <?php
$errorName = $errorPassword = "";
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $errorName = "Name is mandatory";
  }else if(!preg_match("/^[a-z A-Z]*$/",$_POST['uname'])){
    $errorName = "only characters are allowed";

  }
  if (empty($_POST["mname"])) {
    $errorPassword = "Name is mandatory";
  }else if(!preg_match("/^[a-z A-Z]*$/",$_POST['uname'])){
    $errorPassword = "only characters are allowed";

  }
}

$serverName = "localhost";
$userName = "root";
$password = "";
$database = "profile";
$con = mysqli_connect($serverName,$userName,$password,$database);
// if($con)
// {
//   echo"<script>alert('connection is establise')</script>";
// }
if($_SERVER['REQUEST_METHOD']=='POST')
	   {
		   $fName = $_POST['uname'];
		   $MName = $_POST['mname'];
		   $lName = $_POST['lname'];
		   $Gender = $_POST['gender'];
		   $Mob = $_POST['mobnum'];
       $Email = $_POST['email'];
       $Sclass = $_POST['sclass'];
       $Ssection = $_POST['S'];
       $blood = $_POST['BG'];
       $FName = $_POST['FatherName'];
       $FMob= $_POST['mpbnum2'];
       $FEmail= $_POST['Email'];
       $FOcc= $_POST['fatherOccupation'];
       $FQu= $_POST['FatherQualification'];
       
       $Mname= $_POST['MotherName'];
       $Mdetail= $_POST['MotherDetails'];
       $village= $_POST['Village'];
       $post= $_POST['PostOffice'];
       $police= $_POST['PoliceStation'];
       $block= $_POST['Block'];
       $dist= $_POST['Distic'];
       $state= $_POST['State'];
       $nation= $_POST['Nationality'];
       $pass= $_POST['pass'];
		   $sql = "INSERT INTO `profile` (`FirstName`, `MiddleName`, `LastName`, `Gender`, `MobNo`, `Email`, `Sclass`, `Ssession`, `BGroup`, `FName`, `FMobNo`, `FEmail`, `Focc`, `FQali`, `Mname`, `MDetails`, `village`, `post`, `police`, `block`, `distic`, `state`, `nation`, `pass`) VALUES ('$fName', '$MName', '$lName', '$Gender', '$Mob', '$Email','$Sclass', '$Ssection', '$blood', '$FName','$FMob', '$FEmail', '$FOcc', '$FQu', '$MName', '$Mdetail', '$village', '$post', '$police', '$block', '$dist', '$state', '$nation', '$pass')";
		    $result =mysqli_query($con,$sql);
        if($result)
        {
          echo "Result Added Successfully";        }


     }
?>
                <form action="/ValidatePHP/Registration.php"method="POST">
                <p class="FillStyle1">Student Details</p>
                <div>
                    <p class="Real">
                        
                    <label class="MainContent">First Name: </label> 
                    <input type="text" name="uname" Placeholder="FirstName" id="fname">
                    <span id="errorfirstname" style="color: rgb(230, 108, 108)"><?php echo$errorName;?></span><br>

                    <label class="MainContent">Middle Name:</label> 
                    <input type="text" name="mname"  placeholder="MiddleName" id="mname2">
                    <span id="errormiddle2"  style="color: rgb(235, 115, 115)"><?php echo$errorPassword;?></span><br>

                    <label class="MainContent">Last Name:</label> 
                    <input type="text" name="lname" Placeholder="LastName" id="lname">
                    <span id="errorlname" style="color: rgb(250, 122, 122)"></span><br>
                  <div>
                    <label Claas="SizeGender"> Male </label>
                    <input type="radio" name="gender" value="Male"><span id="errormale"></span>
                    <label class="SizeGender"> Female</label> 
                    <input type="radio" name="gender" value="Female"><span id="errorfemale"></span>
                    <span id="genloc" style="color:red;"> </span>
                    <br>
                  </div>

                    <label class="MainContent">Mobile Number </label>
                    <input type="Number" placeholder="Mobile Number" name="mobnum" id="mobileno">
                    <span id="errormobile" style="color: rgb(247, 129, 129)"></span><br>

                    <label class="MainContent">Email </label>
                    <input type="email" placeholder="Email" name="email" id="emailid"><br>
                    <span id="emailids" style="color: rgb(244, 122, 122)"></span><br>

                    <label class="MainContent">Student Class </label>
                    <input type="text" placeholder="Student Class" name="sclass" id="studenc" >
                    <span id="sclass" style="color: rgb(230, 104, 104)"></span><br>

                    <label class="MainContent">Student Session</label> 
                    <input type="text" placeholder="Student Session" name="S" id="students" >
                    <span id="errorssession" style="color: rgb(233, 110, 110)"></span><br>

                    <label class="MainContent">Blood Group</label> 
                    <input type="" placeholder="BloodGroup" name="BG" id="bloodg">
                    <span id="errorbgroup" style="color: rgb(246, 116, 116)"></span><br>
                    </p>
                </div>
                
                
                
                    <h3 id="FillStyle">Parents's Details</h3> <br>
                    <p class="Real">
                
                    <label class="MainContent">Father's Name </label><input type="text" placeholder="Father Name" name="FatherName" id="Fname" >
                    <span id="errorname_f" style="color: rgb(229, 116, 116)"></span><br>
                    <label class="MainContent">Mobile Number </label><input type="Number" placeholder="Mobile Number" name="mpbnum2" id="fathernm">
                    <span id="errormob_num" style="color: rgb(236, 105, 105)"></span><br>
                    <label class="MainContent">Email</label> <input type="email" placeholder="Email" name="Email" >
                    <span id="errormail" style="color: rgb(241, 122, 122)"></span><br>
                
                
                    <label class="MainContent">Father's Occupation </label><input type="text" placeholder="Father Occupation" name="fatherOccupation" id="FOccup" >
                    <span id="errorfoccuption" style="color: rgb(237, 101, 101)"></span><br>
                    <label class="MainContent">Father's Qualification</label> <input type=" " placeholder="Father Qualification" name="FatherQualification" id="FQualification" >
                    <span id="errorfqualification" style="color: rgb(241, 94, 94)"></span><br>
                    <label class="MainContent">Mother's Name</label> <input type="Text" placeholder="MotherName" name="MotherName"  id="Mname"></main>
                    <span id="errorm_name" style="color: rgb(231, 111, 111)"></span><br>
                    <label class="MainContent">Mother's Details </label><input type="text" placeholder="Mother Details" name="MotherDetails" id="Mdetail">
                    <span id="mdetails" style="color: rgb(247, 114, 114)"></span><br>
                    </p>
                
                
                    <h3 id="FillStyle2"> Address Of Student </br>
                    </h3>
                    <p class="Real">
                    <label class="MainContent">Village/City </label><input type="text" name="Village" placeholder="Village/City" id="VCity"><br>
                    <span id="errcity" style="color: rgb(242, 110, 110)"></span><br>
                    <label class="MainContent">Post Office </label><input type="text" name="PostOffice" placeholder="PostOffice" id="POffice"><br>
                    <span id="errpost" style="color: rgb(234, 112, 112)"></span><br>
                    <label class="MainContent">Police Station </label><input type="text" placeholder="PoliceStation" name="PoliceStation" id="PStation"><br>
                    <span id="errstation" style="color: rgb(235, 109, 109)"></span><br>
                    <label class="MainContent">Block </label><input type="text" name="Block" placeholder="Block" id="Block"> <br>
                    <span id="errblock" style="color: rgb(239, 112, 112)"></span><br>
                    <label class="MainContent">Distic </label><input type="text" placeholder="Distict" name="Distic" id="Distic"> <br>
                    <span id="errdistic" style="color: rgb(235, 113, 113)"></span><br>
                    <label class="MainContent">State </label><input type="text" placeholder="State" name="State" id="stat" ><br>
                    <span id="errstate" style="color: rgb(239, 120, 120)"></span><br>
                    <label class="MainContent">National</label> <input type="text" placeholder="National" name="Nationality" id="National" ><br>
                    <span id="errnational" style="color: rgb(245, 81, 81)"></span><br>
                    <label class="MainContent">Password</label> <input type="password" placeholder="Password" name="pass" id="National" ><br>
                    <span id="errnational" style="color: rgb(245, 81, 81)"></span><br>
                    <button type="submit" >Submit</button> 
                    <!-- <input type="submit" value="Submit"> -->
                    </p>
                </form>
    <footer class="footer" style="margin-top: -10px;">
        <div class="navbar" id="ft">
            <ul>
                <li><a href="Admission.html">Admission Enquiry</a></li>
                <li><a href="AWS.pdf">E-Brochure</a></li>
                <li><a href="Management.html">Management</a></li>
                <li><a href="Syllabus.html">Syllabus</a></li>
              </ul>
            </div>
       <p id="Sname">ABC School Afficiated to State Board<br>
        <a id="LinkSchool" href="http://biharboardonline.bihar.gov.in">Bihar State Education Board</a></p>
    </footer>

    <script src="registration.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
    </body>
</html>