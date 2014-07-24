<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package College
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 
  <!-- CSS
 ================================================== -->
  <!-- font style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->  
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <style>
  .slider{
    width: 100%;
  }
  .flexslider{
    margin: 0 auto;
  }
  .headlineHP{
    line-height: 1;
  }
  .cbp-hrmenu .cbp-hrsub {
    z-index: 100;
  }
  .cbp-hrmenu > ul > li {
    margin-bottom: 0;
    font-family: 24px/1.22 "Open Sans Condensed", sans serif;
  }

  </style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="containerWrap" style="background-color:#003366">
  <div class="container">
  <div class="container">
    <div class="eight columns">
      <div id="cseLogo"><a href="http://cmsdev2.cse.edu" title="CSE Homepage"><img src="http://cmsdev2.cse.edu/global/images/home/CSE-Header-Logo.png" alt="CSE Homepage"></a></div>              
    </div>
    
    <div class="eight columns">  
        
      <div class="circleCenter">      
        <div class="circle"><div class="text"><a href="/alumni/">Give</a></div></div>
        <div class="circle"><div class="text"><a href="/calendar/">Events</a></div></div>
        <div class="circle"><div class="text"><a href="/apply/">Apply</a></div></div>
      </div>  
 
      <form method="post" name="searchForm" class="searchTop" id="searchForm" action="/search/search_results.dot">
        <input type="text" id="googleSearchQuery" name="googleSearchQuery" placeholder="Search CSE.edu" onfocus="document.getElementById('googleSearchQuery').value='';" class="text" title="Search CSE.edu">
        <input type="submit" name="hidden search submit button" class="search-button" value="">
      </form>

    </div>
  </div>
  <div class="container">
  <div class="main">
    <!-- HTML Mobile Menu -->
    <div class="showhide">
      <span class="icon"><em></em><em></em><em></em><em></em></span>
      <span class="searchIcon"><img src= "http://cmsdev2.cse.edu/responsive/img/searchIcon.png" alt="Search Icon for Mobile Devices"></span>
    </div>
        <!-- End Test HTML Mobile Menu -->
    <div class="sixteen columns">
        <form method="post" name="searchForm" id="searchForm" class="search" action="/search/search_results.dot">
          <input type="text" id="googleSearchQuery" name="googleSearchQuery" placeholder="Search CSE.edu" onfocus="document.getElementById('googleSearchQuery').value='';" class="text" title="Search CSE.edu">
          <input type="submit" name="hidden search submit button" class="search-button" value="">
        </form>
    </div>
    <div class="sixteen columns">
      <nav id="cbp-hrmenu" class="cbp-hrmenu">
          <ul>
            <li>
              <a class="dropdown" href="">Admissions</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4><a href="/admissions/">ADMISSIONS</a></h4>
                    <ul>
                      <li><a href="/admissions/apply.dot" title="Admissions - Apply Now">Apply Now</a></li>
                      <li><a href="/admissions/consumer-information.dot">Consumer Information</a></li>
                      <li><a href="/admissions/tuition-and-fees/" title="Admissions - Tuition and Fees">Tuition and Fees</a></li>
                      <li><a href="/admissions/financial-aid/" title="Admissions - Financial Aid">Financial Aid</a></li>
                      <li><a href="/admissions/bursar/">Bursar</a></li>
                      <li><a href="/admissions/educational-partnerships/" title="Admissions - Educational Partnerships">Educational Partnerships</a></li>
                      <li><a href="/admissions/policies-and-procedures.dot">Policies and Procedures</a></li>
                      <li><a href="/admissions/special-programs.dot">Special Programs</a></li>              
                      <li><a href="/admissions/visit-cse/">Visit CSE</a></li>

                    </ul>
                  </div> 
                  <div>
                    <h4><a href="/admissions/womens-college/">WOMEN'S COLLEGE</a></h4>
                    <ul>
                      <li><a href="/admissions/womens-college/how-to-apply.dot" title="Women's College - How to Apply">How to Apply</a></li>
                      <li><a href="/admissions/womens-college/why-a-womens-college.dot">Why a Women's College?</a></li>
                      <li><a href="/admissions/womens-college/programs-of-study.dot " title="Women's College - Programs of Study">Programs of Study</a></li>
                      <li><a href="/admissions/womens-college/enrollment-process.dot" title="Women's College - Enrollment Process">Enrollment Process</a></li>
                      <li><a href="/admissions/womens-college/transfer.dot" title="Women's College - Transfer Students">Transfer Students</a></li>
                      <li><a href="/admissions/womens-college/international.dot" title="Women's College - International Students">International Students</a></li>
                      <li><a href="/admissions/tuition-and-fees/undergraduate.dot" title="Women's College - Tuition and Fees">Tuition and Fees</a></li>
                      <li><a href="http://www.cse.edu/admissions/financial-aid/application-process/womens-college.dot" title="Women's College - Financial Aid">Financial Aid</a></li>
                      <li><a href="http://selfservice.cse.edu/web//Admissions/Inquiry.aspx?inquiryformid=1" title="Women's College - Request Information">Request Information</a></li>
                      <li><a href="/admissions/visit-cse/index.dot" title="Women's College - Visit CSE">Visit CSE</a></li>

                    </ul>
                  </div>  
                  <div>
                    <h4><a href="/admissions/continuing-studies/">CONTINUING STUDIES</a></h4>
                    <ul>
                      <li><a href="/admissions/continuing-studies/how-to-apply.dot " title="Continuing Studies - How to Apply">How to Apply</a></li>
                        <li><a href="/admissions/continuing-studies/programs-of-study.dot" title="Continuing Studies - Programs of Study">Programs of Study</a></li>
                        <li><a href="/admissions/continuing-studies/enrollment-process.dot" title="Continuing Studies - Enrollment Process">Enrollment Process</a></li>
                        <li><a href="/admissions/continuing-studies/transfer.dot" title="Continuing Studies - Transfer Students">Transfer Students</a></li>
                        <li><a href="/admissions/continuing-studies/international/" title="Continuing Studies - International Students">International Students</a></li>
                      <li><a href="/partnerships" title="Continuing Studies - Educational Partnerships">Educational Partnerships</a></li> 
                        <li><a href="/admissions/tuition-and-fees/undergraduate.dot" title="Continuing Studies - Tuition and Fees">Tuition and Fees</a></li>
                        <li><a href="/admissions/financial-aid/application-process/continuing-studies.dot" title="Continuing Studies - Financial Aid">Financial Aid</a></li> 
                        <li><a href="http://selfservice.cse.edu/web//Admissions/Inquiry.aspx?inquiryformid=3" title="Continuing Studies - Request Information" target="_blank">Request Information</a></li>
                        <li><a href="/admissions/visit-cse/" title="Continuing Studies - Visit CSE">Visit CSE</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4><a href="/admissions/graduate-studies/">GRADUATE STUDIES</a></h4>
                    <ul>
                      <li><a href="/admissions/graduate-studies/how-to-apply.dot" title="Graduate Studies - How to Apply">How to Apply</a></li>
                        <li><a href="/admissions/graduate-studies/programs-of-study.dot" title="Graduate Studies - Programs of Study">Programs of Study</a></li>
                        <li><a href="/admissions/graduate-studies/enrollment-process.dot" title="Graduate Studies - Enrollment Process">Enrollment Process</a></li>
                        <li><a href="/admissions/graduate-studies/transfer.dot" title="Graduate Studies - Transfer Students">Transfer Students</a></li>
                        <li><a href="/admissions/graduate-studies/international/" title="Graduate Studies - International Students">International Students</a></li>
                        <li><a href="/partnerships" title="Graduate Studies - Educational Partnerships">Educational Partnerships</a></li>
                        <li><a href="/admissions/tuition-and-fees/graduate-studies.dot" title="Graduate Studies - Tuition and Fees">Tuition and Fees</a></li> 
                        <li><a href="/admissions/financial-aid/application-process/graduate-studies.dot" title="Graduate Studies - Financial Aid">Financial Aid</a></li>                        
                        <li><a href="http://selfservice.cse.edu/web//Admissions/Inquiry.aspx?inquiryformid=3" title="Graduate Studies - Request Information" target="_blank">Request Information</a></li>
                        <li><a href="/admissions/visit-cse/" title="Graduate Studies - Visit CSE">Visit CSE</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a class="dropdown" href="#">Academics</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner">
                  <div>  
                    <h4><a href="/academics">RESOURCES/SUPPORT</a></h4>
                    <ul>
                      <li><a href="/academics/registrar/academic-calendars.dot ">Academic Calendar</a></li>
                        <li><a href="/academics/catalog/">Academic Catalog</a></li>
                        <li><a href="https://moodle.cse.edu/" target="_blank">Moodle</a></li>
                        <li><a href="http://www.cse.edu/evaluations" target="_blank">Course Evaluation</a></li>
                        <li><a href="https://selfservice.cse.edu/Web/Home.aspx" target="_blank">Self Service</a></li>
                        <li><a href="/academics/academic-support/">Academic Success Center</a></li>
                        <li><a href="/academics/honors-program.dot">Honors Program</a></li>
                        <li><a href="/academics/study-away.dot">Study Away</a></li>
                        <li><a href="/academics/eof.dot">Educational Opportunity Fund</a></li>
                        <li><a href="/academics/mahoney-library/">Mahoney Library</a></li>
                      <li><a href="/academics/registrar/">Registrar</a></li>

                    </ul>
                  </div>
                  <div>
                    <h4><a href="/academics/catalog">UNDERGRADUATE</a></h4>
                    <ul>
                      <li><a href="/academics/academic-programs/health-wellness/allied-health-studies/">Allied Health Studies</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/american-studies/">American Studies</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/art/">Art</a></li>
                        <li><a href="/academics/academic-programs/science-mathematics/biology/">Biology</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/business-administration/">Business Administration</a></li>
                        <li><a href="/academics/academic-programs/science-mathematics/chemistry-and-biochemistry/">Chemistry & Biochemistry</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/communication/">Communication</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/education/">Education</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/english/">English</a></li>
                        <li><a href="/academics/academic-programs/health-wellness/foods-and-nutrition/">Foods & Nutrition</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/world-cultures-and-languages/">Global Studies</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/history/">History</a></li>
                    </ul>
                  </div>
                  <div>
                  <h4><a href="/academics/catalog">UNDERGRADUATE</a></h4>
                    <ul>
                      <li><a href="/academics/academic-programs/human-social-dev/justice-studies/">Justice Studies</a></li>
                        <li><a href="/academics/academic-programs/science-mathematics/mathematics-and-computer-science/">Mathematics & Computer Science</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/music/">Music</a></li>
                        <li><a href="/academics/academic-programs/health-wellness/nursing/">Nursing</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/philosophy-and-theology/">Philosophy</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/history/">Political Science</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/psychology/">Psychology</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/sociology/">Sociology</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/world-cultures-and-languages/">Spanish</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/philosophy-and-theology/">Theology</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/women-studies/">Women's Studies</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/world-cultures-and-languages/">World Cultures & Languages</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4><a href="/academics/catalog">GRADUATE</a></h4>
                    <ul>
                        <li><a href="/academics/academic-programs/human-social-dev/education/">Education</a></li>
                        <li><a href="/academics/academic-programs/health-wellness/foods-and-nutrition/">Foods & Nutrition</a></li>
                        <li><a href="/academics/academic-programs/health-wellness/health-care-management/">Health Care Management</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/justice-studies/">Justice Administration & Public Service</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/business-administration/">Management</a></li>
                        <li><a href="/academics/academic-programs/health-wellness/nursing/">Nursing</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/psychology/">Psychology</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/philosophy-and-theology/">Theology</a></li>
                    </ul>
                          
                          <h4><a href="/academics/catalog">NON-DEGREE</a></h4>
                    <ul>
                        <li><a href="/academics/academic-programs/human-social-dev/education/">Education</a></li>
                        <li><a href="/academics/academic-programs/health-wellness/foods-and-nutrition/">Foods & Nutrition</a></li>
                        <li><a href="/academics/academic-programs/science-mathematics/mathematics-and-computer-science/">Mathematics & Computer Science</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/justice-studies/">Justice Studies</a></li>
                        <li><a href="/academics/academic-programs/culture-humanities/philosophy-and-theology/">Philosophy</a></li>
                        <li><a href="/academics/academic-programs/human-social-dev/psychology/">Psychology</a></li>                      
                    </ul>
                  </div>                
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
        <a class="dropdown" href="">Campus Life</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>LIVING AT CSE</h4>
                    <ul>
                        <li><a href="/student-life/resident-and-commuter-life/residence-life/">Resident Life</a></li>
                        <li><a href="/student-life/resident-and-commuter-life/commuters/">Commuter Life</a></li>
                        <li><a href="http://www.dineoncampus.com/cse/">Dining at CSE</a></li>            
                    </ul>
                  </div>  
                  <div>
                    <h4>STUDENT ACTIVITIES</h4>
                    <ul>
                        <li><a href="/student-life/student-activities/clubs-organizations.dot">Clubs & Organizations</a></li>
                        <li><a href="/student-life/student-activities/college-activities-board.dot">College Activities Board</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>STUDENT SERVICES</h4>
                    <ul>
                        <li><a href="/student-life/student-services/international-multicultural-affairs/">International Multicultural Affairs</a></li>
                        <li><a href="/student-life/student-services/disability-services/">Disability Services</a></li>
                        <li><a href="/student-life/student-services/counseling-services/">Counseling Services</a></li>
                        <li><a href="/student-life/student-services/health-services/">Health Services</a></li>
                        <li><a href="/student-life/campus-ministry/">Campus Ministry</a></li>
                        <li><a href="/student-life/career-services/">Career Services</a></li>
                        <li><a href="/student-life/leadership-development/">Leadership Development</a></li>
                        <li><a href="/student-life/volunteerism/">Volunteerism</a></li>
                     </ul>
                  </div>
                  <div>
                    <h4>EVENTS</h4>
                    <ul>                    
                        <li><a href="/calendar/">Calendar</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
            <a class="dropdown" href="/student-life/">Athletics</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>SCREAMING EAGLES</h4>
                    <ul>
                        <li><a href="/basketball">Basketball</a></li>
                        <li><a href="/xc">Cross Country</a></li>
                        <li><a href="/lax">Lacrosse</a></li>
                        <li><a href="/soccer">Soccer</a></li>
                        <li><a href="/softball">Softball</a></li>
                        <li><a href="/swimming">Swimming</a></li>
                        <li><a href="/tennis">Tennis</a></li>
                        <li><a href="/volleyball">Volleyball</a></li>          
                    </ul>
                  </div>  
                  <div>
                    <h4>ABOUT ATHLETICS</h4>
                    <ul>
                        <li><a href="/athletics/athletic-training.dot">Athletic Training</a></li>
                        <li><a href="/athletics/facilities.dot">Facilities</a></li>
                        <li><a href="/athletics/all_scores.dot">Scoreboard</a></li>
                        <li><a href="/athletics/sports-information.dot">Sports Information</a></li>
                        <li><a href="http://www.cse.edu/athletics/athletic_staff.dot">Staff Directory</a></li>
                        <li><a href="/athletics/visiting-team-information.dot">Visiting Team Information</a></li>
                        <li><a href="/athletics/athletic_form.dot">Recruiting Questionnaire</a></li>

                    </ul>
                  </div>
                  
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a href="/alumni/">Alumni</a>
       
            </li>
            <li>
            <a class="dropdown" >About CSE</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>ABOUT CSE</h4>
                    <ul>
                        <li><a href="/about-cse/president-streubert/">President Streubert</a></li>
                        <li><a href="/about-cse/fast-facts/">Fast Facts</a></li>
                        <li><a href="/about-cse/mission-and-values/">Mission & Values</a></li>
                        <li><a href="/about-cse/cse-history/">CSE History</a></li>
                        <li><a href="/about-cse/arts/">The Arts at CSE</a></li>          
                    </ul>
                  </div>  
                  <div>
                    <h4>CENTERS</h4>
                    <ul>
                      <li><a href="/about-cse/centers/herc/">Holocaust Education Resource Center</a></li>
                      <li><a href="/about-cse/centers/ccwh/">Center for Catholic Women's History</a></li>
                      <li><a href="/about-cse/centers/hsd/">Center for Human & Social Development</a></li>
                      <li><a href="/about-cse/centers/ctsd/">Center for Ministry & Spirituality</a></li>
                      <li><a href="/student-life/volunteerism/">Center for Volunteerism & Service-Learning</a></li>
                    </ul>
                  </div>
                  <div>
                    <h4>OFFICES/SERVICES</h4>
                    <ul>
                        <li><a href="/about-cse/arts/">The Arts</a></li>
                        <li><a href="http://www.cse.edu/about-cse/conference-event-services/">Conference & Event Services</a></li>
                        <li><a href="/dept/">Offices</a></li>
                     </ul>
                  </div>
                <div>
                    <h4>HOW TO GET TO CSE</h4>
                    <ul>                    
                        <li><a href="/localhotels">Local Hotels</a></li>
                        <li><a href="/about-cse/maps-and-directions/index.dot">Driving Directions</a></li>
                        <li><a href="/about-cse/maps-and-directions/public-transportation-to-cse.dot">Public Transportation</a></li>
                        <li><a href="/about-cse/maps-and-directions/campus-map.dot">Campus Map</a></li>
                    </ul>
                  </div>
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>
            <li>
              <a href="/wordpress-test/news/">News</a>
            </li>
            <li>
              <a class="dropdown" >Information For</a>
              <div class="cbp-hrsub">
                <div class="cbp-hrsub-inner"> 
                  <div>
                    <h4>INFORMATION FOR</h4>
                    <ul>
                        <li><a href="/audiences/prospective-students/">Prospective Students</a></li> 
                        <li><a href="/audiences/current-students/">Current Students</a></li> 
                        <li><a href="/audiences/parents-family/">Parents & Family</a></li>      
                        <li><a href="/alumni/">Alumni</a></li>        
                        <li><a href="/audiences/faculty-staff/">Faculty & Staff</a></li>      
                    
                    </ul>
                  </div>                   
                </div><!-- /cbp-hrsub-inner -->
              </div><!-- /cbp-hrsub -->
            </li>            
          </ul>
        </nav>
      </div>
    </div>
  </div>

</div>  
</div>