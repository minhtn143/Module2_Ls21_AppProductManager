<h1>Bạn chắc chắn muốn xóa khách hàng này?</h1>
<h3><?php echo $product->getName(); ?></h3>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $product->getId(); ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-secondary" href="index.php">Cancel</a>
    </div>
</form>