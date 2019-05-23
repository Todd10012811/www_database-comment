<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 

<section>
        <div class="container1">
            <div class="content2">
               <div class="box1"> <h1><?php echo $data['title'][0]['Properties']; ?></h1> <img id='image1' src="<?php echo $data['image'][0]['Prop']; ?>" alt="computer repair"><p><?php echo $data['paragraph'][1]['Properties']; ?></p></div>
               <div class="box2"><h1><?php echo $data['title'][2]['Properties']; ?></h1> <p><?php echo $data['paragraph'][3]['Properties']; ?></p> <div class="map1"><iframe id="map1" src="<?php echo $data['image'][1]['Prop']; ?>"  frameborder="0" style="border:0" allowfullscreen></iframe></div> </div>
               <div class="box3"><h1><?php echo $data['title'][4]['Properties']; ?></h1>
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
              
           
            </div>
        </div>
     </section>

<!-- importing the footer -->
<?php include(APPROOT . "/views/includes/footer.php"); ?>