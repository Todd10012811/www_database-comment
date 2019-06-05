<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 
<section>
    <div class="container1">
      <div class="content1">
        <div class="box1">

          <h1>Product Details</h1><br>
    
          <?php 
  
    foreach($data['product'] as $staff) {

        ?>

        <div style="width:80%;  margin-left:10%;margin-right:10%; margin-bottom:100px;" >
            <div class="card" style=" line-height: 0;" >
                <img class="card-img-top" src="<?php echo URLROOT . "images/" . $staff["pimage"]  ?>" alt="Card image cap">
                <div class="card-body">
                <h4 style="text-align:left; margin-left:20px;" class="card-title"><?php echo $staff['pname'] ?></h4>
                <h5 style="text-align:left;margin-left:20px;"><?php echo $staff['brand'] ?></h5>
             
                <h2 style="color:black; font-size:12px; text-align:left"><?php echo $staff['discription']?></h2>
                <h5 style="text-align:left;margin-left:20px;">Rating: <?php echo $staff['rating'] ?></h5>
                <h2 style="text-align:left; "><?php echo $staff['price'] ?></h2>
                <form action="<?php echo URLROOT . 'pages/productlist/'; ?>">
                    <button type="submit"  style="background-color:green; width:250px;" class="btn btn-lg btn-block btn-primary">See all products...</button>
                    </form>
               
              
               
              
            </div>
        </div>

        <?php
    }
?>


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