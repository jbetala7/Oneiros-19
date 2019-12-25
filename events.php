<?php
    $page='events';
    $title ='Events';
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
    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(alime/img/1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown">Aperture <br> <span style="font-size:50px;">Photography Club<span></h2>
                                <p data-animation="bounceInDown" data-delay="500ms">This club aims to provide a platform for the constructive hobby and give the students of the University a platform to showcase their artwork in the form of Photography, Videography, Graphic and Motion Graphic Design on offline and online medium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(alime/img/2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown">TMC <br><span style="font-size:50px;">Music Club<span></h2>
                                <p data-animation="bounceInDown" data-delay="500ms">The Music Club aims to nurture the talent in every member and provide a conducive environment for mutual learning. We believe that each individual has something to offer and through mentorships, jams, competitions and events. We strike to polish skills, share knowledge and spread musical joy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(alime/img/3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp">Litmus<br><span style="font-size:50px;">Literature Club<span></h2>
                                <p data-animation="bounceInUp" data-delay="500ms">The literary society of the university, Litmus, aspires to set an excellent standard for writing, debating and MUNing. Not only does Litmus provide an open and free platform for creative thought and expression, it also encourages bold ideas and opinions to come forward.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(alime/img/4.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown">Coreografia<br><span style="font-size:50px;">Dance Club<span></h2>
                                <p data-animation="bounceInDown" data-delay="500ms">The official Dance Society of MUJ, Coreografia, works as a platform for dancers of all backgrounds & dance forms to showcase as well as enhance their dancing skills. Coreografia plays a vital role in the holding and managing quite a few events in Oneiros, which range from solos, duets, group dance, dance battles, etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(alime/img/5.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown">Cinefilia<br><span style="font-size:50px;">Drama Club<span></h2>
                                <p data-animation="bounceInDown" data-delay="500ms">Cinefilia is the university’s dramatics society, committed to supporting the varied talents of the students. From street plays to established theatre, the club takes pride in the different forms of art that they introduce to the students.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(alime/img/6.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown">Qureka<br><span style="font-size:50px;">Quiz Club<span></h2>
                                <p data-animation="bounceInDown" data-delay="500ms">Qureka (The Official Quizzing Society Of The University), believes general awareness is extremely crucial in today's world to excel in every walk of life. With this thought in mind, we intend to make sure that by the time you graduate, you are a much better informed individual.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(alime/img/7.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown">Scribbles<br><span style="font-size:50px;">Art Club<span></h2>
                                <p data-animation="bounceInDown" data-delay="500ms">The MUJ Art Club is a place where students with a shared interest in art gather and create works. This club provides artistic opportunities beyond the walls of the classroom. Activities within the club allow its members to use of a wide range of materials and introduce students to a variety of artistic techniques and applications, which go beyond what is taught during art lessons.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <!-- <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(alime/img/8.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                         <!-- Welcome Text 
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown">Miscellaneous<br><span style="font-size:50px;">On-Spot Registerations<span></h2>
                                <p data-animation="bounceInDown" data-delay="500ms"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->

    <div class="outer-container home-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure >
                        <img class="eventimg" src="port/images/1.jpg" alt="">
                        
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center" onclick="toggled('#abt1')">
                    <h3 class="clubtitle">Aperture</h3>
                    </div>
                    <div class="about-div open is-paused" id="abt1">
                        <!-- <div class="detbg"></div> -->
                        <div class="detcont">
                            <br><br><h4><a href="#" onclick="toggled('#det1')">Shutter-Up: On-the-spot Photography Contest</a></h4><br>
                                <div class="details-div open is-paused" id="det1"> <p class="detailsp">
                                        
                                <h2 class = "lead"><u>Description</u></h2>
                                <div class = "para">
                                ShutterUp will test the promptness as well as the creativity of photographers. Not only the picture, the idea but also the thought process behind it is required to win this event. Participants will be given 3 hours’ time and a theme will be disclosed on the spot.<br>
                                <br><b class = "red">Prizes Worth: ₹2500</b><br>
                                <br>
                                </div>
                                <h2 class = "lead"><u>Rules and Regulations</u></h2>
                                <br>
                                <div class = "para">
                                Participants are given limited time in which they can click and edit photos. NO FILTERS are allowed for the photographs. However, they can correct the basic settings of the photographs.
                                <ul>
                                        <li>1. Only colored and/or RAW photos are to be submitted.</li>
                                        <li>2. Participants cannot put any kind of watermark on their photos.</li>
                                        <li>3. Minor adjustments like exposure and adding contrast is allowed.</li>
                                        <li>4. If any of the above rule is violated, the Aperture Team will remove the photo from consideration.</li>
                                        <li>5. All photos must be submitted in person. No proxy submission will be accepted.</li>
                                        <li>6. All the photos must be submitted on or before the given deadline. The organizers have the right to refuse the entry which will be submitted late.</li>
                                        <li>7. By agreeing to participate, the participant agrees that in any case of any dispute arising with regard to the photo credits or objection raised by subject captured in the photographs post submission, Aperture will not hold any responsibility for the same.</li>
                                        <li>8. Change of rules and/or time and acceptability of entries are at the discretion of the committees if required.</li>

                                 </ul><br>
                               <b class = "red">Organizing Committee: <br> Sriaansh Kapoor- 7905201973</b><br><br>
                               <b class = "red">Registration Fee: ₹250/- per participant</b><br><br>
                               <form action="" method="POST">

                               <input type="hidden" name="event" value="shutter"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                            </div>
                            </p></div>

                            <h4><a href="#" onclick="toggled('#det2')">Focus: Digital Arts Exhibition </a></h4><br>
                                <div class="details-div open is-paused" id="det2"> <p class="detailsp"><h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            Aperture, The Digital Arts Society of Manipal University Jaipur brings back to you the exclusive, three day long annual photography exhibition, FOCUS. The exhibition will feature some of the best photographs, films and designs by the students of MUJ.                                                                                    This can be the platform to showcase your talent. FOCUS is a celebration of the democratic nature of digital arts and hence will be an open themed group photo show.<br>
                                    <!-- <br><b class = "red">Prizes Worth: ₹2500</b><br> -->
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Categories</u></h2>
                                    <div class = "para">
                                    
                                    <ul>
                                            <li>1. DSLR/Bridge Photography </li>
                                            <li>2. Participants cannot put any kind of watermark on their photos.</li>
                                            <li>3. Phone Photography</li>
                                            <li>4. Travel Vlogs
                            
                                                    
                                                    </li>
                                            <li>5. Photo Manipulation</li>
                                            <li>6. Designing and Visual Art</li>
                                          
    
                                     </ul><br>
                                   <b class = "red">Organizing Committee Member: <br> Utkarsh Thakur- 9075080990</b><br><br>
                                   <form action="" method="POST">
                               <input type="hidden" name="event" value="focus"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                            <h4><a href="#" onclick="toggled('#det3')">Picture Perfect: Online Mobile Photo Editing Competition </a></h4><br>
                                <div class="details-div open is-paused" id="det3"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                    ShutterUp will test the promptness as well as the creativity of photographers. Not only the picture, the idea but also the thought process behind it is required to win this event. Participants will be given 3 hours’ time and a theme will be disclosed on the spot.<br>
                                    <br><b class = "red">Prizes Worth: ₹1500</b><br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules and Regulations</u></h2>
                                    <br>
                                    <div class = "para">
                                    The blink of a shutter doesn’t complete a photographer’s work, it’s the editing which helps him to perpetually convey the story behind his photographs. Aperture, The Official Digital Arts Society of Manipal University Jaipur brings to you the 2nd edition of Picture Perfect, an online mobile photo editing competition at Oneiros ’19. Participants will be provided with a photograph to edit on an application based on a mobile platform. With the edited photograph, they’ll have to explain their perspective of editing the photograph. Judgement will be based on editing skills and artistic sentiment. Description will be the caption of the photograph, followed by 2 hashtags: #mujpictureperfect #aperturemuj.
                                    <ul>
                                        <li>1. Aperture reserves the right to accept or refuse entries submitted.</li>
                                        <li>2. Changes of rules and/or time and acceptability of entries are at the discretion of the committee if demanded.</li>
                                        <li>3. The winning picture(s) will be featured on our social media handle(s)</li>
                                        <li>4. Any image containing a watermark will not be considered.</li>
                                        <li>5. Every photographer posted must have the following information along with the photograph:</li>
                                    </div><br>
                                    <div class = "para1">
                                        <li>a. Caption</li>
                                        <li>b. #mujpictureperfect #aperturemuj</li>
                                        <li>c. A serial number, which will be communicated via email</li>
                                    </div><br>
                                    <div class = "para">
                                        <li>6. To count your entry valid, the participant must be following, “aperturemuj”, the official Instagram handle of Aperture.</li>
                                        <li>7. Your Instagram account should be public</li>
                                        <li>8. For photo editing, only snapseed and adobe lightroom can be used.</li>
                                        <li>9. Photo manipulation is not allowed.</li>
                                        <li>10.	We will be providing the photos to be edited.</li>
                                        <li>11. If any of the above rules are violated, Aperture will not consider the entry.</li>
                                     </ul><br>
                                   <b class = "red">Organizing committee member: <br> Amogh Anand- 8130881595</b><br><br>
                                   <b class = "red">Registration Fee: ₹50 per entry</b><br><br>
                                   <form action="" method="POST">
                               <input type="hidden" name="event" value="pictureperfect"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>
                                
                                <h4><a href="#" onclick="toggled('#det4')">Power Shoot: Creative Prop Photography Competition</a></h4><br>
                                <div class="details-div open is-paused" id="det4"> <p class="detailsp"><h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                    This will be a team-based event incorporating a photographer and a model. Participants will be given a 20 minutes’ time, to utilize a specific prop disclosed at the time of participation for the photoshoot. Power shoot will test creativity of a photoshoot, and not only pictures and ideas but also the way you represent your prop will be required to win this event.<br>
                                    <br><b class = "red">Prizes Worth: ₹1500</b><br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules and Regulations:</u></h2>
                                    <div class = "para">
                                    <ul>
                                        <li>1. Only colored and/or B&W photos to be submitted.</li>
                                        <li>2. Participants cannot apply any kind of watermark.</li>
                                        <li>3. Minor adjustments like adding contrast is allowed.</li>
                                        <li>4. Participants must note that the model and prop must be included in the picture.</li>
                                        <li>5. If any above rule is violated, Aperture will remove the photo from consideration.</li>
                                        <li>6. All photos must be submitted in person.</li>
                                        <li>7. All photos must be submitted on or before the deadline. The organizers have the right to refuse the entry which will be submitted late.</li>
                                        <li>8. Change of rules/and or time and acceptability of entries are at the discretion of the committee if required. </li>

                                 </ul><br>
                                   <b class = "red">Organizing Committee Member: <br> Ashit Kaundal- 8219894829</b><br><br>
                                   <b class = "red">Registration Fee: ₹100 per entry</b><br><br>
                                   <form action="" method="POST">
                               <input type="hidden" name="event" value="powershoot"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det29')">InstAperture: Online Photography Competition</a></h4><br>
                                <div class="details-div open is-paused" id="det29"> <p class="detailsp"><h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                    InstAperture is a phone photography competition. The objective of the participants is to capture photos from a maximum of 2 themes and use the hashtags #instaperturemuj and #aperturemuj.<br>
                                    <br><b class = "red">Prizes Worth: ₹1500</b><br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules and Regulations:</u></h2>
                                    <div class = "para">
                                    <ul>
                                        <li>1. To carry your entry valid, the participant must be following “aperturemuj”, the official Instagram handle of Aperture.</li>
                                        <li>2. Your Instagram must be public.</li>
                                        <li>3. Usage of inbuilt Instagram filters is allowed.</li>
                                        <li>4. Each participant can upload 3 photos in each of the two themes he/she is a part of.</li>
                                        <li>5. Use of watermark is strictly prohibited.</li>
                                        <li>6. If any of the rule mentioned is violated, the participant is deemed to be disqualified.</li>
                                        <li>7. Changes of rule and/or time and acceptability of entries are at the discretion of the committee if required.</li>
                                        <li>8. All photos must be submitted in person.</li>
                                        <li>9. All the photos must be submitted on or before the deadline. The organizers have the right to refuse the entry which will be submitted late.</li>

                                 </ul><br>
                                   <b class = "red">Organizing Committee Member: <br> Aryan Chopra- 9899362052</b><br><br>
                                   <b class = "red">Registration Fee: ₹100 per entry</b><br><br>
                                   <form action="" method="POST">
                               <input type="hidden" name="event" value="instaperture"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det40')">Showdown of Societies: A photographer’s narrative</a></h4><br>
                                <div class="details-div open is-paused" id="det40"> <p class="detailsp"><h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                    Telling a story in a form of a video clip is easy. But narrating a story only through a limited set of photos is something that requires a lot of creativity. In this event, a team of photographers has to submit a series of 7 photos that tell you a story, any kind of story. The team can have 3-5 members.<br>
                                    <br><b class = "red">Prizes Worth: ₹1500</b><br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules and Regulations:</u></h2>
                                    <div class = "para">
                                    <ul>
                                        <li>1. All photos must be submitted in person; no proxy submission will be entertained.</li>
                                        <li>2. All the photos must be submitted on or before the deadline. The organizers have the right to refuse any entry which is submitted late.</li>
                                        <li>3. A photo story can have a maximum of 7 photographs and a minimum of 2.</li>
                                        <li>4. Use of watermarks on images is not allowed. Any image with a watermark will be immediately disqualified.</li>
                                        <li>5. Only basic enhancements such as sharpening, contrast adjustments, brightness are allowed.</li>
                                    
                                    </ul><br>
                                   <b class = "red">Organizing Committee Member: <br> Abhishek Navani- 8790113592</b><br><br>
                                   <b class = "red">Registration Fee: ₹500 per team</b><br><br>
                                   <form action="" method="POST">
                               <input type="hidden" name="event" value="sos"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>
                        </div>
                    </div>
                    

                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img class="eventimg" src="port/images/2.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center" onclick="toggled('#abt2')">
                        <h3 class="clubtitle">TMC</h3>
                    </div>
                        <div class="about-div open is-paused" id="abt2">
                                <br><br><h4><a href="#" onclick="toggled('#det5')">Woodstock</a></h4><br>
                                <div class="details-div open is-paused" id="det5"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            Woodstock is an instrumental competition in which musicians are given an opportunity to compete and showcase their artistry.
                                            Brighten up the stage playing the instrument you love, whether it be strumming the Guitar, masterfully playing the Keyboard, or going all out on the Drums.
                                            Seize your moment and present a magnificent instrumental piece.<br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>1.	There will be just 1 round in this competition.</li>
                                            <li>2.	Backing tracks are allowed.</li>
                                            <li>3.	Keyboard and Drums will be provided.</li>
                                            <li>4.	Time Limit is 6 minutes including Sound-Setup.</li>
                                            <li>5.	The participant must strictly abide by the given time limit.</li>
                                            <li>6.	There can be a maximum of 3 people in a performance.</li>
                                            <li>7.	The decision of the judges will be final and binding.</li>
                                            <li>8.	The Organizing Committee has the right to mend rules, disqualify entries or cancel the event prior to its initiation.</li>
                                            <li>9.	Any damage to the instruments provided would be penalised.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1.	Timing/Tightness</li>
                                                    <li>2.	Technique/Skill</li>
                                                    <li>3.	Stage Presence</li>
                                                    <li>4.	Creativity</li>
                                            </ul><br>
                                            <b class = "red">Coordinators:</b> <br> <b class = "red">Manav Desai- 9820963754<br> Uddeshya Prasad- 8076168461<br></b><br>
                                            <b class = "red">Registration Fee: ₹150 per entry</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="woodstock"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det6')">Rapsody</a></h4><br>
                                <div class="details-div open is-paused" id="det6"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            Spit fire, spit words, stringing words together and giving them meaning is an art. 
                                            Rapsody provides a platform for rappers who have a passion for sharing their art.
                                            We welcome rappers from different cities, backgrounds, and cultures to join and decimate their competition.
                                            <br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>The competition will be comprised of three rounds.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Preliminary Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time Limit - 90 seconds.</li>
                                                    <li>2. Language restrictions – English and Hindi.</li>
                                                    <li>3. No backing track.</li>
                                                    <li>4. The participant is free to use raps from any other artists or may use their own original composition.</li>
                                                    <li>5. Four participants will be selected for the semi-final round.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Semi-final Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time limit – 2-3 minutes.</li>
                                                    <li>2. The participants will be provided with a beatboxer, and the contestants will have to freestyle on the beat provided by the beatboxer.</li>
                                                    <li>3. Only original compositions are to be performed. <b class = "red">No plagiarism.</b></li>
                                                    <li>3. Two participants will be selected for the final round.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Final Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time limit – 2-3 minutes.</li>
                                                    <li>2. The participants will be provided with a beatboxer, and the contestants will have to freestyle on the beat provided by the beatboxer.</li>
                                                    <li>3. Only original compositions are to be performed. <b class = "red">No plagiarism.</b></li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>General Rules:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. No insulting other contestants or the judges. Dissing other contestants (not judges) in rap is allowed, but no profanity/cursing is allowed. </li>
                                                    <li>2. The decision of the judges will be final and binding in all cases.</li>
                                                    <li>3. The participant must strictly abide by the given time limit.</li>
                                                    <li>4. The Organising Committee has the right to mend rules, disqualify entries or cancel the performance.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1.	Timing/Tightness</li>
                                                    <li>2.	Technique/Skill</li>
                                                    <li>3.	Stage Presence</li>
                                                    <li>4.	Creativity</li>
                                            </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Karan Mannan- 8053924822<br> Bharath Ashok- 8714466427<br></b><br>
                                            <b class = "red">Registration Fee: ₹150 per entry</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="rapsody"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det7')">Octaves</a></h4><br>
                                <div class="details-div open is-paused" id="det7"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            Oneiros’19 presents to you our very own Western Solo Singing Competition -OCTAVES, where you can let your songs and voice transcend all boundaries.
                                            So, come on and sing the song to make the whole world sing along. 
                                            <br><br>
                                            <b class = "red">Bonus: Winner gets a chance to perform at MOOD INDIGO - the annual cultural fest of IIT Bombay.</b><br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>The competition is split into 2 rounds.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Preliminary Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time Limit is 1 minute & 30 seconds.</li>
                                                    <li>2. No accompanist or karaoke is allowed.</li>
                                                    <li>3. If the time limit is exceeded, negative marks would be awarded accordingly.</li>
                                                    <li>4. Reading the lyrics is not allowed.</li>
                                                    <li>5. Decision of the judges is final and binding.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Final Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time Limit is 6 minutes (Including Sound-Setup).</li>
                                                    <li>2. Maximum of 2 Accompanists or a karaoke is allowed.</li>
                                                    <li>3. If the time limit is exceeded, negative marks would be awarded.</li>
                                                    <li>4. Reading the lyrics is not allowed.</li>
                                                    <li>5. Decision of the judges is final and binding.</li>
                                                    <li>6. The participants are required to be ready with the karaoke tracks in a pen drive or in mobile phones.</li>
                                                    <li>7. Only 1 keyboard will be provided to the participants.</li>
                                                    <li>8. Judging will be done completely on the basis of vocals only. (there are no marks for the instruments.)</li>
                                                    <li>9. The Organising Committee has the right to mend rules, disqualify entries or cancel the event prior to its initiation.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Overall impact of the song.</li>
                                                    <li>2. Technicalities.</li>
                                                    <li>3. Vocal Range.</li>
                                                    <li>4. Stage Presence.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Unnati Jain- 9654431412<br> Manish Ahluwalia- 7300517987<br></b><br>
                                            <b class = "red">Registration Fee: ₹200 per entry</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="octaves"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det8')">Twice the Voice</a></h4><br>
                                <div class="details-div open is-paused" id="det8"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            Here's a chance for you to sing your heart out, showcase your musical chemistry with your partner and indulge in the joy that comes with it. Calling out all the music enthusiasts, Oneiros' 19 brings you The Music Club's duet singing event, "TWICE THE VOICE".
                                            <br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>1. The competition is split up into 1 round.</li>
                                            <li>2. Time limit is 5 minutes, including the set-up time.</li>
                                            <li>3. One accompanist or karaoke is allowed.</li>
                                            <li>4. If the time limit is exceeded, negative marks would be awarded.</li>
                                            <li>5. Reading the lyrics is not allowed.</li>
                                            <li>6. The decision of the judges is final and binding.</li>
                                            <li>7. Only keyboard will be provided to the participants.</li>
                                            <li>8. The contestants are required to bring the karaoke track in a pen drive or in mobile phones.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Song selection.</li>
                                                    <li>2. Technicalities.</li>
                                                    <li>3. Stage Presence.</li>
                                                    <li>4. Voice coordination.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Akanksha Garg- 8894750200<br> Vishal Jain- 9983261401<br></b><br>
                                            <b class = "red">Registration Fee: ₹300 per duet</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="twicethevoice"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det30')">Saptak</a></h4><br>
                                <div class="details-div open is-paused" id="det30"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            The Music Club in association with ONEIROS' 19 brings to you an opportunity to showcase your talent by combining your melodious notes with proper Sur & Taal at "SAPTAK"- the Indian Classical Singing Event. Get a chance to portray your skills - improvise and explore beautifully all the aspects of raga. So, lace up, get ready for the Competition, have no regrets and register soon.
                                            <br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>General Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>The competition is split up into two rounds.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Preliminary Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time Limit is 2 minutes.</li>
                                                    <li>2. No accompanist is allowed.</li>
                                                    <li>3. No Bollywood songs allowed. However, Classical/Sufi/Folk/Ghazal/Bhajan can be performed.</li>
                                                    <li>4. If the time limit is exceeded, negative marks would be awarded.</li>
                                                    <li>5. Reading the lyrics is not allowed</li>
                                                    <li>6. Decision of the judges is final and binding.</li>
                                                    <li>7. Instrument will be there to provide Scale.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Final Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time Limit is 6 minutes (Including Sound-Setup).</li>
                                                    <li>2. Maximum of 1 Accompanists or a karaoke is allowed.</li>
                                                    <li>3. No Bollywood songs allowed. However, Classical/Sufi/Folk/Ghazal/Bhajan can be performed.</li>
                                                    <li>4. If the time limit is exceeded, negative marks would be awarded.</li>
                                                    <li>5. Reading the lyrics is not allowed.</li>
                                                    <li>6. Decision of the judges is final and binding.</li>
                                                    <li>7. The participants are required to bring the karaoke tracks in a pen drive and also in mobile phones.</li>
                                                    <li>8. Harmonium/Keyboard will be provided to the participants.</li>
                                                    <li>9. The Organizing Committee has the right to mend rules, disqualify entries or cancel the event prior to its initiation.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Song Selection.</li>
                                                    <li>2. Technicalities.</li>
                                                    <li>3. Vocal Range.</li>
                                                    <li>4. Stage Presence.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Gokul Virmani- 9215532011<br> Liza Tarique- 9354072547<br></b><br>
                                            <b class = "red">Registration Fee: ₹150 per entry</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="saptak"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det31')">Ensemble (Group Singing Competition)</a></h4><br>
                                <div class="details-div open is-paused" id="det31"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            The Music Club in association with ONEIROS' 19 brings to you Ensemble, a theme-based group singing event. An opportunity for all to create an exquisite mix that brings out the best in all. To all the musicians out there, come out with your rhythmic friends, Create and innovate different melodies and harmonies to show how different voices sounds magical when put together. Harmonize and create an epic version of songs which will inspire and change the minds of the people for good. Blend in different cultures through your unique voices which will leave the music maestros awestruck. 
                                            <br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>1. Minimum of 6 vocalists are compulsory. of 4 accompanists are allowed.</li>
                                            <li>2. Each group will be allotted 10 minutes. (including setup and sound check).</li>
                                            <li>3. The group must strictly abide by the time limit.</li>
                                            <li>4. A team member may sing and play an instrument as well. However, such a person would be counted both as a vocalist and an accompanist.</li>
                                            <li>5. Drums are not allowed.</li>
                                            <li>6. The decision of the judges shall be final and binding in all cases.</li>
                                            <li>7. This is a theme-based event, "Melange” (a varied mixture of cultures, Indian and other countries) the groups have to brief about their presentation and how their choice of presentation is relevant to the theme without revealing the song names.</li>
                                            <li>8. The performance can be fusion, medley, acapella, etc. There is no language barrier.</li>
                                            <li>9. Keyboard and Cajon will be provided; other instruments have to be brought by the participant. The Organising Committee has the right to mend rules, disqualify entries or cancel the event prior to its initiation.</li>
                                        </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Accordance to the theme “Melange”.</li>
                                                    <li>2. Quality of vocals.</li>
                                                    <li>3. Rhythm.</li>
                                                    <li>4. Synchronization.</li>
                                                    <li>5. Overall impact (stage presence).</li>
                                                    <li>6. Extra marks will be awarded if acapella is included int the group song.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Anshul Mehta- 9930354504<br> Kriti Sharma- 8384053120<br></b><br>
                                            <b class = "red">Registration Fee: <br> Upto 10 members (including instrumentalists): Rs 1000 per group.<br> Beyond 10 people: Rs 150 extra per participant.</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="ensemble"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det32')">Dhwani</a></h4><br>
                                <div class="details-div open is-paused" id="det32"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            Presenting The Music Club's one of the most anticipated event Dhwani. 
                                            When struck the right tone, music has the ability to create a resonant field of emotions.
                                            Passionate for Bollywood music? From the high notes of Atif Aslam to evergreen Lata ji, we all have a knack for the soul of Hindi music. Don't wait anymore, just register and bring out the Bollywood singer in you!
                                            <br><br>
                                            <b class = "red">Bonus: Winner gets a chance to perform at MOOD INDIGO - the annual cultural fest of IIT Bombay.</b><br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>The competition is split up into two rounds.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Preliminary Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time Limit is 2 minutes.</li>
                                                    <li>2. No accompanist or karaoke allowed.</li>
                                                    <li>3. If time limit is exceeded, negative marks will be awarded.</li>
                                                    <li>4. Reading the lyrics is not allowed.</li>
                                                    <li>5. Decision of the judges is final and binding.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Final Round:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Time Limit is 5 minutes (Including Sound-Setup).</li>
                                                    <li>2. Maximum of 2 Accompanists or a karaoke is allowed.</li>
                                                    <li>3. If time limit is exceeded, negative marks will be awarded.</li>
                                                    <li>4. Reading the lyrics is not allowed.</li>
                                                    <li>5. Decision of the judges is final and binding.</li>
                                                    <li>6. The participants are required to bring the karaoke tracks in a pen drive or in mobile phones.</li>
                                                    <li>7. Only keyboard will be provided to the participants.</li>
                                                    <li>8. The Organizing Committee has the right to mend rules, disqualify entries or cancel the event prior to its initiation.</li>
                                                    <li>9. You will be judged solely on the basis of your vocals. There will be no marks awarded for your accompanists.</li>
                                                    <li><b class = "red"><u>NOTE:</u></b> This is event is strictly for HINDI   NON-CLASSICAL music. However, semi-classical/light-classical will still be accepted.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Song Selection.</li>
                                                    <li>2. Technicalities.</li>
                                                    <li>3. Vocal Range.</li>
                                                    <li>4. Stage Presence.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Alok Maurya- 9717694639<br> Tanvi Bhardwaj- 9358464066<br></b><br>
                                            <b class = "red">Registration Fee: ₹200 per entry</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="dhwani"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>
                            </div>
                    <!-- .entry-content -->
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img class="eventimg" src="port/images/3.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center" onclick="toggled('#abt3')">
                        <h3 class="clubtitle">Litmus</h3>
                    </div>
                    <div class="about-div open is-paused" id="abt3">
                        <br><br><h4><a href="#" onclick="toggled('#det9')">Cadence: The Poetry Slam</a></h4><br>
                        <div class="details-div open is-paused" id="det9"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    Poetry slams are open platforms for artists to come forward with their unique voices, expressing in verse, their ideas, thoughts and opinions on everything that they care about.
                                    <br>
                            <br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                    <li>1. Every participant gets 3 minutes of stage time, including introductions and their performances. Any time beyond those five minutes leads to negative marking.</li>
                                    <li>2. No props, no music.</li>
                                    <li>3. No negative speech based on religion, caste, creed, sex, sexuality, etc.</li>
                                    <li>4. No plagiarism.</li>
                                    <li>5. The content of the performance can be bilingual. Either totally in English, or totally in Hindi.</li>
                                    <li>6. Decision of the judges is final.</li>
                                    <li>7. CCs and OCs can change the event details if necessary.</li>
                            </ul><br>
                            </div>
                            <h2 class = "lead"><u>Judging Criteria:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. Confidence and body language.</li>
                                            <li>2. Audience interaction and interest.</li>
                                            <li>3. Fluidity of language.</li>
                                            <li>4. Creativity of content.</li>
                                            <li>5. Expression of concept.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Aadya Saxena- 8826821412<br> Anurag Singh- 9711895467<br></b><br>
                                    <b class = "red">Registration Fee: ₹200</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="cadence"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det10')">Alternate Endings</a></h4><br>
                        <div class="details-div open is-paused" id="det10"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                            Have you ever been frustrated by the end of a movie, novel or TV series?  Pondered over various theories of what could have been? Here is your chance to give it your own special end!
                                    <br>
                            <br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                    <li>1. There will be two bowls filled with the names of some well-known novels, movies and TV series.</li>
                                    <li>2. On the day of the event, the participants will be asked to pick one chit each, and give that particular book, movie or TV series a plot twist or a different ending.</li>
                                    <li>3. If the participant is not familiar with the chosen book or movie, then they are allowed one swap of chits, but a second swap will result in negative marking.</li>
                            </ul><br>
                            </div>
                            <h2 class = "lead"><u>Judging Criteria:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>Mark's will be given out of 20 based on:</li>
                                            <li>1. Content originality.</li>
                                            <li>2. Creativity.</li>
                                            <li>3. Presentation.</li>
                                            <li>4. Grammar.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Aditi Gupta- 9643485043<br> Shreya Jaggi- 9810549035</b><br><br>
                                    <b class = "red">Registration Fee: ₹100</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="alternateendings"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det11')">Jam: You're Up</a></h4><br>
                        <div class="details-div open is-paused" id="det11"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    Inspired by the Harvard Classroom Debate, we bring a brand new and fun format of debating to MUJ. Starting off with a preliminary round of JAM, we will then have few of the most fun and interactive rounds of debate. The participants will stand around the moderator who will give them a topic of debate, he will then point to a participant and give him a prompt like "However ________, A good example of this point is _________ ". The participant will have to begin their statement with the prompt and speak for a minute. After this, the moderator will randomly pick another participant and provide him with a different prompt. So, get ready, You're Up!
                                    <br>
                            <br>
                            </div><br>
                            <div class = "para">
                            <b class = "red">Coordinators:</b> <br> <b class = "red">Shashank Bajpai- 9743944052<br> Mishkat Ahmad Neyazi- 9319126512</b><br><br>
                                    <b class = "red">Registration Fee: ₹100</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="jamyouup"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det12')">Ingenium: British Parliamentary Debate</a></h4><br>
                        <div class="details-div open is-paused" id="det12"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    Ingenium aims at hosting debaters from all over India and providing them a platform for expressing their opinions. The event will be a simulation of the 4 VS 4 British Parliamentary Debate format. The teams of the Government (Opening Government, Closing Government) and that of the Opposition (Opening Opposition, Closing Opposition) shall compete against each other to see who debates their way to the top. The teams compete implicitly as well. The functions of the team and the members individually shall be assigned during the event itself.
                                    <br>
                            <br>
                            </div><br>
                            <div class = "para">
                            <b class = "red">Coordinators:</b> <br> <b class = "red">Vaibhav Bhat- 9811610545<br> Pranjal Ray- 9660302127<br> Sanchit Jain- 9711082323</b><br><br>
                                    <b class = "red">Registration Fee: ₹400 per team and ₹200 per person</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="igenium"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                               
                                <h4><a href="#" onclick="toggled('#det37')">Pictionary</a></h4><br>
                                <div class="details-div open is-paused" id="det37"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            A fun game for families, parties, or any group activity, Pictionary is a drawing game where one person draws, and other players try to guess what is being drawn. Pictionary works with as few as four people or can be played with teams consisting of two or more papers. Pictionary is basically charades with drawing.
                                            <br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>The event will have two rounds with participation from teams of 2 members.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Round 1:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Participants have to guess movies/TV shows based on emojis. In total, 60-70 movies/TV shows will be depicted through emojis. 30-35 for each team member.</li>
                                                    <li>2. Only one person would be allowed guess at one time.</li>
                                                    <li>3. Teams to guess maximum number of movies/TV shows wins.</li>
                                                    <li>4. One point for every right answer.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Round 2:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Students will be given snippets from a movie randomly; they need to explain the movie to the other teammate by drawing on the whiteboard. </li>
                                                    <li>2. There would be 4-5 snippets for each team.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Arpit Gupta- 7021214972<br> Pratyush Agarwal- 7507589524/9358918927</b><br><br>
                                            <b class = "red">Registration Fee: ₹100 per team</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="pictionary"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>

                                <h4><a href="#" onclick="toggled('#det38')">Elysium</a></h4><br>
                                <div class="details-div open is-paused" id="det38"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            “The purpose of literature is to turn blood into ink”.  Elysium is a writing event which presents unique challenges in every round, pushing one to exercise their creativity to the fullest.
                                            <br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>This event encourages individual participation. There is a total of 2 rounds.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Round 1:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Writing from a given prompt.</li>
                                                    <li>2. Each participant will be given a prompt on which they have to write a poem or a story.</li>
                                                    <li>3. A poem must be between 150-200 words.</li>
                                                    <li>4. A story must be between 250-300 words.</li>
                                                    <li>5. Grading will be done on a scale of 0-10.</li>
                                                </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Round 2:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Writing based on a given artwork.</li>
                                                    <li>2. Each participant will be given an abstract artwork or a visual image. </li>
                                                    <li>3. Participants are required to write a story or poem based on within a time limit of 30 minutes.</li>
                                                    <li>4. Grading will be done on a scale of 0-10.</li>
                                                    <li>5. Final score is calculated out of 20 and 3 winners will be selected.</li>
                                                    <li>6. Use of mobiles and internet during the event is prohibited.</li>
                                                    <li>7. In case of tie breakers, additional prompts will be given, and the team with the higher score will 
                                                            be qualified for the next round.</li>
                                                    <li>8. CCs and OCs of the event can make changes to the venue and event details at any time.</li>
                                                    <li>9. Decision of the judges is final.</li>
                                                    <li>10. Participants will be judged upon their originality, creativity, fluidity of language and the 
                                                            storyline. Plagiarism will not be entertained under any circumstances.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Aadya Saxena- 8826821412<br> Twisha Chattopadhyay- 8697939460</b><br><br>
                                            <b class = "red">Registration Fee: ₹100</b><br><br>
                                            <form action="" method="POST">
                               <input type="hidden" name="event" value="elysium"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                                </div></p></div>
                    </div>
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img class="eventimg" src="port/images/4.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center" onclick="toggled('#abt4')">
                        <h3 class="clubtitle">Coreografia</h3>
                    </div>
                    <div class="about-div open is-paused" id="abt4">
                        <br><br><h4><a href="#" onclick="toggled('#det13')">Nextar Solo/Duet</a></h4><br>
                        <div class="details-div open is-paused" id="det13"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    Music of your choice, a dance floor majestic, a classic dance competition for all dance lovers to express, compete and win. Coming up with the rise and shine of new innovations, we are here again with NEXTAR that invites solo (classical and western) and duet (all style) dancers to contend in an event like never before. So, bring about your best and be ready to be the fearless Next Star!<br>
                            <br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                <li>1. There are three categories in NEXTAR:</li>
                                <div class = "para1">
                                        <li>a. Solo Western</li>
                                        <li>b.	Solo Classical</li>
                                        <li>c.	Duet (ALL STYLE)</li>
                                </div><br>
                                <li>2.	It is a theme- free event and preference of track and dance form is completely up to you.</li>
                                <li>3.	Music track for the preliminary round and the finals may be different or same.</li>
                                <li>4.	Freeze to the time limit of your performance, negative marking will be allotted for not following the time limit.</li>
                                <li>5.	No additional time for rehearsals would be allotted.</li>
                                <li>6. The participants are requested to come 20 minutes prior to the competition for submission of their tracks.</li>
                                <li>7. No extra time will be allotted for dressing up. Come dressed up accordingly for your performances.</li>
                                <li>8. Use of talcum or any other substance is strictly prohibited during preliminary rounds or finals.</li>
                                <li>9. Use of props that do not damage premises are allowed.</li>
                                <li>10. No restrictions regarding the preference of your song, but your performance should avoid any form of vulgarity as that will lead to disqualification.</li>
                                <li>11. Participants are required to bring their tracks on at least 2 devices such as pen drives or phones for backup. </li>
                                <li>12. Participants are requested to bring their own USB cable of the device they are using for the track.</li>
                                <li>13. Follow the proper time plan no extra time would be given for late entries.</li>
                                <li>14. Follow the coordination of the registrations process and fill in the correct details.</li>
                                <li>15. The organizing committee has the right to cancel the event or a performance in any sort of unavoidable situations.</li>
                                <li>16. Results by the jury would be the final outcome and no changes would be made after that.</li>
                                <li>17. Judging of classical and western performances would be different for preliminary as well as final round.</li>
                                <li>18. 2 winners of Solo (1 from each classical and western) and 1 duet performance will win by the end of the event.</li>
                                <li>19. Participants can participate in solo and duet, but they have to pay the mentioned amount for both the categories.</li>
                            </div><br>
                            <h2 class = "lead"><u>Time Limit:</u></h2>
                            <br>
                            <h2 class = "lead"><u>For Preliminary Round:</u></h2>
                            <div class = "para">
                            <ul>
                                <li>SOLO: 1 min.</li>
                                <li>DUET: 1 min 30 sec.</li>
                            </ul>
                        </div><br>
                        <h2 class = "lead"><u>For Final Round:</u></h2>
                        <div class = "para">
                        <ul>
                            <li>SOLO: 2min.</li>
                            <li>DUET: 3 min.</li>
                        </ul><br>
                        <b class = "red">Coordinators:</b> <br> <b class = "red">Virad Mathur- 9381329796<br> Sahiti Balantrapu- 9993335848</b><br><br>
                           <b class = "red">Registration Fee: SOLO- ₹200, DUET- ₹300 per team</b><br><br>
                           <form action="" method="POST">
                               <input type="hidden" name="event" value="nextar"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det14')">Ground Zero (Hip-Hop Battle)</a></h4><br>
                        <div class="details-div open is-paused" id="det14"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    Ground zero, the all-style hip hop battle is back, and it's bigger, better and wilder. Do you feel you have what it takes to crush others with your feet and be supreme? If yes, then the underground hip hop dance competition for the best is here for total dominance. Winner takes it all.
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules and Regulations:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. The event is an all style hip hop battle event.</li>
                                            <li>2. The team should consist of 3-7 members.</li>
                                            <li>3. No participants should indulge in any kind of physical or verbal abuse (slogan on clothing, nicknames, etc.) at any instance (before, during or after the event) thereby maintaining the decorum of the event.</li>
                                            <li>4. Any intentional physical contact will result in the competitor’s crew forfeiting the battle. In case of any sort of disturbance created by a participant, a warning will be given to the particular team, and further breaking of rules will lead to disqualification from the event.</li>
                                            <li>5. Wearing a pair of shoes is mandatory for the participants.</li>
                                            <li>6. No props are allowed.</li>
                                            <li>7. Reporting time of the team would be 2 hours prior to the starting of the event. Failing to report on time might result disqualification of the team.</li>
                                            <li>8. The registration fees will not be refunded for any reason.</li>
                                            <li>9. Use of powder, liquid or any other substance that may dirty the venue is strictly prohibited.</li>
                                            <li>10. No form of Vulgarity or indecency should be expressed in the performance.</li>
                                            <li>11. Battle fixtures will be decided by Draw-Chit Method.</li>
                                            <li>12. The decision of the judges will be final and absolute. Any arguments regarding the results will not be entertained.</li>
                                            <li>13.	All Battle and management related decisions will not be entertained.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Khushi Shrivastava- 8085388450<br> Rishika Jain- 8239966281<br> Aakash Lakhangaonkar- 6355182728</b><br><br>
                                    <b class = "red">Registration Fee: ₹1000 per team</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="groundzero"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det15')">Showcase</a></h4><br>
                        <div class="details-div open is-paused" id="det15"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    Essence of dance is the expression of man. We await all the amazing entertainers out there who live to dance. Dance like you’re broken and left open. Rock the floor and celebrate dance with us. Our music, your moves, Showcase is a solo/duet impromptu dance event. Accept our challenge and drown in the melody of music. Dance it out of yourself. Larger, more beautiful, more powerful. Come and enjoy your golden minute in spotlight.
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules and Regulations:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. On the spot solo/duet event.</li>
                                            <li>2. Participants must always carry their college/institution IDs.</li>
                                            <li>3. The participants need to report at least 40 minutes prior the commencement of the competition.</li>
                                            <li>4. Songs will be allocated on the spot on first-come-first-serve basis.</li>
                                            <li>5. Participants are recommended to carry earphones/headphones.</li>
                                            <li>6. Songs will be transferred to the mobile phones (so please have storage space).</li>
                                            <li>7. No songs will be repeated.</li>
                                            <li>8. Songs will be allocated only once registration has been completed.</li>
                                            <li>9. Songs once allocated cannot be changed. Any change from the original song will result in disqualification.</li>
                                            <li>10. The track time limit will be approximately 1 minute</li>
                                            <li>11.	The event will comprise of two rounds.</li>
                                            <li>12.	Registrations will close 30 minutes prior to the event.</li>
                                            <li>13.	The registration fee shall not be refunded for any reason.</li>
                                            <li>14.	The judges' decision will be the final word.</li>
                                            <li>15.	Misbehaviour will lead to disqualification. </li>
                                            <li>16.	In case of any irregularity or unavoidable situation the Organizing Committee has the right to modify or cancel a performance.</li>
                                            <li>17.	Contestants are not allowed to bring props of their own.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Aarushi Sonal- 8290926225<br> Vanshika Agrawal- 9109999996</b><br><br>
                                    <b class = "red">Registration Fee: ₹150 per person</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="showcase"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>
                    </div>
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img class="eventimg" src="port/images/5.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center" onclick="toggled('#abt5')">
                        <h3 class="clubtitle">Cinefilia</h3>
                    </div>
                    <div class="about-div open is-paused" id="abt5">
                        <br><br><h4><a href="#" onclick="toggled('#det17')">Awaaz</a></h4><br>
                        <div class="details-div open is-paused" id="det17"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    <br>ज़ोर ज़ोर सॆ चिलाऐंगॆ<br>
                                    जब मिलेगा नहीं इंनसाफ<br>
                                    दहाड़ देंगे पूरी दुनिया पर<br>
                                    जब नुक्कड़ करने उतरेंगे हम सब साथ साथ<br><br>
                                    'EITHER BE THE CHANGE OR MOVE ASIDE AND LET US BRING IT'<br><br>
                                    Street plays tackle complex social issues which is conveyed to the audience with a blend of emotions, power, rage, anger and enthusiasm. In our harsh and cruel world street plays strive to instill empathy and awareness in the minds and hearts of the audience. So,<br><br>
                                    आओ आओ नाटक देखो<br>
                                    इंसानियत को अपने दिलों मे ज़िनदा रखो<br>
                                    नुक्कड़ के माध्यम से<br>
                                    परिवर्तन की ज्वाला को सुलगाए रखको<br><br>
                                    Cinefilia cordially invites you to participate in our street play competition AWAAZ as this is a golden opportunity to come out of your comfort zone and to raise your voice against the rising prejudice and injustice in our time.<br><br>
                                    Time limit- 20 minutes warning bell. 22 minutes final bell.<br><br>
                                    Team size- 8-20(including casts and music accompanists)<br><br>
                                    <b class = "red">THIS EVENT IS IN COLLABORATION WITH MOOD INDIGO AND THE WINNER WILL GET DIRECT ENTRY INTO FINAL ROUND OF THE STREET PLAY COMPETITION AT MOOD INDIGO.</b>
                                    <br>
                            <br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <!-- The blink of a shutter doesn’t complete a photographer’s work, it’s the editing which helps him to perpetually convey the story behind his photographs. Aperture, The Official Digital Arts Society of Manipal University Jaipur brings to you the 2nd edition of Picture Perfect, an online mobile photo editing competition at Oneiros ’19. Participants will be provided with a photograph to edit on an application based on a mobile platform. With the edited photograph, they’ll have to explain their perspective of editing the photograph. Judgement will be based on editing skills and artistic sentiment. Description will be the caption of the photograph, followed by 2 hashtags: #mujpictureperfect #aperturemuj. -->
                            <ul>
                                    <li>1. Non performing members are included in the team number stated above.</li>
                                    <li>2. Teams are expected to perform at the open-air venue with audiences on all sides.</li>
                                    <li>3. The team size represents the number of people registered as a team. Only these shall be allowed to perform the street play.</li>
                                    <li>4. Only one entry per college is allowed.</li>
                                    <li>5. Music accompanists are included in the team number stated above. </li>
                                    <li>6. Use of microphone speakers or any other electronic instruments is not allowed. </li>
                                    <li>7. Any kind of fluid, live animals, flame, heavy object, electrical object or any material which has possibility of damaging the stage is not allowed.</li>
                                    <li>8. Exceeding time limit will result in negative marking.</li>
                                    <li>9.Plays can be based on any theme but since event is being held at public venues, any content directed against a certain political group or religious community is strictly prohibited.</li>
                                    <li>10. Teams have to mail the synopsis of their play along with their prod list (list of production material brought by the teams) at ‘cinefiliamuj@gmail.com’. The subject of the mail should be ‘Awaaz college name_prod’. The deadline for the submission of the production list and synopsis is 16th October '19.</li>
                                    <li>11. Obscenity (at the discretion of judges) of any kind is not allowed and may lead to disqualification.</li>
                                    <li>12. The decision of the judges will be final and binding.</li>
                                    <li>13. The essence of the play should be brought out in HINDI/ENGLISH OR BOTH however short snippets of in other regional languages are allowed.</li>
                                    <li>14. Teams using any instruments, props, costumes must bring all their requirements and must be ready well in time as per the instructions of the organiser. No props, costumes or any other material will be provided by the organisers.</li>
                                    <li>15. Registrations must be done atleast 3 hours prior to the performance.</li>
                                    <li>16. Each participant must carry his/her college id card at all time.</li>
                                    <li>17. Manipal University Jaipur will not be responsible for loss of any item or belonging.  </li>
                                    <li>18. Any play can be stopped in the middle if found inappropriate or unfit by the judges or organising committee.</li>
                                    <li>19. </li>
                                </ul><br>
                            </div>
                            <h2 class = "lead"><u>Judging Criteria:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. Acting</li>
                                            <li>2. Voice(Sync, Diction)</li>
                                            <li>3. Direction</li>
                                            <li>4. Crowd Interaction</li>
                                            <li>5. Formations</li>
                                            <li>5. Overall Impact</li>
                                    </ul><br>
                                    <b class = "red">Coordinators:</b> <br> <b class = "red">Faraz Ahmad- 8826150161<br> Vinayak Vaidyanathan- 8130878033<br> Ashok Rout- 8920281318/7840072587</b><br><br>
                                    <b class = "red">Registration Fee: ₹100 per entry</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="awaaz"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>
                        
                                <h4><a href="#" onclick="toggled('#det18')">Rangmanch</a></h4><br>
                                <div class="details-div open is-paused" id="det18"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                                    <div class = "para">
                                            They say an actor comes alive when they step onto the stage; offstage, the actor in them cessates. “The true theatre, because it moves and makes use of living instruments, continues to stir up shadows where life has never ceased to grope its way.” In the spirit of true theatre, we present to you, Rangmanch. Rangmanch, the stage play competition for Oneiros ‘19 is just around the corner and the time has come to step onto the stage and let the actor in you come alive. Participate in the magic of the stage, register online in teams and dye the stage with the colour of your play. Let the story unfold and pitch yourself against the others for the sweet victory that comes to those who conquer the stage. One question remains, are you ready?
                                            <br>
                                    <br>
                                    </div>
                                    <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>1. Team size: 4-14(+ 1 person for lights and sound is compulsory)</li>
                                        </ul>
                                    </div><br>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Direction</li>
                                                    <li>2. Acting</li>
                                                    <li>3. Clarity of idea delivered</li>
                                                    <li>4. Content</li>
                                                    <li>5. Overall impact</li>
                                            </ul><br>
                                        </div>
                                        <h2 class = "lead"><u>Prelims:</u></h2>
                                        <div class = "para">
                                                <ul>
                                                        <li>1. Each team must prepare a preliminary act of 15 minutes from empty stage to empty stage to showcase the essence of their play. Teams will be selected for the final round based on the preliminary round.</li>
                                                        <li>2. Time limit: up to 12+3(stage setup and clearance) minutes. If the team exceeds the time limit, they will be heavily penalized.</li>
                                                </ul><br>
                                            </div>
                                            <h2 class = "lead"><u>Finals:</u></h2>
                                            <div class = "para">
                                                    <ul>
                                                            <li>1. Selected teams have to perform the extended version of the same play.</li>
                                                            <li>2. Time limit: up to 60+5(stage setup and clearance) minutes. If the team exceeds the time limit, they will be heavily penalized.</li>
                                                            <li>3. First warning bell will be given after 55 minutes and then another at 60 minutes.</li>
                                                        </ul><br>
                                                    </div>
                                                    <h2 class = "lead"><u>General Rules:</u></h2>
                                        <div class = "para">
                                                <ul>
                                                        <li>1. Play can be in English or Hindi or both. However short snippets in other regional languages are allowed. Adaptations are also allowed.</li>
                                                        <li>2. Teams have to mail the synopsis of their play along with their prod list (list of production material brought by the teams) at ‘cinefiliamuj@gmail.com’. The subject of the mail should be ‘Rangmanch_college name prod’. The deadline for the submission of the production list and synopsis is 16th October '19.</li>
                                                        <li>3. All clothes, accessories, and props of the play have to be arranged by the participating team. However, 2 tables and 5 chairs will be provided.</li>
                                                        <li>4. The organizing committee is responsible only for the infrastructural facilities (green room).</li>
                                                        <li>5. Obscenity (at the discretion of the judges) of any kind is not allowed and will lead to immediate disqualification.</li>
                                                        <li>6. The decision of the judges will be final and binding.</li>
                                                        <li>7. Backstage voiceovers and narrations are allowed during the performance. Also, the participants must bring the background music (in mp3 format) of their skit in a pen drive.</li>
                                                        <li>8. The organizing committee has the rights to mend rules, disqualify entrees or cancel or cut short the event and hold the discretion of allowing any material on stage.</li>
                                                        <li>9. Multiple entries from the same college are allowed.</li>
                                                        <li>10. Any kind of flammable substances, heavy or sharp objects and any such materials are STRICTLY not allowed.</li>
                                                    </ul><br>
                                                    <b class = "red">Coordinators:</b> <br> <b class = "red">Daksh Garg- 9910995396<br> Devna Pandya- 9982510666<br> Vybhav Amar Shanthi- 7426079906</b><br><br>
                                    <b class = "red">Registration Fee: ₹100 per entry</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="rangmanch"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det19')">Humour Us</a></h4><br>
                        <div class="details-div open is-paused" id="det19"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    How long you’ll discuss about comicstaan and canvas jokes?<br><br>
                                    Can’t you stop yourself from being PUN-ny!<br><br>
                                    Want to share your humor amongst us?<br><br>
                                    So, Worry Not…We got you covered.<br><br>
                                    From Haati-Cheeti Jokes to Sakth Launda,<br><br>
                                    From Pados Ki Aunty to Bol na Aunty Au Kya?<br><br>
                                    ‘HUMOR US’ is back, a platform where you can let out your inner comedian and make people go ‘LOL’, ‘ROFL’ off their seats.<br>
                                    <br><b class = "red">Bonus #1: Winner gets a chance to perform at MOOD INDIGO.</b><br><br>
                                    <b class = "red">BONUS #2: यहि बाते तोह बाद में याद ए ग ई!!!!</b><br>
                            <br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                    <li>1. Vulgar and Abusive Content is not allowed.</li>
                                    <li>2. Both Hindi And English are allowed. </li>
                                    <li>3. Decision taken by the judges is absolute and binding.</li>
                                </ul><br>
                            </div>
                            <h2 class = "lead"><u>Elimination Round:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>Elimination round will be conducted on-ground during the fest, where the participants have to put up a small show of 4 mins in front of them live audience.</li>
                                            <li>1. After 3 mins a single bell sound will be played.</li>
                                            <li>2. After 3 mins 30 seconds double bell.</li>
                                            <li>3. At the 4th min the mic will be cut.</li>
                                    </ul><br>
                                </div>
                                <h2 class = "lead"><u>Finals:</u></h2>
                                <div class = "para">
                                        <ul>
                                                <li>The participants who cleared the Elimination round will be asked to perform a set of max 10 minutes and perform in front Live Audience.</li>
                                                <li>1. After 9 mins a single bell sound will be played.</li>
                                                <li>2. After 9 mins 30 second double bell.</li>
                                                <li>3. At 10th min the mic will be cut.</li>
                                        </ul><br>
                                        </div>
                                        <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                        <div class = "para">
                                            <ul>
                                                <li>1. Content</li>
                                                <li>2. Quality of Humor</li>
                                                <li>3. Speech Flow</li>
                                                <li>4. Clarity of thoughts</li>
                                                <li>5. Stammering/Fumbling</li>
                                                <li>6. Audience Engagement</li>
                                                <li>7. Stage Presence</li>
                                                <li>8. USP (Unique Selling Point)</li>
                                                <li>9. Strong End</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Akshat Mittal- 9670778833<br> Manan Balana- 7615041694<br></b><br>
                                    <b class = "red">Registration Fee: ₹150 per entry</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="humourus"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det20')">Only, One! (The Mono-Act Competition)</a></h4><br>
                        <div class="details-div open is-paused" id="det20"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    "10-minute, bas 10-minute hai tumhare paas"<br><br>
                                    Think you got an act, that can redefine the concept of mono acting competitions? Maybe an act that makes the audience fiddle with their minds? Then Only, one! is the place for you. If you think you’ve got the X- factor, the soul acting spirit, something that can make you the chosen lone actor, then definitely participate in Only, One! competition. Rhapsodize on the stage, resonate your idea with the minds of the audience and rack up the award for the chosen one. We look forward to see the actor in you.<br><br>
                                    <b class = "red">THIS EVENT IS IN COLLABORATION WITH MOOD INDIGO AND THE WINNER WILL GET DIRECT ENTRY INTO FINAL ROUND OF THE STREET PLAY COMPETITION AT MOOD INDIGO.</b>
                                    <br>
                            <br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                    <li>1. The participants must come prepared with an original theme, be it as unique, tacky or unconventional.</li>
                                    <li>2. Language used can be Hindi, English or both.</li>
                                    <li>3. Total time allotted for the performance is 3-10 minutes. First bell will be rung after 8 minutes and the second bell will be rung at 10 minutes. The performance will start on an empty stage and should end with an empty stage in the given time. It is advised to the participants to strictly follow the time limit to avoid disqualification.</li>
                                    <li>4. 1-2 people are allowed to assist with the lights and sound.</li>
                                    <li>5. Instrumental music is allowed but the participants are requested to bring their own instruments.</li>
                                    <li>6. Laptop will be provided to play the sound/music.</li>
                                    <li>7. Obscenity or offensive language and gestures are strictly not allowed.</li>
                                    <li>8. All clothes and props are to be arranged by the participants.</li>
                                    <li>9. The organizing committee is responsible for only infrastructural facilities and shall not be responsible for the security of items left behind in the green room or in the college.</li>
                                    <li>10.	No naked flames or animals are allowed on the stage.</li>
                                    <li>11.	The mono-act maybe original or an adapted one.</li>
                                    <li>12.	Decision of the judges will be final and binding.</li>
                                </ul><br>
                            </div>
                            <h2 class = "lead"><u>Judging Criteria:</u></h2>
                            <div class = "para">
                                <ul>
                                    <li>1. Content</li>
                                    <li>2. Quality of Humor</li>
                                    <li>3. Speech Flow</li>
                                    <li>4. Clarity of thoughts</li>
                                    <li>5. Stammering/Fumbling</li>
                                    <li>6. Audience Engagement</li>
                                    <li>7. Stage Presence</li>
                                    <li>8. USP (Unique Selling Point)</li>
                                    <li>9. Strong End</li>
                            </ul><br>
                            <b class = "red">Coordinators:</b> <br> <b class = "red">Ansh Ankul- 9810313153<br> Mohit Kumar- 9766656881<br></b><br>
                                    <b class = "red">Registration Fee: ₹150 per entry</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="onlyone"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det33')">Ad-Mak</a></h4><br>
                        <div class="details-div open is-paused" id="det33"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    “Ooooo Hema, Rekha, Jaya aur Sushma, sabki pasand NIRMAAAA.”<br><br>
                                    Do you also read that thing in the same rhyme as we do??<br><br>
                                    Have you ever admired the creativity behind the ad making?<br><br>
                                    Do you also sometimes dance on some random jingle of the iconic indian tv ads just because it hooks you up?<br><br>
                                    If yes then, you don't want to miss this absolutely unforgettable memory of making an advertisement and selling the Product to others. Come with your catchy one liner or a good jingle and combine your ideas with your team to win this fun-loving contest.<br><br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                    <li>1. This is a Group event.</li>
                                    <li>2. Only team registrations are allowed. Each team must have minimum 3 and maximum 5 members.</li>
                                    <li>3. The Participating teams will get a product to sell via chits and the products will be decided by the event organizers.</li>
                                    <li>4. All the teams will be given 5 minutes for preparation.</li>
                                    <li>5. The time limit to perform the task is 2-5 minutes. Not obeying the time slot will result in the deduction of points.</li>
                                    <li>6. You can perform the task in Hindi, English or both the languages.</li>
                                    <li>7. Points will be deducted for plagiarism.</li>
                                    <li>8. Abusive Words or obscenity is not allowed, and the team will be disqualified for doing so.</li>
                                    <li>9. The required or suitable prop will be provided, and proper use of prop will fetch the team extra points.</li>
                                    <li>10. Each team must come up with a Catch Phrase/ Pick-up line/ Jingle for the product allotted.</li>
                                    <li>11. The decisions of the judges will be final.</li>
                                    <li>12. The Organising Committee can mend the rules and disqualify the teams of the situation demands so.</li>
                                </ul><br>
                            </div>
                                        <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                        <div class = "para">
                                            <ul>
                                                <li>1. Creativity</li>
                                                <li>2. Co-ordination</li>
                                                <li>3. Audience Reaction</li>
                                                <li>4. Timings</li>
                                                <li>5. Prop usage(if any)</li>
                                                <li>6. Spontaneity</li>
                                                <li>7. Negative Marks for not following the rules stated above.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Prachi Khandelwal- 9428119439/9929896916<br> Aviral Aggarwal- 8700383934<br></b><br>
                                    <b class = "red">Registration Fee: ₹100 per entry</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="admak"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det34')">Mission Improvable</a></h4><br>
                        <div class="details-div open is-paused" id="det34"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    “ACTING IS ALL ABOUT HONESTY. IF YOU CAN FAKE THAT, YOU’VE GOT IT MADE”<br><br>
                                    On a mission to act it out and make it big on stage?? On a mission to fight your stage fear?? Here’s an opportunity to get rid of it all with “Mission Improvable”.<br><br>
                                    Any random topic in which you have to perform on the spot. Completely unplanned and unprepared. Sounds challenging but thrilling isn’t it?? It’s about creating a situation, portraying some characters and make a scene by unfolding your creativity and extreme imagination. Bring any scenario to life whether it’s a stoner teacher in class or a kid with some new superpowers. So why wait?? Come and showcase the artist the artist within you….<br><br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                    <li>1. Team requirement: 3-5 members</li>
                                    <li>2. The participants should pick 2 chits from an array of chits which will have a topic and a criterion which must be present during the act.</li>
                                    <li>3. Time limit of the act should be 3-7 minutes.</li>
                                    <li>4. Use of any explicit content or profanity or vulgarity will result in immediate disqualification.</li>
                                    <li>5. No music sequences will be allowed</li>
                                    <li>6. The decision once taken by the judge will not be overturned</li>
                                    <li>7. Any kind of fluid, live animals, flame, heavy/sharp objects or any material that has possibility of damaging the stage is not allowed.</li>
                                </ul><br>
                            </div>
                                        <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                        <div class = "para">
                                            <ul>
                                                <li>1. Content</li>
                                                <li>2. Originality</li>
                                                <li>3. Influence and impression</li>
                                                <li>4. Acting</li>
                                                <li>5. Humour</li>
                                                <li>6. Spirit and spontaneity</li>
                                                <li>7. Story</li>
                                                <li>8. Creativity</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Haziq Ali Peer- 9705589593<br> Mughdha Pande- 7976037095<br></b><br>
                                    <b class = "red">Registration Fee: ₹100 per entry</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="missionimprovable"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det35')">Ek Qissa (Storytelling Competition)</a></h4><br>
                        <div class="details-div open is-paused" id="det35"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    “Inside each of us is a natural-born storyteller, waiting to be released.”<br><br>
                                    CINEFILIA- The Dramatic and Filmmaking Society of Manipal University Jaipur brings you a chance to let the ink of your creativity flow through your words. A chance to tell a story that you wanted to share for a long time. We are giving you a chance to share your story on our biggest platform, Oneiros 2019.<br><br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                    <li>1. Contestants can present their story in the form of poetry.</li>
                                    <li>2. There will be a proper sound system present at the venue and if the contestant requires access, it will be provided to them, but they have to bring their own music clip.</li>
                                    <li>3. Contestants will have upto 10 minutes for the presentation of the story.</li>
                                    <li>4. The judges’ decision is final.</li>
                                    <li>5. Plagiarism is not allowed. Story must be original.  </li>
                                </ul><br>
                            </div>
                                        <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                        <div class = "para">
                                            <ul>
                                                <li>1. Content (Story is delivered in logical order and is appropriate to the theme.)</li>
                                                <li>2. Pronunciation (Articulation and Intonation)</li>
                                                <li>3. Fluency (Pace, Voice Quality, Vocal Expression)</li>
                                                <li>4. Performance (Confidence, Gesture, Mimicry) </li>
                                                <li>5. Creativity</li>
                                                <li>6. Time Management</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Gaurav Panwar- 8130228058<br> Gopesh Periwal- 9879603115<br></b><br>
                                    <b class = "red">Registration Fee: ₹50 per entry</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="ekqissa"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det36')">Spoofy-Do</a></h4><br>
                        <div class="details-div open is-paused" id="det36"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    “Frankly, my dear, I don't give a damn.”<br><br>
                                    "Jali ko aag kehte hain, bhuji ko raakh kehte hain … jis raakh se barood bane, usse Vishwanath kehte hain"<br><br>
                                    Have you guys ever tried to enact these kinds of famous dialogues, have you ever had 'what if' thoughts when you saw a movie? Are you fond of giving scenes your own kind of twist?<br><br>
                                    Well here, we bring you a very amazing and exciting event. It's really simple as well as fun.<br><br>
                                    So, lights, camera, action.<br><br>
                                    Get the movie ready.<br><br>
                            </div>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                            <ul>
                                    <li>1. Record a video, that can be recreation/parody of any movie scene of your choice.</li>
                                    <li>2. The time limit of the video is 2-5 min. It can't be less than 2 mins and not more than 5 mins.</li>
                                    <li>3. There is no limit on number of members in the video.</li>
                                    <li>4. Send the video/drive Link at cinefiliamuj@gmail.com with college name, scene and the name of the movie mentioned. The subject should be SPOOFY DO.</li>
                                    <li>5. Last day for the submission is 16th Oct 2019.</li>
                                    <li>6. The video can be recorded from a DSLR or a mobile phone. Mention the scene and timing of the scene from the movie for reference purpose.</li>
                                </ul><br>
                            </div>
                                        <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                        <div class = "para">
                                            <ul>
                                                <li>1. Cinematography</li>
                                                <li>2. Voice modulation</li>
                                                <li>3. Acting</li>
                                                <li>4. Scene chosen</li>
                                                <li>5. Creativity</li>
                                                <li>6. Timing</li>
                                                <li>7. Lighting</li>
                                                <li>8. Direction</li>
                                                <li>9. Negative marking for not following the rules.</li>
                                                </ul><br>
                                                <b class = "red">Coordinators:</b> <br> <b class = "red">Aneena Elza Saji- 8114099903/9799622383<br> Aryaki Pathak- 7083357670<br></b><br>
                                    <b class = "red">Registration Fee: ₹150 per entry</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="spoofydo"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>
                    </div>
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img class="eventimg" src="port/images/6.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center" onclick="toggled('#abt6')">
                        <h3 class="clubtitle">Qureka</h3>
                    </div>
                    <div class="about-div open is-paused" id="abt6">
                        <br><br><h4><a href="#" onclick="toggled('#det21')">Sadharan -The General Quiz</a></h4><br>
                        <div class="details-div open is-paused" id="det21"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    Qureka's flagship Quiz in Oneiros, this Quiz is the most fun and informative. This quiz will deal with all the things we consider general in life like geography, politics, sports etc. it will be focused more on our country India than any other country. Questions that be asked can be on the basis like- who was the first president of India? With how many countries does India share border with etc. Participants should focus more on geography, politics, unique facts about India and Current Affairs.
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. There will be 5 rounds and five teams will qualify for the finals.</li>
                                            <li>2. A Lone wolf is allowed(Single Participant).</li>
                                            <li>3. Quizmaster’s decision is final.</li>
                                            <li>4. No phones are allowed during the quiz. Anyone found using their phone will be disqualified immediately.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Harshit Joshi- 9653701705<br> Anamay Deshpande- 9689993649<br></b><br>
                                        <b class = "red">Team Size: 1 or 2</b><br><br>
                                    <b class = "red">Registration Fee: ₹100 per team</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="sadharan"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det22')">Ignited Minds ‘The Business Quiz’</a></h4><br>
                        <div class="details-div open is-paused" id="det22"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    This quiz will revolve around the latest happenings in the business and technology, world, history of famous businesses, unique achievements of various businesses and famous people behind the businesses and prevalent technologies. Achievements of Indian businesses and how they were started will also be covered. Also, advance world of technology will also be there, in which history of any old or new technology their inventors, their use, history of it will be there.
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. There will be 5 rounds and five teams will qualify for the finals.</li>
                                            <li>2. A Lone wolf is allowed(Single Participant).</li>
                                            <li>3. Quizmaster’s decision is final.</li>
                                            <li>4. No phones are allowed during the quiz. Anyone found using their phone will be disqualified immediately.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Harshit Joshi- 9653701705<br> Anamay Deshpande- 9689993649<br></b><br>
                                        <b class = "red">Team Size: 1 or 2</b><br><br>
                                    <b class = "red">Registration Fee: ₹100 per team</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="ignite"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det23')">“Spo-r-tify”: The Sports Quiz</a></h4><br>
                        <div class="details-div open is-paused" id="det23"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    Are you game? Go beyond basketball, baseball, and football to see what you know about chukkas, arnis, and batsmen. A Fun and exciting quiz that tests your knowledge from Messi and Ronaldo to Kohli and Dhoni.
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. There will be 5 rounds and five teams will qualify for the finals.</li>
                                            <li>2. A Lone wolf is allowed(Single Participant).</li>
                                            <li>3. Quizmaster’s decision is final.</li>
                                            <li>4. No phones are allowed during the quiz. Anyone found using their phone will be disqualified immediately.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Harshit Joshi- 9653701705<br> Anamay Deshpande- 9689993649<br></b><br>
                                        <b class = "red">Team Size: 1 or 2</b><br><br>
                                    <b class = "red">Registration Fee: ₹100 per team</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="sportify"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det24')">Pop-A-Razzi: Pop Culture Quiz</a></h4><br>
                        <div class="details-div open is-paused" id="det24"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                            The Pop-Culture Quiz is a unique and fun event aimed at those who are always on top of whatever’s happening in the world of music, movies, TV shows, and general global events. From Game of Thrones to the 2019 World Cup, the questions can be from any genre. Are you up for the challenge?
The event is being organized in collaboration with Litmus – The Literature Club of Manipal University Jaipur
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                                    <div class = "para">
                                    <ul>
                                            <li>This event encourages individual participation. There is a total of 2 rounds.</li>
                                    </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Rules and Regulations(Prelims,Finals):</u></h2>
                                    <div class = "para">
                                            <ul>
                                                    <li>1. Participants are expected to carry a pen for the competition.</li>
                                                    <li>2. Use of unfair means is prohibited and shall lead to disqualification.</li>
                                                    <li>3. Use of mobile phones or any such electronic device is strictly not allowed.</li>
                                                    <li>4. The decision of quizmaster shall be final and binding.</li>
                                                </ul><br>
                                    <b class = "red">Coordinators:</b> <br> <b class = "red">Nikhar Gupta- 9691453432<br> Rishabh Mehta- 9955141116</b><br><br>
                                    <b class = "red">Team Size: 1 or 2</b><br><br>
                                    <b class = "red">Registration Fee: ₹100 per team</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="filmistaan"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>
                    </div>
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img class="eventimg" src="port/images/7.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center" onclick="toggled('#abt7')">
                        <h3 class="clubtitle">Scribbles</h3>
                    </div>
                    <div class="about-div open is-paused" id="abt7">
                        <br><br><h4><a href="#" onclick="toggled('#det25')">Odds and Ends</a></h4><br>
                        <div class="details-div open is-paused" id="det25"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    The focus of this event is on experimenting imaginatively with collage to both help generate 
                                    ideas and to also produce some 'complete' work of art. A variety of collage techniques 
                                    helps to enhance exploratory mind and imaginations. This event is suitable for anyone with 
                                    an interest in art and in exploring new ways of generating ideas. You will explore collage as a 
                                    pictorial medium that examines contemporary subjects and ideas. The emphasis is on 
                                    experiencing collage as a tool for thinking, as a means for articulating form, as inspiration for 
                                    transferring ideas to their art practice and to encourage you to nurture new ideas.                                     
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. It is a collage event with solo/ team participation.</li>
                                            <li>2. Bits of newspapers and magazines are to be used to make an attractive piece of art. Students can bring additional embellishments for decoration (not necessary).</li>
                                            <li>3. No external help is allowed.</li>
                                            <li>4. No extra time will be provided to any team.</li>
                                            <li>5. The decision of the judge is final and abiding.</li>
                                            <li>6. Anyone found using unfair means or in violation of the above-mentioned rules and regulations will be disqualified immediately.</li>
                                            <li>7. The organising committee has the right to mend rules, cut- short the event, disqualify entries.</li>
                                            <li>8. Time- 2hours.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Gunjan Chaudhary- 9783210290<br> Harsh Athavale- 7987553856<br></b><br>
                                    <b class = "red">Registration Fee: ₹200 Solo or Team of 2</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="oddsandends"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det26')">Sass The Shoes</a></h4><br>
                        <div class="details-div open is-paused" id="det26"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    The participants must paint the given shoe on the theme provided on the spot. One can take part as a solo member. All the materials will be provided by us.  The judges will decide the winner.                                    
                            <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. The team will be provided with the topic on the spot and will be allowed to use their smartphones to look up ideas for the first 10 minutes.</li>
                                            <li>2. The event will carry on for 1 hour and 15 minutes after which they’ll have to submit their work.</li>
                                            <li>3. All the material will be provided, and any personal requisites are not allowed.</li>
                                            <li>4. Paints and brushes will be provided. Participants can bring their own paints as well.</li>
                                            <li>5. No external help is allowed.</li>
                                            <li>6. No extra time will be provided to any team.</li>
                                            <li>7. The decision of the judge is final and abiding.</li>
                                            <li>8. Anyone found using unfair means or in violation of the above-mentioned rules and regulations will be disqualified immediately.</li>
                                            <li>9. The organising committee has the right to mend rules, cut- short the event, disqualify entries.</li>
                                            <li>10. Time- 1hour</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Tauseef Zia- 7838595552<br> Sajjita Bhattacharya- 9953886355<br></b><br>
                                    <b class = "red">Registration Fee: ₹200 Solo</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="sasstheshoes"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det27')">Trippy Tiles</a></h4><br>
                        <div class="details-div open is-paused" id="det27"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                    The participants must paint the given shoe on the theme provided on the spot. One can take part as a solo member. All the materials will be provided by us.  The judges will decide the winner.                                    
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. It is a painting event with team participation.</li>
                                            <li>2. A mix of vibrant colours are to be used to make an attractive painting.</li>
                                            <li>3. No external help is allowed.</li>
                                            <li>4. No extra time will be provided to any team.</li>
                                            <li>5. The decision of the judge is final and abiding.</li>
                                            <li>6. Anyone found using unfair means or in violation of the above-mentioned rules and regulations will be disqualified immediately.</li>
                                            <li>7. The organising committee has the right to mend rules, cut- short the event, disqualify entries.</li>
                                            <li>8. Time- 1hr 30 mins.</li>
                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Mrityunjoy Chowdhury- 8235800439<br> Aditi Vyas- 6303593984<br></b><br>
                                    <b class = "red">Registration Fee: ₹200 Solo or Team of 2</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="trippytiles"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>
                    </div>
                </div><!-- .portfolio-content -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-3 no-padding">
                <div class="portfolio-content">
                    <figure>
                        <img class="eventimg" src="port/images/8.jpg" alt="">
                    </figure>

                    <div class="entry-content flex flex-column align-items-center justify-content-center" onclick="toggled('#abt8')">
                        <h3 class="clubtitle">Tapmi</h3>
                    </div>
                    <div class="about-div open is-paused" id="abt8">
                        <br><br><h4><a href="#" onclick="toggled('#det50')">Imprint</a></h4><br>
                        <div class="details-div open is-paused" id="det50"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                The participants will be asked to come up with advertisements or posters on topics that will be provided to them on spot at the time of the competition. The participants will have to come up with catchy lines, jingles and tag lines for the type of product or service they are given. They will be judged on the basis of creativity and the effectiveness of the pitch they will make in front of the judges.                                    
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. Number of participants should be between 2 and 4.</li>
                                            <li>2. Preparation time given to the participants will be 30-45 minutes.</li>
                                            <li>3. Time limit for presentation is 15 minutes.</li>
                                            <li>4. Participants will be provided with the stationary that will be required by them to make the posters.</li>
                                            <li>5. Participants should refrain from displaying obscenity, defamation and violence.</li>
                                        </ul><br>
                                    </div>
                            <h2 class = "lead"><u>Judgement:</u></h2>
                            <div class = "para">
                                            <ul>
                                                    <li>The most creative posters will be awarded with 1st, 2nd & 3rd poster</li>
                                                </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Akshita Sharma- 9571878761<br> Shubhang Awasthi- 8979307726<br></b><br>
                                    <b class = "red">Registration Fee: ₹200</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="imprint"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det51')">Catch Me if You Can</a></h4><br>
                        <div class="details-div open is-paused" id="det51"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                Catch me if you can is a situation based game in which participants will be given a situation where a new employee is accused of misusing the organization’s database. Certain set of clues will be provided to help identify the person at fault.                                    
                            <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. Use of mobile or internet will be prohibited during the event.</li>
                                            <li>2. Any interaction with the opposing team will lead to disqualification.</li>
                                            <li>3. The event is open to all the students.</li>
                                            <li>4. A team of 3-4 people.</li>
                                        </ul><br>
                                    </div>
                            <h2 class = "lead"><u>Judging Criteria:</u></h2>
                            <div class = "para">
                                            <ul>
                                                    <li>First and second prize would be given based on the expected or closeness to the required answer.</li>
                                                </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Benjamin Baptist- 8112262472<br></b><br>
                                    <b class = "red">Registration Fee: ₹200</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="catchme"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                                <h4><a href="#" onclick="toggled('#det52')">Stock Simulation</a></h4><br>
                        <div class="details-div open is-paused" id="det52"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                The biggest game of luck, speculation and strategies, The Stock Simulation, the game modelled on the stock exchange and capturing the excitement of real- time trading. The game tests your analytical skills and quick thinking within a short span of time given to you to reap the maximum profits.                                    
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. The event is open to all the students.</li>
                                            <li>2. Participants in a team should be from the same institute and no participant can be a part of more than one team.</li>
                                            <li>3. Teams should consist of 4 members.</li>
                                            <li>4. No changes in team composition are allowed after registration.</li>
                                            <li>5. Teams must adhere to deadlines for the rounds failing to which teams may be disqualified.</li>
                                            <li>6. The decisions of the judges shall be final and abiding on all the participants.</li>
                                        </ul><br>
                                    </div>
                            <h2 class = "lead"><u>Judging Criteria:</u></h2>
                            <div class = "para">
                                                    <ul>
                                                            <li>The first, second and third prizes would be based on the profits earned.</li>
                                                        </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Aman Anand- 7001439193<br></b><br>
                                    <b class = "red">Registration Fee: ₹200 per team</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="stock"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det53')">Bullwhip</a></h4><br>
                        <div class="details-div open is-paused" id="det53"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                The Beer Game is a widely popular role-play simulation game that lets participants experience typical coordination problems of (traditional) supply chains, in which information sharing and collaboration does not exist. The game involves four players representing four stages of a beer supply chain: Retailer, Wholesaler, Distributor, and Manufacturer. Players experience the pressures of playing a role in a complex system and can see long range effects during the course of the game. Each player participates as a member of a team that must meet its customers’ demands. The object of the game is to minimize the total cost for your team.                                     
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. The event is open to all the students.</li>
                                            <li>2. Participants in a team should be from the same institute and no participant can be a part of more than one team.</li>
                                            <li>3. Teams should consist of 4 members.</li>
                                            <li>4. No changes in team composition are allowed after registration.</li>
                                            <li>5. Teams must adhere to deadlines for the rounds failing to which teams may be disqualified.</li>
                                            <li>6. The decisions of the judges shall be final and abiding on all the participants.</li>
                                            <li>7. Every order must be fulfilled, either directly (should the players’ inventory be large enough) or later in subsequent rounds.</li>
                                            <li>8. Inventory and backlog incur cost.</li>
                                            <li>9. Players are not allowed to communicate. The only information they can exchange is the order amount; there is no transparency as to what stock levels or actual customer demand is; only the retailer knows the external demand.</li>
                                        </ul><br>
                                    </div>
                                    <h2 class = "lead"><u>Judging Criteria:</u></h2>
                                    <div class = "para">
                                                            <ul>
                                                                    <li>Depends on effectiveness and efficiency of the team. There will be first and second prize.</li>
                                                                </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Aman Anand- 7001439193<br> Benjamin Baptist- 8112262472<br> Akshita Sharma- 9571878761<br></b><br>
                                    <b class = "red">Registration Fee: ₹200 per team</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="bullwhip"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>

                        <h4><a href="#" onclick="toggled('#det54')">Prove me Wrong</a></h4><br>
                        <div class="details-div open is-paused" id="det54"> <p class="detailsp">  <h2 class = "lead"><u>Description</u></h2>
                            <div class = "para">
                                Two Teams will compete for and against on a topic provided.
                                    <br>
                            </div><br>
                            <h2 class = "lead"><u>Rules:</u></h2>
                            <div class = "para">
                                    <ul>
                                            <li>1. Affirmative must advocate everything required on the topic.</li>
                                            <li>2. Any gains made outside of the establishment procedure are disqualified.</li>
                                            <li>3. Relevancy to the topic is important.</li>
                                            <li>4. No abusive language.</li>
                                        </ul><br>
                                    </div>
                            <h2 class = "lead"><u>Judging Criteria:</u></h2>
                            <div class = "para">
                                                            <ul>
                                                                    <li>1. Concept</li>
                                                                    <li>2. Creativity</li>
                                                                    <li>3. Clarity of Message/Idea</li>
                                                                </ul><br>
                                        <b class = "red">Coordinators:</b> <br> <b class = "red">Shubhang Awasthi- 8979307726<br></b><br>
                                    <b class = "red">Registration Fee: ₹200 pet team</b><br><br>
                                    <form action="" method="POST">
                               <input type="hidden" name="event" value="proveme"/>
                               <input type="submit" class = "Register" value="Register">
                               </form>
                        </div></p></div>
                    </div>
                </div><!-- .portfolio-content -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container-fluid -->
</div><!-- .outer-container -->

            
    <!-- Gallery Area End -->
    
    <!-- **** All JS Files ***** -->
    <?php 
    include 'footer.php';
    ?>
    <script>
        function success()
        {
            Swal.fire({
	        title: 'Registration Successfull!',
            text: 'Do you want to continue',
	        type: 'success',
	        confirmButtonText: 'Cool'
	        })
        }
        function alertmessage()
        {
            Swal.fire({
	        title: 'Registration Failed!',
	        type: 'error',
	        confirmButtonText: 'Ok'
	    })
        }
</script>
    <!-- jQuery 2.2.4 -->
    <script src="alime/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="alime/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="alime/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="alime/js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="alime/js/default-assets/active.js"></script>
    <!--About-->
    <script src="port/js/button.js"></script>
    <!--Details-->