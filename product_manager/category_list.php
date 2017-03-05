<?php include '../view/header.php';?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
	<?php foreach ($categories as $category) { ?>
	<tr>
		<td><?php echo $category['categoryName']; ?></td>
		<td><input type="submit" value="delete"></td>
	</tr>
<?php } ?>
<!-- add category rows here -->
    </table>

    <h2>Add Category</h2>
	<form  method="post">     
	<input type="hidden" name="action" id="add_category">
	<p><label>Name : </label><input type="text" name="category_name"> <input type="submit" value="Add"></p>
	</form>

<!-- add code for form here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
