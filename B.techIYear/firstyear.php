<?php 
include '../init.php';
$active="home";
include ROOT_DIR .  '/common/header.php'; ?>
<link rel="stylesheet" href="<?php echo ROOT_URL .'/css/style_anuradha.css'; ?>" />

<style>

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
    font-weight: 700!important;
}


.newsandbulletins.nav-pills a:hover{
    color: white!important;
    border: 1px solid teal;
    background-color: #14777F;
	text-decoration: none;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    font-weight: 700!important;
}



.button:hover {
  background-color: #14777F;
  color: white;
  padding: 5px 5px;
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
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 0px 0px;
  cursor: pointer;
  border: 3px solid !important;
  width:100px;
}


</style>
<div class="background">
<!-- First Year  -->
<section id="Sponsored Research">
<div class="container" >
    <header  class="section-header">
      <h4 class="blue-clr bold">First Year </h4>
    </header>
</div>
<div class="container">
  <div style="padding:0px;">
    <ul class="nav nav-pills newsandbulletins">
        <li class="border"><a data-toggle="tab" href="#AcademicRegulations" class="active show">Academic Regulations</a></li>
        <li class="border"><a href="#academiccalender"  data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/B.techIYear/Academic Calendar 2020-21 for B.Tech and B.Pharm I Year I & II Semesters.pdf'; ?>">Academic Calendar</a></li>
        <li class="border"><a href="#CSESyllabus"  data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/B.techIYear/R18 B.Tech I YEAR(CSE & IT).pdf'; ?>">CSE & IT Syllabus</a></li>  
        <li class="border"><a href="#CSE(AIML)Syllabus" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/B.techIYear/R18 B.Tech.CSE(AIML) I Year.pdf'; ?>">CSE (AIML) Syllabus </a></li>
        <li class="border"><a href="#CSE(Data Science)Syllabus"  data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/B.techIYear/R18 B.Tech.CSE(DataScience) I Year.pdf'; ?>">CSE (Data Science) Syllabus</a></li>
        <li class="border"><a href="#TimeTables"  data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/B.techIYear/B.Tech I Year Timetable 2021-22 SEM1.pdf'; ?>">TimeTables</a></li>
    </ul>                 
	<div class="tab-content" >
		<div id="AcademicRegulations" class="tab-pane fade show active">
			<div class="box">
                <p  style="text-align:justify;font-size:100%;font-family:verdana;">Jawaharlal Nehru Technological University Hyderabad (JNTUH) offers a 4-year (8
                semesters) Bachelor of Technology (B.Tech.) degree programme, under Choice Based
                Credit System (CBCS) at its non-autonomous constituent and affiliated colleges with
                effect from the academic year 2018-19.
                </p>

                <p  style="text-align:justify;font-size:100%;font-family:verdana;">Admission to the under graduate (UG) programme shall be made either on the basis of
                the merit rank obtained by the qualified student in entrance test conducted by the
                Telangana State Government (EAMCET) or the University or on the basis of any other
                order of merit approved by the University, subject to reservations as prescribed by the
                government from time to time.
                </p>

                <p  style="text-align:justify;font-size:100%;font-family:verdana;">A student after securing admission shall complete the B.Tech. programme in a minimum
                period of four academic years (8 semesters), and a maximum period of eight academic
                years (16 semesters) starting from the date of commencement of first year first semester,
                failing which student shall forfeit seat in B.Tech course. Each student shall secure 160
                credits (with CGPA ≥ 5) required for the completion of the under graduate programme
                and award of the B.Tech. degree.
                </p>

                <p  style="text-align:justify;font-size:100%;font-family:verdana;">UGC/ AICTE specified definitions/ descriptions are adopted appropriately for various
                terms and abbreviations used in these academic regulations/ norms, which are listed
                below.
                </p>

                <button class="button">
                <div ><a data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/B.techIYear/R18B.TECHAcademicRegulationsforAY2020_21.pdf'; ?>" ><span>View</span></a></div>
                </button>

            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:100%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FirstYear</h5>
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
</section>
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
	PDFJS_URL: "<?php echo ROOT_URL .  '/pdfjs/web/viewer_with_download.html'; ?>"
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
