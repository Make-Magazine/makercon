<?php
   /**
    * Template Name: Video Page BA2015
    *
    * @package    makercon
    * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
    * @author     Maker Media Web Team
    *
    */
   get_header(); ?>
<div class="row">
   <div id="primary" class="content-area col-md-12 video-archive">
      <main id="main" class="site-main" role="main">
         <div class="row">
            <div class="col-md-12">
               <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <article <?php post_class(); ?>>
                  <?php the_content(); ?>
               </article>
               <?php endwhile; ?>
               <?php else: ?>
               <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
               <?php endif; ?>
               <div class="clearfix">&nbsp;</div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12">
               <h2 class="subtitle">More Videos from MakerCon Bay Area 2015</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="top-navbar">
                  <div class="navbar">
                     <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active col-md-6 tab">
                           <h2 class="subtitle"><a href="#tab_a" aria-controls="tab_1" role="tab"  data-toggle="tab">MakerCon Interviews</a></h2>
                        </li>
                        <li role="presentation" class="col-md-6 tab">
                           <h2 class="subtitle"><a href="#tab_b" aria-controls="tab_b" role="tab"  data-toggle="tab">MakerCon Presentations</a></h2>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-content">
            <div class="tab-pane active" id="tab_a">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <!-- Button trigger modal -->
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/osbEiWAkPRw/mqdefault.jpg"  width="720" height="419" data-toggle="modal" data-target="#myModal"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe  src="https://www.youtube.com/embed/osbEiWAkPRw?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/be2k5b_4YBc/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal2"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/be2k5b_4YBc?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/lkZ8PfAErc0/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal3"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/lkZ8PfAErc0?html5=1" frameborder="0" allowfullscreen></iframe>
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
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/7W4qFfpZmBM/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal4"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/7W4qFfpZmBM?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/JV8WHJ48Duk/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal5"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/JV8WHJ48Duk?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/OGa4zmkIvA0/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal6"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/OGa4zmkIvA0?html5=1" frameborder="0" allowfullscreen></iframe>
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
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/LfLGAfJgezI/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal7"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/LfLGAfJgezI?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/0MS3Ck7eads/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal8"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/0MS3Ck7eads?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/Tw5v00RAqow/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal9"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/Tw5v00RAqow?html5=1" frameborder="0" allowfullscreen></iframe>
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
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/0y4Nscnhofw/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal10"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/0y4Nscnhofw?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/kexJos65a2w/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal11"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/kexJos65a2w?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/1uNbn-8gvjQ/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal12"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/1uNbn-8gvjQ?html5=1" frameborder="0" allowfullscreen></iframe>
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
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/os22HCsghDU/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal13"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/os22HCsghDU?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/ld-n2ra1IME/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal14"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/ld-n2ra1IME?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/0MS3Ck7eads/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal15"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/0MS3Ck7eads?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW FIVE -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/OGa4zmkIvA0/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal16"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/OGa4zmkIvA0?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/J6tbIBq3R7g/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal17"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/J6tbIBq3R7g?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/WT4L42q2tgQ/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal18"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/WT4L42q2tgQ?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW SIX (START STAGE SHOWS)-->
            </div>
            <div class="tab-pane" id="tab_b">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/_reAn85pO0w/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal19"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/_reAn85pO0w?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/pr6mmIC4Y_I/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal20"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/pr6mmIC4Y_I?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/Komv_OquBvw/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal21"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/Komv_OquBvw?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW SEVEN -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/X9RdTSylEXg/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal22"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/X9RdTSylEXg?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/QLn2gPvVii4/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal23"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/QLn2gPvVii4?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/xQHZjNDhI7I/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal24"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/xQHZjNDhI7I?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW EIGHT -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/HY2zq-wYbCY/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal25"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal25" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/HY2zq-wYbCY?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/-aCEZPdT9f0/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal26"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal26" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/-aCEZPdT9f0?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/8z9fBT0PQAA/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal27"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal27" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/8z9fBT0PQAA?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW NINE -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/9VU8PEuNlIE/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal28"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal28" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/9VU8PEuNlIE?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/vDJ-ejlGELE/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal29"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal29" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/vDJ-ejlGELE?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/Ztw93LpvDmA/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal30"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal30" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/Ztw93LpvDmA?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW TEN -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/5FXEvdtM-ek/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal31"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/5FXEvdtM-ek?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/1O-oaqVz3yI/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal32"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal32" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/1O-oaqVz3yI?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/VguInypc29c/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal33"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal33" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/VguInypc29c?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW ELEVEN -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/xTgYUNoeB2o/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal34"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal34" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/xTgYUNoeB2o?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/IMV6F90AAlM/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal35"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal35" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/IMV6F90AAlM?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/N-BtbE8lAd8/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal36"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal36" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/N-BtbE8lAd8?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW TWELVE -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/9adCfviVFbM/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal37"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal37" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/9adCfviVFbM?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/uj-tMnJPhx8/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal38"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal38" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/uj-tMnJPhx8?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                     <img class="img-responsive video-box" src="http://img.youtube.com/vi/ZQXeXy-8D4o/mqdefault.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal39"/>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal39" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                           </div>
                           <div class="modal-body">
                              <iframe src="https://www.youtube.com/embed/ZQXeXy-8D4o?html5=1" frameborder="0" allowfullscreen></iframe>
                           </div>
                           <div class="modal-footer">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--END ROW THIRTEEN -->
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
