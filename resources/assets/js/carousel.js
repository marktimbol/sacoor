$(document).ready(function() {
      $("#quotes").owlCarousel({
            navigation : false, // Show next and prev buttons
            responsive: true,
            singleItem: true,
            autoPlay: true,
            touchDrag: false,
            mouseDrag: false,
            slideSpeed : 1000,
            pagination: false,
            paginationSpeed : 400,
            transitionStyle: 'fade',
      });
});