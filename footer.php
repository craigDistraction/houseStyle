<div class="container">
 <hr>

 <footer class="footer" id="contact">
     <div class="container">
         <div class="row">
             <div class="col-xs-12 col-sm-2 heading">
               <h4>Example <br> Company <br> Name</h4>
                 <p>Company Description</p>
             </div>
             <div class="infoHide col-xs-8 col-sm-3">
               <h5>Site Links</h5>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
             </div>
             <div class="col-xs-4 col-sm-2">                                                                                                                                                                                                                                                                                                                                                                        				  <h5>Address</h5>
               <h6>Great Northern Terrace</h6>
               <h6>Lincoln, UK</h6>
               <h6>LN5 8HJ</h6>
             </div>
             <div class="col-xs-12 col-sm-2 col-md-2">
               <h5>Contact </h5>
               <p>Phone: 01522 512 102</p>
               <p><a href="mailto:info@globalturbochargersolutions.com" style="color: white;">Email: info@globalturbochargersolutions.com</a></p>
             </div>
             <?php echo do_shortcode("[smbtoolbar]"); ?>
           </div>
       </div>
     </footer>
   </div>
<?php wp_footer(); ?>
</div>
<!-- /container -->


 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
 <script src="../../dist/js/bootstrap.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
