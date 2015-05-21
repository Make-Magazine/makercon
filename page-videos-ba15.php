<?php
   /**
    * Template Name: Video Page BA2015
    *
    * @package    makercon
    * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
    * @author     Bill Olson <bolson@makermedia.com>
    *
    */
   get_header(); ?>
<div class="row sub-nav">
   <div class="col-md-12">
      <div class="top-navbar">
         <div class="navbar">
               <ul class="nav nav-tabs nav-justified">
                  <li>
                     <h2 class="subtitle"><a href="/bay-area-2015/conference/">OVERVIEW</a></h2>
                  </li>
                  <li class="active">
                     <h2 class="subtitle"><a href="#">VIDEOS</a></h2>
                  </li>
                  <li>
                     <h2 class="subtitle"><a href="/bay-area-2015/speakers-2">SPEAKERS</a></h2>
                  </li>
                  <li>
                     <h2 class="subtitle"><a href="/bay-area-2015/sessions/">SESSIONS</a></h2>
                  </li>
                <!--   <li>
                     <h2 class="subtitle"><a href="/bay-area-2015/slides/" target="_blank">SLIDESHARE</a></h2>
                  </li> -->
               </ul>
            </div>
         </div>
   </div>
</div>
<div class="row">
   <div id="primary" class="content-area col-md-12 video-archive">
      <main id="main" class="site-main" role="main">
         <div class="row">
            <div class="col-md-12">
                        <h1><?php echo get_the_title(); ?></h1>

         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article <?php post_class(); ?>>
            <?php the_content(); ?>
         </article>
         <?php endwhile; ?>
         <?php else: ?>
         <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
         <?php endif; ?>
         <div class="clearfix">&nbsp;</div>
             <!-- Button trigger modal -->
        <!--        <img class="img-responsive" src="http://img.youtube.com/vi/WT4L42q2tgQ/maxresdefault.jpg" width="1170" data-toggle="modal" data-target="#myModal"/>
               <div style="clear:both;"></div>
               <p style="margin:10px auto 15px auto;text-align:center;font-size:18px;line-height:21px;">MakerCon Bay Area 2015</p>
               --> <!-- Modal -->
 <!--               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2015</h4>
                        </div>
                        <div class="modal-body">
                           <iframe width="780" height="448" src="https://www.youtube.com/embed/WT4L42q2tgQ&amp;showinfo=0&amp;rel=0?html5=1&amp;showinfo=0&amp;rel=0?html5=1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="modal-footer">
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
         <div class="row">
            <div class="col-xs-12">
               <h2 class="subtitle">More Videos from MakerCon Bay Area 2015</h2>
            </div>
         </div>
         
         <!-- <div class="row">
            <div class="col-md-12">
               <ul class="nav nav-tabs">
                  <li class="active col-md-6 tab">
                     <h2 class="subtitle"><a href="#tab_a" data-toggle="tab">May 16, 2015</a></h2>
                  </li>
                  <li class="col-md-6 tab">
                     <h2 class="subtitle"><a href="#tab_b" data-toggle="tab">May 17, 2015</a></h2>
                  </li>
               </ul>
            </div>
         </div> -->
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
