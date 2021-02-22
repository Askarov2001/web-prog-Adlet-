<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bonus.css">
  <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap"></script>
  <title>My Website</title>

<style>
@import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
html {
	font-size: 10px;
	font-family: 'Montserrat', sans-serif;
	scroll-behavior: smooth;
}
a {
	text-decoration: none;
}
.container {
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}
img {
	height: 100%;
	width: 100%;
	object-fit: cover;
}
p {
	color: black;
	font-size: 1.4rem;
	margin-top: 5px;
	line-height: 2.5rem;
	font-weight: 300;
	letter-spacing: .05rem;
}
.section-title {
	font-size: 4rem;
	font-weight: 300;
	color: black;
	margin-bottom: 10px;
	text-transform: uppercase;
	letter-spacing: .2rem;
	text-align: center;
}
.section-title span {
	color: crimson;
}

.cta {
	display: inline-block;
	padding: 10px 30px;
	color: white;
	background-color: transparent;
	border: 2px solid crimson;
	font-size: 2rem;
	text-transform: uppercase;
	letter-spacing: .1rem;
	margin-top: 30px;
	transition: .3s ease;
	transition-property: background-color, color;
}
.cta:hover {
	color: white;
	background-color: crimson;
}
.brand h1 {
	font-size: 3rem;
	text-transform: uppercase;
	color: white;
}
.brand h1 span {
	color: crimson;
}

/* Header section */
#header {
	position: fixed;
	z-index: 1000;
	left: 0;
	top: 0;
	width: 100vw;
	height: auto;
}
#header .header {
	min-height: 8vh;
	background-color: rgba(31, 30, 30, 0.24);
	transition: .3s ease background-color;
}
#header .nav-bar {
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	height: 100%;
	max-width: 1300px;
	padding: 0 10px;
}
#header .nav-list ul {
	list-style: none;
	position: absolute;
	background-color: rgb(31, 30, 30);
	width: 100vw;
	height: 100vh;
	left: 100%;
	top: 0;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	z-index: 1;
	overflow-x: hidden;
	transition: .5s ease left;
}
#header .nav-list ul.active {
	left: 0%;
}
#header .nav-list ul a {
	font-size: 2.5rem;
	font-weight: 500;
	letter-spacing: .2rem;
	text-decoration: none;
	color: white;
	text-transform: uppercase;
	padding: 20px;
	display: block;
}
#header .nav-list ul a::after {
	content: attr(data-after);
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%) scale(0);
	color: rgba(240, 248, 255, 0.021);
	font-size: 13rem;
	letter-spacing: 50px;
	z-index: -1;
	transition: .3s ease letter-spacing;
}
#header .nav-list ul li:hover a::after {
	transform: translate(-50%, -50%) scale(1);
	letter-spacing: initial;
}
#header .nav-list ul li:hover a {
	color: crimson;
}
#header .hamburger {
	height: 60px;
	width: 60px;
	display: inline-block;
	border: 3px solid white;
	border-radius: 50%;
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 100;
	cursor: pointer;
	transform: scale(.8);
	margin-right: 20px;
}
#header .hamburger:after {
	position: absolute;
	content: '';
	height: 100%;
	width: 100%;
	border-radius: 50%;
	border: 3px solid white;
	animation: hamburger_puls 1s ease infinite;
}
#header .hamburger .bar {
	height: 2px;
	width: 30px;
	position: relative;
	background-color: white;
	z-index: -1;
}
#header .hamburger .bar::after,
#header .hamburger .bar::before {
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	left: 0;
	background-color: white;
	transition: .3s ease;
	transition-property: top, bottom;
}
#header .hamburger .bar::after {
	top: 8px;
}
#header .hamburger .bar::before {
	bottom: 8px;
}
#header .hamburger.active .bar::before {
	bottom: 0;
}
#header .hamburger.active .bar::after {
	top: 0;
}
/* End Header section */

/* Hero Section */
#hero {
	background-image: url(aaa.jpg);
	background-size: cover;
	background-position: top center;
	position: relative;
	z-index: 1;
}
#hero::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: black;
	opacity: .7;
	z-index: -1;
}
#hero .hero {
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 50px;
	justify-content: flex-start;
}
#hero h1 {
	display: block;
	width: fit-content;
	font-size: 4rem;
	position: relative;
	color: transparent;
	animation: text_reveal .5s ease forwards;
	animation-delay: 1ss;
}
#hero h1:nth-child(1) {
	animation-delay: 1s;
}
#hero h1:nth-child(2) {
	animation-delay: 2s;
}
#hero h1:nth-child(3) {
	animation: text_reveal_name .5s ease forwards;
	animation-delay: 3s;
}
#hero h1 span {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 0;
	background-color: crimson;
	animation: text_reveal_box 1s ease;
	animation-delay: .5s;
}
#hero h1:nth-child(1) span {
	animation-delay: .5s;
}
#hero h1:nth-child(2) span {
	animation-delay: 1.5s;
}
#hero h1:nth-child(3) span {
	animation-delay: 2.5s;
}

/* End Hero Section */

/* Services Section */
#services .services {
	flex-direction: column;
	text-align: center;
	max-width: 1500px;
	margin: 0 auto;
	padding: 100px 0;
}
#services .service-top {
	max-width: 500px;
	margin: 0 auto;
}
#services .service-bottom {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
	margin-top: 50px;
}
#services .service-item {
	flex-basis: 80%;
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	padding: 30px;
	border-radius: 10px;
	background-image: url(./img/img-1.png);
	background-size: cover;
	margin: 10px 5%;
	position: relative;
	z-index: 1;
	overflow: hidden;
}
#services .service-item::after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: .9;
	z-index: -1;
}
#services .service-bottom .icon {
	height: 250px;
	width: 250px;
	margin-bottom: 20px;
}
#services .service-item h2 {
	font-size: 2rem;
	color: white;
	margin-bottom: 10px;
	text-transform: uppercase;
}
#services .service-item p {
	color: white;
	text-align: left;
}
/* End Services Section */

/* Projects section */
#projects .projects {
	flex-direction: column;
	max-width: 1200px;
	margin: 0 auto;
	padding: 100px 0;
}
#projects .projects-header h1 {
	margin-bottom: 50px;
}
#projects .all-projects {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}
#projects .project-item {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	width: 80%;
	margin: 20px auto;
	overflow: hidden;
	border-radius: 10px;
}
#projects .project-info {
	padding: 30px;
	flex-basis: 50%;
	height: 100%;
	display: flex;
	align-items: flex-start;
	justify-content: center;
	flex-direction: column;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	color: white;
}
#projects .project-info h1 {
	font-size: 4rem;
	font-weight: 500;
}
#projects .project-info h2 {
	font-size: 1.8rem;
	font-weight: 500;
	margin-top: 10px;
}
#projects .project-info p {
	color: white;
}
#projects .project-img {
	flex-basis: 50%;
	height: 300px;
	overflow: hidden;
	position: relative;
}
#projects .project-img:after {
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	opacity: .7;
}
#projects .project-img img {
	transition: .3s ease transform;
}
#projects .project-item:hover .project-img img {
	transform: scale(1.1);
}

/* End Projects section */


.ryl-case-study-parallax-background-style-1 {
  background-image: url("sss.jpg"); 
}
.ryl-section-header-style-2.ryl-bg-gray {
    margin-bottom: 80px;
}
.ryl-section-header-style-2.ryl-bg-gray {
    margin-bottom: 80px;
}
#ryl-main > header:before, #ryl-main > header:after {
    content: " ";
    display: table;
}
.ryl-margin-top-90 {
    margin-top: 90px;
}
.ryl-section-item {
     margin-bottom: 60px; 
}
.owl-carousel.owl-loaded {
    display: block;
}
.ryl-text-carousel.owl-theme.has-index:before {
    content: attr(data-index);
    position: relative;
    display: block;
    width: 60px;
    text-align: center;
    background-color: #FFDD3A;
    padding: 14px 5px;
    font-size: 18px;
    font-weight: 700;
}
.owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    -webkit-transform: translate3d(0px, 0px, 0px);
}
.ryl-text-carousel.owl-theme .owl-nav {
    text-align: right;
}
.owl-theme .owl-nav .owl-next, .owl-theme .owl-nav .owl-prev {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    background: #CCCCCC;
    color: #444444;
    font-size: 0;
    text-align: center;
    transition: all 0.3s ease-in-out;
}
.owl-theme .owl-nav .owl-prev:before {
    content: "\e117";
}
.owl-theme .owl-nav .owl-next, .owl-theme .owl-nav .owl-prev {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    background: #CCCCCC;
    color: #444444;
    font-size: 0;
    text-align: center;
    transition: all 0.3s ease-in-out;
}
.ryl-text-carousel.owl-theme .owl-dots {
    width: 0;
    height: 0;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
}
.owl-theme .owl-dots .owl-dot {
    display: inline-block;
    zoom: 1;
    *: ;
    display: inline;
}
.owl-theme .owl-dots .owl-dot span {
    position: relative;
    display: block;
    background: transparent;
    width: 16px;
    height: 16px;
    margin: 0px 3px;
    border-radius: 50%;
    border: 1px solid #FFFFFF;
    transition-duration: 0.3s;
    -webkit-backface-visibility: visible;
}



/* About Section */
#about .about {
	flex-direction: column-reverse;
	text-align: center;
	max-width: 1200px;
	margin: 0 auto;
	padding: 100px 20px;
}
#about .col-left {
	width: 250px;
	height: 360px;
}
#about .col-right {
	width: 100%;
}
#about .col-right h2 {
	font-size: 1.8rem;
	font-weight: 500;
	letter-spacing: .2rem;
	margin-bottom: 10px;
}
#about .col-right p {
	margin-bottom: 20px;
}
#about .col-right .cta {
	color: black;
	margin-bottom: 50px;
	padding: 10px 20px;
	font-size: 2rem;
}
#about .col-left .about-img {
	height: 100%;
	width: 100%;
	position: relative;
	border: 10px solid white;
}
#about .col-left .about-img::after {
	content: '';
	position: absolute;
	left: -33px;
	top: 19px;
	height: 98%;
	width: 98%;
	border: 7px solid crimson;
	z-index: -1;
}
/* End About Section */

/* contact Section */
#contact .contact {
	flex-direction: column;
	max-width: 1200px;
	margin: 0 auto;
}
#contact .contact-items {
	width: 400px;
}
#contact .contact-item {
	width: 80%;
	padding: 20px;
	text-align: center;
	border-radius: 10px;
	padding: 30px;
	margin: 30px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	box-shadow: 0px 0px 18px 0 #0000002c;
	transition: .3s ease box-shadow;
}
#contact .contact-item:hover {
	box-shadow: 0px 0px 5px 0 #0000002c;
}
#contact .icon {
	width: 70px;
	margin: 0 auto;
	margin-bottom: 10px;
}
#contact .contact-info h1 {
	font-size: 2.5rem;
	font-weight: 500;
	margin-bottom: 5px;
}
#contact .contact-info h2 {
	font-size: 1.3rem;
	line-height: 2rem;
	font-weight: 500;
}

.contact_2 {
  width: 100%;
  height: 100vh;
  background-color: #272727;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-wrapper_2 {
  width: 60%;
  height: 75rem;
  display: flex;
  box-shadow: 0 3rem 7rem rgba(0, 0, 0, 0.5);
}

.contact-left_2 {
  width: 35%;
  background: linear-gradient(rgba(15, 15, 15, 0.6), rgba(22, 22, 22, 0.9)),
    url(uuu.jpg) center no-repeat;
  background-size: cover;
}

.contact-right_2 {
  width: 65%;
  background-color: #eee;
  padding: 3rem 10rem 10rem 10rem;
}

.contact-heading_2 {
  font-family: "Baloo Da 2", serif;
  font-size: 6rem;
  font-weight: 300;
  color: #272727;
  margin-bottom: 5rem;
  text-align: center;
}

.contact-right_2 form {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input-group {
  position: relative;
}

.field {
  width: 45rem;
  background-color: transparent;
  border: none;
  border-bottom: 0.2rem dashed #636363;
  margin: 3rem 0;
  padding: 1rem 1rem 1rem 0;
  font-family: "Muli", serif;
  font-size: 1.6rem;
  color: #4b4b4b;
}

.input-group input {
  height: 4rem;
}

.input-group textarea {
  max-height: 7rem;
  max-width: 45rem;
}

.field:focus {
  border-bottom-style: solid;
}

.input-group label {
  position: absolute;
  left: 0;
  font-family: "Baloo Da 2", serif;
  font-size: 1.8rem;
  color: #4b4b4b;
  text-transform: uppercase;
  pointer-events: none;
  transition: all 0.3s;
}

.input-label {
  bottom: 3rem;
}

.message {
  bottom: 6rem;
}

.field:focus ~ label {
  transform: translateY(-3rem);
  font-size: 1.2rem;
}

.submit-btn {
  width: 45rem;
  height: 5rem;
  background-color: #dc143c;
  color: #fff;
  border: none;
  margin-top: 2rem;
  font-family: "Muli", serif;
  font-size: 2rem;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  cursor: pointer;
  text-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.5);
  box-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.3);
}
/*End contact Section */

/* Footer */
#footer {
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
}
#footer .footer {
	min-height: 200px;
	flex-direction: column;
	padding-top: 50px;
	padding-bottom: 10px;
}
#footer h2 {
	color: white;
	font-weight: 500;
	font-size: 1.8rem;
	letter-spacing: .1rem;
	margin-top: 10px;
	margin-bottom: 10px;
}
#footer .social-icon {
	display: flex;
	margin-bottom: 30px;
}
#footer .social-item {
	height: 50px;
	width: 50px;
	margin: 0 5px;
}
#footer .social-item img {
	filter: grayscale(1);
	transition: .3s ease filter;
}
#footer .social-item:hover img {
	filter: grayscale(0);
}
#footer p {
	color: white;
	font-size: 1.3rem;
}
/* End Footer */

/* Keyframes */
@keyframes hamburger_puls {
	0% {
		opacity: 1;
		transform: scale(1);
	}
	100% {
		opacity: 0;
		transform: scale(1.4);
	}
}
@keyframes text_reveal_box {
	50% {
		width: 100%;
		left: 0;
	}
	100% {
		width: 0;
		left: 100%;
	}
}
@keyframes text_reveal {
	100% {
		color: white;
	}
}
@keyframes text_reveal_name {
	100% {
		color: crimson;
		font-weight: 500;
	}
}
/* End Keyframes */

/* Media Query For Tablet */
@media only screen and (min-width: 768px) {
	.cta {
		font-size: 2.5rem;
		padding: 20px 60px;
	}
	h1.section-title {
		font-size: 6rem;
	}

	/* Hero */
	#hero {
    background-image: url(bbb.jpg);
    background-size: cover;
}

	#hero h1 {
		font-size: 7rem;
	}
	/* End Hero */

	/* Services Section */
	#services .service-bottom .service-item {
		flex-basis: 45%;
		margin: 2.5%;
	}
	/* End Services Section */

	/* Project */
	#projects .project-item {
		flex-direction: row;
	}
	#projects .project-item:nth-child(even) {
		flex-direction: row-reverse;
	}
	#projects .project-item {
		height: 400px;
		margin: 0;
		width: 100%;
		border-radius: 0;
	}
	#projects .all-projects .project-info {
		height: 100%;
	}
	#projects .all-projects .project-img {
		height: 100%;
	}
	/* End Project */

	/* About */
	#about .about {
		flex-direction: row;
	}
	#about .col-left {
		width: 600px;
		height: 400px;
		padding-left: 60px;
	}
	#about .about .col-left .about-img::after {
		left: -45px;
		top: 34px;
		height: 98%;
		width: 98%;
		border: 10px solid crimson;
	}
	#about .col-right {
		text-align: left;
		padding: 30px;
	}
	#about .col-right h1 {
		text-align: left;
	}
	/* End About */

	/* contact  */
	#contact .contact {
		flex-direction: column;
		padding: 100px 0;
		align-items: center;
		justify-content: center;
		min-width: 20vh;
	}
	#contact .contact-items {
		width: 100%;
		display: flex;
		flex-direction: row;
		justify-content: space-evenly;
		margin: 0;
	}
	#contact .contact-item {
		width: 30%;
		margin: 0;
		flex-direction: row;
	}
	#contact .contact-item .icon {
		height: 100px;
		width: 100px;
	}
	#contact .contact-item .icon img {
		object-fit: contain;
	}
	#contact .contact-item .contact-info {
		width: 100%;
		text-align: left;
		padding-left: 20px;
	}
	/* End contact  */
}
/* End Media Query For Tablet */

/* Media Query For Desktop */
@media only screen and (min-width: 1200px) {

	/* header */
	#header .hamburger {
		display: none;
	}
	#header .nav-list ul {
		position: initial;
		display: block;
		height: auto;
		width: fit-content;
		background-color: transparent;
	}
	#header .nav-list ul li {
		display: inline-block;
	}
	#header .nav-list ul li a {
		font-size: 1.8rem;
	}
	#header .nav-list ul a:after {
		display: none;
	}
	/* End header */

	#services .service-bottom .service-item {
		flex-basis: 22%;
		margin: 1.5%;
	}
}
/* End  Media Query For Desktop */
</style>

</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>A</span> <span>A</span> <span>B</span></h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Interests">Interests</a></li>
            <li><a href="#projects" data-after="Projects">News</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Adlet<span></span></h1>
        <a href="#projects" type="button" class="cta">Resume</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">INTE<span>R</span>ESTS</h1>
        <p>Since childhood I have been interested in sports , study also took a place, in addition to this, communication with different people and always be in the center of attention</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://sport-51.ru/uploads/posts/2017-11/1511775124_1.jpg"/></div>
          <h2>Sport</h2>
          <p>What sports I was not fond of, I did almost everything, but to this day I do not stop swimming and MMA.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="ccc.jpg"/></div>
          <h2>Study</h2>
          <p>Not to say that I was just brilliant, but I studied well and when I wanted to, I could even become an excellent student</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="ddd.jpg"/></div>
          <h2>Communication</h2>
          <p>Here I think that I am very good, because I always like to communicate with someone, and with confidence I can say that I have enough friends</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="eee.jpg"/></div>
          <h2>Attention</h2>
          <p>I was noisy and the attention was always on me, with age it gradually faded into the background</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>News</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>IT - developer</h1>
            <h2>Specialist</h2>
            <p>I study at the SDU University and in the future I hope to become a professional in my work!</p>
          </div>
          <div class="project-img">
            <img src="https://miro.medium.com/max/620/1*y5xr0iGgkCctshouAs1IwA.jpeg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Help for life</h1>
            <h2>Volunteer</h2>
            <p>Recently was a volunteer, helping poor families with food and things that are necessary for everyday life!</p>
          </div>
          <div class="project-img">
            <img src="fff.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>New Year!</h1>
            <h2>2021</h2>
            <p>I hope that the new 2021 will be much better and will bring us a lot of joy than the previous one, I really hope, look forward soon!</p>
          </div>
          <div class="project-img">
            <img src="lll.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>NARXOZ</h1>
            <h2>Military department</h2>
            <p>By the way, I recently entered the military department at the NARXOZ University, now I have to get up every Saturday at 8)!</p>
          </div>
          <div class="project-img">
            <img src="mmm.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Good Time</h1>
            <h2>Faitful friend</h2>
            <p>I will never forget my faithful friend who was with me for decade, good times!</p>
          </div>
          <div class="project-img">
            <img src="ttt.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="aboutme.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Sportsman , IT - developer</h2>
        <p>I was born in the city of Shymkent, on August 27 2001, now I am 19 years old, I know: Kazakh, English, Russian and Turkish languages. I graduated from school #9 in 2019, entered the SDU, at the moment I am 2 course, I also go in for sports and show excellent achievements. I will graduate from university in 2023, and then more, there are many goals!</p>
        <a href="#" class="cta">Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>Me</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+7-(700)-601-00-63</h2>
            <h2>+7-(775)-912-53-20</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>190103325@gmail.com</h2>
            <h2>abcd@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Shymkent, Baidibek-bi , Kazakhstan</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

    <section class="contact_2">
        <div class="contact-wrapper_2">
          <div class="contact-left_2"></div>
          <div class="contact-right_2">
            <h1 class="contact-heading_2">Contact</h1>
            <form>
              <div class="input-group">
                <input type="text" class="field" />
                <label class="input-label">Full Name</label>
              </div>
              <div class="input-group">
                <input type="email" class="field" />
                <label class="input-label">Email</label>
              </div>
              <div class="input-group">
                <textarea class="field"></textarea>
                <label class="message">Message</label>
              </div>
              <input type="submit" class="submit-btn" value="Submit" />
            </form>
          </div>
        </div>
      </section>



  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1>Adlet Askarov</h1></div>
      <h2>Nice To Meet You!</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/aaskarov.17/?hl=ru"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://twitter.com/?lang=ru"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://vk.com/askarovv1"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p>Copyright © 2020. Powered By AAB</p>
    </div>
  </section>


  <!-- End Footer -->
  <script>
  const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});


  </script>
</body>
</html> 