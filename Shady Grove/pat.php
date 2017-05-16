<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Peer Advisory Team | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Meet UMBC Shady Grove's Peer Advisory Team." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Peer Advisory Team | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/pat/" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Meet UMBC Shady Grove's Peer Advisory Team." />



<link href="css/styles-ug.css" rel="stylesheet">
<link href="css/accordion-ug.css" rel="stylesheet">
<link href='css/magnific-popup.css' rel='stylesheet'>

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>


<script src="js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {
html{
	position: relative;
	height:100%;
}
html::after {
  content: "";
  background: url(images/bg/<?php echo $selectedBg; ?>) no-repeat;
  background-size:cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;  
  background-attachment:fixed;
}
}
</style>



</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">Peer Advisory Team (PAT)</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    

      <div class="narrowchart">
        <div id="accordion"> 
        
    <!-- Start Content -->   
      <div class="content">
  <p>As current  UMBC-Shady Grove students, members of the UMBC Peer Advisory Team (PAT) serve  as a critical point of contact in the successful and seamless transition of  students transferring to UMBC-Shady Grove from other institutions. PAT members  undergo extensive leadership development and work closely with UMBC-Shady Grove  administrative staff, faculty, and current students to reach out, serve,  and create meaningful connections with prospective students through a variety of  formal and informal recruitment and retention events. We are proud to be UMBC!</p>
<p style="text-align:center">

 
<img src="images/PAT Team Picture (1).jpg" width="520" height="573" alt="" style="width:100%;" />

</p>
<h4>Meet the UMBC  Peer Advisory Team members below.</h4>
 



<div class="accordionheader">
            <h4><a href="#augustine" id="augustine"></a>Mary Ann Augustine: Psychology<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
          
<img src="images/PAT/Mary Ann Augustine.jpg" width="200" height="275" align="left" class="pat-team">
    
<p>
    <strong>An interesting personal fact…</strong><br>
    An interesting fact about me is that I lived in Costa Rica with my family for four years and enjoyed the international experience. Prior to the move, I home-schooled my three children who were accepted into MIT, Berklee College of Music in Boston, and USC.
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I chose UMBC-Shady Grove for several reasons: 1. The location is perfect for a short commute; 2. It is affordable especially if I have to pay out-of- pocket; and 3. the class sizes are small and intimate so you can really connect with your professors and other students easily.
</p>

<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    I have been fortunate to serve on the Peer Advisory team (PAT). I intend to get more involved by joining the Psychology Student Association and the Tau Sigma Honor Society.
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    Following graduation, my plans are to become a certified nutritionist and registered dietician so that I may continue to help others on their path to a healthier lifestyle. I intend to earn my MS in Nutrition.
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    My advice for prospective students is to get involved in your school community. It is the best way to be connected and be informed. Take advantage of resources that can help you succeed and achieve your goals. Get help when you need it and do not be afraid to ask questions. Know that it is never too late to return to college at any age; it is a great way to stay current.
</p>

</div>


<div class="accordionheader">
            <h4><a id="cene" href="#cene"></a>Kathleen Cene: Psychology</h4>
        </div>

          <div class="accordionbody">
          
<img src="images/PAT/Kathleen Cene.jpg" width="200" height="275" align="left" class="pat-team">
    
<p>
    <strong>An interesting personal fact…</strong><br>
    I LOVE raw salmon... but I hate cooked salmon! 
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I choose UMBC-Shady Grove because I wanted to save money. Living on campus at a four- year college is super expensive compared to commuting to USG. 
</p>

<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    I have a flexible internship working as a social media specialist for The Women Empowerment Project and I am a part of UMBC’s Peer Advisory Team.
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    I plan on attending graduate school. After I get my master’s degree, I plan on working as a school guidance counselor. 
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    Do not be afraid of asking for help! I will admit that the first semester was not easy for me. I had to get used to many changes like different professors, not living on campus, and being away from my friends. The transition was so hard to the point where I had a hard time keeping up with my assignments. I decided to talk to my professor. I was so scared at first because I thought she was going to tell me to suck it up and deal with it, but she did the opposite -- she gave me a few tips and referred me to a time management counselor.  I am so grateful that I talked to her because if I didn’t I probably would have failed the first semester.
</p>

</div>



<div class="accordionheader">
            <h4><a id="corsiatto" href="#corsiatto"></a>Kaylin Corsiatto: Psychology<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Kaylin Corsiatto.jpg" width= "200" height="280" align="left" class="pat-team">
 
    
<p>
    <strong>An interesting personal fact…</strong><br>
    One interesting fact about myself is that I have two horses.
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I chose UMBC-Shady Grove for a variety of reasons. UMBC has a well-respected reputation as an honors university in Maryland. The tuition is very affordable and the professors are excellent. Also, UMBC is a research university and as someone who is interested in research and graduate school, this was very important to me. I loved the convenient location of the Universities at Shady Grove (USG) and the overall feel of the school. USG fosters such an inclusive community of students. What really stood out to me when visiting USG was that although it is a commuter school, there is still an active student life. I visited other satellite campuses, but they were missing this component. When I learned about all that UMBC-Shady Grove had to offer, I knew it was the right school for me. 
</p>

<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    At UMBC-Shady Grove I have been involved in the Psychology Student Association, Tau Sigma Honor Society, The Big Event planning committee, and of course the Peer Advisory Team. There are countless student associations and activities to become involved in at UMBC-Shady Grove. These are great opportunities to meet people, make connections, and develop new skill sets.
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    Following graduation, I plan to attend graduate school. My goal is to be accepted into a clinical or counseling psychology PhD program. I currently have many interests, but ultimately I want to own my own practice and advocate for others. 
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    My advice for prospective students is when visiting different universities, do not be afraid to ask a lot of questions. From what clubs are available to how a specific class will transfer, the more information, the better! When you are considering attending a university, you should be able to imagine yourself there and the best way to do that is to gather information. At UMBC-Shady Grove there are students and faculty to help answer your questions and make your transition as seamless as possible. 
</p>

</div>



<div class="accordionheader">
            <h4><a id="danna" href="#danna"></a>Maia Danna: History & Political Science<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Maia Danna.jpg" width="200" height="275" align="left" class="pat-team">
   
<p>
    <strong>An interesting personal fact…</strong><br>
    I absolutely love to cook and bake! I am have been vegetarian for years for many reasons and it has made me more creative in the kitchen. I find that developing my culinary skills promotes a healthy and wholesome diet. I love to share the experience with friends and family. 
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
     I chose UMBC after attending a Wednesday Wipe-Out Session held by program directors Dr. Dasgupta and Dr. Nolan. I chose UMBC over other state universities because of my engaging experience. The class sizes are small, placing a lot of emphasis on the needs and interests of the students.  I chose to take classes at the Shady Grove campus since it’s really close to where I live. Although the campus is small, the campus hosts so many events and student organizations that there’s always something fun to do. This also creates a welcoming environment to make friends!
</p>
<p>
  <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    In my first semester at USG, I attended Student Event Board meetings to plan events such as Oktoberfest. This semester I look forward to being a part of the Political Science Student Organization and the History Student Association! I also make a point to attend Wednesday Wipe Out sessions whenever I can.  
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    After graduating from UMBC-Shady Grove with a degree in History and Political Science, I would like to set some time aside to travel. Academically, I would like to continue on to attend law school.
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    Take advantage of the resources at your disposal! I mean this in terms of social life, networking, mental health, academics, fitness… you name it! This institution and all its faculty and staff are dedicated to making your experience as rewarding and enriching as possible. All you have to do is take interest.
</p>

</div>



<div class="accordionheader">
            <h4><a id="erazo" href="#erazo"></a>Valeria Erazo: Psychology<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Valeria Erazo.jpg" width="200" height"275" align="left" class="pat-team">

<p>
    <strong>An interesting personal fact…</strong><br>
    One interesting fact about me is that shortly after moving to the United States from Ecuador, I enrolled in the French Immersion program at my elementary school, which allowed me to learn English and French at the same time.
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I chose UMBC- Shady Grove for a few reasons. For one, I was immediately drawn by the fact that this campus allowed me to earn my bachelors degree while keeping my job and still living at home. I also appreciated the fact that UMBC-Shady Grove provides quality education in a small class size environment. The smaller campus also helped make the transition from Montgomery College to UMBC much easier.</p>
<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    During my time at Montgomery College, I was not very involved in extracurricular activities. I knew I was missing out on great opportunities which made me set the goal to be more involved at UMBC-Shady Grove. Now, I am a part of the Peer Advisory Team (PAT)! I plan to become more involved during my next few semesters at USG!
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    My ultimate goal is to get my Master’s Degree in Human Resources. Following graduation, I plan to take a year off school to gain professional experience and then I plan to apply to the Graduate Program in Industrial Organization Psychology offered here at UMBC-Shady Grove.
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    My advice for prospective students is to work hard and get involved. Through hard work and perseverance you will succeed! By getting involved in extracurricular activities you will have the opportunity to make new friends, grow as a person by becoming the best version of yourself. USG is filled with amazing people who are there for you. Ask for help if you ever need it. The amount of support and resources available at UMBC-Shady Grove is incredible and you should take advantage!  
</p>

</div>



<div class="accordionheader">
            <h4><a id="garcia" href="#garcia"></a>Emely Garcia: Social Work<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Emely Garcia.jpg" width="200" height="280" align="left" class="pat-team">
 
<p>
    <strong>An interesting personal fact…</strong><br>
    I am obsessed with elephants and one day I hope to own lots of land and have elephants be as free to roam as they please! 
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I choose UMBC-Shady Grove because it was close to home yet a good university. All my life I have been very family oriented, so finding a school close to home was a priority. It was not until attending a USG Open House that my mother dragged me to that I realized UMBC-Shady Grove could be an option. After two years at Montgomery College, I began to question what I wanted to do with my life. During work, I had a mini meltdown and right before my meltdown truly grew, I received a call from UMBC-Shady Grove asking to confirm my attendance to a student-only open house for their social work program. I vented to this person as if I had known them my whole life; they assured me it was going to be okay and to take it one-step at a time. Then they recommended I speak with Chelsea Moyer, who helped me find out that UMBC-Shady Grove was where I needed to be. Not only is this university close to home but the vibes everyone gives are of a family. Had it not been for these two ladies, I may have still been wondering what I wanted to with my life. UMBC-Shady Grove may be small in numbers, but it is big in heart..
</p>
<p>
  <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    During my first semester at UMBC-Shady Grove I was told that extracurricular activities and internships were very good! I went to a lot of meetings and found that one program I wanted to apply for was the “Peer Advisory Team.” They did so much for me my first semester I wanted to do the same for others. I was lucky enough to get chosen to join this semester. Being a social work major requires a year in an internship during your second year.  I look forward to doing this because it will give me an actual feel for what my career will be like. I plan to continue to search for extracurricular activities while I remain at UMBC-Shady Grove. 
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    After graduation, I plan to pursue my Master of Social Work. I hope to be able to qualify for advanced placement, which allows me to get my Master’s degree in one year instead of two to save time and money! Far into the future I think I’ll possibly want to open my own private practice.  
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    My advice to prospective students is to come and visit! If there is any part of you that thinks UMBC-Shady Grove might be the school for you, come to one of our many open houses! Also, when you come to UMBC-Shady Grove, always ask questions! Do not think that asking too many questions is annoying or you may be a hassle -- you are not! I used to think asking as little as possible made you look smart but half the time I didn’t know what I was doing! Do not be afraid to ask questions; it makes you look smart!
</p>

</div>

<div class="accordionheader">
            <h4><a id="guzzey" href="#guzzey"></a>Kathryn Guzzey: Social Work<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/2017-05-01_11-17-53.png" width="200" height="275" align="left" class="pat-team">


<p>
  
<p>
    <strong>An interesting personal fact…</strong><br>
    I have an awesome sock collection! One of my favorite pair of socks has sloths, hanging on branches, wearing hats on them.  
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I chose to attend UMBC-Shady Grove after graduating from Montgomery College because of the convenient campus, the quality education, the diverse population, and the helpful resources available.  
</p>


<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    Last year I served as a Social Work Writing Fellow in the Center for Academic Success (CAS).  This year I am a member of the Peer Advisory Team (PAT), and next semester I will be starting my Social Work field placement as an intern. 
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    After I graduate, I hope to travel when I can while continuing my education in a Master of Social Work program. 
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    I encourage students to take chances during their time at USG. This campus is an excellent environment to try new things, get involved, and learn and grow. I also encourage students to take advantage of the numerous resources available on campus such as the Center for Academic Success (CAS) for writing help and the Rec Center for fun! 
</p>

</div>


<div class="accordionheader">
            <h4><a id="kaarid" href="#kaarid"></a>Carmen Kaarid: Social Work<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Carmen Kaarid.jpg" width="200" height="275" align="left" class="pat-team">
    
<p>
    <strong>An interesting personal fact…</strong><br>
    I was a competitive Irish dancer for 10 years! 
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I chose to attend UMBC at the Universities at Shady Grove because of the amazing environment here. I went to a big school where I was just another number. But here you really feel like you're part of a family. The UMBC team here is amazing! They really work with you to make sure that you have all the tools you need to succeed. I also loved the fact that I could get an amazing education and still live at home and save money! In addition, the small class sizes really allow you to develop a great relationship with your professors and your fellow students. There are so many reasons why I chose UMBC at Shady Grove, I could go on and on! I love it here!
</p>

<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    I joined the Universities at Shady Grove Student Ambassador Program in my first semester here. I really love it! It allows me to interact with students in all the nine universities here. Moreover, I get to go around to different community colleges and high schools in the area and tell them why I love USG. This semester I joined the UMBC Peer Advisory Team and I love it, too! This is also my first semester being a Writing Fellow. I get to help first semester social work students with some of their assignments. There are so many opportunities here and so many wonderful things to do! 
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    After I graduate from UMBC I planning to attend the University of Maryland, Baltimore to earn my Master of Social Work. After that, I would love to get involved in social policy and maybe one day even run for public office 
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    The best advice I can give to a prospective student is to take advantage of all the opportunities here at UMBC-Shady Grove. There is so much going on all the time and there is really something for everyone. My advice is to try new things and really broaden your horizon. Because we are a small school, there are so many amazing opportunities available. Get ready for the best two years of your life!  
</p>

</div>



<div class="accordionheader">
            <h4><a id="mccormack" href="#mccormack"></a>Claire McCormack: History & Political Science<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Claire McCormack (2).jpg" width="200" height="275" align="left" class="pat-team">    

<p>
    <strong>An interesting personal fact…</strong><br>
    I am committed to having at least one of hour “me” time each day. I believe it is absolutely critical to center and relax your mind, and have some moments away from the stress of everyday life. Whether it be working out, cooking, or catching up on my favorite TV show- I make time for it! 
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    It was very important to me to transfer to a school with small class sizes, quality education standards, and professors who were readily available to their students. I also wanted to stay close to home in order to continue working at my current job and build professional connections within the DC community. Financially, UMBC- Shady Grove was much more “do-able” than other institutions that offer my fields of study. Finally, I needed a vibrant, diverse community to plant my roots in. UMBC-Shady Grove exceeded all of the criteria I had, and when I visited, I realized it was the perfect fit.  
</p>

<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    UMBC- Shady Grove has a plethora of extracurricular activities and internship connections. Beyond being a member of the Peer Advisory Team (PAT), I am involved with the Political Science Student Organization (PSSO), where I serve as Co-President. I am also a member of the weekly political and current events discussion group, affectionately known as “Wednesday Wipeout”. From time to time, I enjoy partaking in Shady Grove-wide social justice and service events. Work wise, I intern for the United States Food and Drug Administration part-time during the school year and full-time in the summer months.
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    Directly after graduation, I hope to travel for a month or so throughout the Northwest United States and Canada. After that much needed rest and exploration, I hope to work for a year or two within the government and then pursue a graduate degree. I am looking into the possibility of law school or a Masters in Political Management. My ultimate goal is to serve the public through politics and policy work, either domestically and/or internationally.
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    My biggest piece of advice is to get involved and integrate yourself into the UMBC-Shady Grove community. Get to know your professors by attending office hours, and connect with your classmates via study sessions. Take advantage of the abundance of resources available to students, such as the Center for Academic Success (CAS) or the recreation center. And attend club meetings! There is something for everyone here, and the best way to succeed is to have a positive, encouraging community around you and a great school/life balance. 
</p>

</div>



<div class="accordionheader">
            <h4><a id="ngo" href="#ngo"></a>Cindy Ngo: Social Work<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Cindy Ngo (1).jpg" width="200" height="275" align="left" class="pat-team"> 
<p>
    <strong>An interesting personal fact…</strong><br>
    I love creative writing! I used to take classes in high school and college so that I could learn to improve my short stories and poems. I once posted a story online that got over 106,000 likes. 
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I had always wanted to go to UMBC but the commute was an issue. I did not know if I could do it every day. I like online classes but they were are impersonal and I want to meet new people. The UMBC-Shady Grove campus is closer to home and has smaller class sizes, which is perfect. I prefer an environment where I can personally get to know my classmates and professors.</p>
<p>
  <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    So far, at UMBC-Shady Grove, I have been involved in a few community events and the Student Event Board. I have attended a few Social Work Student Association meetings and hope to be more involved in their activities in my future semesters.</p>
<p>
  <strong>What are your plans following graduation?</strong><br>
    After graduation, I hope to get a job that I enjoy. Once I am comfortable with my work setting, I plan to return to school to earn my Master of Social Work. 
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    Take your time. Everyone is always rushing to go to college for something that they might not even enjoy. UMBC is a great university with so many programs at main campus and the Shady Grove campus. Figure out where you belong first. If you decide that UMBC is for you, we will be so glad to have you. When you get here, please take advantage of everything this community has to offer! You not only have UMBC’s resources but USG’s as well. You are going to do great. 
</p>

</div>



<div class="accordionheader">
            <h4><a id="salcedo" href="#salcedo"></a>Wanda Salcedo: Psychology<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
          <img src="images/PAT/2017-05-01_11-21-24.png" width="200" height="250" align="left" class="pat-team">
         
            <p>
              <strong>An interesting personal fact…</strong><br>
    One interesting fact about me is that I taught myself how to drive a manual (stick shift) car via YouTube videos.  Once I learned the basic idea of how to switch gears on a manual, I went out and tried to apply what I learned. You could say it was a bumpy ride in the beginning, but now I am a pro! 
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I chose UMBC-Shady Grove because I love the fact that UMBC-Shady Grove offers small classroom settings. At my previous university I had experienced large lecture halls and often felt that I could not get immediate and direct feedback from faculty and staff. Also, being that I am a working student, I wanted to find a university that was not too far from home and offered flexibility without a huge price tag. UMBC-Shady Grove is wonderful for commuter students with busy schedules and offers many opportunities to receive financial aid. 
</p>

<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    Since starting at UMBC in Spring 2016, I have had the privilege of being a member of Tau Sigma (Honor Society), the Psychology Student Association (PSA) and now the Peer Advisory Team (PAT). Through Tau Sigma and PSA, I have been able to find opportunities to help my community by attending charity events and donating to local shelters. Additionally, I have volunteered in numerous events held on the USG campus such as the Hunger Banquet, Poverty Simulation, and the Community, Civility, and Connection (CCC) Culture of Care event.  
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    After graduation, I plan to go to graduate school at UMD for my Masters in Education and eventually plan to earn my Doctorate in Counseling 
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    My advice would be first, NEVER underestimate yourself and your abilities! Second, get involved! UMBC-Shady Grove offers so many opportunities to become active both in and out of the classroom. I couldn’t have imagined that I would be able to participate in so many activities with the busy schedule I have, but faculty, staff, and peers make it so easy to get involved while keeping it stress free. Finally, use the facilities that are offered on campus such as the Center for Academic Success (CAS) and make connections with faculty and staff because they are truly invested in helping each student succeed.   
</p>

</div>



<div class="accordionheader">
            <h4><a id="schulze" href="#schulze"></a>Mark Schulze: Social Work <i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Mark Schulze.jpg" width="200" height="275" align="left" class="pat-team">
 
<p>
    <strong>An interesting personal fact…</strong><br>
    I am really into music. I enjoy all types of music as well as playing the guitar and piano. The piano was forced onto me when I was younger by my mother who was a music major, and for the guitar, I blame AC/DC.
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    When I started taking classes at Montgomery College, I decided to change the career and educational path I was on, and started taking classes in preparation for a degree in social work. One of my advisors first told me about the Social Work Program offered at UMBC-Shady Grove. I looked into the college, heard feedback from current UMBC students, and went to visit and attend an information session held on campus. It felt like a great fit and opportunity from the first time I heard about it, and looking back, I know I made the right decision.
</p>

<p>
    <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    Currently, this is my second full-time semester at UMBC, so as of now, no internships. However, each fall for upper-class students, part of what the social work major offers is a “field placement” experience. Through the field placement, students are selected to go to various sites to get real life practice in the field under the supervision of a license social worker before they graduate. The Peer Advisory Team had been my first extracurricular activity that I have taken part of since I have been at UMBC-Shady Grove. There are many different groups available to enlist in however, and they are a great way to meet new people while becoming more involved with the school.
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    Right after graduation, I am going to need some breathing room, which will most likely involve some type of vacation. After that is over, it will be back to the books, as I plan to continue and pursue a Master’s Degree in Social Work. 
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    My advice for prospective students would be to get involved in something around campus, whether that be a club or student association. For me, getting involved in the Peer Advisory Team made me feel I was doing more than just showing up for classes day after day; now I have a role to play in bettering the transitional experience of incoming and prospective students, which can be tough. Another thing I would mention is do not be afraid to ask questions or seek out extra help or information when needed. The staff at UMBC-Shady Grove are here for us, the students. They put in a lot of extra effort in each stage of the collegial process to ensure student success.
</p>

</div>

<div class="accordionheader">
            <h4><a id="thomas-davidson" href="#thomas-Davidson"></a>Denise Thomas-Davidson: Social Work<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Denise Thomas-Davidson.jpg" width="200" height="275" align="left" class="pat-team">


<p> <strong>An interesting personal fact…</strong><br>
I have five grandchildren and I am accomplishing my bachelor degree in Social Work. </p>
<p> <strong>Why did you choose UMBC-Shady Grove?</strong><br>
  With an associate degree in mental health, I transferred my credits to the UMBC-Shady Grove Social Work Program. The distance to reach the Universities of Shady Grove is more convenient for me and the smaller classroom sizes make it easier to get individual attention from professors. The Universities of Shady Grove also offers several academic success services that helps an individual to reach their academic goals.  </p>
<p> <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
  At UMBC- Shady Grove, I am a member of the Peer Advisory Team. I am also a member of the Social Work Student Association.</p>
<p> <strong>What are your plans following graduation?</strong><br>
  My plans after graduating is to obtain my MSW. I also plan to work with the United States military assisting military families.. </p>
<p> <strong>What is your advice for prospective students?</strong><br>
  My advice for prospective students is to keep your focus on school, have a plan as to where you see yourself as a future professional, and bear in mind that a college degree is one of the greatest accomplishments an individual can achieve to take a committed stand in society.  </p>
  
</div>

<div class="accordionheader">
            <h4><a id="valenzuela" href="#valenzuela"></a>Rodrigo Valenzuela: History<i class="fa fa-angle-down"></i></h4>
        </div>

          <div class="accordionbody">
<img src="images/PAT/Rodrigo Valenzuela.jpg" width="200" height="275" align="left" class="pat-team">
 
<p>
    <strong>An interesting personal fact…</strong><br>
    An interesting fact about myself is that not many people know that I am a triplet; meaning I have an identical twin and a fraternal twin that looks almost like me.  I like to sometimes mess around with people and switch places every now and then with my twin brother.  Sometimes people will come up to me thinking I am my twin and I just go along without saying that I’m not my twin brother.  
</p>

<p>
    <strong>Why did you choose UMBC-Shady Grove?</strong><br>
    I chose UMBC-Shady Grove not only because how close it is to get to the campus, but also because of the great environment and atmosphere that surrounds the campus.  Aside from the great things that some of my friends who attend USG share, one open house that I attended a couple years ago while I was still at Montgomery College showed me everything I that I wanted in a university -- a great atmosphere where students interact with everyone regardless of what institution they attend and a place where I can feel comfortable. One of the Program Directors that came to one of my classes while I was attending Montgomery College sealed the deal for me after he spoke to prospective students about joining the History program of which I am now a part.</p>
<p>
  <strong>What internships and/or extracurricular activities have you been involved with at UMBC-Shady Grove?</strong><br>
    UMBC-Shady Grove offers a whole range of extracurricular activities and internships. One of many extracurricular activities that I was able to join was the History Student Association (HSA), where we mainly discuss any potential history topics ranging from a variety of subjects that have either occurred in the past, to the present.  Students form many groups or clubs that are open to all students -- this is the best way, in my opinion, to allow students to connect with others around them.  
</p>

<p>
    <strong>What are your plans following graduation?</strong><br>
    Following my graduation from UMBC, I intend to go to graduate school and earn a master’s degree in history or in teaching so that I can eventually become a teacher and hopefully one day become a history professor myself.
</p>

<p>
    <strong>What is your advice for prospective students?</strong><br>
    Some advice that I would give would be to take some time and get to know your professors; they are all a great help and go out of their way to help make sure you are doing well in your classes.  Also, become involved as much as possible on campus in clubs and other activities/events that go on at school.  We have a great Office of Student Services that works with students in getting involved with extracurricular activities and USG’s Center for Internship and Career Services helps to get students ready for potential jobs, along with resume reviews etc.  
</p>

</div>






 

      </div>
</div>
</div>



    </div>


 
	<!-- END Content -->


    <!-- /eleven columns -->
    <div class="four columns omega"> 
    <!-- SIDEBAR --> 
      <?php include("includes/ss-sidebar.php"); ?>
    <!-- /five columns  --> 


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  </footer>

	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/scripts.js"></script> 
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/popup.js"></script> 

<script>
$( "#accordion" ).accordion({
      heightStyle: "content",
      active: false,
      collapsible: true,
      header:"div.accordionheader"
    });
    var hash = window.location.hash;
    var anchor = $('a[href$="'+hash+'"]');
    if (anchor.length > 0){
        anchor.click();
    }
$('h4').click(function() {
	var linkText = $(this).text();
	ga('send', 'event',  'accordion', 'click', linkText);
});
</script> 
 

<?php include("includes/tracking.php"); ?>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

</body>
</html>