<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">

        <div class="col-12">
            <form method="post">
                <strong>ADD NEW PRODUCT</strong>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name" required>
                </div>
                <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="price" class="form-control" name="price" id="price" placeholder="Enter product Price" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" required>
                </div>
                <div class="form-group">
                    <label for="producer">Producer</label>
                    <input type="text" class="form-control" name="producer" id="producer" placeholder="Enter Producer" required>
                </div>
                <button type="submit" class="btn btn-primary">ADD NEW</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>