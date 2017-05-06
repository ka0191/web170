
<!--start header.php-->
<?php get_header(); ?>
<!--end header.php-->
   
    <div id="wrapper">
        <h2>ABOUT 227</h2>

        <div class="flexslider" >
          <ul class="slides">
            <li>
  	    	    <img src="images/pic1.jpg" alt="pic1"/>
  	    		</li>
  	    		<li>
  	    	    <img src="images/pic2.jpg" alt="pic2"/>
  	    		</li>
  	    		<li>
  	    	    <img src="images/pic3.jpg" alt="pic3"/>
  	    		</li>

          </ul>
        </div>

        <!-- jQuery -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

        <h3>22I7: A BRAND DESIGNED FOR BOYS BECOMING MEN,
MEN BEING BOYS &amp; THE GENTLEMEN IN BETWEEN &amp; BEYOND!</h3>
        <p>We derive our NAME from the value of PI=22/7.
The best known mathematical transcendental constant where the constant decimal
values keep repeating themselves yet their decimal representation never ends
&amp; never settles into a permanent repeating pattern.
We want this very meaning to be our brand’s underlying philosophy.
INFINITE POSSIBILITIES. INFINITE CHOICES -Ethical &amp; Conscious.
Congrurent with Ecosystem &amp; The Conscience.</p>

    </div>

    <!--start footer.php-->
    <?php get_footer(); ?>
    <!--end footer.php-->
