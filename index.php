<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link  rel="stylesheet" href="style.css">
    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    
    <script src="script1.js"></script> 
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

    <nav class="navbar">
        
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#doctors">doctors</a>
        <a href="#shedule">shedule</a>
        <a href="#facility">facility</a>
        <a href="#book">book</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
        <a href="#login">login</a>
        
       
        
    
        
</nav>

    <div id="menu-btn" class="fas fa-bars"></div>
    <div id="google_translate_element"></div>

</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">

    <div class="image">
        <img src="home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>Welcome To </h3>
        <h3>Health Care </h3>
        <p>It is Health That is Real Wealth And Not Pieace Of Gold And Silver.We care About Your Health :)</p>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Get 80% Off On Health Checkup @ Healthians. 87 Tests in Rs649 Only. 100% Accurate Reports!
                87 Tests - hba1c, Complete Hemogram, Iron Studies, KFT, LFT. 7.5 Lac+
                Families Tested. Money Back Guarantee. 150+ Cities Presence. Trusted by Yuvraj Singh.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Tata Magic Express Ambulance offers safe & efficient patient transport during emergencies.
                Tata Magic Express Ambulance provides
                ample space for the patients and the caregivers. Improved Design.</p>
        
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Search Best  Doctor In health care , Top Results From Trusted Resources.  
                Explore the Best Info Now.
                 100+ Unique Results. Find All Info You Want. Quick Answers.
                 Useful & Relevant. Find in Seconds. Services: Secure Search.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>A hospital is a health care institution providing patient treatment with specialized health science
                and auxiliary healthcare staff and medical equipment. The best-known type of hospital is the general
                 hospital.</p>
        
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>The determination of the number of hospital beds a facility subarea is authorized to hold, called bed 
                need, is defined in the Michigan Hospital Standards and published by the CON Commission and MDCH.
                </p>
            
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>As a Total Senior Care PACE participant, you will receive primary care services at the Total Senior
                Care Center or from one of the community-based primary care physicians in our network.
                If you need care in a hospital or from a specialist. </p>
        </div>

    </div>

</section>
</body>
</html>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="about-img (1).svg" alt="">
        </div>

        <div class="content">
          <h3>We Take Care of your Healthy Life</h3>
<p class="text">we are happy to provide care for all ages of people in our HEalth care Hospital.
  The international patient Departmentat Health care is dedicated to ensuring 
  international patients have a hassle-free,comfortable medical journey.
 <span class="dots"> ...</span> <span class="moreText"> Our department works extensively with doctors and NGOs around  the world to provide acess
  to quality healthcare at affotdable prices.</span></p>
<button class="read-more-btn">Read More </button>
        </div>
    </div>

</section>
<script>
const readMoreBtn = document.querySelector(".read-more-btn");
const text = document.querySelector(".text");

readMoreBtn.addEventListener("click", (e) => {
  text.classList.toggle("show-more");
  if (readMoreBtn.innerText === "Read More") {
    readMoreBtn.innerText = "Read Less";
  } else {
    readMoreBtn.innerText = "Read More";
  }
});
</script>

<!-- about section ends -->

<!-- doctors section starts  -->
<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="doc-1.jpg" alt="">
            <h3>Dr.Preeti Sharma</h3>
            <span>Gynecologist</span>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="doc-2.jpg" alt="">
            <h3>Dr.Arvind Rawal</h3>
            <span>Orthopedics</span>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="doc-3.jpg" alt="">
            <h3>Dr.C.S.Agrawal</h3>
            <span>Plastic Surgery</span>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="doc-4.jpg" alt="">
            <h3>Dr.Nitesh Shah</h3>
            <span>Physiotherapist</span>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="doc-5.jpg" alt="">
            <h3>Dr.Amit Maheshawari</h3>
            <span>Neurologist</span>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="doc-6.jpg" alt="">
            <h3>Dr.Karthik Singh</h3>
            <span>Dermatology</span>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link  rel="stylesheet" href="stylere.css">

</head>
<body>
  <header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

    <div class="navbar">
        <a href="home.html">home</a>
        <a href="services.html">services</a>
        <a href="about.html">about</a>
        <a href="doctors.html">doctors</a>
        <a href="facility.html">facility</a>
        <a href="book.html">book</a>
        <a href="review.html">review</a>
        <a href="blogs.html">blogs</a>
        <a href="login.php">login</a>
        <a href="shedule.html">shedule</a>
    
        
    </div>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="style2.css">
</head>
<body>
    
</body>
</html>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="docter">
    <div class="schedule content-block">
        <div class="container">
            <h1 data-aos="zoom-in-up" class="aos-init aos-animate">Schedule</h1>
            
    
            <div class="timetable">
        
              <!-- Schedule Top Navigation -->
             <!-- <nav class="nav nav-tabs">
                <a class="nav-link active">Mon</a>
                <a class="nav-link">Tue</a>
                <a class="nav-link">Wed</a>
                <a class="nav-link">Thu</a>
                <a class="nav-link">Fri</a>
                <a class="nav-link">Sat</a>
                <a class="nav-link">Sun</a>
              </nav>-->
        
              <div class="tab-content">
                <div class="tab-pane show active">
                  <div class="row">
        
                    <!-- Schedule Item 1 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="doc-1.jpg" alt="Dr.Preeti Sharma">
                          
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">4:00pm - 5:00pm</div>
                          <div class="timetable-item-name">Dr.Preeti Sharma</div>
                          <div class="timetable-item-name">Gynecologist</div>
                          
                          <a href="book.html" class="btn btn-primary btn-book">Book</a>
                          
                          


                          <div class="timetable-item-like">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="timetable-item-like-count">11</div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 2 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="doc-2.jpg" alt="Dr.Arvind Rawal">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">5:00pm - 6:00pm</div>
                          <div class="timetable-item-name">Dr.Arvind Rawal</div>
                          <div class="timetable-item-name">Orthopedics</div>
                          
                          <a href="book.html" class="btn btn-primary btn-book">Book</a>
                          <div class="timetable-item-like">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="timetable-item-like-count">28</div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 3 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="doc-3.jpg" alt="Dr.C.S.Agrawal">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">5:00pm - 6:00pm</div>
                          <div class="timetable-item-name">Dr.C.S.Agrawal</div>
                          <div class="timetable-item-name">Plastic Surgery</div>
                          
                          <a href="book.html" class="btn btn-primary btn-book">Book</a>
                          <div class="timetable-item-like">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="timetable-item-like-count">28</div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 4 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="doc-4.jpg" alt="Dr.Nitesh Shah">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">7:00pm - 8:00pm</div>
                          <div class="timetable-item-name">Dr.Nitesh Shah</div>
                          <div class="timetable-item-name">Physiotherapist</div>
                          
                          <a href="book.html" class="btn btn-primary btn-book">Book</a>
                          
                          <div class="timetable-item-like">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="timetable-item-like-count">23</div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 5 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="doc-5.jpg" alt="Dr.Amit Maheshawari">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">6:00pm - 7:00pm</div>
                          <div class="timetable-item-name">Dr.Amit Maheshawari</div>
                          <div class="timetable-item-name">Neurologist</div>
                          
                          <a href="book.html" class="btn btn-primary btn-book">Book</a>
                          <div class="timetable-item-like">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="timetable-item-like-count">14</div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <!-- Schedule Item 6 -->
                    <div class="col-md-6">
                      <div class="timetable-item">
                        <div class="timetable-item-img">
                          <img src="doc-6.jpg" alt="Dr.Karthik Singh">
                        </div>
                        <div class="timetable-item-main">
                          <div class="timetable-item-time">8:00pm - 9:00pm</div>
                          <div class="timetable-item-time">monday-friday</div>
                          <div class="timetable-item-name">Dr.Karthik Singh</div>
                          <div class="timetable-item-name">Dermatology</div>
                          
                          
                          <a href="book.html" class="btn btn-primary btn-book">Book</a>
                          <div class="timetable-item-like">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="timetable-item-like-count">9</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
  
</body>
</html>
<!-- facility section starts  -->
<section class="facility" id="facility">

    <div class="container">
    
    <h1 class="heading"><span>'</span> our facilities <span>'</span></h1>
    
    <div class="box-container">
    
        <div class="box" data-aos="zoom-in">
            <a href="team (1).jpeg" title="our team">
                <img src="team (1).jpeg" alt="">
            </a>
        </div>
    
        <div class="box" data-aos="zoom-in">
            <a href="team (2).jpeg" title="our lab">
                <img src="team (2).jpeg" alt="">
            </a>
        </div>
    
        <div class="box" data-aos="zoom-in">
            <a href="team (7).jpeg" title="emergency rooms">
                <img src="team (7).jpeg" alt="">
            </a>
        </div>
    
        <div class="box" data-aos="zoom-in">
            <a href="team (6).jpeg" title="expert doctors">
                <img src="team (6).jpeg" alt="">
            </a>
        </div>
    
        <div class="box" data-aos="zoom-in">
            <a href="team (9).jpeg" title="expert doctors">
                <img src="team (9).jpeg" alt="">
            </a>
        </div>
    
        <div class="box" data-aos="zoom-in">
            <a href="team (4).jpeg" title="emergency rooms">
                <img src="team (4).jpeg" alt="">
            </a>
        </div>
    
        <div class="box" data-aos="zoom-in">
            <a href="team (8).jpeg" title="expert doctors">
                <img src="team (8).jpeg" alt="">
            </a>
        </div>
    
        <div class="box" data-aos="zoom-in">
            <a href="team (5).jpeg" title="emergency rooms">
                <img src="team (5).jpeg" alt="">
            </a>
        </div>
    
        <div class="box" data-aos="zoom-in">
            <a href="team (4).jpeg" title="enough beds">
                <img src="team (4).jpeg" alt="">
            </a>
        </div>
    
    </div>
    
    </div>
    
    </section>

<!-- doctors section ends -->

<!-- booking section starts   -->
<!--review-->
<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="pic-1.png" alt="">
            <h3>Mr.Abhishek</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Recently visited health check up department of Health care Hospital for a whole body check up. The entire process from check in to the end was seamless. The staff at the health check department was courteous, helpful and very attentive. I would highly recommend this hospital to anyone looking for something similar services.</p>
        </div>

        <div class="box">
            <img src="pic-2.png" alt="">
            <h3>miss.Tanvi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">We met Dr Karthik last month with severe cough and sputum for my father Dr Varaprasad. His way of handling patients is excellent and so soothing that the patient feels immensely confident about recovery. Thanks to Dr. Amit, within 2 weeks, he is completely normal.</p>
        </div>

        <div class="box">
            <img src="pic-3.png" alt="">
            <h3>Mr.Darshan</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Dr. Nilesh  Reddy is very experienced Physiotherapist doctor in Health care hospital. I have been consulting him for 10+ years for me, family and my Friends. He did cataracts surgery for my mother and now she can see like a normal person.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->
<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here</h3>
                


                <p>Normally the digestive enzymes are secreted in inactive form by the pancreas and 
                    these enzymes pass through the pancreatic duct into the duodenum (small intestine), 
                    where the enzymes get activated. In acute pancreatitis, the digestive enzymes get
                     activated within the pancreas and causes destruction of the pancreatic tissue 
                     (necrosis)</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here</h3>
                <p>The exam Fetal echocardiography uses sound waves that “echo” off the structures of the
                    fetus’s heart. A ultrasound machine analyzes these sound waves and creates a picture
                     (echocardiogram) of their heart’s interior. This image provides information on how
                      baby’s heart is formed and whether it’s working properly.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here</h3>
                
                <div id="google_translate_element"></div>

                <script type="text/javascript">
                 function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                 }
               </script>
               
               <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <p>Hydrocephalus can be either congenital – present before birth – or acquired, which 
                    develops after birth. There are two types: communicating and non-communicating. 
                    In a case of communicating hydrocephalus, CSF is blocked after leaving the brain’s 
                    ventricles. Non-communicating cases involve a blockage between one ventricle and 
                    another.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            
        </div>

    </div>

</section>

</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive wedding planner website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styleh.css">

</head>
<body>
    <!-- healthy section starts  -->

<section class="healthy" id="healthy">

    <div class="heading">
        <h1>healthy  living <br> tips</h1>
        
    </div>

    <div class="box-container">

        <div class="box">
            <img src="healthy stoke.jpg" alt="">
            <div class="info">
                <h3>Eating healthy food</h3>
                <p>       May help you live longer. Keeps skin, teeth, and eyes healthy. Supports muscles, Boosts immunity,
                    Strengthens bones, Lowers risk of heart disease.       </p>
               
            </div>
        </div>

        <div class="box">
            <img src="morning walks.jpg" alt="">
            <div class="info">
                <h3>morning walks</h3>
                <p>  Feeling better. Lower the risk of heart disease, stroke, diabetes, and certain types of cancer.
                     Clear your mind.Lower blood pressure. Increase energy. Boost your mental and emotional health.</p>                        .</p>
                
            </div>
        </div>

        <div class="box">
            <img src="applre.png" alt="">
            <div class="info">
                <h3>Apples</h3>
                <p>  Apples are an incredibly nutritious fruit that offers multiple health benefits. They’re rich in fiber
                     and antioxidants. Eating them is linked to a lower risk of many chronic conditions, 
                     including diabetes, heart disease, and cancer. Apples may also promote weight loss and improve gut and brain health.                                              </p>
                
            </div>
        </div>

        <div class="box">
            <img src="exercise.jpg" alt="">
            <div class="info">
                <h3>Yoga</h3>
                <p> Self-acceptance Increases. Attention improves. Concentration improves. Memory improves.
                     Learning efficiency improves.Symbol coding improves. Depth perception improves </p>
         
            </div>
        </div>

        <div class="box">
            <img src="games.jpg" alt="">
            <div class="info">
                <h3>playing games</h3>
                <p> It can boost their creativity. It can help in their physical development.
                    It gives them an opportunity to learn new things.It can help them develop a positive attitude. 
                    It helps in personality development.                 .</p>
               
            </div>
        </div>

        <div class="box">
            <img src="food.jpg" alt="">
            <div class="info">
                <h3>healthy food</h3>
                <p>  Lowers risk of heart disease,  type 2 diabetes, and some cancers
                    Supports healthy pregnancies and breastfeeding
                    Helps the digestive system function
                    Helps achieve and maintain a healthy weight     .</p>
          
            </div>
        </div>

    </div>

</section>

<!-- healthy section ends -->
<!-- blogs section ends -->
<?php

echo "<meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>";

$con=mysqli_connect('localhost','root','','MyDB');

$sql='SELECT * from tbl_visitor';

$res=mysqli_query($con,$sql);

$row=mysqli_fetch_array($res);

$str=$row[0];

$length=strlen($str);

if($length==1)
 $counter="00000000".$row[0];
else if($length==2)
 $counter="0000000".$row[0];
else if($length==3)
 $counter="000000".$row[0]; 
else if($length==4)
 $counter="00000".$row[0];
else if($length==5)
 $counter="0000".$row[0];
else if($length==6)
 $counter="000".$row[0];
else if($length==7)
 $counter="00".$row[0];
else if($length==8)
 $counter="0" .$row[0];

$up_count=$row[0]+1; 
$sql="UPDATE `tbl_visitor` SET `count`= '$up_count' WHERE 1";

mysqli_query($con,$sql);

?>

<div class='row' style='margin-left:500px;margin-top:10px' >
 <div cass='col-4'>
  <h1 class='text-danger'>Total Visits</h1>
 </div>
 <div class='col-8'>
  <table class='text-white bg-info table-sm'> 
   <tr>
      <td style='border:10px solid pink'><?php echo $counter[0] ?></td>
      <td style='border:10px solid pink'><?php echo $counter[1] ?></td>
      <td style='border:10px solid pink'><?php echo $counter[2] ?></td>
      <td style='border:10px solid pink'><?php echo $counter[3] ?></td>
      <td style='border:10px solid pink'><?php echo $counter[4] ?></td>
      <td style='border:10px solid pink'><?php echo $counter[5] ?></td>
      <td style='border:10px solid pink'><?php echo $counter[6] ?></td>
      <td style='border:10px solid pink'><?php echo $counter[7] ?></td>
      <td style='border:10px solid pink'><?php echo $counter[8] ?></td>
    </tr>
  </table>
 </div>
</div>


 

 
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
            
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> anasbhai@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            

        </div>
        
    </div>
    

</section>


<!-- footer section ends -->
















<script>

    AOS.init({
        duration:1000,
        delay:400
    });
    
    </script>
   
          
   
   
   
   

<!--</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>custom checkbox</title>
    <link rel="stylesheet" href="style8.css">

</head>
<body>
    <label>
        <input type="checkbox">
        <span class="check"></span>
    </label>-->
   
</body>
</html>
