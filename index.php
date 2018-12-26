<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Responsive Personal Portfolio vCard Template">
   <meta name="author" content="Ahmed Faruk">
   <title>csc412 Final Term Project</title>
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
   <link href="bootstrap.min.css" rel="stylesheet" media="screen">
   <link href="style.css" rel="stylesheet" media="screen">
   <script src="assets/js/jquery.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/js/jquery.sticky.js"></script>   
   <script src="assets/js/jquery.inview.min.js"></script> 
   <script src="assets/js/jquery.easypiechart.js"></script>
   <script src="assets/js/scripts.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src="clock.js"></script>
</head>

<body>
   <header class="header">
      <nav class="navbar navbar-custom" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#resume">Resume</a></li>
                  <li><a href="#skills">Skills</a></li>
                  <li><a href="#contact">Contact</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </header>
   
   <section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
        <div class="container" id = "mainpage">
         <h2 class="section-title wow fadeInUp"></h2>
         <h1>Welcome</h1>
         <p>
            Glad to have you onboard!
         </p>
         <p>
            This is just a welcome page which is immediately shown once the page loads. 
         </p>
         <p>
            The content for this page maybe changed in the future.
         </p>
         <p>This is the current time.</p>
         <div class = "container">
            <div id="lblTime" class = "clock"></div> 
         </div>
         
      </div>
    </section>
    
   <section id="about" class="about-section section-padding">
      <div class="container">
         <h2 class="section-title wow fadeInUp"></h2>
         <div class = "circle">
         </div>
         <h1>About Me</h1>
         <p>
            My name is Gangzhaorige Li.
            I'm an international student currently pursuing a bachelor degree in Computer Science at San Francisco State University. I love coding which is the reason I choose this particular major.
            During my free time, I like to play chess and video game online. I love competitive and strategic games. These are my favorites: League of Legends (Division: Diamond 2), Yu-gi-oh Duel Links (Division: King of Games),
            Red Alert 2, and Yuri's Revenge(Pretty Old Game). Also, I love wathing animes, such as, all Dragon ball series, Naruto series, and Detective Conan. I know four languages: Mandarin, English, Mongolian and Russian. If anyone would like to code or play these games with me, here is my <a href= "https://github.com/gangzhaorige/gangzhaorige.github.io">github</a>.
         </p>
         &nbsp;
         <h1>About the site</h1>
         <p>
            This website was created for a class CSC412 which student can make and design their own website depending on their own interests at San Francisco State University.
            While working on this project, I felt a lot of enjoyment. The project gave me a lot of experiences with HTML, CSS, Bootstrap, and JaveScript.
         </p>
         &nbsp;
         <h1>Technologies Used.</h1>
         <img class="img-responsive" src ="img/js.png" width="125px">
         &nbsp;
         <img class="img-responsive" src ="img/bootstrap.png" width="125px">
         &nbsp;
         <img class="img-responsive" src ="img/html.png" width="125px">
         &nbsp;
         <img class="img-responsive" src ="img/css.png" width="125px">
      </div>
   </section>

   <section id="resume" class="resume-section section-padding">
      <div class="container">
         <h2 class="section-title wow fadeInUp"></h2>
         <h1 id = "aboutme">RESUME</h1>
         <div class="row">
            <div class="col-md-12">
               <div class="resume-title">
                  <h3>Education</h3>
               </div>
               <div class="resume">
                  <ul class="timeline">
                     <li>
                        <div class="posted-date">
                           <span class="month">Current</span>
                        </div>
                        <div class="timeline-panel wow fadeInUp">
                           <div class="timeline-content">
                              <div class="timeline-heading">
                                 <h3>Bachelor of Science</h3>
                                 <span>Computer Science, San Francisco State University, USA</span>
                              </div>
                              <div class="timeline-body">
                                 <span>Currently pursuing bachelor degree for Computer Science</span>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-inverted">
                        <div class="posted-date">
                           <span class="month">2016-2018</span>
                        </div>
                        <div class="timeline-panel wow fadeInUp">
                           <div class="timeline-content">
                              <div class="timeline-heading">
                                 <h3>Bacherlor Of Science</h3>
                                 <span>College Of San Mateo, San Mateo, USA</span>
                              </div>
                              <div class="timeline-body">
                                 <span>Transfered from this college to San Francisco State University.</span>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="posted-date">
                           <span class="month">2004-2016</span>
                        </div>
                        <div class="timeline-panel wow fadeInUp">
                           <div class="timeline-content">
                              <div class="timeline-heading">
                                 <h3>High School Certificate</h3>
                                 <span>Mongolian-Russian Joint School, Ulaanbaatar, Mongolia</span>
                              </div>
                              <div class="timeline-body">
                                 <span>One of the top Russian Highschool in Mongolia</span>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="skills" class="skills-section section-padding">
         <div class="container" id = "skillsok">
            <h2 class="section-title wow fadeInUp"></h2>
            <h1 id = "aboutme">SKILLS</h1>
            <div class="row">
               <div class="col-md-6">
                  <div class="skill-progress">
                     <div class="skill-title">
                        <h3>Java</h3>
                     </div>
                     <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" ><span>90%</span>
                        </div>
                     </div>
                  </div>
                  <div class="skill-progress">
                     <div class="skill-title">
                        <h3>C++</h3>
                     </div>
                     <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" ><span>70%</span>
                        </div>
                     </div>
                  </div>
                  <div class="skill-progress">
                     <div class="skill-title">
                        <h3>Java Script</h3>
                     </div>
                     <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" ><span>50%</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skill-progress">
                     <div class="skill-title">
                        <h3>CSS</h3>
                     </div>
                     <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" ><span>70%</span>
                        </div>
                     </div>
                  </div>
                  <div class="skill-progress">
                     <div class="skill-title">
                        <h3>HTML</h3>
                     </div>
                     <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" ><span>70%</span>
                        </div>
                     </div>
                  </div>
                  <div class="skill-progress">
                     <div class="skill-title">
                        <h3>Python</h3>
                     </div>
                     <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" ><span>30%</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="skill-chart text-center">
               <h3>Other Skills</h3>
            </div>
            <div class="row more-skill text-center" id = "chart">
               <div class="col-xs-12 col-sm-4 col-md-2">
                  <div class="chart" data-percent="90" data-color="e74c3c">
                     <span class="percent"></span>
                     <div class="chart-text">
                        <span>Mongolian</span>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-2">
                  <div class="chart" data-percent="95" data-color="ffbb00">
                     <span class="percent"></span>
                     <div class="chart-text">
                        <span>Mandarin</span>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-2">
                  <div class="chart" data-percent="90" data-color="3498db">
                     <span class="percent"></span>
                     <div class="chart-text">
                        <span>English</span>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-4 col-md-2">
                  <div class="chart" data-percent="80" data-color="3498db">
                     <span class="percent"></span>
                     <div class="chart-text">
                        <span>Russian</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      &ensp;
      <section id="contact" class="contact-section section-padding">
         <h2 class="section-title wow fadeInUp"></h2>
         <h1 id = "aboutme">CONTACT ME</h1>
         <div class="container" id = "contactok">
            <form class = "contact-form" action = "contact.php" method = "post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
            
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            
            <label for="emails">Your Email</label>
            <input type="text" id="lname" name="email" placeholder="Your email..">
            
            <label for="subject">Subject</label>
            <input type="text" id="lname" name="subject" placeholder="Your Subject..">
            
            <label for="message">Message</label>
            <textarea id="messages" name="message" placeholder="Write something.." style="height:200px"></textarea>
            <input type="submit" name = "submit" value="Submit">
            </form>
         </div>
        
      </section>
</body>
</html>