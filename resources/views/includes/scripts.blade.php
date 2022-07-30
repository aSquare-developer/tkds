<!-- Bootstrap core JavaScript  -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Glider.js -->
<script src="{{ URL::asset('/js/glider.js') }}"></script>
<script>
  window.addEventListener('load', function() {
    new Glider(document.querySelector('.glider'), {
      slidesToScroll: 1,
      slidesToShow: 5.5,
      draggable: true,


    });
  })
</script>
