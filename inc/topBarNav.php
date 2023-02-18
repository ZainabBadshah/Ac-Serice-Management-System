<!-- Navbar -->

<link rel="stylesheet" href="./navbar.css">

<nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="./">
                <img class="logo" width="30" height="30" src="<?php echo validate_image($_settings->info('logo')) ?>" alt="">
                <?php echo $_settings->info('short_name') ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?p=about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?p=ContactUs">Contact Us</a>
                    </li>
                </ul>
                <!-- <button class="btn btn-primary ms-lg-3">Register</button> -->
            </div>
        </div>
    </nav>

<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  // $('#search-form').submit(function(e){
  //   e.preventDefault()
  //    var sTxt = $('[name="search"]').val()
  //    if(sTxt != '')
  //     location.href = './?p=products&search='+sTxt;
  // })
</script>