 <!-- ##### Header Area Start ##### -->
 <?php
    $page='majorevents';
    $title ='Major Events';
    include 'header.php';
    include 'functions.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_SESSION['user']))
        {
            $event = $_POST['event'];
            register($event);
        }
        else
        {
            redirectlogin();
        }
        
    }
    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area height-auto">
    <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(assets/img/grpdance.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Destival <span>Destival</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Group Dance Competition</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Destival</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(musica/img/bg-img/9.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Kairos <span>Kairos</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Fashion Show</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Kairos</h2>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(musica/img/bg-img/bg-3.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Requiem <span>Requiem</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">War of Bands</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Requiem</h2>
            </div>
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(musica/img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Jubin Nautiyal<span>Jubin Nautiyal</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms"></p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Jubin Nautiyal</h2>
            </div>
        </div>
        <div class="bg-gradients"></div>

        <!-- Slide Down -->
        <div class="slide-down" id="scrollDown">
            <h6>Slide Down</h6>
            <div class="line"></div>
        </div>
    </section>
        <!-- bg gradients -->
        
    <!-- ##### Hero Area End ##### -->

    
    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100" id="events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Major Events</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Upcoming Shows Content -->
                    <div class="upcoming-shows-content">

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <!-- <h2>18 <span>October</span></h2> -->
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="musica/img/bg-img/s1.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6><button class="event_btn" id="myBtn2" onclick="openmod('mybtn2','myModal2','1')">Destival</button></h6>
                                    <p>Group Dance Competition</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <!-- <p>At the Castle</p> -->
                            </div>
                            <div class="shows-time">
                                <!-- <p>20:30</p> -->
                            </div>
                            <div class="buy-tickets">
                            <form action="" method="POST">
                               <input type="hidden" name="event" value="Destival"/>
                               <input type="submit" class = "btn musica-btn" value="Register">
                            </form>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <!-- <h2>19 <span>October</span></h2> -->
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="musica/img/bg-img/s2.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6><button class="event_btn" id="myBtn1" onclick="openmod('mybtn1','myModal1','0')">Kairos</button></h6>
                                    <p>Fashion Show</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <!-- <p>Main Stadium</p> -->
                            </div>
                            <div class="shows-time">
                                <!-- <p>21:30</p> -->
                            </div>
                            <div class="buy-tickets">
                            <form action="" method="POST">
                               <input type="hidden" name="event" value="Kairos"/>
                               <input type="submit" class = "btn musica-btn" value="Register">
                            </form>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <!-- <h2>20 <span>October</span></h2> -->
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="musica/img/bg-img/s3.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6><button class="event_btn" id="myBtn3" onclick="openmod('mybtn3','myModal3','2')">Requiem</button></h6>
                                    <p>War of Bands</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <!-- <p>Sunflower Arena</p> -->
                            </div>
                            <div class="shows-time">
                                <!-- <p>20:30</p> -->
                            </div>
                            <div class="buy-tickets">
                            <form action="" method="POST">
                               <input type="hidden" name="event" value="WarOfBands"/>
                               <input type="submit" class = "btn musica-btn" value="Register">
                            </form>
                            </div>
                        </div>

                        <!-- Single Upcoming Shows -->
                        <!-- <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>30 <span>July</span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="musica/img/bg-img/s4.jpg" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>Electric castle Festival</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Castle</p>
                            </div>
                            <div class="shows-time">
                                <p>20:30</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="#" class="btn musica-btn">Register</a>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Player Area Start ##### -->
    <div class="music-player-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="music-player-slides owl-carousel">

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="musica/img/bg-img/mp1.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Jubin Nautiyal</h5>
                                    <p>Zindagi Kuch Toh Bata(Reprise)</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="musica/audio/z.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="musica/img/bg-img/mp2.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Jubin Nautiyal</h5>
                                    <p>Tu Jo Mila Raabta</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="musica/audio/t.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="musica/img/bg-img/mp3.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Jubin Nautiyal</h5>
                                    <p>Humnava Mere</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="musica/audio/h.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                        <!-- Single Music Player -->
                        <div class="single-music-player">
                            <img src="musica/img/bg-img/mp4.jpg" alt="">

                            <div class="music-info d-flex justify-content-between">
                                <div class="music-text">
                                    <h5>Jubin Nautiyal</h5>
                                    <p>Tum Hi Aana</p>
                                </div>
                                <div class="music-play-icon">
                                    <audio preload="auto" controls>
                                    <source src="musica/audio/tu.mp3">
                                </audio>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Player Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
    <div class="musica-music-artists-area d-flex flex-wrap clearfix">
        <!-- Music Search -->
        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(musica/img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <div class="music-search-content">
            <a href = "events.php"><h2>Events</h2></a>
                <!-- <h4>Search for the best music</h4> -->
            </div>
        </div>

        <!-- Artists Search -->
        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(musica/img/bg-img/bg-1.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Major Artist</h2>
                <h4>Jubin Nautiyal</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->
    <div id="myModal1" class="modal">
<div class="modal-content">
    <div class="modal-header">
      <h2 style="color: white;">Kairos (The Fashion Show)</h2>
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
            <div class="modal-body">
                    <p>
                    The way you camouflage your thoughts about life brings you to the place where nothing is real. So here we introduce you to our theme “MEIGMA”
                    </p>
                      <h3>
                      ‘MEIGMA - THE BLEND OF THOUGHTS’
                      </h3>
                      <p>
                      Here is your chance to experience all the glamour and glory of the spotlight, register now and
                      showcase your panache with ONEIROS’19 Fashion Show!
                      </p>
                      <h3>Contact:</h3>
                          <p><b>Kirti Chaudhary </b>+91 8949205923</p>
                          <p><b>Snehal Aggarwal </b>+91 8708716338</p>
                          <p><b>Sadhvi Anuj Gupta </b>+91 8218033236</p>
                      <h3>Registration Fee:</h3>
                          <ul>
                            <li>Rs.200 per Team Member</li>
                          </ul>
                      <br><h3>Participation:</h3>
                          <p>Team Members 20-25 (including volunteers and 12-15 models)</p>
                
                      <h3>Rules &amp; Regulations:</h3>
                        <p>
                          · Every participant must carry his/her college id and printed registration receipt in absence of which entry shall not be permitted including the faculty members.<br>
                          · The maximum limit of the team is 20-25 which includes volunteers and 12-15 models. Only 4 members of the team along with models will be allowed to stay near stage.<br>
                          · Any team/participant caught using unfair means shall be immediately disqualified.<br>
                          · Any misbehaviour on part of the participants will lead to potential expulsion.<br>
                          · Any gesture/speech/idea that can be perceived as being offensive to any gender, sexual orientation or religious sentiments will lead to immediate disqualification.<br>
                          · Kindly contact specific event coordinators for queries relating to number of participants, multiple entries, use of props, event fee etc.<br>
                          · Judges scoring shall be stand as the final result in all competitions. The decisions of the student council shall be binding in case of any further issues.<br>
                          · Carrying the following items inside the college campus is strictly
                          prohibited <br>&nbsp; and will lead to immediate expulsion and potential
                          legal action: -<br>
                          &nbsp;&nbsp;&nbsp;&nbsp;- Sharp objects, inflammable objects, and/ or any other object that
                          is potentially dangerous.<br>
                          &nbsp;&nbsp;&nbsp;&nbsp;- Beverages with alcoholic content.<br>
                          &nbsp;&nbsp;&nbsp;&nbsp;- Narcotics, drugs, cigarettes or addictive of any sort.<br>
                          · Participants must report 3 hours before the event begins.<br>
                          · Makeup, props and accessories will not be provided by the home team.<br>
                          · 10-12 minutes will be given to each team to complete their round. If team exceeds the time limit, then the particular team shall be disqualified.<br>
                      
                        <h3>Prior to event every participating team should provide us with the following details:</h3>
                        <p>1. Participants list with main coordinator’s contacts. </p>
                        <p>2. Message you are portraying. </p>
                        <p>3. Prelims will be held on 15 October 2019. 2-3 minutes video. </p>

                      <h3>Judging Criteria:</h3>
                        <p>
                          · Choreography <br>
                          · Props Handling <br>
                          · Theme Accuracy <br>
                        </p>
                </div>
    </div>
    
  </div>
</div>

<div id="myModal2" class="modal">
<div class="modal-content">
    <div class="modal-header" >
      <h2 style="color: white;">Destival (Group Dance Festival)</h2>
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
        <p>
        When you dance, your purpose is not to get a certain
place on the dance floor. It is to enjoy each step along
the way." Let's get together to dance under the moon-
ight and reach the stars Get your groove on and cut
the foot loose as the house go head-to head on the
dance floor This year we again bring the chance for you
to draw in a breath and put on your dancing shoes
            <br>
        </p>
        <h3>
            Dance. Breathe. Flaunt. Repeat.
        </h3><br>
        <h3>Contact:</h3>
              <p><b>Neeharika: </b>+91 9972402629</p>
              <p><b>Kaveri Verma: </b>+91 7000545540</p>
              <p><b>Sakshi Rana: </b>+91 8104565609</p>
              <p><b>Devansh Gulati: </b>+91 8237813905</p>
        <h3>Registration Fee:</h3>
              <p>
                <li>Rs.250 per Team Member</li>
                <li>Rs.150 per Team Helper</li>
                <li>No fee for Faculty Member(s)</li>
              </p>
        <h3>Participation:</h3>
              <p>Team limit: 12 to 40 participants <br> + 3 helpers (per team)</p>
        <h3>Rules</h3>
          <h4>Preliminary Video Round:</h4>
            <p>
              · Duration: 3-4 min. <br>
              · Teams have to send their respective videos to destival@outlook.com before 11 th October, 2019
              (Friday), 11:59 PM. <br>
              · In case the video size exceeds the mail limit, then a Google Drive Link of the video must be
              sent. <br>
              · The following details are to be sent along with the Video: <br>
              &nbsp;&nbsp;&nbsp;&nbsp;· Name of college <br>
              &nbsp;&nbsp;&nbsp;&nbsp;· Name of team <br>
              &nbsp;&nbsp;&nbsp;&nbsp;· Name and contact number of the team leader <br>
              &nbsp;&nbsp;&nbsp;&nbsp;· List of names of team members in the video <br>
              &nbsp;&nbsp;&nbsp;&nbsp;· List of names of team members coming for the final round <br>
              · The members that are performing in the Video must also be a part of the final team. <br>
              · Music tracks for preliminary and final round may be different but the routine performed in the
              prelims video<br>&nbsp; should necessarily be a part of the Final Routine. <br>
              · Teams can choose any form of dance and music for their performance <br>&nbsp; (following the theme
              is
              not compulsory). <br>
              · Competition is reserved only for current college students. <br>&nbsp; (Professional dancers or
              students
              from other colleges are not allowed to represent a college) <br>
              · Late entries will not be accepted under any circumstances. <br>
              · Decisions of the Judges will be final and binding. <br>
              · Disregard of any rule will not be tolerated and will lead to disqualification. <br>
            </p>
          <h4>Final Round:</h4>
            <p>
              · Duration: 8 to 10 min (10 min max.). <br>
              · Team limit: 12 to 40 participants + 3 helpers (per team) <br>
              · Minimum number of participants on stage at any instance during performance: 5 members <br>
              · Maximum number of members on stage during performance: 25 members <br>
              · Multiple Teams from a college are allowed. <br>
              · Misbehavior or indecency with any members of committee or other teams will not be
              tolerated. <br>
              · Misbehavior or arguing with the Judges will result in disqualification of team. <br>
              · Teams can choose any form of dance and music for their performance (following the theme is
              not compulsory). <br>
              · Teams are requested to bring their music tracks in at least three different devices to avoid
              technical disturbances, <br>&nbsp; Ex: - Pen drives, mobile phones (with proper required cables/cords),
              etc. <br>
              · Entry inside the college premises will not be allowed without respective valid college/faculty
              ID cards. <br>
              · It is compulsory for team members along with their helpers to wear their college IDs at all
              time
              when inside college premises. <br>
              · Disregard of any rule will not be tolerated and will lead to negative marking and maybe even
              disqualification. <br>
              · Decisions of the Judges will be final and binding. <br>
              · Registration Fees will not be returned under any circumstances. <br>
              · Teams must mail the list of props that they are going to use during performance, at
              destival@oneiros.in, five days prior to the event. <br>
              · In case of any unavoidable situation, the decision of the judge &amp; the Organizing Committee
              will be final and binding. <br>
              · Props are allowed but no additional marks will be given for their usage. <br>
              · Exceeding time limit will lead to negative marking. <br>
              · All the participating teams must take care of their belongings, <br>&nbsp; the Organizing team
              will not
              be
              held responsible, if anything goes missing. <br>
              · A team won’t be allowed to view the performance of the other groups. <br>
              · Late entries will not be accepted under any circumstances. <br>
            </p>
          <h3>Rules for using Props:</h3>
            <p>
              · Props which can dirty or damage the stage will not be allowed. <br>&nbsp; Ex: - water, colored
              powder,
              glitter, confetti, sparks, props involving fire, etc. <br>
              · Sharp objects or any object that require professional attention are not allowed. <br>
              · Use of any such props will result in negative marking and might also result in
              disqualification. <br>
              · Teams must mail the list of props that they are going to use during performance, at
              destival@outlook.com, five days prior to the event. <br>
            </p>
            <h3>Judging Criteria:</h3>
            <p>
              · Choreography <br>
              · Creativity <br>
              · Sense of space <br>
              · Facial expressions <br>
              · Synchronization and group formation <br>
              · Over-all Performance <br>
            </p>
    </div>
    
    
        <!-- <div class="card">
            <div class="majorevent__content">
          <div class="majorevent__content--header">Destival (Group Dance Competition)</div>
          <div class="majorevent__content--para">
            
    </div>
    <div class="modal-footer">
      <h3 style="margin-right: 41%"><form action="" method="POST">
            <!-- <input type="hidden" name="event" value="Shutter-Up: On-the-spot Photography Contest"/> -->
            
    </div>
  </div>
</div>

<div id="myModal3" class="modal">
<div class="modal-content">
    <div class="modal-header">
      <h2 style="color: white;">Requiem (War of Bands)</h2>
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
        <p>Do you miss hearing the roar of the crowd as you climb on stage and feel the exhilarating atmosphere? Can you hear past the distorted guitars and growling vocals? Experience the flooding lights, hard hitting riffs and the thump of the bass, now that Requiem is just around the corner! Boasting of amazing prizes and renowned performers like Bloodywood, Undying Inc., Zygnema, Rudraksh, and The Doppler Effect, Requiem is an opportunity you cannot miss! Register your band now for Requiem ’18 and join the battle for ultimate glory and loads of exciting prizes!</p>
        <h3>Performance:</h3>
        <p>
          · A stage time of 25 minutes will be allotted to each band for the
          performance including the sound check. <br>&nbsp; (Time will start from
          the moment the band steps on the stage). <br>
          · A minimum of 3 band members and a maximum of 8 band
          members should be present. <br>
          · Exceeding the time limit will leave negative marking to the
          hands of the judges and <br>&nbsp; sound will be cut off after 27 minutes of
          stage time. <br>
          · It is important that a band plays at least one original
          composition. <br>
          · Use of backing tracks (with vocals or drums) and looping is not
          allowed. <br>&nbsp; (Use of samples is allowed. For more details regarding
          this, please contact the coordinators). <br>
        </p>
        <h3>Contact:</h3>
              <p><b>Rahul Singh </b>+91 7567459891/‎+91 9653700849</p>
      <h3>Judgement Criteria and Miscellaneous:</h3>
      <div>
      <p>
          · Acts will be judged based on tightness, tones, instrumental
          proficiency, vocal proficiency, stage presence, impact and ability
          to <br>&nbsp; master front of the house sound. <br>
          · The judge’s decision is final and binding. <br>
          · The selected bands must carry the selection acknowledgement,
          college ID and governmental proof of ID and the payment
          receipt <br>&nbsp; along with them on the day of the event. <br>
          · Bands coming in from outside Jaipur may opt for
          accommodation in the hostel premises. <br>
          · Registrations for the final selected bands will be done online for
          an amount of INR 1500 per band.<br>&nbsp; (Registration fee is non-
          refundable under all circumstances, including withdrawal from
          the competition.) <br>
          · Any distasteful behaviour, use of derogatory language and/or
          damage to the stage<br>&nbsp; and any MUJ property will result in an
          automatic disqualification at the hands of management and
          judges. <br>
          · The band is responsible for their own belongings. In case of any
          loss or damage to the band’s gear/equipment, <br>&nbsp; neither the college
          nor the event organisers will be held responsible for the same. <br>
          · MUJ will not be held responsible for any broken equipment,
          injuries, or any other negative occurrences outside of staff’s
          control. <br>
          · Consumption of Alcohol or any other illicit substance is strictly
          prohibited and may lead to disqualification. <br>
    </p></div>
    <h3>Disclaimer:</h3>
      <div>
        <p>
          Requiem holds the right to distribute the
          performances via any channel non-commercially.
        </p>
      </div>
    </div>
    
  </div>
</div>
    
<script>
    // Get the modal
function openmod(btnid,modalid,x)
{
    var modal = document.getElementById(modalid);

    // Get the button that opens the modal
    var btn = document.getElementById(btnid);

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[x];

    // When the user clicks the button, open the modal 
    modal.style.display = "block";


    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        }
    }
}


</script>
    <!-- ##### Footer Area Start ##### -->
    <?php include 'footer.php';?>
</body>

</html>