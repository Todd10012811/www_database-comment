<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 
<section>
        <div class="container1">
            <div class="content4">
               <div class="box1">
                  <div class="login">
                      
                        <h1><?php echo $data['title'][29]['Properties']; ?></h1>
                        <p><?php echo $data['paragraph'][30]['Properties']; ?></p>
                   
                    <form name="form" class="form" method="POST">
                          
                        <div><label for="FName">First Name</label></div>
                        <div><input type="text" name="FName" /><br></div>
                        <div><label for="LName">Last Name</label></div>
                        <div><input type="text" name="LName" /><br></div>
                        <div><label for="email">Email</label></div>
                        <div><input type="text" name="email" /><br></div>
                        <div><label for="Phone">Phone</label></div>
                        <div><input type="text" name="Phone" /><br></div>
                        
                        <div></div>
                        <input type="button" class="button" value="Request" onClick="">
                    </form><br class="br">
                
                </div>
               </div>
               <div class="box2">
               <h1><?php echo $data['title'][31]['Properties']; ?></h1>
                        <p><?php echo $data['paragraph'][32]['Properties']; ?></p>
               
                <form name="form" class="form">
                    <div><label for="Name">Name</label></div>
                    <div><input type="text" name="Name" /><br></div>
                    <div><label for="Phone">Phone Number</label></div>
                    <div><input type="text" name="Phone" /><br></div>
                    <div><label for="Address">address</label></div>
                    <div><input type="text" name="Address" /><br></div>
                    <div><label for="Time">Time Requested</label></div>
                    <div><input type="text" name="Time" /><br></div>
                    <div></div>
                    <input type="button" class="button" value="Request" onClick="">
                </form><br class="br">
               </div>
             
              
           
            </div>
        </div>
     </section>
     <!-- importing the footer -->
<?php include(APPROOT . "/views/includes/footer.php"); ?>