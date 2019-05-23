<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 
<section>
    <div class="container1">
      <div class="content1">
        <div class="box1">
          <h1><?php echo $data['title'][35]['Properties']; ?></h1><br>
            <h3><?php echo $data['title'][21]['Properties']; ?></h3>
              <p><?php echo $data['paragraph'][22]['Properties']; ?></p>
            <br>
            <h3><?php echo $data['title'][23]['Properties']; ?></h3>
              <p><?php echo $data['paragraph'][24]['Properties']; ?></p>
            <br>
            <h3><?php echo $data['title'][25]['Properties']; ?></h3>
              <p><?php echo $data['paragraph'][26]['Properties']; ?></p>
            <h3><?php echo $data['title'][27]['Properties']; ?></h3>
          <p><?php echo $data['paragraph'][28]['Properties']; ?></p>
        </div>


      </div>
    </div>

  </section>
  <!-- importing the footer -->
<?php include(APPROOT . "/views/includes/footer.php"); ?>