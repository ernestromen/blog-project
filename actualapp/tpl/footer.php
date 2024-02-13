<footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-4">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-7 padd_bottom">
                           <div class="heading3">
                              <a href="#"><img src="images/logo1.png" alt="#"/></a>
                              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                           </div>
                        </div>
                        <div class="col-md-5 padd_bottom padd_bott">
                           <div class="heading3">
                              <h3>Contact Us</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-6 offset-md-1 padd_bottom">
                           <div class="heading3">
                              <h3>INFORMATION</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="heading3">
                              <h3>MY ACCOUNT</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque </a></li>
                                 <li><a href="#">volutpat mattis</a></li>
                                 <li><a href="#">eros.Lorem ipsum dolor</a></li>
                                 <li><a href="#">sit amet, consectetuer  </a></li>
                                 <li><a href="#">adipiscing elit. Donec  </a></li>
                                 <li><a href="#">odio. Quisque volutpat </a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. <a href="https://html.design/"> Free  html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>
