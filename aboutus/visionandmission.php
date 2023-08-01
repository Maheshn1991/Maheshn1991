<?php 
include '../init.php';


function make_query()
{
 $query = file_get_contents('assets/slides.json');
 $result = json_decode($query);
 return $result;
}

function make_slide_indicators()
{
 $result = make_query();
 $output = ''; 
 foreach($result as $key => $value) 
 {
    $output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.count($result).'"></li>';
 }
 return $output;
}

function make_slides()
{
 $output = '';
 $count = 0;
 $result = make_query();
 $output .= '<div class="carousel-item active">';
$output .= '<img class="img1" src="assets/banner/'.$result[0]->banner_image.'" class="d-block w-100" style="height:350px;" alt="Slider Image" />
        </div>';
 for($count=1;$count<sizeof($result);$count++) 
 {
    $output .= '<div class="carousel-item">';
    $output .= '<img class="img1" src="assets/banner/'.$result[$count]->banner_image.'" class="d-block w-100" style="height:350px;" alt="Slider Image" />
        </div>';
 }
 return $output;
}

?>
<?php 
$active = "aboutus";
include ROOT_DIR .  '/common/header.php'; ?>

<!--

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php echo make_slide_indicators(); ?>
    </ol>
    <div class="carousel-inner">
      <!-- 360 image 
    <style>
            .embed360 {
                height: 350px;
                max-width: 700px;
            }
    </style>
    <center>
        <div class="embed360" data-rotation="0 -90 -10">
            <img src="<?php echo ROOT_URL .  '/aboutus/assets/Canteen 360 View.jpg'; ?>">
        </div>
    </center>
    <script>
         embed360('.embed360');
    </script>
          -->
          
<!--
          <?php echo make_slides(); ?>
          
       
    </div>
    <a  class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a  class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
 -->

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

    <style>
    #panorama {
        width: max-width;
        height: 300px;
    }
    </style>

 <style>
   .jumbotron{
     margin:30px;
     padding:0px;
     border-radius:5px;
     overflow:hidden;
     background-color:transprent;
   }

   .imgTest {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 80px;
      height:60px;
      margin: auto;
      transform: translateY(100%);
}

    

.imgTest:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

.thumbnails{
  width:100%;
  text-align: center; /*handles the horizontal centering*/
}

</style>
   
<div class="jumbotron">
    <div class="row">
        <div class="col-sm-11">
            <div  id="panorama"></div>
        </div>
        <div class="col-sm-1">
            <div class="thumbnails">
            <img class="imgTest" src="<?php echo ROOT_URL .  '/aboutus/assets/banner/Campus 360 View.jpg'; ?>" onclick="test('<?php echo ROOT_URL .  '/aboutus/assets/banner/Campus 360 View.jpg'; ?>');" alt="Campus" >
            <img class="imgTest" src="<?php echo ROOT_URL .  '/aboutus/assets/banner/Canteen 360 View.jpg'; ?>" onclick="test('<?php echo ROOT_URL .  '/aboutus/assets/banner/Canteen 360 View.jpg'; ?>');" alt="Canteen" >
            <img class="imgTest" src="<?php echo ROOT_URL .  '/aboutus/assets/banner/Aerial shot.jpg'; ?>" onclick="test('<?php echo ROOT_URL .  '/aboutus/assets/banner/Aerial shot.jpg'; ?>');" alt="Aerial" >
            </div>
        </div>
    </div>
    <p style="text-align:right;font-size:100%;font-family:verdana;padding-right:15px"> Photos by : <em>Traces of Lenses club</em></p>
</div>

<script>
let viewer=pannellum.viewer('panorama', {
    "type": "equirectangular",
    "panorama": "<?php echo ROOT_URL .  '/aboutus/assets/banner/Aerial shot.jpg'; ?>",
    "autoRotate": -2,
    "autoLoad": true,
    "title": "",
    "autoRotateInactivityDelay":1000,
    "hfov": 120
});

function test(image){
  let renderer = viewer.getRenderer();
let config = viewer.getConfig();

// create image
let img = new Image();

img.onload = function(){
    console.log("image loaded!");
    let params = {};
    if (config.horizonPitch !== undefined)
        params.horizonPitch = config.horizonPitch * Math.PI / 180;
    if (config.horizonRoll !== undefined)
        params.horizonRoll = config.horizonRoll * Math.PI / 180;
    if (config.backgroundColor !== undefined)
        params.backgroundColor = config.backgroundColor;

        params.title = "College Campus";

    function renderInitCallback() {
        console.log("rendering image");
        params.title = "College Campus";
        console.log(params.title);
    }

    renderer.init(img, config.type, config.dynamic, config.haov * Math.PI / 180, config.vaov * Math.PI / 180, config.vOffset * Math.PI / 180, renderInitCallback, params);
    renderer.resize();
};

img.src = image;
}

</script>

 <style>


.accordion .card:not(:first-of-type) .card-header:first-child {
    border-radius: 0;
}

.card-header :hover {
  background:teal !important;
  color:#fff !important;
}

.card-header {
    padding: 0;
    border-left: 3px solid #14777f;
    border-bottom: none;
}

.bestpracticeskmit div{
color: teal ;
font-weight: bold;cursor:pointer;
padding: 5px;
}

.bestpracticeskmit a{
color: teal ;
font-weight: bold;cursor:pointer;
}

.bestpracticeskmit {
text-align:center;
float:left;    
margin: 4px;
float: initial!important;
}
.bestpracticeskmit div:hover a{
background:teal !important;
color:#fff !important;cursor:pointer;
}
.bestpracticeskmit:hover,
.bestpracticeskmit .first,.bestpracticeskmit .first a{
background:teal !important;
color:#fff !important;cursor:pointer;
}

.button:hover {
  background-color: #14777F;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 0px 0px;
  cursor: pointer;
  font-weight: bold;
  border: 3px solid !important;
  width:100px;
}
.button {
  background-color: white;
  font-weight: bold;
  color: #14777F;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 0px 0px;
  cursor: pointer;
  border: 3px solid !important;
  width:100px;
}

.newsandbulletins.nav-pills a.active {
    color: #fff!important;
    background: teal!important;
    border-radius: 0!important;
	font-weight: 700!important;
}
.newsandbulletins.nav-pills a.active.show {
    color: #fff!important;
    background: teal!important;
	text-decoration: none;
    border-radius: 0!important;
	font-weight: 700!important;
}

.newsandbulletins.nav-pills a{
    color: teal!important;
    border: 1px solid teal;
	text-decoration: none;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}


</style>      
<div class="background">
  <!-- app-aboutus -->
<section id="about-us">
<div class="container" >
    <header  class="section-header">
      <h4 class="blue-clr bold">About Us</h4>
    </header>
</div>
<div class="container">
    <ul class="nav nav-pills newsandbulletins">
        <li class="border"><a data-toggle="tab" href="#aboutus" class="">About Us</b></a></li>
        <li class="border"><a data-toggle="tab" href="#visionandmission" class="active show">Vision and Mission</b></a></li>
        <li class="border"><a data-toggle="tab" href="#qualitypolicy" class="">Quality Policy</b></a></li>
        <li class="border"><a data-toggle="tab" href="#corevalues" class="">Core Values</b></a></li>
        <li class="border"><a data-toggle="tab" href="#achievements" class="">Achievements (Accrediations) </b></a></li>
    </ul>
    <div class="tab-content" >
    <!-- aboutus -->
		  <div id="aboutus" class="tab-pane fade box">
            <p style="text-align:justify;font-size:100%;font-family:verdana;">Established in 2007, KMIT is affiliated to Jawaharlal Nehru Technological University Hyderabad, and is approved by the All India Council for Technical Education (AICTE), New Delhi. KMIT strongly believes in encouraging learner autonomy which the administration and Faculty facilitate by building a learner centric environment. Also, continuous efforts are made towards modernising and upgrading its resources and teaching-learning processes in tandem with the latest technological trends.</p>
            <p style="text-align:justify;font-size:100%;font-family:verdana;">KMIT has the distinctive advantage of being located in the heart of the city i.e. Narayanguda. This allows an ease of connectivity to every part of Hyderabad what with the metro station, bus stop situated very close to the college.  </p>
	    </div>
      <!-- end of aboutus -->
      <!-- vision and mission -->
	    <div id="visionandmission" class="tab-pane fade show active box">
            <h6 class="blue-clr bold" style="font-size:1rem;"> Vision : </h6>
                <ul type="circle">
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  To be the fountain head in producing highly skilled, globally competent engineers.</p></li>
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  Producing quality graduates trained in the latest software technologies and related tools and striving to make India a world leader in software products and services.</p></li>
                </ul>
            <h6 class="blue-clr bold" style="font-size:1rem;"> Mission : </h6>
                <ul type="circle"> 
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  To provide a learning environment that inculcates problem solving skills, professional, ethical responsibilities, lifelong learning through multi modal platforms and prepare students to become successful professionals.</p></li>
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  To establish industry institute Interaction to make students ready for the industry.</p></li>
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  To provide exposure to students on latest hardware and software tools. </p></li>
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  To promote research based projects/activities in the emerging areas of technology convergence. </p></li>
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  To encourage and enable students to not merely seek jobs from the industry but also to create new enterprises.  </p></li>
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  To induce a spirit of nationalism which will enable the student to develop, understand lndia's challenges and to encourage them to develop effective solutions. </p></li>
                    <li><p style="text-align:justify;font-size:100%;font-family:verdana;">  To support the faculty to accelerate their learning curve to deliver excellent service to students. </p></li>
                </ul>
		  </div>	
      <!-- end of vision and mission -->
      <!-- qualitypolicy -->		  
      <div id="qualitypolicy" class="tab-pane fade box">
            <p style="text-align:justify;font-size:100%;font-family:verdana;"> KMIT is committed to achieve global excellence and standards in teaching, research, consulting and placements by providing conducive environment in the fields of computer sciences and information technology, with professional and global outlook thereby ensuring continuous advancement.</p>
	    </div>
      <!-- end of qualitypolicy -->
      <!-- corevalues -->
	    <div id="corevalues" class="tab-pane fade box">
            <p style="text-align:justify;font-size:100%;font-family:verdana;">A cynic is one who knows the price of everything but the value of nothing.”
                    Hence it should be a constant endeavour among institutional and organizational
                    communities to nurture what can be treasured as core values.
            </p>
            <p style="text-align:justify;font-size:100%;font-family:verdana;">
                    A few carefully assorted core values are assiduously set into the general
                    ambience of KMIT and aligned to its mission and vision and reflected in the
                    general development of curricular and personal growth of Faculty, Staff and
                    students. Here are some of the envisioned core values which not only uphold the
                    ideals of the College but also connect with the National spirit making Higher
                    Educational Institution a temple of learning and knowledge.
            </p>
            <button class="button">
                <div ><a data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/aboutus/assets/core_values.pdf'; ?>" ><span>View</span></a></div>
            </button>
	    </div>
      <!-- end of corevalues -->
      <!-- achievements -->
      <div id="achievements" class="tab-pane fade box">
        <div class="box card-header">
                <a class="btn btn-link blue-clr bold btn-block text-left" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/aboutus/assets/Naac.pdf'; ?>">
                  NAAC Accrediation
                </a>
              </div>
            <div class="box card-header">
              <a class="btn btn-link blue-clr bold btn-block text-left" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/aboutus/assets/IICRatingCertificate.pdf'; ?>">
                Institution Innovation Council (IIC)
              </a>
            </div>
            <div class= "box card-header">
              <a class="btn btn-link blue-clr bold btn-block text-left" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/aboutus/assets/IT_NBA_Accredition_Approval.pdf'; ?>">
                NBA Accreditation – IT Department
              </a>
            </div>
            <div class="box card-header">
              <a class="btn btn-link blue-clr bold btn-block text-left" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/aboutus/assets/AISHE_2018-19.pdf'; ?>">
                AISHE Certificate 2018-19
              </a>
            </div>
            <div class="box card-header">
              <a class="btn btn-link blue-clr bold btn-block text-left" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/aboutus/assets/aciteapproval.pdf'; ?>">
                AICTE Recognition
              </a>
            </div>
            <div class="box card-header">
            <a class="btn btn-link blue-clr bold btn-block text-left" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/aboutus/assets/jntuaffiliation.pdf'; ?>">
              JNTUH Affiliation
            </a>
          </div>
	    </div>	
      <!-- end of achievements -->	
    </div>
</div>
</section>
<!-- end of app-aboutus -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:100%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Academic Calendar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="results" class="hidden"></div>
        <div id="pdf"></div>
      </div>
    </div>
  </div>
</div>


</div>

<script>
$('#exampleModal').on('show.bs.modal', function (event) {

  var options = {
	pdfOpenParams: {
    pagemode:"none",
		view: "FitV",
		page: 1
	},
	forcePDFJS: true,
	PDFJS_URL: "<?php echo ROOT_URL .  '/pdfjs/web/viewer.html'; ?>"
};


  var button = $(event.relatedTarget) // Button that triggered the modal
  var pdf = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  console.log(pdf);
  var n = pdf.lastIndexOf("/");
  var res = pdf.substring(n+1);
  modal.find('.modal-title').text(res)

  var myPDF = PDFObject.embed(pdf, "#pdf", options);
  var el = document.querySelector("#results");
  el.setAttribute("class", (myPDF) ? "success" : "fail");
  el.innerHTML = (myPDF) ? "" : "Uh-oh, the embed didn't work.";
})
</script>
 
<?php include ROOT_DIR .  '/common/footer.php'; ?>