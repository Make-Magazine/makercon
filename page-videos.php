<?php
   /**
    * Template Name: Video Page Template
    *
    * @package    makercon
    * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
    * @author     Bill Olson <bolson@makermedia.com>
    *
    */
   get_header(); ?>
<div class="row">
  <div id="primary" class="content-area col-md-12">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

      <?php endwhile; // end of the loop. ?>

       <div class="row">
        <div class="col-md-12">

        <!-- Button trigger modal -->
          <img class="img-responsive" src="http://cdn.makezine.com/make/makercon/makercon-BA2014-jay-silver.jpg" width="1170" data-toggle="modal" data-target="#myModal"/>
            <div style="clear:both;"></div>
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2014: Jay Silver, Founder &amp; CEO, JoyLabz</h4>
                </div>
                <div class="modal-body">
                  <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/QIygWVABumA?list=PLwhkA66li5vCKd7XNwpV42-zgBf9S3vP_&amp;showinfo=0&amp;rel=0?html5=1" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>


        </div>
      </div><!--END MAIN VIDEO ROW-->
      <br/>
      <br/>
      <div class="row">
        <div class="col-md-12">
          <h2 class="subtitle">More Videos from Makercon</h2>
        </div>
      </div>
      <br/>
      <div class="row">
          <div class="col-md-4">
        <!-- Button trigger modal -->
        <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-jay-silver-preview-01.jpg"  data-toggle="modal" data-target="#myModal"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2014: Jay Silver, Founder &amp; CEO, JoyLabz</h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12"  width="780" height="448" src="https://www.youtube.com/embed/QIygWVABumA?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        </div>
            <div class="col-md-4">
            <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-carl-bass-preview-01.jpg" data-toggle="modal" data-target="#myModal2"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Carl Bass, CEO, Autodesk</h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/GzsA_MBk1lE?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        </div>
            <div class="col-md-4">
            <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-lisa-fetterman-preview-01.jpg" data-toggle="modal" data-target="#myModal3"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Lisa Fetterman, CEO, Nomiku</h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/AjtiUtNfG0o?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        </div>
      </div><!--END ROW ONE -->

      <div class="row">
          <div class="col-md-4">
  <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-peter-hirshberg-preview-01.jpg" data-toggle="modal" data-target="#myModal4"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Peter Hirshberg, CEO, The Reimagine Group </h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/y1-yFvAgzDk?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        </div>
            <div class="col-md-4">
  <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-michael-hall-preview-01.jpg" data-toggle="modal" data-target="#myModal5"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Michael Bell &amp; Scott Miller</h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/h81b0dxMAsc?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        </div>
            <div class="col-md-4">
  <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-mark-hat-preview-01.jpg" data-toggle="modal" data-target="#myModal6"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Mark Hatch, CEO, TechShop</h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/2gbCxL-x1jU?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        </div>
      </div><!--END ROW TWO -->

      <div class="row">
          <div class="col-md-4">
<img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-kevin-hall-preview-01.jpg" data-toggle="modal" data-target="#myModal7"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Kevin Kelly, Senior Maverick, Wired</h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/IhF6wDmwAmk?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        </div>
            <div class="col-md-4">
<img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-brook-drum-preview-01.jpg" data-toggle="modal" data-target="#myModal8"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Brook Drumm, Founder, Printrbot </h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/KKaysCbJlxg?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        </div>
            <div class="col-md-4">
<img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-andy-forest-preview-01.jpg" data-toggle="modal" data-target="#myModal9"/>
          <div style="clear:both;"></div>
        <!-- Modal -->
        <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Andy Forest, Co-Executive Director, MakerKids </h4>
              </div>
              <div class="modal-body">
                <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" width="780" height="448" src="https://www.youtube.com/embed/Ca6GpNbz-_A?html5=1" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
              </div>
=======
   <div id="primary" class="content-area col-md-12">
      <main id="main" class="site-main" role="main">
         <?php while ( have_posts() ) : the_post(); ?>
         <?php get_template_part( 'content', 'page' ); ?>
         <?php endwhile; // end of the loop. ?>
         <div class="row">
            <div class="col-md-12">
               <!-- Button trigger modal -->
               <img class="img-responsive" src="http://cdn.makezine.com/make/makercon/makercon-BA2014-jay-silver.jpg" width="1170" data-toggle="modal" data-target="#myModal"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2014: Jay Silver, Founder &amp; CEO, JoyLabz</h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/QIygWVABumA?list=PLwhkA66li5vCKd7XNwpV42-zgBf9S3vP_&amp;showinfo=0&amp;rel=0?html5=1" frameborder="0" allowfullscreen></iframe>
                     </div>
                     <div class="modal-footer">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--END MAIN VIDEO ROW-->
         <br/>
         <br/>
         <div class="row">
            <div class="col-md-12">
               <h2 class="subtitle">More Videos from Makercon</h2>
            </div>
         </div>
         <br/>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <!-- Button trigger modal -->
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-jay-silver-preview-01.jpg"  width="720" height="419" data-toggle="modal" data-target="#myModal"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area 2014: Jay Silver, Founder &amp; CEO, JoyLabz</h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12"  src="https://www.youtube.com/embed/QIygWVABumA?html5=1" frameborder="0" allowfullscreen></iframe>
                     </div>
                     <div class="modal-footer">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-carl-bass-preview-01.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal2"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Carl Bass, CEO, Autodesk</h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/GzsA_MBk1lE?html5=1" frameborder="0" allowfullscreen></iframe>
                     </div>
                     <div class="modal-footer">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-lisa-fetterman-preview-01.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal3"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Lisa Fetterman, CEO, Nomiku</h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/AjtiUtNfG0o?html5=1" frameborder="0" allowfullscreen></iframe>
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
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-peter-hirshberg-preview-01.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal4"/>
>>>>>>> Stashed changes
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Peter Hirshberg, CEO, The Reimagine Group </h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/y1-yFvAgzDk?html5=1" frameborder="0" allowfullscreen></iframe>
                     </div>
                     <div class="modal-footer">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-michael-hall-preview-01.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal5"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Michael Bell &amp; Scott Miller</h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/h81b0dxMAsc?html5=1" frameborder="0" allowfullscreen></iframe>
                     </div>
                     <div class="modal-footer">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-mark-hat-preview-01.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal6"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Mark Hatch, CEO, TechShop</h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/2gbCxL-x1jU?html5=1" frameborder="0" allowfullscreen></iframe>
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
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-kevin-hall-preview-01.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal7"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Kevin Kelly, Senior Maverick, Wired</h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/IhF6wDmwAmk?html5=1" frameborder="0" allowfullscreen></iframe>
                     </div>
                     <div class="modal-footer">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-brook-drum-preview-01.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal8"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Brook Drumm, Founder, Printrbot </h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/KKaysCbJlxg?html5=1" frameborder="0" allowfullscreen></iframe>
                     </div>
                     <div class="modal-footer">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <img class="img-responsive video-box" src="http://cdn.makezine.com/make/makercon/ba2014-andy-forest-preview-01.jpg" width="720" height="419" data-toggle="modal" data-target="#myModal9"/>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">MakerCon Bay Area, May 2014: Andy Forest, Co-Executive Director, MakerKids </h4>
                     </div>
                     <div class="modal-body">
                        <iframe  style="border:5px solid #02394F;padding:0;" class="col-md-12" src="https://www.youtube.com/embed/Ca6GpNbz-_A?html5=1" frameborder="0" allowfullscreen></iframe>
                     </div>
                     <div class="modal-footer">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--END ROW THREE -->
      </main>
      <!-- #main -->
   </div>
   <!-- #primary -->
</div>
<<<<<<< Updated upstream

<div id="link">My video</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <iframe width="400" height="300" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

$(".modal").on('hidden.bs.modal', function(e) {
    $iframe = $(this).find( "iframe" );
    $iframe.attr("src", $iframe.attr("src"));
}); 
  </script>

 
=======
<script type="text/javascript">
   $(".modal").on('hidden.bs.modal', function(e) {
       $iframe = $(this).find( "iframe" );
       $iframe.attr("src", $iframe.attr("src"));
   }); 
     
</script>
<?php get_footer(); ?>
