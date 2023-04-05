<?php include 'inc/header.php';  ?>
<?php include 'inc/nav.php';  ?>


    <h1>creat new product</h1>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto ">


 
 
        <form action="<?= "handlers/products/store.php"?>" method="POST" class="border p-3" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="name" ></label>
    <input type="text" class="form-control" name="name" placeholder="name of product" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="name" ></label>
    <input type="number" name="price" placeholder="price of product" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="name" ></label>
    <input type="text" name="description" placeholder="description of product" class="form-control" id="password">
  </div>
 
  <div class="mb-3">
    <label for="img" >choose your img</label>
    <input  name="img" type="file" class="form-control" id="img">
  </div>
  
  <button type="submit" class="form-control text-center btn btn-danger">Submit</button>
</form>


        </div>
    </div>
</div>


    <?php include 'inc/footer.php'   ?>