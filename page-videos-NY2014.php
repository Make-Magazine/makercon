<?php
   /**
    * Template Name: Video Page NY2014  Template
    *
    * @package    makercon
    * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
    * @author     Bill Olson <bolson@makermedia.com>
    *
    */
   get_header(); ?>
   
               <div class="col-md-12" style="padding-left:0px;padding-right:0px;">
               <ul class="nav nav-tabs">
                     <li class="active col-md-4 tab">
                     <h2 class="subtitle"><a href="#" data-toggle="tab">VIDEOS</a></h2>
                  </li>
                  <li class="col-md-4 tab">
                     <h2 class="subtitle"><a href="http://makercon.com/new-york-2014/speakers-2" data-toggle="tab">SPEAKERS</a></h2>
                  </li>
                     <li class="col-md-4 tab">
                     <h2 class="subtitle"><a href="http://makercon.com/new-york-2014/sessions/" data-toggle="tab">SESSIONS</a></h2>
                  </li>

               </ul>
            </div>
         </div>
   
<div class="row">
   <div id="primary" class="content-area col-md-12">
      <main id="main" class="site-main" role="main">
         <?php while ( have_posts() ) : the_post(); ?>
         <?php get_template_part( 'content', 'page' ); ?>
         <?php endwhile; // end of the loop. ?>
         <div class="row">
            <div class="col-md-12">
               <!-- Button trigger modal -->
               <img class="img-responsive" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny2014-intro-02.jpg" width="1170" data-toggle="modal" data-target="#myModal"/>
               <div style="clear:both;"></div>
               <p style="margin:10px auto 15px auto;text-align:center;font-size:18px;line-height:21px;">MakerCon Introduction - Dale Dougherty, CEO Maker Media and Travis Good, Co-Chair MakerCon</p>
               <!-- Modal -->
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title" id="myModalLabel">MakerCon Introduction - Dale Dougherty, CEO Maker Media and Travis Good, Co-Chair MakerCon</h4>
                        </div>
                        <div class="modal-body">
                           <iframe width="780" height="448" src="https://www.youtube.com/embed/9xCwfFhbeaY?list=PLwhkA66li5vBEkRxCLCrX7IrHySh3LHj3&amp;showinfo=0&amp;rel=0?html5=1&amp;showinfo=0&amp;rel=0?html5=1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="modal-footer">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <ul class="nav nav-tabs">
                  <li class="active col-md-6 tab">
                     <h2 class="subtitle"><a href="#tab_a" data-toggle="tab">September 17, 2014</a></h2>
                  </li>
                  <li class="col-md-6 tab">
                     <h2 class="subtitle"><a href="#tab_b" data-toggle="tab">September 18, 2014</a></h2>
                  </li>
               </ul>
            </div>
         </div>
         <div class="tab-content">
            <div class="tab-pane active" id="tab_a">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <!-- Button trigger modal -->
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny2014-intro-01.jpg"  width="720" height="419" data-toggle="modal" data-target="#myModal"/>
                     <p class="video-info">MakerCon Introduction - Dale Dougherty, CEO Maker Media and Travis Good, Co-Chair MakerCon</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Introduction - Dale Dougherty, CEO Maker Media and Travis Good, Co-Chair MakerCon</h4>
                           </div>
                           <div class="modal-body">
                              <iframe  src="https://www.youtube.com/embed/9xCwfFhbeaY?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0000-0-1.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal2"/>
                     <p class="video-info">Kickstarter and the Maker Revolution Auditorium - Yancey Strickler</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Kickstarter and the Maker Revolution Auditorium - Yancey Strickler</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/Xm_B5-JuY7Q?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0001-0-2.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal3"/>
                     <p class="video-info">The Maker Pro Catalyst - David R. Schneider, PhD</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The Maker Pro Catalyst - David R. Schneider, PhD</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/2fCbaEuxfi8?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW ONE -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0002-0-3.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal4"/>
                     <p class="video-info"> The People Behind the Projects - John Kavanagh</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The People Behind the Projects - John Kavanagh</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/lxhD6a5QN2I?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0003-0-4.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal5"/>
                     <p class="video-info"> Hardware: From Hobby to Revolution - Mike Senese, Ayah Bdeir</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Hardware: From Hobby to Revolution - Mike Senese, Ayah Bdeir</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/sx0EnrLaEzI?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0004-0-5.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal6"/>
                     <p class="video-info"> The Other Side of Open Source - Erik de Bruijn</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The Other Side of Open Source - Erik de Bruijn</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/QcUWgQZ8W9c?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW TWO -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0005-0-6.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal7"/>
                     <p class="video-info"> 3D Printing Your Favorite Brands - The Real Future of Product Design - Peter Weijmarshausen</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">3D Printing Your Favorite Brands - The Real Future of Product Design - Peter Weijmarshausen</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/DTG61xUio6k?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0006-0-7.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal8"/>
                     <p class="video-info">The Evolution of Desktop Fabrication - Zach Kaplan </p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The Evolution of Desktop Fabrication - Zach Kaplan</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/9ROmjyT3I6w?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-eric-klein-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal9"/>
                     <p class="video-info">Embracing the Difference Between Cottage and Mainstream - Eric Klein</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Embracing the Difference Between Cottage and Mainstream - Eric Klein</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/ThHphOb7yBY?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW THREE -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0007-0-8.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal10"/>
                     <p class="video-info">Making Young Makers - Stephanie Santoso, Luke Bauer, Betty Ray, Diane Levitt</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Making Young Makers - Stephanie Santoso, Luke Bauer, Betty Ray, Diane Levitt</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/4Bt4DyUzi-4?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <!-- Button trigger modal -->
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0008-0-9.jpg"  width="720" height="419" data-toggle="modal" data-target="#myModal11"/>
                     <p class="video-info">Show Your Work: Open Portfolio Project - Lisa Regalla</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Show Your Work: Open Portfolio Project - Lisa Regalla</h4>
                           </div>
                           <div class="modal-body">
                              <iframe  src="https://www.youtube.com/embed/47YWh3mlO_4?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0009-0-10.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal12"/>
                     <p class="video-info">Managing a Makerspace - Ian Charnas</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Managing a Makerspace - Ian Charnas</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/SYKm4nszufw?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW FOUR -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0010-0-11.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal13"/>
                     <p class="video-info">Think Meets Make - Eric R. Dufresne</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Think Meets Make - Eric R. Dufresne</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/hAgVpaK_LUA?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0011-0-12.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal14"/>
                     <p class="video-info">Should Makers Be the Engineers of the Future? - Shawn Jordan, Ph.D., Micah Lande, PhD</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Should Makers Be the Engineers of the Future? - Shawn Jordan, Ph.D., Micah Lande, PhD</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/nzFpeX0NosI?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0012-0-13.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal15"/>
                     <p class="video-info">Why Intel Cares About Educating Makers  - Jay Melican</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Why Intel Cares About Educating Makers  - Jay Melican</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/x0Yb-RmNr1o?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW FIVE  -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://makercon.com/wp-content/uploads/2014/09/makercon-ny14-0014-0-15.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal16"/>
                     <p class="video-info">VC Panel: Where They Invest and Why  - Zack Schildhorn, Will Porteous, Eric Klein</p>
                  </div>
                  <!-- Modal  -->
                  <div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">VC Panel: Where They Invest and Why  - Zack Schildhorn, Will Porteous, Eric Klein</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/a_fgiRPPwbY?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-danela-perdomo-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal17"/>
                     <p class="video-info"> Hardware Start-up Case Study: goTenna - Daniela Perdomo</p>
                  </div>
                  <!-- Modal  -->
                  <div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Hardware Start-up Case Study: goTenna - Daniela Perdomo</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/QDN1OmAfnZk?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-aaron-horowitz-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal18"/>
                     <p class="video-info"> A Maker's Manufacturing Dilemma - Aaron Horowitz</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel"> A Maker's Manufacturing Dilemma - Aaron Horowitz</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/IobpCo3QQ-E?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW FIVE-->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-scott-miller-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal19"/>
                     <p class="video-info">Before the Crowdfund: What You Need to Know - Scott Miller</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Before the Crowdfund: What You Need to Know - Scott Miller</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/J83dwS3hNKI?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-katherine-hague-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal22"/>
                     <p class="video-info">Cool Factor vs Coin Factor: Wearables are Ready, but Who's Wearing Them? - Katherine Hague</p>
                  </div>
                  <!-- Modal  -->
                  <div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Cool Factor vs Coin Factor: Wearables are Ready, but Who's Wearing Them? - Katherine Hague</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/X2886k0eO3Y?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-mason-peck-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal23"/>
                     <p class="video-info">Making Space: Democratizing Exploration and Science with DIY Satellites - Mason Peck</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Making Space: Democratizing Exploration and Science with DIY Satellites - Mason Peck</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/oLPUzMG0fcA?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW SIX-->   
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-kate-drane-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal24"/>
                     <p class="video-info">What's Your Plan? Creating a Crowdfunding Campaign to Empower Long-term Success  - Kate Drane</p>
                  </div>
                  <!-- Modal   -->
                  <div class="modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">What's Your Plan? Creating a Crowdfunding Campaign to Empower Long-term Success  - Kate Drane</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/3_bgANNeQsM?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-lauren-joseph-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal25"/>
                     <p class="video-info">The Art of Product Launch - Lauren Joseph</p>
                  </div>
                  <!--  Modal  -->
                  <div class="modal fade" id="myModal25" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The Art of Product Launch - Lauren Joseph</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/JET2T8prmMI?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW SEVEN-->   
            </div>
            <div class="tab-pane" id="tab_b">
               <!-- SEPTEMBER 18TH WILL BE NEW TAB  -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <!-- Button trigger modal -->
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-peter-hirshberg.jpg"  width="720" height="419" data-toggle="modal" data-target="#myModal26"/>
                     <p class="video-info">The Maker City - Peter Hirshberg</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal26" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The Maker City - Peter Hirshberg</h4>
                           </div>
                           <div class="modal-body">
                              <iframe  src="https://www.youtube.com/embed/d1N2Cb1IqSI?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-surya-mattu.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal27"/>
                     <p class="video-info">NYC: A Maker City - Surya Mattu, Rob Sanchez, Miquela Craytor, Tom Kennedy</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal27" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">NYC: A Maker City - Surya Mattu, Rob Sanchez, Miquela Craytor, Tom Kennedy</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/xWGln0VbJao?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-andrew-anagnost.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal28"/>
                     <p class="video-info">The Future of Making Products  - Andrew Anagnost</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModa28" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The Future of Making Products  - Andrew Anagnost</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/L0NcREzlMMI?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW ONE -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-massimo.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal29"/>
                     <p class="video-info"> Keynote - Massimo Banzi, Co-founder of the Arduino Project</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal29" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Keynote - Massimo Banzi, Co-founder of the Arduino Project</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/qAkPQqzWczU?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-james-rogers-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal30"/>
                     <p class="video-info">Interview - James Adams, Director of Hardware Engineering Raspberry Pi Foundation & Matt Richardson, Contributing Editor Make:</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal30" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Interview - James Adams, Director of Hardware Engineering Raspberry Pi Foundation & Matt Richardson, Contributing Editor Make:</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/rM_cs63IfJM?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-james-adams.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal31"/>
                     <p class="video-info">Keynote - Jay Rogers, Co-Founder and CEO, Local Motors</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Keynote - Jay Rogers, Co-Founder and CEO, Local Motors</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/3Q1KTlh3-Ks?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW TWO -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-taylor-dawson.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal32"/>
                     <p class="video-info">Making to Discover Value - Taylor Dawson</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal32" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Making to Discover Value - Taylor Dawson</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/MoXMaZfP64Y?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-jenn-turliak.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal33"/>
                     <p class="video-info">The Business of Making with Kids - Jennifer Turliuk</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal33" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The Business of Making with Kids - Jennifer Turliuk</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/jotOIuwLXVg?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-diego-tamburini.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal34"/>
                     <p class="video-info">What the 'Internet of Things' Means for Product Development - Diego Tamburini</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal34" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">What the 'Internet of Things' Means for Product Development - Diego Tamburini</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/rrsR-WC2kfM?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW THREE -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-matt-hannigan.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal35"/>
                     <p class="video-info">Remake Learning for Your City - Matt Hannigan</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal35" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Remake Learning for Your City - Matt Hannigan</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/M4Acrc7NHJY?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <!-- Button trigger modal -->
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-sam-ortega.jpg"  width="720" height="419" data-toggle="modal" data-target="#myModal36"/>
                     <p class="video-info">Space Exploration: The Business of Making - Ted Southern, Matt Reyes, Sam Ortega</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal36" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Space Exploration: The Business of Making - Ted Southern, Matt Reyes, Sam Ortega</h4>
                           </div>
                           <div class="modal-body">
                              <iframe  src="https://www.youtube.com/embed/XExxD7TK8FY?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-dominic-pajak.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal37"/>
                     <p class="video-info">Internet of Things: Tiny Devices Making a Huge Difference - Dominic Pajak</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal37" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Internet of Things: Tiny Devices Making a Huge Difference - Dominic Pajak</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/r53PFbGLxso?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW FOUR -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-alasdair-allan.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal38"/>
                     <p class="video-info">The Inevitability of Smart Dust - Alasdair Allan</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal38" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">The Inevitability of Smart Dust - Alasdair Allan</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/wnnWrLt_RCo?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-jose-gomez-marquez.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal39"/>
                     <p class="video-info">From Maker Startup to Healthcare Hardware - Mark Belanger, Victor Ty, Ahrin Mishan, Jose Gomez Marquez</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal39" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">From Maker Startup to Healthcare Hardware - Mark Belanger, Victor Ty, Ahrin Mishan, Jose Gomez Marquez</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/-zFScGYV3TQ?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-carla-diana.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal40"/>
                     <p class="video-info">Making Meaning in an Internet of Things - Carla Diana</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal40" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Making Meaning in an Internet of Things - Carla Diana</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/rvtxcGcf9gg?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW FIVE  -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-sabrina-merlo.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal41"/>
                     <p class="video-info">Making Makers Takes a Village - Sabrina Merlo, Travis Good, Tim McNulty</p>
                  </div>
                  <!-- Modal  -->
                  <div class="modal fade" id="myModal41" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Making Makers Takes a Village - Sabrina Merlo, Travis Good, Tim McNulty</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/h9Iy6oemGac?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-kate-hartman.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal42"/>
                     <p class="video-info"> What's Next For Wearables? - Kate Hartman</p>
                  </div>
                  <!-- Modal  -->
                  <div class="modal fade" id="myModal42" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">What's Next For Wearables? - Kate Hartman</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/Wf_AyU2-TFU?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-jesse-genet.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal43"/>
                     <p class="video-info">Make Tools, Not Products - Jesse Genet</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal43" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Make Tools, Not Products - Jesse Genet</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/BypyFAmbC9M?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW FIVE-->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-kate-gage.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal44"/>
                     <p class="video-info">Maker Movement for Global Development - Monte MacDiarmid, Anna Waldman-Brown, Mercy Chepkoech Sigey, Kate Gage, Sénamé Koffi Abdojinou</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal44" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Maker Movement for Global Development - Monte MacDiarmid, Anna Waldman-Brown, Mercy Chepkoech Sigey, Kate Gage, Sénamé Koffi Abdojinou</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/uI1YVnFjhSk?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-amogha-srirangarajan.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal45"/>
                     <p class="video-info">APOLLO - Next - Amogha Srirangarajan</p>
                  </div>
                  <!-- Modal  -->
                  <div class="modal fade" id="myModal45" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">APOLLO - Next - Amogha Srirangarajan</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/N6n8BnA0fd0?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-toys.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal46"/>
                     <p class="video-info">Toys and Making: Toymakers Talk! - Claus Moberg, Kenny Davis, Wayne Losey, Alice Taylor</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal46" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Toys and Making: Toymakers Talk! - Claus Moberg, Kenny Davis, Wayne Losey, Alice Taylor</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/B5lW3brEWQ8?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-mason-peck-02.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal48"/>
                     <p class="video-info">Closing Presentation with Brian Krzanich, CEO of Intel</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal48" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">Closing Presentation with Brian Krzanich, CEO of Intel</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/6G1KmTW1YTY?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="https://makerfaire.files.wordpress.com/2014/09/mpny-14-iluminate.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal49"/>
                     <p class="video-info">iLuminate Dance Group</p>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal49" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">iLuminate Dance Group</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/NZEAEWYYyOw?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <!-- #main -->
   </div>
   <!-- #primary -->
</div>
<script type="text/javascript">
   $(".modal").on('hidden.bs.modal', function(e) {
       $iframe = $(this).find( "iframe" );
       $iframe.attr("src", $iframe.attr("src"));
   }); 
     
</script>
<script type="text/javascript">
   $(".modal").on('hidden.bs.modal', function(e) {
       $iframe = $(this).find( "iframe" );
       $iframe.attr("src", $iframe.attr("src"));
   }); 
     
</script>


<?php get_footer(); ?>


