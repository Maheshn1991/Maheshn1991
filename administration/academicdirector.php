<?php 
include '../init.php';
$active="administration";
include ROOT_DIR .  '/common/header.php'; ?>
<style>
.blockquote {
    padding: 60px 80px 40px;
    position: relative;
}
.blockquote p {
    font-family: "Utopia-italic";
    font-size: 35px;
    font-weight: 700px;
    text-align: center;
}
.blockquote:before {
  position: absolute;
  font-family: 'FontAwesome';
  top: 0;
  
  content:"\f10d";
  font-size: 200px;
  color: rgba(0,0,0,0.1);
   
}

.blockquote::after {
    content: "";
    top: 20px;
    left: 50%;
    margin-left: -100px;
    position: absolute;
    border-bottom: 3px solid #bf0024;
    height: 3px;
    width: 200px;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic);
.otro-blockquote{
  font-size: 1.2em;
  width:100%;
  font-family:Open Sans;
  font-style:italic;
  text-align:justify;
  color: #555555;
  padding:1.2em 30px 1.2em 75px;
  border-left:8px solid #78C0A8 ;
  line-height:1.6;
  position: relative;
  background:#EDEDED;
}

.otro-blockquote::before{
  font-family:Arial;
  content: "\201C";
  color:#78C0A8;
  font-size:4em;
  position: absolute;
  left: 10px;
  top:-10px;
}

.otro-blockquote::after{
  content: '';
}

.otro-blockquote span{
  display:block;
  color:#333333;
  font-style: normal;
  font-weight: bold;
  margin-top:1em;
}

.container1 {
  position: relative;
  max-width: auto; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.container1 .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 5px; /* Some padding */
}

</style>

<div class="background">

<!-- <app-about-principal>-->
<section>
  <div class="container" >
    <header  class="section-header">
      <h4 class="blue-clr bold">Director Academic</h4>
    </header>
     
  <div class="row">
      <div class="col-sm-3">
      <div class="container1">
        <img src="<?php echo ROOT_URL .'/assets/deepaganu.png'; ?>" alt="Academic Director's image" width="100%" img-align="center" >  
        <div class="content">
            <h5  style="font-family:timesnewroman;font-size:140%;color:white;text-align:center;" >Mrs. Deepa Ganu</h5>
            <h5  style="font-family:timesnewroman;font-size:120%;color:white;text-align:center;" >Director Academic</h6>
        </div>
        </div>  
      </div>
      <!-- about-principal-->
      <div class="col-sm-9">
        <header  class="section-header">
        <h4 class="blue-clr bold">About Deepa Ganu </h4>
        </header>
        <p style="text-align:justify;font-size:100%;font-family:verdana;">
        Deepa Ganu, the charismatic Academic Director of Keshav Memorial Institute of Technology,  has always been a proactive person and she has constructively involved herself in all the activities of the college. She graduated B. Tech in ECE from Pune University and M.Tech from JNTU Hyderabad. She consistently displays a fervent zeal in the academic progress of the students and the staff.
    
    <br><br>She strongly believes in herself, and has immense trust in her mentors, her peers and her team. She took up a mission to ignite the young minds and nurture them with the potential to reach greater horizons. She is a student-friendly person and her forte is to identify their technical edge and channelize their skills in the right direction with her valuable guidance. She trained and shared her expertise with thousands of students who could excel and compete on various national and international platforms like Microsoft Imagine Cup, IBM’s The Great Mind Challenge, Google Summer of Code, and Amazon Campus Mentorship Series. She conducted various corporate training programmes for reputed campuses like Verizon, HP, and CA Global and for government agencies like DRDL and RCI.
    
    <br><br>She dares to dream; works smart; strives for excellence; and enjoys every step of her journey all the way which made her scale greater heights. She authored a book titled "JAVA spoken Tutorials", an IIT Bombay initiative. Big names in the corporate world like IBM, Google, and Virtusa bestowed her with the prestigious titles, "Best Mentor, and "Acharya" for her unprecedented contribution to pedagogy. She has been an inspiration and role model in the field of education and that made her the recipient of the prestigious "Drona" Award.
    </p>
        <!-- about-principal message-->
        <header  class="section-header">
        <h4 class="blue-clr bold">Message</h4>
        </header>
        <blockquote class="otro-blockquote">
        Welcome to KMIT, the revered sanctuary of learning. With a proven track record of ace placements and students achieving stellar results in academics, we would like to invite you to explore the learning opportunities here and pursue a disciplined learning path that will lead to a beautiful career ahead. The campus, its instructors await with open arms to nourish your talents and witness your unstoppable success, all of which will be written in golden letters in the history of KMIT     
         <span>Mrs. Deepa Ganu</span>
        </blockquote>
      </div>
    <div class="col-sm-1"></div>
  </div>
<div class="col-sm-2"></div>
</div>
</section>
<!-- <end of app-about-principal>-->
  
</div>

  <?php include ROOT_DIR .  '/common/footer.php'; ?>