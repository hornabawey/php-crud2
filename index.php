<?php include 'inc/header.php';  ?>
<?php include 'inc/nav.php';  ?>

<h1>view all products</h1>
<?php $data=json_decode(file_get_contents("./data/products.json"),true);
// var_dump($data); ?>

<table class='table table-bordered border-dark'>
    <thead>
    <tr>
	<th scope='col'>#</th>
	<th scope='col'>Name</th>
	<th scope='col'>price</th>
	<th scope='col'>descrption</th>
    <th scope='col'>image</th>
    <th scope='col'>delete</th>
    </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($data as $key=> $row): ?>
	
    <tr>
<!--	<th scope='row'>--><?php //=$user['id']?><!--</th>-->
	<td><?php echo $i++ ?></td>
	<td><?php echo $row["name"] ?></td>
	<td><?php echo $row["price"] ?></td>
    <td><?php echo $row["description"] ?></td>
    <td><img src="<?php echo"uploads/".$row["img"]; ?>" width="100px" height="100px"></td>
    <td>
        <a class="btn btn-danger" href="<?php echo"handlers/products/delete.php?id=".$key ?>">delete</a>
    </td>
	
    </tr>
    <?php  endforeach; ?>
    </tbody>
</table>
<?php include 'inc/footer.php'   ?>