<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body {
  font-family: Copperplate, Papyrus, fantasy;
  font-size:18px;
  background-image: url("admin/assets/webimg/homebg.jpg");
  background-position: 0% 0%;
  background-repeat: no-repeat;
  background-size:  100%;
}

.bg1 {
  background-image: url("admin/assets/webimg/background1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: fill;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight: bold;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid teal;
}

.button2:hover {
  background-color: teal;
  color: white;
}

.modal-content {
    background-image: url("admin/assets/webimg/background3.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.modal-header {
    text-align:center;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #0480be;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
 }
 </style>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid bg1">
    <div class="navbar-header">
      <a class="navbar-left" href="index.php"><img src="admin/assets/webimg/logo.jpg" height='60px'></img></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span style="font-weight:bold;font-size:24px;">Home</span></a></li>
        <li><a href="signup.php"><span style="font-weight:bold;font-size:24px;">Register</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<?php 
include 'admin/db_connect.php'; 
?>
<style>
    hr.new1 {
        border-top: 1px solid teal;
    }
    .masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
    img#cimg1{
        max-height: 25vh;
        max-width: 15vw;
    }
</style>

    <div class="container-fluid">
        <div class="col-md-12">
        <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="font-weight:bold;font-size: 30px;">Registration Form</h4>
          <form action="" id="create_account" name="create_account" enctype="multipart/form-data">
        </div>
            <div class="modal-body">
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" pattern="[a-zA-Z]+" title="Invalid Data" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" pattern="[a-zA-Z]+" title="Invalid Data" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="form-control" name="gender" required>
                                                    <option></option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Roll Number(e.g., 07BD1A0501)</label>
                                                <input type="text" class="form-control" name="rollnumber" pattern="(\d{2}[bB][dD]\d{1}.[016]\d{3}){1}" title="Invalid Roll Number" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Graduated Year</label>
                                                <input type="date" class="form-control" name="gradyear" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Upload Your Photo</label>
                                                <input type="file" class="form-control" name="profilepic" pattern="(\.jpg|\.jpeg|\.JPG|\.JPEG)$" title="Please upload jpg or jpeg file only" onchange="displayImg1(this,$(this))" required>
                                                <span id="simg1" style="color:red;font-size:12px"></span>
                                                <img src="" alt="" id="cimg1">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Email ID</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Mobile Number</label>
                                                <input type="number" class="form-control" name="mnumber" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Department</label>
                                                <select class="form-control" name="department" required>
                                                    <option></option>
                                                    <?php 
                                                    $course = $conn->query("SELECT * FROM courses order by course asc");
                                                    while($row=$course->fetch_assoc()):
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['course'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-8">
                                                <label for="" class="control-label">Have You pursued/completed a Master's Degree or any other Higher Education </label>
                                                <select class="form-control" name="masters" onchange=myEduFunction(this); required>
                                                    <option></option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr class="new1" >
                                        <div id="HEDiv" style="display:none;">
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Name of the University</label>
                                                    <input type="text" class="form-control" name="heuniv" id="heuniv">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Location</label>
                                                    <input type="text" class="form-control" name="helocation" id="helocation">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Name of the degree</label>
                                                    <input type="text" class="form-control" name="hedegree" id="hedegree">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Year of Completion</label>
                                                    <input type="date" class="form-control" name="heyear" id="heyear">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Upload necessary docs</label>
                                                    <input type="file" class="form-control" name="heproof" id="heproof" pattern="(\.pdf)$" title="Please upload PDF file only" onchange="displayImg2(this,$(this))">
                                                    <span id="simg2" style="color:red;font-size:12px"></span>
                                                </div>
                                            </div>
                                            <hr class="new1" >
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Current City</label>
                                                <input type="text" class="form-control" id="currcity" name="currcity">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Current City</label>
                                                <input type="text" class="form-control" id="currcountry" name="currcountry">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Current Status</label>
                                                <select class="form-control" name="currstatus" id="currstatus" onchange=myWorkFunction(this); required>
                                                    <option></option>
                                                    <option>Working</option>
                                                    <option>Studying(MBA/MS/Others)</option>
                                                    <option>Others</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <hr class="new1" >
                                        <div id="WorkDiv" style="display:none;">
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Name of Current Employer</label>
                                                    <input type="text" class="form-control" id="wemployer" name="wemployer">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Current Location</label>
                                                    <input type="text" class="form-control"  id="wlocation" name="wlocation">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Designation</label>
                                                    <input type="text" class="form-control" id="wdesignation" name="wdesignation">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Start Date</label>
                                                    <input type="date" class="form-control" id="wsdate" name="wsdate">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">End Date</label>
                                                    <input type="date" class="form-control" id="wedate" name="wedate">
                                                </div>
                                            </div>
                                            <hr class="new1" >
                                        </div>
                                        <div id="StudyDiv" style="display:none;">
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Name of The University</label>
                                                    <input type="text" class="form-control" name="stuniv" id="stuniv">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Location</label>
                                                    <input type="text" class="form-control" id="stlocation" name="stlocation">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Name of the Course</label>
                                                    <input type="text" class="form-control" id="stucourse" name="stucourse">
                                                </div>
                                            </div>
                                            <div class="row form-group" >
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Start Date</label>
                                                    <input type="date" class="form-control" name="stsdate" id="stsdate">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">End Date</label>
                                                    <input type="date" class="form-control" id="stedate" name="stedate">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Upload ID Card/Admission Letter</label>
                                                    <input type="file" class="form-control" name="stuproof"  id="stuproof" onchange="displayImg3(this,$(this))">
                                                    <span id="simg3" style="color:red;font-size:12px"></span>
                                                </div>
                                            </div>
                                            <hr class="new1" >
                                        </div>
                                        <div id="OtherDiv" style="display:none;">
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Others</label>
                                                    <select class="form-control" id="otheroption" name="otheroption" onchange=myOtherFunction(this);>
                                                        <option></option>
                                                        <option>Enterpreneur</option>
                                                        <option>Preparing for competitive exams</option>
                                                        <option>Home Maker</option>
                                                        <option>On a Subbatical</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="new1" >
                                        </div>
                                        <div id="EPDiv" style="display:none;">
                                            <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Name of Your Company</label>
                                                    <input type="text" class="form-control" id="epcompany" name="epcompany">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Location</label>
                                                    <input type="text" class="form-control" name="eplocation" id="eplocation">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Your Designation</label>
                                                    <input type="text" class="form-control" id="epdesignation" name="epdesignation">
                                                </div>
                                            </div>
                                            <div class="row form-group" >
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Registered On</label>
                                                    <input type="date" class="form-control" id="epsdate" name="epsdate">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">CIN/CRN</label>
                                                    <input type="text" class="form-control" id="epcin" name="epcin">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Upload Necessary docs</label>
                                                    <input type="file" class="form-control" name="epproof" id="epproof"onchange="displayImg4(this,$(this))">
                                                    <span id="simg4" style="color:red;font-size:12px"></span>
                                                </div>
                                            </div>
                                            <hr class="new1" >
                                        </div>
                                        <div id="CPDiv" style="display:none;">
                                            <div class="row form-group" >
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Name of competitive exam</label>
                                                    <select class="form-control" id="cpoption" name="cpoption" onchange=myCPOtherFunction(this);>
                                                        <option></option>
                                                        <option>GATE</option>
                                                        <option>CAT</option>
                                                        <option>GRE</option>
                                                        <option>GMAT</option>
                                                        <option>UPSC Civil Services</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Exam Date (tentative)</label>
                                                    <input type="date" class="form-control" name="cpdate" id="cpdate">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="" class="control-label">Upload Necessary docs</label>
                                                    <input type="file" class="form-control" name="cpproof" id="cpproof"onchange="displayImg5(this,$(this))">
                                                    <span id="simg5" style="color:red;font-size:12px"></span>
                                                </div>
                                            </div>
                                            <hr class="new1" >
                                        </div>
                                        <div id="OTDiv" style="display:none;">
                                            <div class="row form-group" >
                                                <div class="col-md-10">
                                                    <label for="" class="control-label">Please Specify</label>
                                                    <textarea name="otcomments" id="otcomments" cols="30" rows="3" class="form-control">
                                                    </textarea>
                                                </div>
                                            </div>
                                            <hr class="new1" >
                                        </div>
                                        <div id="msg">
                                            
                                        </div>
                                        <hr class="divider">
                                    </div>
                                        <div class="modal-footer">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                               <button type="submit" class="button button2">SUBMIT</button>
                                            </div>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
            </div>
<script>
function displayImg1(input,_this) {
    var filePath = input.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.JPG|\.JPEG)$/i;
    if(!allowedExtensions.exec(filePath)){
        //alert('Please upload JPEG or JPG format only');
        input.value = '';
        document.getElementById('simg1').textContent='Please upload JPEG or JPG format only';
        document.getElementById('cimg1').src='';
    }
    else{
        document.getElementById('simg1').textContent='';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#cimg1').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
}

function displayImg2(input,_this) {
    var filePath = input.value;
    var allowedExtensions = /(\.pdf)$/i;
    if(!allowedExtensions.exec(filePath)){
        input.value = '';
        document.getElementById('simg2').textContent='Please upload PDF file only';
        return false;
    }
    else{
        document.getElementById('simg2').textContent='';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#cimg2').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
}

function displayImg3(input,_this) {
    var filePath = input.value;
    var allowedExtensions = /(\.pdf)$/i;
    if(!allowedExtensions.exec(filePath)){
        input.value = '';
        document.getElementById('simg3').textContent='Please upload PDF file only';
        return false;
    }
    else{
        document.getElementById('simg3').textContent='';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#cimg3').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
}

function displayImg4(input,_this) {
    var filePath = input.value;
    var allowedExtensions = /(\.pdf)$/i;
    if(!allowedExtensions.exec(filePath)){
        input.value = '';
        document.getElementById('simg4').textContent='Please upload PDF file only';
        return false;
    }
    else{
        document.getElementById('simg4').textContent='';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#cimg4').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
}

function displayImg5(input,_this) {
    var filePath = input.value;
    var allowedExtensions = /(\.pdf)$/i;
    if(!allowedExtensions.exec(filePath)){
        input.value = '';
        document.getElementById('simg5').textContent='Please upload PDF file only';
        return false;
    }
    else{
        document.getElementById('simg5').textContent='';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#cimg5').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
}

function myWorkFunction(sel) {
  var x = document.getElementById("WorkDiv");
  var y = document.getElementById("StudyDiv");
  var z = document.getElementById("OtherDiv");
  x.style.display = "none";
  y.style.display = "none";
  z.style.display = "none";
  if (sel.options[sel.selectedIndex].text == "Working") {
    x.style.display = "block";
    document.getElementById("wemployer").required = true;
    document.getElementById("wlocation").required = true;
    document.getElementById("wdesignation").required = true;
    document.getElementById("wsdate").required = true;
    document.getElementById("wedate").required = true;
  }
  else{
    document.getElementById("wemployer").required = false;
    document.getElementById("wlocation").required = false;
    document.getElementById("wdesignation").required = false;
    document.getElementById("wsdate").required = false;
    document.getElementById("wedate").required = false;
  }
  if (sel.options[sel.selectedIndex].text == "Studying(MBA/MS/Others)") {
    y.style.display = "block";
    document.getElementById("stuniv").required = true;
    document.getElementById("stlocation").required = true;
    document.getElementById("stucourse").required = true;
    document.getElementById("stsdate").required = true;
    document.getElementById("stedate").required = true;
    document.getElementById("stuproof").required = true;
  }
  else{
    document.getElementById("stuniv").required = false;
    document.getElementById("stlocation").required = false;
    document.getElementById("stucourse").required = false;
    document.getElementById("stsdate").required = false;
    document.getElementById("stedate").required = false;
    document.getElementById("stuproof").required = false;
  }
  if (sel.options[sel.selectedIndex].text == "Others") {
    z.style.display = "block";
    document.getElementById("otheroption").required = true;
  }
  else{
    document.getElementById("otheroption").required = false;
  }
}
function myOtherFunction(sel) {
  var x = document.getElementById("EPDiv");
  var y = document.getElementById("CPDiv");
  x.style.display = "none";
  y.style.display = "none";
  if (sel.options[sel.selectedIndex].text == "Enterpreneur") {
    x.style.display = "block";
    document.getElementById("epcompany").required = true;
    document.getElementById("eplocation").required = true;
    document.getElementById("epdesignation").required = true;
    document.getElementById("epsdate").required = true;
    document.getElementById("epcin").required = true;
    document.getElementById("epproof").required = true;
  }
  else{
    document.getElementById("epcompany").required = false;
    document.getElementById("eplocation").required = false;
    document.getElementById("epdesignation").required = false;
    document.getElementById("epsdate").required = false;
    document.getElementById("epcin").required = false;
    document.getElementById("epproof").required = false;
  }
  if (sel.options[sel.selectedIndex].text == "Preparing for competitive exams") {
    y.style.display = "block";
    document.getElementById("cpoption").required = true;
    document.getElementById("cpdate").required = true;
    document.getElementById("cpproof").required = true;
  }
  else{
    document.getElementById("cpoption").required = false;
    document.getElementById("cpdate").required = false;
    document.getElementById("cpproof").required = false;
  }
}
function myCPOtherFunction(sel) {
  var z = document.getElementById("OTDiv");
  z.style.display = "none";
  if (sel.options[sel.selectedIndex].text == "Others") {
    z.style.display = "block";
    document.getElementById("otcomments").required = true;
  }
  else{
    document.getElementById("otcomments").required = false;
  }
}
function myEduFunction(sel) {
  var z = document.getElementById("HEDiv");
  z.style.display = "none";
  if (sel.options[sel.selectedIndex].text == "Yes") {
    z.style.display = "block";
    document.getElementById("heuniv").required = true;
    document.getElementById("helocation").required = true;
    document.getElementById("hedegree").required = true;
    document.getElementById("heyear").required = true;
    document.getElementById("heproof").required = true;
  }
  else{
    document.getElementById("heuniv").required = false;
    document.getElementById("helocation").required = false;
    document.getElementById("hedegree").required = false;
    document.getElementById("heyear").required = false;
    document.getElementById("heproof").required = false;
  }
}

$('#create_account').submit(function(e){
    e.preventDefault();
    var myform = e.target;
    var data = new FormData(myform);
    /*for(var key of data.keys()){
        console.log(key,data.get(key))
    }*/
    //console.log("Created FormData, " + [...data.keys()].length + " keys in data");

    $.ajax({
        url:'admin/alumni_signup.php',
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            console.log("Response " + resp)
            if(resp == 1){
                location.replace('index.php')
            }else{
                $('#msg').html('<div class="alert alert-danger">email already exist.</div>')
                //end_load()
            }
        }
    })
})
</script>