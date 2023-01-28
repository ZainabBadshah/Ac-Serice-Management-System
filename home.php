 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder"><?php echo $_settings->info('name') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0">We will take care of your Air Conditioner</p>
            <div class="col-auto mt-2">
                <button class="btn btn-primary btn-lg rounded-0" id="send_request" type="button">Send Service Request</button>
            </div>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center">Services Provided</h3>
                <hr class="bg-primary opacity-100">
                <ul class="list-group">
                    <?php 
                    $category = $conn->query("SELECT * FROM `categories` where status = 1 order by `category` asc");
                    while($row=$category->fetch_assoc()):
                    ?>
                    <li class="list-group-item"><b><?php echo $row['category'] ?></b></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-md-8">
                <h3 class="text-center">Our Services</h3>
                <hr class="bg-primary opacity-100">
                <div class="form-group">
                <div class="input-group mb-3">
                    <input type="search" id="search" class="form-control" placeholder="Search Service Here" aria-label="Search Service Here" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary" id="basic-addon2"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-xl-2" id="service_list">
                    <?php 
                    $services = $conn->query("SELECT * FROM `service_list` where status = 1 order by `service`");
                    while($row= $services->fetch_assoc()):
                        $row['description'] = strip_tags(html_entity_decode(stripslashes($row['description'])));
                    ?>
                    <a class="col item text-decoration-none text-dark view_service" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                        <div class="callout callout-primary border-primary rounded-0">
                            <dl>
                                <dt><?php echo $row['service'] ?></dt>
                                <dd class="truncate-3 text-muted lh-1"><small><?php echo $row['description'] ?></small></dd>
                            </dl>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <div id="noResult" style="display:none" class="text-center"><b>No Result</b></div>
            </div>
        </div>
    </div>
    <!-- Happy Customer -->
    <div class="container-fluid py-5 px-3 my-4 rounded" style="background-color: #1E90FF;">
        <div class="container">
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row p-3">
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body" style="justify-content: center;">
                            <div class="container"> 
                            <img src="uploads\1632990840_ava.jpg" class="img-fluid" style="border-radius:300px; height: 80px;" alt="avt1">
                            </div>
                            <h4 class="card-title pt-2 pl-5" style="font-weight: bold; justify-content: center;">Rahul Kumar</h4>
                            <p class="card-text">ullamcorper dolor id facilisis porttitor. Maecenas vel 
                                facilisis magna. Nunc efficitur est nibh, nec scelerisque diam 
                                fermentum cursus. </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="" class="img-fluid" style="border-radius:100px;" alt="avt2">
                            <h4 class="card-title">Ravi Rathore</h4>
                            <p class="card-text">ullamcorper dolor id facilisis porttitor. Maecenas vel 
                                facilisis magna. Nunc efficitur est nibh, nec scelerisque diam 
                                fermentum cursus. </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="" class="img-fluid" style="border-radius:100px;" alt="avt3">
                            <h4 class="card-title">Sonam Sharma</h4>
                            <p class="card-text">ullamcorper dolor id facilisis porttitor. Maecenas vel 
                                facilisis magna. Nunc efficitur est nibh, nec scelerisque diam 
                                fermentum cursus. </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="" class="img-fluid" style="border-radius:100px;" alt="avt4">
                            <h4 class="card-title">Jennifer David</h4>
                            <p class="card-text">ullamcorper dolor id facilisis porttitor. Maecenas vel 
                                facilisis magna. Nunc efficitur est nibh, nec scelerisque diam 
                                fermentum cursus. </p>
                        </div>

                    </div>
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