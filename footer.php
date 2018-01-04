<footer>
<div class="container">
  <div class="logo-social">
    <div class="row">
    <div class="col-md-6">
      <?php dynamic_sidebar('footer-logo'); ?>
    </div>
    <div class="col-md-6">
      <p>সাইনিং বাংলায় প্রকাশিত লেখা, ছবি প্রকাশ কিংবা বিনিময় করা আইনত দন্ডনীয় অপরাধ।</p>
    </div>
    </div>
  </div>

  <div class="printing-line text-center">
    <p>ইমেইল: news@shiningbangla.com</p>
    <p>কপিরাইট © ২০১৭ | সাইনিং বাংলা | ডিজাইন ও ডেভেলপমেন্ট :<a style="text-decoration: none;" href="https://www.facebook.com/mediapart2016/"><img src="<?php echo get_template_directory_uri();?>/img/mediapart.png"></a></p>
  </div>


</div>

</footer>

<?php wp_footer();?>

<!-- Tab -->
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<!-- carosel -->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<!-- Back_to_top_scroll -->

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>



</body>
</html>