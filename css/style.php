/*--------------------------------------------------------------------- File Name: style.css ---------------------------------------------------------------------*/


/*--------------------------------------------------------------------- import Fonts ---------------------------------------------------------------------*/

@import url('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700');
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

/*****---------------------------------------- 1) font-family: 'Rajdhani', sans-serif;
 2) font-family: 'Poppins', sans-serif;
 ----------------------------------------*****/


/*--------------------------------------------------------------------- import Files ---------------------------------------------------------------------*/
<?php header("Content-type: text/css"); ?>
/*--------------------------------------------------------------------- File Name: style.css ---------------------------------------------------------------------*/


/*--------------------------------------------------------------------- import Fonts ---------------------------------------------------------------------*/

@import url('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700');
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

/*****---------------------------------------- 1) font-family: 'Rajdhani', sans-serif;
 2) font-family: 'Poppins', sans-serif;
 ----------------------------------------*****/


/*--------------------------------------------------------------------- import Files ---------------------------------------------------------------------*/

@import url(animate.min.css);
@import url(normalize.css);
@import url(icomoon.css);
@import url(css/font-awesome.min.css);
@import url(meanmenu.css);
@import url(owl.carousel.min.css);
@import url(swiper.min.css);
@import url(slick.css);
@import url(jquery.fancybox.min.css);
@import url(jquery-ui.css);
@import url(nice-select.css);

/*--------------------------------------------------------------------- skeleton ---------------------------------------------------------------------*/

* {
    box-sizing: border-box !important;
    transition: ease all 0.5s;
}

html {
    scroll-behavior: smooth;
    overflow-x: hidden !important;
}

body {
    color: #666666;
    font-size: 14px;
    font-family: Poppins;
    line-height: 1.80857;
    font-weight: normal;
    overflow-x: hidden !important;
}

a {
    color: #1f1f1f;
    text-decoration: none !important;
    outline: none !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 0;
    font-weight: normal;
    position: relative;
    padding: 0 0 10px 0;
    font-weight: normal;
    line-height: normal;
    color: #111111;
    margin: 0
}

h1 {
    font-size: 24px
}

h2 {
    font-size: 22px
}

h3 {
    font-size: 18px
}

h4 {
    font-size: 16px
}

h5 {
    font-size: 14px
}

h6 {
    font-size: 13px
}

*,
*::after,
*::before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: #212121;
    text-decoration: none!important;
    opacity: 1
}

button:focus {
    outline: none;
}

ul,
li,
ol {
    margin: 0px;
    padding: 0px;
    list-style: none;
}

p {
    font-family: Arial, Helvetica, sans-serif;
    margin: 20px;
    font-weight: 300;
    font-size: 15px;
    line-height: 24px;
}

a {
    font-family: Arial, Helvetica, sans-serif;
    color: #222222;
    text-decoration: none;
    outline: none !important;
}

a.serif {
    font-family: "Times New Roman", Times, serif;
 }

a,
.btn {
    text-decoration: none !important;
    outline: none !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

img {
    max-width: 100%;
    height: auto;
}

 :focus {
    outline: 0;
}

.paddind_bottom_0 {
    padding-bottom: 0 !important;
}

.btn-custom {
    margin-top: 20px;
    background-color: transparent !important;
    border: 2px solid #ddd;
    padding: 12px 40px;
    font-size: 16px;
}

.lead {
    font-size: 18px;
    line-height: 30px;
    color: #767676;
    margin: 0;
    padding: 0;
}

.form-control:focus {
    border-color: #ffffff !important;
    box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .25);
}

.navbar-form input {
    border: none !important;
}

.badge {
    font-weight: 500;
}

.map_image {
    height: 160px;
    width: 160px;
    margin-left: 35px;
}

blockquote {
    margin: 20px 0 20px;
    padding: 30px;
}

button {
    border: 0;
    margin: 0;
    padding: 0;
    cursor: pointer;
}

.full {
    float: left;
    width: 100%;
}

.layout_padding {
    padding-top: 90px;
    padding-bottom: 0px;
}


/* header section start */

.header_section {
    width: 100%;
    float: left;
    background-image: url(../images/banner-bg.png);
    height: auto;
    height: auto;
    padding: 20px 0px;
    background-size: 100%;
}

.header_bg {
    background-image: url(../images/header-bg.png);
    background-size: 100% 100%;
}

.logo {
    width: 86%;
    float: left;
    position: relative;
}

.img_trieuchung{
    margin-top: -32%;
    margin-left: 20%;
}

.img_5k{
    width: 55%;
    height: 55%;
    margin-left: 10%;
}

.menu_main {
}

.menu_main ul {
    margin: 0px;
    padding: 0px;
}

.menu_main li {
    font-size: 20px;
    color: #385a64;
    float: left;
}

.menu_main li a {
    color: #385a64;
    padding-left: 20px;
}

.menu_main li a:hover {
    color: #3674f2;
}

.bg-dark {
    background-color: rgba( 54, 14, 14, 0.5)!important;
}

.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 4;
    top: 0;
    left: 0;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

.overlay a {
    padding: 0px;
    text-decoration: none;
    font-size: 22px;
    color: #f1f1f1;
    display: block;
    transition: 0.3s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.toggle_menu {
    top: 8px;
    position: relative;
    left: 0px;
}
.toggle_menu_1{
    display: none;
}

.shoping_bag {
    float: left;
    text-align: center !important;
    padding-left: 40px;
    padding-top: 8px;
}

.togle_3 {
    float: left;
    width: 70%;
}

menu_text {
    float: right;
    width: 30%;
}

.search_icon {
    width: 100%;
    float: left;
}


/* header section end */


/* banner section start */

.banner_section {
    width: 100%;
    float: left;
    padding-bottom: 80px;
}

.banner_img {
    width: 80%;
    text-align: center;
}

.banner_taital {
    width: 100%;
    float: left;
    font-size: 60px;
    color: #fef6fc;
    font-weight: bold;
    line-height: 50px;
    padding-top: 30px;
}

.banner_text {
    width: 80%;
    float: left;
    font-size: 16px;
    color: #fef6fc;
    margin: 20px 0px 0px 0px;
}

.more_bt {
    width: 150px;
    float: left;
    margin-top: 30px;
}

.more_bt a {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #ffffff;
    background-color: #a258ed;
    text-align: center;
    padding: 10px 0px;
    border-radius: 40px;
    text-transform: uppercase;
}

.more_bt a:hover {
    color: #ffffff;
    background-color: #3674f2;
}

#my_slider a.carousel-control-prev {
    position: absolute;
    left: -60px;
    right: 0px;
    top: 118%;
}

#my_slider a.carousel-control-next {
    position: absolute;
    left: 0px;
    right: -60px;
    top: 118%;

}

#my_slider .carousel-control-prev, 
#my_slider .carousel-control-next {
    width: 55px;
    height: 55px;
    background: #ffffff;
    opacity: 1;
    font-size: 30px;
    color: #000;
    border-radius: 100%;
    margin: 0 auto;
    box-shadow: 0px 0px 5px 0px;
}

#my_slider .carousel-control-prev:hover,
#my_slider .carousel-control-next:hover,
#my_slider .carousel-control-prev:focus,
#my_slider .carousel-control-next:focus {
    background: #a258ed;
    color: #ffffff;
}


/* banner section end */

/* protect section start */

.protect_section{
    width: 100%;
    float: left;
}

.protect_taital{
    width: 100%;
    float: left;
    font-size: 40px;
    color: #081419;
    font-weight: bold;
    text-align: center;
}

.protect_text {
    width: 80%;
    margin: 0 auto;
    font-size: 16px;
    color: #081419;
    text-align: center;
}

.protect_section_2{
    width: 100%;
    float: left;
}

.hands_text {
    width: 61%;
    font-size: 30px;
    color: #081419;
    text-align: center;
    font-weight: bold;
    padding-top: 40px;
}

.hands_text a{
    color: #081419;
}

.hands_text a:hover{
    color: #a258ed;
}

.hands_text::after {
    content: '';
    position: absolute;
    width: 200px;
    height: 2px;
    left: initial;
    right: -210px;
    border: 1px solid #111111;
}

.hands_text_2 {
    width: 50%;
    font-size: 30px;
    color: #081419;
    text-align: center;
    font-weight: bold;
    margin: 40px 80px;
}

.hands_text_2 a{
    color: #081419;
}

.hands_text_2 a:hover{
    color: #a258ed;
}

.hands_text_2::after {
    content: '';
    position: absolute;
    width: 130px;
    height: 2px;
    left: initial;
    right: -160px;
    border: 1px solid #111111;
}

/* protect section end */


/* about section start */

.about_section {
    width: 100%;
    float: left;
    padding: 90px 0px;
}

.about_taital {
    width: 60%;
    float: left;
    font-size: 40px;
    font-weight: bold;
    color: #151515;
    padding-top: 30px;
}

.about_text {
    width: 80%;
    float: left;
    font-size: 16px;
    color: #151515;
    margin: 0px;
}

.read_bt {
    width: 150px;
    float: left;
    margin-top: 30px;
}

.read_bt a {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #ffffff;
    background-color: #3674f2;
    text-align: center;
    padding: 10px 0px;
    border-radius: 40px;
    text-transform: uppercase;
}

.read_bt a:hover {
    color: #ffffff;
    background-color: #a258ed;
}

.about_tag {
    font-style: italic;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-bottom: 10px;
    font-size: 40px;
    font-weight: 600;
    color: #000;
}

.about_taital_main{
    width: 100%;
    float: left;
    padding: 30px 0px;
}
.about_menu{
    width: 100%;
    float: left;
}
.about_menu ul{
    margin: 0px;
    padding: 0px;
}
.about_menu li{
    float: left;
    font-size: 18px;
    color: #ffffff;
    padding-right: 10px;
}

.about_menu li a{
    color: #ffffff;
}
.about_menu li a:hover{
    color: #000;
}



/* about section end */

/* doctor section start */

.doctors_section {
    width: 100%;
    float: left;
    background-image: linear-gradient(90deg, #7d56c9 18%, rgba(76, 90, 90, 0) 4%), url(../images/doctor-bg.png);
    background-size: 100%;
    padding-bottom: 90px;
}

.covid_section {
    width: 100%;
    float:left;
    background-image: url(../images/news-bg.png);
    background-size: 100%;
    padding-bottom: 90px;
}

.taital_left {
    width: 14%;
    float: left;
    margin-top: 80px;
}

.taital_right {
    width: 86%;
    float: left;
    padding-left: 100px;
}

.doctor_taital{
    width: 100%;
    float: left;
    font-size: 30px;
    color: #000;
    font-weight: bold;
}

.covid_taital{
    width: 100%;
    float: left;
    font-size: 25px;
    color: #000;
    font-weight: bold;
    padding:15px;
}

.doctor_text {
    width: 50%;
    float: left;
    font-size: 16px;
    color: black;
    margin: 0px;
}

.covid_text {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    width: 80%;
    float: left;
    font-size: 18px;
    color: black;
    margin: 0px;
    margin-left: 20px;
}

.readmore_bt {
    width: 170px;
    margin-top: 50px;
}

.readmore_bt a {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #ffffff;
    background-color: #3674f2;
    text-align: center;
    padding: 10px 0px;
    border-radius: 30px;
    margin-top: 30px;
}

.readmore_bt a:hover {
    color: #ffffff;
    background-color: #a258ed;
}

.play_icon {
  width: 100%;
  margin: 0 auto;
  position: relative;
  z-index: 5;
  text-align: center;
}

.play_icon::before {
  content: '';
  position: absolute;
  top: 38px;
  left: 90px;
  width: 90px;
  height: 90px;
  transform: translate(-50%, -50%);
  background-color: #ffffff;
  border-radius: 100%;
  animation: fadeEffect 1.3s infinite ease;
  box-shadow: 0px 0px 10px 0px;
  right: 0px;
  margin: 0 auto;
  z-index: -1;
}

@keyframes fadeEffect {
  0% {
    transform: translate(-50%, -50%) scale(1);
    opacity: 1
  }
  100% {
    transform: translate(-50%, -50%) scale(1.2);
    opacity: 0;
  }
}




/* doctor section end */


/* news section start */

.news_section {
    width: 100%;
    float: left;
    margin-top: -5%;
    background-image: url(../images/news-bg.png);
    height: auto;
    background-size: 100%;
    padding-bottom: 190px;
    background-repeat: no-repeat;
}

.news_taital {
    width: 100%;
    float: left;
    font-size: 40px;
    color: #081419;
    text-align: center;
    font-weight: bold;
}

.news_text {
    width: 60%;
    margin: 0 auto; 
    font-size: 16px;
    color: #151515;
    text-align: center;
}

.news_section_2 {
    width: 100%;
    float: left;   
}

.box_main {
    width: 60%;
    margin: 0 auto;
    background-color: #ffffff;
    height: auto;
    box-shadow: 0px 0px 8px 0px;
    padding: 0px 20px 0px 20px;
    margin-bottom: 20px;
}

.image_1 {
    width: 100%;
    text-align: center;
    position: relative;
    top: -20px;
}


.lorem_text {
    width: 100%;
    font-size: 16px;
    color: #081419;
    text-align: center;
    margin: 0 auto;
}

.read_btn {
    width: 170px;
    margin: 0 auto;
    text-align: center;
    padding-top: 10px;
    display: flex;
    top: 20px;
    position: relative;
}

.read_btn a {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #ffffff;
    background-color: #3674f2;
    text-align: center;
    padding: 10px 0px;
    border-radius: 30px;
}

.read_btn a:hover {
    color: #ffffff;
    background-color: #a258ed;
}

.design_text {
    width: 100%;
    font-size: 24px;
    font-weight: bold;
    color: #151515;
    text-align: center;
    padding-top: 20px;
}


#main_slider a.carousel-control-prev {
    position: absolute;
    left: -60px;
    right: 0px;
    top: 105%;
}

#main_slider a.carousel-control-next {
    position: absolute;
    left: 0px;
    right: -60px;
    top: 105%;
    background: #7d56c9;
    color: #ffffff;
}

#main_slider .carousel-control-prev, 
#main_slider .carousel-control-next {
    width: 55px;
    height: 55px;
    background: #ffffff;
    opacity: 1;
    font-size: 30px;
    color: #000;
    border-radius: 100%;
    margin: 0 auto;
    box-shadow: 0px 0px 5px 0px;
}

#main_slider .carousel-control-prev:hover,
#main_slider .carousel-control-next:hover,
#main_slider .carousel-control-prev:focus,
#main_slider .carousel-control-next:focus {
    background: #7d56c9;
    color: #ffffff;
}


/* news section end */

/* update section start */

.update_section {
    width: 100%;
    float: left;
    padding-bottom: 100px;
}

.update_taital{
    width: 100%;
    font-size: 40px;
    color: #242424;
    text-align: center;
    font-weight: bold;
}

.update_mail {
    color: #969695;
    width: 60%;
    height: 55px;
    font-size: 18px;
    padding: 10px 20px 0px 20px;
    background-color: transparent !important;
    border: 1px solid #5e90f4 !important;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    display: block;
    margin-top: 30px;
}

textarea#comment::placeholder {
    color: #969695;
}


.subscribe_bt {
    width: 200px;
    margin: 0 auto;
    padding-top: 30px;
}

.subscribe_bt a {
    width: 100%;
    float: left;
    color: #ffffff;
    font-size: 16px;
    padding: 10px 0px;
    background-color: #250d52;
    border-radius: 30px;
    text-transform: uppercase;
    font-weight: bold;
    text-align: center;
}

.subscribe_bt a:hover {
    color: #ffffff;
    background-color: #3674f2;
}

/* update section end */

/* footer section start */

.footer_section {
    width: 100%;
    float: left;
    background-color: #250d52;
    height: auto;
    padding: 0px 0px 40px 0px;
}

.footer_section_2 {
    width: 100%;
    float: left;
    padding-top: 50px;
}

.useful_text {
    width: 100%;
    font-size: 24px;
    color: #ffffff;
    font-weight: bold;
    text-transform: uppercase;
}

.footer_text {
    width: 100%;
    float: left;
    font-size: 13px;
    color: #ffffff;
    margin: 0px;
    padding-top: 10px;
}

.footer_menu {
    width: 100%;
    float: left;
}

.footer_menu ul {
    margin: 0px;
    padding: 0px;
}

.footer_menu li {
    font-size: 16px;
    color: #ffffff;
}

.footer_menu li a {
    color: #ffffff;
}

.footer_menu li a:hover {
    color: #3674f2;
}

.location_text {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #fffcfc;
    padding-top: 10px;
}

.useful_text {
    padding-top: 30px;
}

.footer_section_2 {
    padding-top: 20px;
}

.location_text a {
    color: #fffcfc;
}

.location_text a:hover {
    color: #3674f2;
}

.padding_15 {
    padding-left: 10px;
}


/* footer section end */

/* copyright section start */

.copyright_section {
    width: 100%;
    float: left;
    background-color: #ffffff;
    height: auto;
}

.copyright_text {
    width: 100%;
    float: left;
    font-size: 16px;
    color: #000;
    margin: 20px 0px;
    text-align: center;
}
.copyright_text a {
    color: #000;
}

.copyright_text a:hover {
    color: #3674f2;
}


/* copyright section end */

.margin_top90{
    margin-top: 90px;
}

/* Popup video css start */
#fade {
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: black;
    z-index: 1001;
    -moz-opacity: 0.8;
    opacity: .80;
    filter: alpha(opacity=80);
  }
  
  #light {
    display: none;
    position:fixed;
    top: 50%;
    left: 50%;
    max-width: 600px;
    max-height: 360px;
    margin-left: -300px;
    margin-top: -180px;
    border: 2px solid #FFF;
    background: #FFF;
    z-index: 1002;
    overflow: visible;
  }
  
  #boxclose {
    float: right;
    cursor: pointer;
    color: #fff;
    border: 1px solid #AEAEAE;
    border-radius: 3px;
    background: #222222;
    font-size: 31px;
    font-weight: bold;
    display: inline-block;
    line-height: 0px;
    padding: 11px 3px;
    position: absolute;
    right: 2px;
    top: 2px;
    z-index: 1002;
    opacity: 0.9;
  }
  
  .boxclose:before {
    content: "x";
  }
  
  #fade:hover ~ #boxclose {
    display:none;
  }
  
  .test:hover ~ .test2 {
    display: none;
  }
/* Popup video css end */

.list_khaibao{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    width: 100%;
}

.body_khaibao{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-size: 100%;
    font-size: 16px;
}

.gioi_tinh{
    overflow-y: scroll;
    width: 100%; 
    height: auto; 
    max-height: 200px;
    display: none;
}