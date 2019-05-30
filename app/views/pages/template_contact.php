<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 
<section>

        <div class="container1">
            <div class="content4">
               <div class="box1">
                  <div class="login">
                      
                        <h1><?php echo $data['title'][29]['Properties']; ?></h1>
                        <p><?php echo $data['paragraph'][30]['Properties']; ?></p>
                   
                    <form name="form" class="form" action="<?php echo URLROOT . 'pages/process'; ?>" method="POST">
                          
                        <div><label for="">First Name</label></div>
                        <div><input type="text" name="FName" id="FName"/><br></div>
                        <div><label for="">Last Name</label></div>
                        <div><input type="text" name="Lname" id="Lname"/><br></div>
                        <div><label for="">Email</label></div>
                        <div><input type="text" name="Email" id="Email" /><br></div>
                        <div><label for="">Phone</label></div>
                        <div><input type="text" name="Phone" id="Phone"/><br></div>
                        
                        <div></div>
                        <input type="submit" class="button" value="Request" onClick="">
                    </form><br class="br">
                
                </div>
               </div>
                <!-- importing the foo <div class="box2">
               <h1><?php echo $data['title'][31]['Properties']; ?></h1>
                        <p><?php echo $data['paragraph'][32]['Properties']; ?></p>
               
                <form name="form" class="form">
                    <div><label for="Name">Name</label></div>
                    <div><input type="text" name="Name2" /><br></div>
                    <div><label for="Phone">Phone Number</label></div>
                    <div><input type="text" name="Phone2" /><br></div>
                    <div><label for="Address">address</label></div>
                    <div><input type="text" name="Address2" /><br></div>
                    <div><label for="Time">Time Requested</label></div>
                    <div><input type="text" name="Time2" /><br></div>
                    <div></div>
                    <input type="button" class="button" value="Request" onClick="">
                </form><br class="br">
               </div>
             
              ter -->
           
            </div>
        </div>
     </section>
   
<?php include(APPROOT . "/views/includes/footer.php"); ?>