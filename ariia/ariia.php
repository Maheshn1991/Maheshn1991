<?php 
include '../init.php';
$active="ariia";
include ROOT_DIR .  '/common/header.php'; ?>

<style>
.container1 {
  position: relative;
  width: 100%;
  height: 85%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle1 {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container1:hover .overlay1 {
  opacity: 0.3;
}

.container1:hover .middle1 {
  opacity: 1;
}

.text {
  background-color: #3c434b;
  opacity: 0.3;
  color: white;
  font-size: 50px;
  padding: 16px 32px;
}

.container1 {
  position: relative;
  max-width: auto; /* Maximum width */
  margin: 0 auto; /* Center it */
}

</style>

<div class="background">

 <!-- <app-about-ariia>-->
<section  id="about-hod">
    <div class="container">
    <header  class="section-header">
        <h4 class="blue-clr bold">ATAL Ranking of Institutions on Innovation Achievements</h4>
		</header>
       
        <div class="row">

  <!-- about ariia-2021 -->
  <div  class="col-md-3">
                <div class="container1">
                    <a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .'/ariia/ariia_2021.pdf'; ?>">
                        <img src="<?php echo ROOT_URL .'/ariia/ariia-2021.jpg'; ?>" alt="ariia-2021" style="width:100%" >
						<div class="programme-col">
						<div class="overlay"></div>
						<img src="<?php echo ROOT_URL .'/assets/plus.png'; ?>" style="height:80px" class="middle">
						</div>
                    </a>
                </div>
            </div>
            <!--close of about ariia-2021 -->
<!-- about ariia-cor -->
  <div  class="col-md-3">
                <div class="container1">
                    <a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="/ariia/ariia-cor.pdf">
                        <img src="/ariia/ariia-CoR.jpg" alt="ariia-cor" style="width:100%" >
						<div class="programme-col">
						<div class="overlay"></div>
						<img src="/assets/plus.png" style="height:80px" class="middle">
						</div>
                    </a>
                </div>
            </div>
            <!--close of about ariia-cor -->
        </div>
    </div>
    <p></p>
</section>
</div>

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

<script>
$('#exampleModal').on('show.bs.modal', function (event) {

  var options = {
	pdfOpenParams: {
		navpanes: 0,
		toolbar: 0,
    pagemode:"none",
		statusbar: 0,
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