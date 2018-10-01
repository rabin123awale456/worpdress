<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evemoo
 */

?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


			<script src="<?php bloginfo('template_directory')?>/vendor/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory')?>/vendor/owl.carousel.js"></script>

<script></script>
<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    loop:false,
    margin:25,
    animateIn: 'flipInX',
    animateOut: 'flipInX',
    responsiveClass:true,
    autoplay:true,

autoplayTimeout:2500,
  autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            // nav:true,
            loop:false
        },

    }
})

});
</script>
<script>
  $(document).ready(function(){
    var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('.owl-next').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.owl-prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
  })
  
</script>


<script>
  $(document).ready(function(){
    $('.hamburger').click(function(){
      $('#sidemenu').css('display','block');
    })
  })
</script>
<script>
  $(document).ready(function(){
    $('.closesidebar').click(function(){
      $('#sidemenu').css('display','none');
    })
  })
</script>

<?php wp_footer(); ?>

</body>
</html>
