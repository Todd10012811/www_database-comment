<?php include(APPROOT . "/views/includes/header.php"); ?> 


<section>
        <div class="container1">
            <div class="content3">
                <div class="box1">
                    <h1><?php echo $data['title'][10]['Properties']; ?></h1>
                    
                    <div class="slideshow-container1">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides1 fade1">
                            <div class="numbertext1">1 / 3</div>
                            <img src="<?php echo $data['image'][3]['Prop']; ?>" style="width:100%">
                            <div class="text1"><?php echo $data['title'][11]['Properties']; ?></div>
                        </div>

                        <div class="mySlides1 fade1">
                            <div class="numbertext1">2 / 3</div>
                            <img src="<?php echo $data['image'][4]['Prop']; ?>" style="width:100%">
                            <div class="text1"><?php echo $data['title'][33]['Properties']; ?></div>
                        </div>

                        <div class="mySlides1 fade1">
                            <div class="numbertext1">3 / 3</div>
                            <img src="<?php echo $data['image'][5]['Prop']; ?>" style="width:100%">
                            <div class="text1"><?php echo $data['title'][34]['Properties']; ?></div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next1" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                        <span class="dot1" onclick="currentSlide(1)"></span>
                        <span class="dot1" onclick="currentSlide(2)"></span>
                        <span class="dot1" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <div class="box2">
                    <h1>Services</h1>
                    <div class="container">
                    <div class="card-deck mb-3 text-center">
                              <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                  <h4 class="my-0 font-weight-normal"><?php echo $data['title'][4]['Properties']; ?></h4>
                                </div>
                                <div class="card-body">
                                  <h1 class="card-title pricing-card-title">$199<small class="text-muted"></small></h1>
                                  <ul class="list-unstyled mt-3 mb-4">
                                    <li><?php echo $data['title'][7]['Properties']; ?></li>
                                   
                               
                                  </ul>
                                  <button type="button" class="btn btn-lg btn-block btn-primary">Buy Now</button>
                                </div>
                              </div>
                              <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                  <h4 class="my-0 font-weight-normal"><?php echo $data['title'][5]['Properties']; ?></h4>
                                </div>
                                <div class="card-body">
                                  <h1 class="card-title pricing-card-title">$69 <small class="text-muted"></small></h1>
                                  <ul class="list-unstyled mt-3 mb-4">
                                    <li><?php echo $data['title'][8]['Properties']; ?></li>
                                    
                                 
                                  </ul>
                                  <button type="button" class="btn btn-lg btn-block btn-primary">Buy Now</button>
                                </div>
                              </div>
                              <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                  <h4 class="my-0 font-weight-normal"><?php echo $data['title'][12]['Properties']; ?></h4>
                                </div>
                                <div class="card-body">
                                  <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                                  <ul class="list-unstyled mt-3 mb-4">
                                    <li><?php echo $data['title'][9]['Properties']; ?></li>
                               
                              
                                  </ul>
                                  <button type="button" class="btn btn-lg btn-block btn-primary">Buy Now</button>
                                </div>
                              </div>
                            </div>
                          
                           
                          </div>

                      
                   
                </div>
                <div class="box3">
                    <h1><?php echo $data['title'][18]['Properties']; ?></h1>
                    <div class="para1">
                            <img src="<?php echo $data['image'][2]['Prop']; ?>"  alt="help">
                        <p><?php echo $data['paragraph'][19]['Properties']; ?></p>
                            
                          

                    </div>
                    <div id="center">

                    <h2><?php echo $data['title'][20]['Properties']; ?></h2>
                    <form name="form2" class="form2" action="<?php echo URLROOT . 'pages/products/'; ?>" method="POST" >
                    <textarea name="Prop" id="Prop" cols="50vw" rows="5"></textarea>
                   <br> <br>
                    <input type="submit" class="button2" value="submit">
                    </form>
                    </div>
                    <h2>  <?php 
                    $output = "";

                   

                    foreach($data['comments'] as $item) {

                      


                        $output .= $item['Prop'];
                        
                        $output .= "<br>";
                    }

                    echo $output;
                ?></h2>
                   <h2><?php echo $data['title2'] ?></h2>
                </div>
             

            </div>
        </div>
        
    </section>
  
    <script>var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot1");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var uluru = {lat: -37.707687, lng: -183.862239};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 12, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
      }



  
</script>



<!-- importing the footer -->
<?php include(APPROOT . "/views/includes/footer.php"); ?>