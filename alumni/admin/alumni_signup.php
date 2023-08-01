<?php
     $host = "127.0.0.1";
     $username = "root";
     $pass = "";
     $conn = mysqli_connect($host, $username, $pass, "alumni_db");
     if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    error_log(print_r("Inside",TRUE));
    extract($_POST);
    $data = " firstname = '$firstname' ";
    $data .= ", lastname = '$lastname' ";
    $data .= ", gender = '$gender' ";
    $data .= ", rollno = '$rollnumber' ";
    $data .= ", graduateyear = ".date('Y',strtotime('$gradyear'));
    $data .= ", email = '$email' ";
    $data .= ", mobilenumber = '$mnumber' ";
    $data .= ", department = '$department' ";
    $data .= ", higheredu = '$masters' ";
    $data .= ", city = '$currcity' ";
    $data .= ", country = '$currcountry' ";
    $data .= ", status = '$currstatus' ";
    
    if($_FILES['profilepic']['tmp_name'] != ''){
        $fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['profilepic']['name'];
        $move = move_uploaded_file($_FILES['profilepic']['tmp_name'],'assets/images/'. $fname);
        $data .= ", profilepic = '/assets/images/".$fname."'";
    }
    if($_FILES['heproof']['tmp_name'] != ''){
        $fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['heproof']['name'];
        $move = move_uploaded_file($_FILES['heproof']['tmp_name'],'assets/proofs/'. $fname);
        $data .= ", h_proof = '/assets/proofs/".$fname."'";
    }
    if($_FILES['stuproof']['tmp_name'] != ''){
        $fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['stuproof']['name'];
        $move = move_uploaded_file($_FILES['stuproof']['tmp_name'],'assets/proofs/'. $fname);
        $data .= ", s_proof = '/assets/proofs/".$fname."'";
    }
    if($_FILES['epproof']['tmp_name'] != ''){
        $fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['epproof']['name'];
        $move = move_uploaded_file($_FILES['epproof']['tmp_name'],'assets/proofs/'. $fname);
        $data .= ", ep_proof = '/assets/proofs/".$fname."'";
    }
    if($_FILES['cpproof']['tmp_name'] != ''){
        $fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['cpproof']['name'];
        $move = move_uploaded_file($_FILES['cpproof']['tmp_name'],'assets/proofs/'. $fname);
        $data .= ", cp_proof = '/assets/proofs/".$fname."'";
    }
    
    if($heuniv != ''){
        $data .= ", h_univ = '$heuniv' ";
    }	
    if($helocation != ''){
        $data .= ", h_location = '$helocation' ";
    }	
    if($hedegree != ''){
        $data .= ", h_degree = '$hedegree' ";
    }	
    if($heyear != ''){
        $data .= ", h_year = ".date('Y',strtotime('$heyear'));
    }	
    if($wemployer != ''){
        $data .= ", w_employer = '$wemployer' ";
    }	
    if($wlocation != ''){
        $data .= ", w_location = '$wlocation' ";
    }	
    if($wdesignation != ''){
        $data .= ", w_designation = '$wdesignation' ";
    }	
    if($wsdate != ''){
        $data .= ", w_start = ".date('Y-m-d',strtotime('$wsdate'));
    }
    if($wedate != ''){
        $data .= ", w_end = ".date('Y-m-d',strtotime('$wedate'));
    }
    if($stuniv != ''){
        $data .= ", s_univ = '$stuniv' ";
    }	
    if($stlocation != ''){
        $data .= ", s_location = '$stlocation' ";
    }	
    if($stucourse != ''){
        $data .= ", s_course = '$stucourse' ";
    }	
    if($stsdate != ''){
        $data .= ", s_start = ".date('Y-m-d',strtotime('$stsdate')) ;
    }
    if($stedate != ''){
        $data .= ", s_end = ".date('Y-m-d',strtotime('$stedate')) ;
    }
    if($otheroption != ''){
        $data .= ", status_other = '$otheroption' ";
    }
    if($eplocation != ''){
        $data .= ", ep_company = '$eplocation' ";
    }	
    if($eplocation != ''){
        $data .= ", ep_location = '$eplocation' ";
    }	
    if($epdesignation != ''){
        $data .= ", ep_designation = '$epdesignation' ";
    }	
    if($epsdate != ''){
        $data .= ", ep_start = ".date('Y-m-d',strtotime('$epsdate')) ;
    }
    if($epcin != ''){
        $data .= ", ep_cin = '$epcin' ";
    }
    if($cpoption != ''){
        $data .= ", cp_option = '$cpoption' ";
    }	
    if($cpdate != ''){
        $data .= ", cp_date = ".date('Y-m-d',strtotime('$cpdate')) ;
    }
    if($otcomments != ''){
        $data .= ", other_other = '$otcomments' ";
    }

    $sql = "INSERT INTO alumnus_bio set ".$data;
    $save_alumni = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($save_alumni){
        echo 1;
    }
    else{
        echo 2;
    }
    
?>