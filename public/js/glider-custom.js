<script>
  window.addEventListener('load', function() {
    new Glider(document.querySelector('.glider'), {
      slidesToScroll: 1,
      slidesToShow: 5.5,
      draggable: true,
      dots: '.dots',
      arrows: {
        prev: '.glider-prev',
        next: '.glider-next'
      },
      responsive: [{
						breakpoint: 1024,
						settings: {
							slidesToShow: 5.5,
							// slidesToScroll: 1,
						}
					}, {
						breakpoint: 600,
						settings: {
							slidesToShow: 2.5,
							// slidesToScroll: 1,
							arrows: false,
						}
					}, {
						breakpoint: 480,
						settings: {
							slidesToShow: 1.5,
							// slidesToScroll: 1
						}
					}]
    });
  })
</script>
