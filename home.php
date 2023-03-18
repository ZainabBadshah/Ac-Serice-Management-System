 <!-- Header-->
  <link rel="stylesheet" type="text/css" href="./libs/style.css">


<div class="hero vh-100 d-flex align-items-center" id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white"><?php echo $_settings->info('name') ?></h1>
                    <p class="text-white my-3">The authorized Ac service center Pune and its surrounding areas for quick Ac repair/service and maintenance. 
                      <br>  Our qualified AC technicians will come for doorstep service.</p>
                    <a class="btn btn-primary btn-outline-light button-" id="send_request" type="button">Register Your Request</a>
                </div>
            </div>
        </div>
    </div>
<!-- Section


    <!--CardsServices-->
    <section id="services">
        <div class="container">
        <hr class="bg-primary opacity-100">
            <div class="row mb-3 mt-2">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">SERIVCES</h6>
                    <h1>Our Services</h1>
                    <p>The authorized Ac service centers in Pune and its surrounding areas for quick Ac repair/service and maintenance. 
                        <br>Their qualified AC technicians will come for doorstep service.</p>
                </div>
            </div>
         
                <div class="servicelist" id="service_list">
                    <?php 
                    $services = $conn->query("SELECT * FROM `service_list` where status = 1 order by `service`");
                    while($row= $services->fetch_assoc()):
                        $row['description'] = strip_tags(html_entity_decode(stripslashes($row['description'])));
                    ?>
                <div class="col-lg-4 col-sm-6 ">
                    <div class="service card-effect bounceInUp custom-card">
                    <a class="col item text-decoration-none text-dark view_service  fadeIn" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                        <div class="iconbox">
                            <i class='fas fa-toolbox'></i>
                        </div>
                        <h5 class="mt-4 mb-2"><?php echo $row['service'] ?></h5>
                        <p class="text-black-50"><?php echo $row['description'] ?></p>
                    </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div id="noResult" style="display:none" class="text-center"><b>No Result</b></div>
          
        </div>
    </div>
    
    </section>
    <section class="row w-100 py-0 bg-light  best-container" id="features">
        <div class="col-lg-6 col-img">
    <img class="service-img" src="uploads/Services2.jpg">
        </div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h6 class="text-primary">What do we repair?</h6>
                        <h1>Best Ac Services in the city</h1>
                        
                        <p>We are a team of experienced and certified technicians providing reliable and affordable 
                            air conditioning repair services to both residential and commercial customers. Our goal is to 
                            provide high-quality repairs and customer satisfaction through exceptional service and attention to detail.
                             We use only the latest tools and techniques to diagnose and fix AC issues and ensure your comfort in any
                             season. 
                            Contact us today for all your AC repair needs!</p>

                        <div class="feature d-flex mt-5">
                        <hr class="bg-primary opacity-100">
                    <ul class="list-group font-weight-light fas fa-tv">
                    <?php 
                    $category = $conn->query("SELECT * FROM `categories` where status = 1 order by `category` asc");
                    while($row=$category->fetch_assoc()):
                    ?>
                    <li class="list-group-item"><b><?php echo $row['category'] ?></b></li>
                    <?php endwhile; ?>
                    </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- FEATURES -->
    <section>
    <!-- Happy Customer -->
    <section id="team">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">CUSTOMERS</h6>
                    <h1> What are our customers saying?</h1>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="uploads/cust1.jpg" alt="">
                        <h5 class="mb-0 mt-4">Danish Khan</h5>
                        <p>The engineers attended on time and worked hard throughout the day.
They were very courteous and polite at all times.
They also tidied up after themselves.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="uploads/cust2.jpg" alt="">
                        <h5 class="mb-0 mt-4">Raghav shet</h5>
                        <p>The service we received was amazing and the installation went very smoothly and neatly. They cleaned up after each day and worked around our schedule. We were very pleased with the final installation.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="uploads/cust3.jpg" alt="">
                        <h5 class="mb-0 mt-4">Poonam Kejri</h5>
                        <p>The standard of service and quality of staff is excellent. They are knowledgeable, efficient and proactive.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="uploads/cust4.jpg" alt="">
                        <h5 class="mb-0 mt-4">Francis Jacob</h5>
                        <p>The engineers that installed the units were brilliant. They did a thorough job, including super neat trunking, and we're tidy for the duration of the job.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    $(function(){
        $('#search').on('input',function(){
            var _search = $(this).val().toLowerCase().trim()
            $('#service_list .item').each(function(){
                var _text = $(this).text().toLowerCase().trim()
                    _text = _text.replace(/\s+/g,' ')
                    console.log(_text)
                if((_text).includes(_search) == true){
                    $(this).toggle(true)
                }else{
                    $(this).toggle(false)
                }
            })
            if( $('#service_list .item:visible').length > 0){
                $('#noResult').hide('slow')
            }else{
                $('#noResult').show('slow')
            }
        })
        $('#service_list .item').hover(function(){
            $(this).find('.callout').addClass('shadow')
        })
        $('#service_list .view_service').click(function(){
            uni_modal("Service Details","view_service.php?id="+$(this).attr('data-id'),'mid-large')
        })
        $('#send_request').click(function(){
            uni_modal("Fill the Service Request Form","send_request.php",'large')
        })

    })
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-transparent navbar-dark bg-primary')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-transparent')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-primary')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>