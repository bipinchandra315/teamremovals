    <script src="<?php echo $link; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $link; ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo $link; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $link; ?>assets/js/custom.js"></script>
    <script>
document.addEventListener('click', function(e) {
    // Hamburger menu
    if (e.target.classList.contains('hamburger-toggle')) {
        e.target.children[0].classList.toggle('active');
    }
})
    </script>