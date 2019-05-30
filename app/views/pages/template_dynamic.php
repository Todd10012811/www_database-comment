<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 
    <div class="container1">
      <div class="content1">
        <div class="box1">
        <h1>Products</h1><br>
        <form name="form2" class="form2" action="<?php echo URLROOT . 'pages/search/'; ?>" method="POST" >
                    
                    <div><input type="text" name="usersearch" id="usersearch" cols="50vw" rows="5" style="height:38px; width:300px;"></textarea><input type="submit" style="width:200px;"class="button2" value="Search For Product"> <br></div>
                 
                  
                    </form>
                   
                  
          <div class='fuck'style='display: grid;
  grid-template-columns: 1fr 1fr; grid-gap:20px; padding-left:20px; padding-right:20px; @media screen and (max-width: 650px){.fuck{grid-template-columns: 1fr 1fr }} '>
  
      
    
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
  <!-- importing the footer -->
<?php include(APPROOT . "/views/includes/footer.php"); ?>