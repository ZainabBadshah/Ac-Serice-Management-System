 <!-- Background image -->
 <!-- <div
    class="p-5 text-center bg-image"
    style="
      background-image: 'uploads/2884.jpg';
      height: 400px;
      margin-top: 58px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white w-100">
        <h1 class="mb-3"><?php echo $_settings->info('name') ?></h1>
        <p class="mb-3">We will take care of your Air Conditioner</p>
        <a class="btn btn-outline-light btn-lg" href="./p=send_request" role="button">Register Your Request</a>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Background image -->
<!-- </header> -->
 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="mb-3 display-5"><?php echo $_settings->info('name') ?></h1>
            <p class="mb-3">We will take care of your Air Conditioner</p>
            <div class="col-auto mt-2">
                <button class="btn btn-primary btn-lg rounded-0" id="send_request" type="button">Register Your Request</button>
            </div>
        </div>
    </div>
</header>
<!-- Section-->
<section>
    <div class="container px-4 px-lg-5 mt-5 ">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fas fa-ubuntu"> Services Provided For: </h3>
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
            </section>
            <section class="container">
            <div class="col-md-18 m-5">
                <h3 class="fas fa-ubuntu"> Our Services: </h3>
                <hr class="bg-primary opacity-100">
                <div class="form-group">
                <div class="input-group mb-3">
                    <input type="search" id="search" class="form-control" placeholder="Search Service Here" aria-label="Search Service Here" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary" id="basic-addon2"><i class="fa fa-search"></i></span>
                    </div>
                </div>
                </div>
                <div class="container col-lg-8 overflow-x: scroll d-inline-block">
                <div class="col " id="service_list">
                    <?php 
                    $services = $conn->query("SELECT * FROM `service_list` where status = 1 order by `service`");
                    while($row= $services->fetch_assoc()):
                        $row['description'] = strip_tags(html_entity_decode(stripslashes($row['description'])));
                    ?>
                    <!-- <a class="col item text-decoration-none text-dark view_service" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                        <div class="callout callout-primary border-primary rounded-0">
                            <dl>
                                <dt><?php echo $row['service'] ?></dt>
                                <dd class="truncate-3 text-muted lh-1"><small><?php echo $row['description'] ?></small></dd>
                            </dl>
                        </div>
                    </a> -->
                    <div class="card" style="width: 20rem;">
                    <a class="col item text-decoration-none text-dark view_service " href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                    <div class="card-body">
                    <h5 class="card-title font-weight-bold  fas fa-toolbox"><p>  </p><?php echo $row['service'] ?></h5>
                    <p class="card-text"><small><?php echo $row['description'] ?></small></p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
                    <?php endwhile; ?>
                </div>
                <div id="noResult" style="display:none" class="text-center"><b>No Result</b></div>
                </div>
            </div>
        </div>
    </div>
    
    </section>

    <section>
    <!-- Happy Customer -->
    <h3 class="fas fa-ubuntu text-center "> Happy Customer: </h3>
    <div class="card-group m-3">
    <div class="card m-3">
    <img class="card-img-top" src="uploads/Avatar3.jpg"style="height:300px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Freya David</h5>
      <p class="card-text">The engineers attended on time and worked hard throughout the day.They were very courteous and polite at all times.
    They also tidied up after themselves.
    We were so impressed with then that we will be working with them again next month.I would highly recommend this firm.</p>
      
    </div>
  </div>
  <div class="card m-3">
    <img class="card-img-top" src="uploads/Avatar1.jpg" style="height:300px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Rahul Kumar</h5>
      <p class="card-text">We installed AC units in four rooms using The AC Service Company. I cannot recommend them highly enough. The service we received was amazing and the installation went very smoothly and neatly. They cleaned up after each day and worked around our schedule.
         We were very pleased with the final installation.</p>
      
    </div>
  </div>
  <div class="card m-3">
    <img class="card-img-top " src="uploads/Avatar2.jpg"style="height:300px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Jacob Smith</h5>
      <p class="card-text">The standard of service and quality of staff is excellent. 
        They are knowledgeable, efficient and proactive.</p>
      
    </div>
  </div>
</div>
            
            
                
                
                <!-- </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="" class="img-fluid" style="border-radius:100px;" alt="avt4">
                            <h4 class="card-title">Jennifer David</h4>
                            <p class="card-text">ullamcorper dolor id facilisis porttitor. Maecenas vel 
                                facilisis magna. Nunc efficitur est nibh, nec scelerisque diam 
                                fermentum cursus. </p>
                        </div> -->

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