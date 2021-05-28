<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lowres
 */

get_header();
?>

<main id="primary" class="site-main">
		<div class="container frontpage__content"> 

      <div class="row frontpage__intro">

        <div class="frontpage__firsthalf">
          <img src="wp-content/themes/lowres/assets/nyulogos.jpeg" class="frontpage__logos" alt="NYU Tisch and NYU Shanghai" />
          <div class="frontpage__linebreak"></div>
          <h1>A New Global<br/>Low Residency<br/>Program</h1>
        </div>

        <div class="frontpage__secondhalf">
          <p>NYU Tisch School of the Arts and NYU Shanghai is now offering a joint 1-year Master’s degree that involves 3 site-specific sessions across the University’s Global Network interspersed by 2 semesters of online learning.
          <br/><br/>
          A curricular emphasis on context and connectivity along with a spirit of experimentation, collaboration and community  will be infused across the entire experience. The Low Res Program will transform the way you create. Come explore the world with us!</p>
        </div>

      </div>

      <div class="row">
        <div class="frontpage__notificationbox">
          <div class="frontpage__notificationtext">
            <p>We have 2 online information sessions scheduled for this Fall:<br/><br/>
            Monday, October 12, 2020 at 9pm ET. Here is the video recording.<br/>
            Wednesday, Sept 23, 2020 at 11am ET. Here is the video recording from our first session.
            </p>
          </div>

          <div class="frontpage__notificationbutton">
            <div class="frontpage__cta">Contact us</div>
          </div>

        </div>
      </div>

      <div class="row cities__container">
        <div class="heading">
          <h2 class="heading__cities">One year.<br/>Three cities.<br/>Extend your reach.</h2>
        </div>

          <div class="cities__box nyc">

          <svg version="1.1" id="shape__nyc" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 244.2 185.1" style="enable-background:new 0 0 244.2 185.1;" xml:space="preserve">
          <style type="text/css">
            .st30{fill:none;stroke:#15A698;stroke-miterlimit:10;stroke-dasharray:3.0088,3.0088;}
          </style>
          <g>
            <defs>
              <path id="SVGID_6_" d="M196.9,25.2c26.6,19.6,47.5,56.2,41.3,89.9c-6.3,33.8-40,64.4-73,69.2c-33.2,4.9-65.9-15.9-97.3-43.3
                C36.7,113.6,6.6,79.3,13.2,55c6.4-24.3,49.5-38.9,87.1-45.1C138,3.7,170.2,5.9,196.9,25.2z"/>
            </defs>
            <clipPath id="SVGID_5_">
              <use xlink:href="#SVGID_6_"  style="overflow:visible;"/>
            </clipPath>
            <g style="clip-path:url(#SVGID_5_);">
              
                <image style="overflow:visible;" width="1104" height="1104" xlink:href="wp-content/themes/lowres/assets/bg_nyc-min.jpg"  transform="matrix(0.2181 0 0 0.2181 2.896 -34.2846)">
              </image>
            </g>
          </g>
          <g>
            <path class="st30" d="M172.4,4.9C205.2,15.5,238,44.8,243,80.1c4.9,35.5-18.3,76.9-49.3,92.6c-31.2,15.8-70.4,6-110.5-10.6
              c-40-16.8-81.1-40.8-82.7-67c-1.7-26.1,36-54.8,71.2-73.4C107,3.2,139.5-5.4,172.4,4.9z"/>
          </g>
          </svg>


            <h3>NYU New York,<br/>Summer 2020</h3>
            <div class="box__circle"></div>
            <p>This 5-week session will<br/>be spent at NYU’s new “Media, Technology & Arts” building in Brooklyn. Students will benefit from the network, resources, and 40-year history of ITP in New York! Check out a Video Tour of the NYU NY space</p>
          </div>

          <div class="cities__box berlin">

          <svg version="1.1" id="shape__berlin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	          viewBox="0 0 192.4 218.9" style="enable-background:new 0 0 192.4 218.9;" xml:space="preserve">
          <style type="text/css">
            .st10{clip-path:url(#maskberlin);}
            .st11{fill:none;stroke:#E84041;stroke-miterlimit:10;stroke-dasharray:2.9857,2.9857;}
          </style>
          <g>
            <defs>
              <path id="berlinlines" d="M17.8,122.9C5.9,92.4,7.7,50.8,30.7,25.8C53.8,0.9,98.1-6.9,128.3,6.5c30.3,13.4,18.2,55.9,30,95.4
                c11.7,39.5,47.3,76.3,28.9,93.2c-18.2,16.9-61.9,6.4-96.7-8.3S29.9,153.2,17.8,122.9z"/>
            </defs>
            <clipPath id="maskberlin">
              <use xlink:href="#berlinlines"  style="overflow:visible;"/>
            </clipPath>
            <g class="st10">
              
                <image style="overflow:visible;" width="1738" height="1528" xlink:href="wp-content/themes/lowres/assets/berlin.jpg"  transform="matrix(0.1789 0 0 0.1789 -67.1936 -23.2947)">
              </image>
            </g>
          </g>
          <g>
            <path class="st11" d="M2,109.7C-3.6,77.4,6.5,37,34,17.1c27.6-19.8,72.7-18.6,99.6,0.5c27.1,19.2,6.7,58.4,10.4,99.5
              c3.6,41,31.1,84.2,9.7,97.1c-21.2,12.9-62-6.1-93.1-27.5C29.4,165.4,7.8,141.8,2,109.7z"/>
          </g>
          </svg>



            <h3 class="cities__rightalign">NYU Berlin,<br/>January 2021</h3>
            <div class="box_trapezoid"></div>
            <p class="cities__rightalign">Students will reconnect with one another for an immersive 10-day learning experience in Berlin, a hub for emerging media arts, design and culture.</p>
          </div>

          <div class="cities__box shanghai">

          <svg version="1.1" id="shape__shanghai" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 189.5 182.8" style="enable-background:new 0 0 189.5 182.8;" xml:space="preserve">
          <style type="text/css">
            .st20{fill:none;stroke:#F3B747;stroke-miterlimit:10;stroke-dasharray:2.9962,2.9962;}
          </style>
          <g>
            <defs>
              <path id="SVGID_10_" d="M168.3,8.5c11.5,12.3,6.7,40,5.4,66.4c-1.4,26.2,0.7,51.2-10.8,70.2C151.4,164,126.4,177,102.6,176
                c-23.9-1.2-46.6-16.3-67-35.2c-20.5-19-38.7-41.7-35-60.9s29-34.8,49.5-47.1S86,11.4,107.5,5.2C129.2-0.8,156.9-3.8,168.3,8.5z"/>
            </defs>
            <clipPath id="SVGID_20_">
              <use xlink:href="#SVGID_10_"  style="overflow:visible;"/>
            </clipPath>
            <g style="clip-path:url(#SVGID_20_);">
              
                <image style="overflow:visible;" width="956" height="956" xlink:href="wp-content/themes/lowres/assets/bg_shanghai.jpg"  transform="matrix(0.1992 0 0 0.1992 -7.2906 -7.1874)">
              </image>
            </g>
          </g>
          <g>
            <path class="st20" d="M184.8,21.2c9.8,14.4,0.4,41.8-5.2,68.4c-5.7,26.5-7.6,52.2-22.3,69.7c-14.8,17.4-42.3,26.6-66.4,21.6
              c-24.1-5.1-44.8-24.1-62.6-46.6C10.5,111.7-4.4,85.6,2.5,66.7c6.8-18.9,35.1-30.7,57.9-40c22.8-9.2,40.2-15.9,63.1-18.7
              C146.5,5.4,175.1,6.8,184.8,21.2z"/>
          </g>
          </svg>

            <h3>NYU Shanghai,<br/>Summer 2021</h3>
            <div class="box__three"></div>
            <p>A 5-week session at NYU Shanghai where students will explore curricular opportunities and experience China’s interactive media ecosystem firsthand. Check out a Video Tour of the NYUSH space.</p>
          </div>
        
      </div>

      <div class="divider">
        <svg version="1.1" id="Laag_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 90.9 23" style="enable-background:new 0 0 90.9 23;" xml:space="preserve">
        <style type="text/css">
          .st0-x{fill:#FBFAE2;}
          .st1-x{fill:#F3B545;}
          .st2-x{fill:#E83F41;}
        </style>
        <rect x="77.1" y="7.4" class="st0-x" width="13.9" height="8.2"/>
        <rect x="41" y="7.4" class="st0-x" width="18.7" height="8.2"/>
        <rect x="32.8" y="0" class="st0-x" width="8.2" height="23"/>
        <rect x="69.6" class="st0-x" width="7.4" height="7.4"/>
        <rect y="0" class="st1-x" width="15.9" height="8.2"/>
        <rect x="15.9" y="8.2" class="st1-x" width="8.2" height="8.2"/>
        <rect x="24.1" y="0" class="st2-x" width="8.7" height="23"/>
        <rect x="41" y="0" class="st2-x" width="28.6" height="7.4"/>
        </svg>
      </div> 


      <div class="row onsite__container">
        <div class="onsite_first">

        <svg class="onsite__bg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	        viewBox="0 0 559.8 698.6" style="enable-background:new 0 0 559.8 698.6;" xml:space="preserve">
        <style type="text/css">
          .st0-o{fill:#FFFFFF;}
        </style>
        <g id="Laag_2">
          <image style="overflow:visible;" width="407" height="571" id="t9iHOs_1_" xlink:href="wp-content/themes/lowres/assets/87904966345D0F29.jpg"  transform="matrix(1.2235 0 0 1.2235 0.5 0)"></image>
        </g>

<g id="Laag_1">
<rect x="171" class="st0-o w" width="84.2" height="29.1"/>
	<rect x="313.3" class="st0-o h_var" width="29.1" height="110.6"/>
	<rect x="462.4" class="st0-o" width="29.1" height="110.6"/>
	<rect x="342.4" y="110.5" class="st0-o w" width="44.9" height="29.1"/>
	<rect x="142" y="29.1" class="st0-o h_var" width="29.1" height="81.5"/>
	<rect x="29.6" class="st0-o" width="29.1" height="110.6"/>
	<rect x="58.7" y="110.5" class="st0-o w" width="71.3" height="29.1"/>
	<rect x="29.6" y="110.5" class="st0-o" width="29.1" height="29.1"/>
	<rect x="142" class="st0-o" width="29.1" height="29.1"/>
	<rect x="171" y="29.1" class="st0-o h_var" width="84.2" height="81.5"/>
	<rect x="284.3" y="29.1" class="st0-o h_var" width="29" height="81.8"/>
	<rect x="416.4" class="st0-o h_var" width="46" height="110.6"/>
	<rect x="387.3" y="110.5" class="st0-o" width="29.1" height="29.1"/>
	<rect x="462.4" y="110.5" class="st0-o w" width="68.1" height="29.1"/>
	<rect x="491.5" class="st0-o h_var" width="39" height="110.6"/>
	<rect x="0.3" class="st0-o h_var" width="29.3" height="139.9"/>
	<rect x="142" y="139.6" class="st0-o" width="29.1" height="29.1"/>
	<rect x="255.2" y="139.6" class="st0-o" width="58.3" height="29.4"/>
	<rect x="491.5" y="279.3" class="st0-o h_var" width="39" height="111.3"/>
	<rect x="416.4" y="558.6" class="st0-o h_var" width="46.2" height="110.6"/>
	<rect x="416.3" y="250" class="st0-o" width="46.3" height="29.1"/>
	<rect x="170.9" y="669" class="st0-o" width="84.2" height="29.1"/>
	<rect x="342.1" y="139" class="st0-o h_var" width="45.4" height="111.5"/>
	<rect x="416.1" y="278.7" class="st0-o h_var" width="46.5" height="111.9"/>
	<rect x="416.1" y="139" class="st0-o h_var" width="46.5" height="111"/>
	<rect x="170.8" y="587.1" class="st0-o h_var" width="84.6" height="81.9"/>
	<rect x="255" y="528.9" class="st0-o" width="87.6" height="30"/>
	<rect x="342.1" y="558" class="st0-o" width="45.4" height="111.5"/>
	<rect y="558" class="st0-o" width="29.8" height="139.7"/>
	<rect x="58.4" y="139" class="st0-o" width="83.8" height="111.9"/>
	<rect x="491.2" y="139" class="st0-o" width="39" height="111.5"/>
	<rect y="418.3" class="st0-o" width="29.8" height="139.7"/>
	<rect x="462.6" y="139.9" class="st0-o" width="29.1" height="110.6"/>
	<rect x="342.6" y="250.5" class="st0-o" width="44.9" height="29.1"/>
	<rect x="29.8" y="250.5" class="st0-o" width="29.1" height="29.1"/>
	<rect x="130.1" y="250.5" class="st0-o" width="41.1" height="29.1"/>
	<rect x="387.5" y="250.5" class="st0-o" width="29.1" height="29.1"/>
	<rect x="462.6" y="250.5" class="st0-o" width="68.1" height="29.1"/>
	<rect x="0.5" y="139.9" class="st0-o" width="29.3" height="139.7"/>
	<rect x="29.8" y="279.6" class="st0-o" width="29.1" height="110.6"/>
	<rect x="255.4" y="308.7" class="st0-o" width="29.1" height="81.5"/>
	<rect x="58.9" y="390.1" class="st0-o" width="71.3" height="29.1"/>
	<rect x="130.1" y="390.1" class="st0-o" width="41.1" height="29.1"/>
	<rect x="387.5" y="390.1" class="st0-o" width="29.1" height="29.1"/>
	<rect x="462.6" y="390.1" class="st0-o" width="68.1" height="29.1"/>
	<rect x="387.5" y="419.2" class="st0-o h_var" width="29.1" height="110.6"/>
	<rect x="462.6" y="419.2" class="st0-o h_var" width="29.1" height="110.6"/>
	<rect x="416.6" y="390.1" class="st0-o" width="46" height="29.1"/>
	<rect x="342.6" y="529.8" class="st0-o" width="44.9" height="29.1"/>
	<rect x="416.6" y="529.8" class="st0-o" width="46" height="29.1"/>
	<rect x="142.1" y="448.3" class="st0-o h_var" width="29.1" height="81.5"/>
	<rect x="255.4" y="448.3" class="st0-o h_var" width="29.1" height="81.5"/>
	<rect x="171.2" y="529.8" class="st0-o" width="84.2" height="29.1"/>
	<rect x="142.1" y="419.2" class="st0-o" width="29.1" height="29.1"/>
	<rect x="387.5" y="529.8" class="st0-o" width="29.1" height="29.1"/>
	<rect x="462.6" y="529.8" class="st0-o" width="68.1" height="29.1"/>
	<rect x="491.7" y="419.2" class="st0-o h_var" width="39" height="110.6"/>
	<rect x="462.6" y="558.9" class="st0-o h_var" width="29.1" height="110.6"/>
	<rect x="342.6" y="669.5" class="st0-o" width="44.9" height="29.1"/>
	<rect x="416.6" y="669.5" class="st0-o" width="46" height="29.1"/>
	<rect x="255.4" y="588" class="st0-o" width="29.1" height="81.5"/>
	<rect x="29.8" y="669.5" class="st0-o" width="29.1" height="29.1"/>
	<rect x="142.1" y="558.9" class="st0-o" width="29.1" height="29.1"/>
	<rect x="130.1" y="669.5" class="st0-o" width="41.1" height="29.1"/>
	<rect x="462.6" y="669.5" class="st0-o" width="68.1" height="29.1"/>
	<rect x="491.7" y="558.9" class="st0-o h_var" width="39" height="110.6"/>
	<rect x="462.6" y="279.6" class="st0-o h_var" width="29.1" height="110.6"/>
	<rect x="58.9" y="529.8" class="st0-o" width="71.3" height="29.1"/>
	<rect x="142.1" y="448.3" class="st0-o h_var" width="29.1" height="81.5"/>
	<rect x="29.8" y="558.9" class="st0-o h_var" width="29.1" height="110.6"/>
	<rect x="58.9" y="669.5" class="st0-o" width="71.3" height="29.1"/>
	<rect x="342.6" y="390.1" class="st0-o" width="44.9" height="29.1"/>
	<rect x="29.8" y="390.1" class="st0-o" width="29.1" height="29.1"/>
	<rect x="416.6" y="529.4" class="st0-o" width="45.9" height="29.5"/>
</g>
</svg>

          <div class="onsite__text">
            <h3>Online Courses</h3>
            <p>Learn, connect, and collaborate remotely through online coursework in the Fall & Spring semesters. Integrate personal and professional experiences in both your research and project work.</p>
          </div>
        </div>
        <div class="onsite_second">

          <svg class="onsite__bg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 559.8 698.6" style="enable-background:new 0 0 559.8 698.6;" xml:space="preserve">
          <style type="text/css">
            .st0-o{fill:#FFFFFF;}
          </style>
          <g id="Laag_2">
            <g id="bQKPwQ.tif">
              
                <image style="overflow:visible;" width="407" height="571" id="Laag_1_2_" xlink:href="wp-content/themes/lowres/assets/8798B472EE6B6370.png"  transform="matrix(1.2246 0 0 1.2246 0.3696 -0.6721)"></image>
            </g>
          </g>
          <g id="Laag_1">
          <rect x="171" class="st0-o" width="84.2" height="29.1"/>
            <rect x="313.3" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="387.3" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="342.4" y="110.5" class="st0-o w" width="44.9" height="29.1"/>
            <rect x="416.4" y="110.5" class="st0-o w" width="46" height="29.1"/>
            <rect x="142" y="29.1" class="st0-o h" width="29.1" height="81.5"/>
            <rect x="255.2" y="29.1" class="st0-o h" width="29.1" height="81.5"/>
            <rect x="142" class="st0-o h" width="29.1" height="29.1"/>
            <rect x="255.2" class="st0-o w" width="58.1" height="29.1"/>
            <rect x="284.3" y="29.1" class="st0-o h" width="29" height="81.8"/>
            <rect x="387.3" y="110.5" class="st0-o w" width="29.1" height="29.1"/>
            <rect x="462.4" y="110.5" class="st0-o h" width="68.1" height="29.1"/>
            <rect x="491.5" class="st0-o h" width="39" height="110.6"/>
            <rect x="0.3" class="st0-o h" width="29.3" height="139.9"/>
            <rect x="171" y="139.6 w" class="st0-o" width="84.2" height="29.1"/>
            <rect x="142" y="139.6 w" class="st0-o" width="29.1" height="29.1"/>
            <rect x="255.2" y="139.6" class="st0-o" width="58.3" height="29.4"/>
            <rect x="530.5" y="279.3 h" class="st0-o" width="29.1" height="139.7"/>
            <rect x="491.5" y="279.3 h" class="st0-o" width="39" height="111.3"/>
            <rect x="284.3" y="588" class="st0-o" width="29" height="81.5"/>
            <rect x="416.4" y="558.6 h" class="st0-o" width="46.2" height="110.9"/>
            <rect x="416.3" y="250" class="st0-o" width="46.3" height="29.1"/>
            <rect x="170.9" y="669 w" class="st0-o" width="84.2" height="30.8"/>
            <rect x="255.1" y="669 w" class="st0-o" width="87.5" height="30.8"/>
            <rect x="416.1" y="139" class="st0-o" width="46.5" height="111"/>
            <rect x="462.4" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="530.5" class="st0-o h" width="29.1" height="139.7"/>
            <rect x="255" y="528.9" class="st0-o" width="87.6" height="30"/>
            <rect y="558" class="st0-o" width="29.8" height="140.6"/>
            <rect x="491.2" y="139" class="st0-o" width="39" height="111.5"/>
            <rect y="418.3" class="st0-o" width="29.8" height="139.7"/>
            <rect x="313.5" y="139.6 h" class="st0-o h" width="29.1" height="110.9"/>
            <rect x="462.6" y="139.9 h" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="530.7" y="139.9 h" class="st0-o h" width="29.1" height="139.7"/>
            <rect x="342.6" y="250.5" class="st0-o" width="44.9" height="29.1"/>
            <rect x="255.4" y="169" class="st0-o h" width="29.1" height="81.5"/>
            <rect x="171.2" y="250.5" class="st0-o w" width="84.2" height="29.1"/>
            <rect x="58.9" y="250.5" class="st0-o w" width="71.3" height="29.1"/>
            <rect x="29.8" y="250.5" class="st0-o" width="29.1" height="29.1"/>
            <rect x="462.6" y="250.5" class="st0-o" width="68.1" height="29.1"/>
            <rect x="0.5" y="139.9" class="st0-o h" width="29.3" height="139.7"/>
            <rect x="29.8" y="279.6" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="255.4" y="279.6" class="st0-o w" width="58.1" height="29.1"/>
            <rect x="130.1" y="390.1" class="st0-o w" width="41.1" height="29.1"/>
            <rect x="387.5" y="390.1" class="st0-o" width="29.1" height="29.1"/>
            <rect x="462.6" y="390.1" class="st0-o w" width="68.1" height="29.1"/>
            <rect x="171.2" y="419.2" class="st0-o w" width="84.2" height="29.1"/>
            <rect x="387.5" y="419.2" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="462.6" y="419.2" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="530.7" y="419.2" class="st0-o h" width="29.1" height="139.7"/>
            <rect x="342.6" y="529.8" class="st0-o" width="44.9" height="29.1"/>
            <rect x="416.6" y="529.8" class="st0-o" width="46" height="29.1"/>
            <rect x="142.1" y="448.3" class="st0-o" width="29.1" height="81.5"/>
            <rect x="29.8" y="419.2" class="st0-o" width="29.1" height="110.6"/>
            <rect x="142.1" y="419.2" class="st0-o" width="29.1" height="29.1"/>
            <rect x="255.4" y="419.2" class="st0-o w" width="58.1" height="29.1"/>
            <rect x="462.6" y="529.8" class="st0-o w" width="68.1" height="29.1"/>
            <rect x="491.7" y="419.2" class="st0-o" width="39" height="110.6"/>
            <rect x="462.6" y="558.9" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="530.7" y="558.9" class="st0-o h" width="29.1" height="139.7"/>
            <rect x="342.6" y="669.5" class="st0-o" width="44.9" height="29.1"/>
            <rect x="416.6" y="669.5" class="st0-o" width="46" height="29.1"/>
            <rect x="255.4" y="588" class="st0-o h" width="29.1" height="81.5"/>
            <rect x="29.8" y="669.5" class="st0-o" width="29.1" height="30.8"/>
            <rect x="142.1" y="558.9" class="st0-o" width="29.1" height="29.1"/>
            <rect x="130.1" y="669.5" class="st0-o w" width="41.1" height="29.1"/>
            <rect x="387.5" y="669.5" class="st0-o" width="29.1" height="29.1"/>
            <rect x="462.6" y="669.5" class="st0-o w" width="68.1" height="29.1"/>
            <rect x="491.7" y="558.9" class="st0-o h" width="39" height="110.6"/>
            <rect x="462.6" y="279.6" class="st0-o h" width="29.1" height="110.6"/>
            <rect x="58.9" y="529.8" class="st0-o" width="71.3" height="29.1"/>
            <rect x="29.8" y="529.8" class="st0-o" width="29.1" height="29.1"/>
            <rect x="130.1" y="529.8" class="st0-o" width="41.1" height="29.1"/>
            <rect x="142.1" y="448.3" class="st0-o h" width="29.1" height="81.5"/>
            <rect x="142.1" y="588" class="st0-o" width="29.1" height="81.5"/>
            <rect x="29.8" y="558.9" class="st0-o h" width="29.1" height="110.1"/>
            <rect x="58.9" y="669.5" class="st0-o" width="71.3" height="29.1"/>
            <rect x="342.6" y="390.1" class="st0-o w" width="44.9" height="29.1"/>
            <rect x="29.8" y="390.1" class="st0-o" width="29.1" height="29.1"/>
            <rect x="416.6" y="529.4" class="st0-o w" width="45.9" height="29.5"/>
          </g>
          </svg>


          <div class="onsite__text">
            <h3>On-site Sessions</h3>
            <p>Travel in the Summers and January to experience intensive site-specific sessions across NYU’s Global Network. Benefit from short periods of complete immersion, intense study and strong relationships with a single cohort.</p>
          </div>
        </div>
      </div>

      <div class="divider">
        <svg version="1.1" id="Laag_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 74.8 29" style="enable-background:new 0 0 74.8 29;" xml:space="preserve">
        <style type="text/css">
          .st0-x{fill:#FBFAE2;}
          .st1-x{fill:#1AA799;}
          .st2-x{fill:#E83F41;}
          .st3-x{fill:#F3B545;}
        </style>
        <rect x="63.1" class="st0-x" width="11.7" height="6"/>
        <rect x="57.1" class="st0-x" width="6" height="29"/>
        <rect class="st1-x" width="12" height="6"/>
        <rect y="22.9" class="st1-x" width="18.1" height="6"/>
        <rect x="6" y="6" class="st2-x" width="6" height="17"/>
        <rect x="18.1" class="st3-x" width="9.3" height="22.9"/>
        <rect x="33.4" class="st2-x" width="9.5" height="22.9"/>
        <rect x="27.4" y="22.9" class="st1-x" width="6" height="6"/>
        <rect x="43" y="22.9" class="st3-x" width="14.1" height="6"/>
        <rect x="49" class="st1-x" width="8.1" height="22.9"/>
        </svg>

      </div> 


      <div class="ecosystem">
        <div class="ecosystem__half">
          <h2 class="heading__cities">Global networks.<br/>Local communities.<br/>Infinite possibilities.</h2>

          <svg version="1.1" id="ecosystem__blurb" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 398.4 380.1" style="enable-background:new 0 0 398.4 380.1;" xml:space="preserve">

          <g>
            <defs>
              <path id="SVGID_1_" d="M262.7,363.6c-54.8,28.1-150.1,18-201.1-20.3C10.5,304.6-12.5,223,6.8,163.9c19.4-59.4,82.8-33,162.5-111.4
                C219.9-3.2,313.8-13.2,348.9,18c35.1,30.9,51.2,139.9,30.2,207.8C358.1,293.7,317.2,335.1,262.7,363.6z"/>
            </defs>
            <clipPath id="SVGID_2_">
              <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
            </clipPath>
            <g class="ecosystem__image">
              
                <image style="overflow:visible;" width="660" height="420" id="w7jd0q_2_" xlink:href="wp-content/themes/lowres/assets/itpfloor.jpg"  transform="matrix(0.9042 0 0 0.9042 -75.2068 -0.1629)">
              </image>
            </g>
          </g>
          <g>
            <path class="ecosystem__dotted" d="M272,363.6c-54.8,28.1-150.1,18-201.1-20.3C19.9,304.6-3.2,223,16.2,163.9c19.4-59.4,82.8-33,162.5-111.4
              C229.2-3.2,323.2-13.2,358.3,18c35.1,30.9,51.2,139.9,30.2,207.8C367.5,293.7,326.6,335.1,272,363.6z"/>
          </g>
          </svg>

          <!-- <div class="ecosystem__circle"></div> -->
        </div>
        <div class="ecosystem__half">
          <ul class="ecosystem__list">
          <li class="ecosystem__item--active"><a href="https://tisch.nyu.edu/itp" class="ecosystem__ahref" target="_blank"><li>ITP New York<br/><span class="ecosystem__sub">2-Year Masters Degree</span></a></li>
          <li class="ecosystem__item--inactive">IMA New York<br/><span class="ecosystem__sub">4-Year Bachelors Degree</span></li>
          <li class="ecosystem__item--inactive"><a href="https://shanghai.nyu.edu/academics/majors/interactive-media-arts" class="ecosystem__ahref" target="_blank">IMA Shanghai<br/><span class="ecosystem__sub">4-Year Bachelors Degree</span></a></li>
          </ul>
        </div>
      </div>

      <!-- <div class="ecosystem">
    </div> -->
    
    </div>


    
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>