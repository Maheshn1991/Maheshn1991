<?php 
include '../init.php';
$active="administration";
include ROOT_DIR .  '/common/header.php'; ?>
<link rel="stylesheet" href="<?php echo ROOT_URL .'/css/style_anuradha.css'; ?>" />
<div class="background">
  <!-- Academic Core Committee -->
<section id="Academic Core Committee">
<div class="container" >
    <header  class="section-header">
      <h4 class="blue-clr bold">Academic Core Committee </h4>
    </header>
</div>
<div class="container">
<p style="text-align:justify;font-size:100%;font-family:verdana;" class="blue-clr bold">Key Functions of Academic Core Committee :</p>
<ul type="circle">
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">Subjects are allocated based on the area of expertise and their teaching experience. The faculty members are encouraged to attend refresher courses.</p></li>
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">Gap analysis is performed and appropriate measures are taken.</p></li>
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">Strategy to achieve maximum outcome for the course is devised.</p></li>
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">Course delivery is continuously monitored.</p></li>
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">Periodic feedback is considered for taking corrective measures.</p></li>
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">Student academic reviews are monitored.</p></li>
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">The Academic core committee then follows the process used to identify extent of compliance of the university curriculum for attaining the PO’s and PSO’s. The process is broadly divided into 2 categories as mentioned below and also attributes of NBA like PO’s, PSO’s, PEO’s, CO’s etc are considered.</p></li>
<ul>
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">Direct Assessment</p></li>
<li><p style="text-align:justify;font-size:100%;font-family:verdana;">Indirect Assessment</p></li>
</ul>
</ul>
<p style="text-align:justify;font-size:100%;font-family:verdana;">Members of the Academic Core Committee for the year 2020-21 are as follows:</p>
    <div class="table-responsive">
    <div class="box">
    <?php
    /*Fetching JSON file content using php file_get_contents method*/
        $str_d = file_get_contents("committees.json");
        $d = json_decode($str_d, true);
 
        /*Initializing temp variable to design table dynamically*/

        $temp1 = "<table class='table table-striped custom'>";
 
        /*Defining table Column headers depending upon JSON records*/
        $temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
        $temp1 .= "<th>Name of the Member </th>";
        $temp1 .= "<th>Department </th>";
        $temp1 .= "<th>Designation</th>";
 
        /*Dynamically generating rows & columns*/
        for($i = 0; $i < sizeof($d["Academic-Core_Committee"]); $i++)
        {
            $temp1 .= "<tr style='text-align:justify;font-size:100%;font-family:verdana;'>";
            $temp1 .= "<td>" . $d["Academic-Core_Committee"][$i]["id"] . "</td>";
            $temp1 .= "<td>" . $d["Academic-Core_Committee"][$i]["MemberName"] . "</td>";
            $temp1 .= "<td>" . $d["Academic-Core_Committee"][$i]["Department"] . "</td>";
            $temp1 .= "<td>" . $d["Academic-Core_Committee"][$i]["Designation"] . "</td>";
            $temp1 .= "</tr>";
        }
 
        /*End tag of table*/
        $temp1 .= "</table>";
                    
        /*Printing temp variable which holds table*/
        echo $temp1;
    ?>
    </div>
    </div>
</div>
</section>

      </div>
<?php include ROOT_DIR .  '/common/footer.php'; ?>