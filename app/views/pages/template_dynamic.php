<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 
    <div class="container1">
      <div class="content1">
        <div class="box1">
        <h1>Products</h1><br>
        <form name="form2" class="form2" action="<?php echo URLROOT . 'pages/search/'; ?>" method="POST" >
                    
                        <div><input type="text" placeholder="search here"name="usersearch" class="usersearch" id="usersearch" cols="50vw" rows="5" ></textarea><input type='submit' class='button2' id='usersearch2' value="Search For Product"> 

                        <form action="<?php echo URLROOT . 'pages/productlist/'; ?>">
                    <button type="submit"  class="button2" id='usersearch3'>See all products...</button>
                    </form>
                    </div>
                    </form>
                   
                  
          <div class='fuck' >
  
      
    
          <?php 
  
    foreach($data['product'] as $staff) {

        ?>

        <div  >
            <div class="card"  >
            <a href="<?php echo URLROOT . "/Pages/singleProduct/" . $staff['ID'] ?>"><img class="card-img-top" src="<?php echo URLROOT . "images/" . $staff["pimage"]  ?>" alt="Card image cap"></a>
                <div class="card-body">
                <h2 class="card-title"><a href="<?php echo URLROOT . "/Pages/singleProduct/" . $staff['ID'] ?>"><?php echo $staff['pname'] ?></a></h2>
                <a href="<?php echo URLROOT . "/Pages/singleProduct/" . $staff['ID'] ?>"><?php echo $staff['price'] ?></a>
            
                </div>
            
            </div>
            <br>
        </div>

        <?php
    }
?>

                
      </div>
    </div>
    </div>
 
  </section>
  <script>
     
     document.getElementById("1").className = "notcurrent";
     document.getElementById("2").className = "current";
     document.getElementById("3").className = "notcurrent";
     document.getElementById("4").className = "notcurrent";
  </script>
<?php include(APPROOT . "/views/includes/footer.php"); ?>