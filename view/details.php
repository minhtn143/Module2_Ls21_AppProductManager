<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <form method="post" action="./index.php?page=update">
                <strong>PRODUCT INFO</strong>
                <input type="hidden" name="id" value="<?php echo $product->getId() ?>"/>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" name="name" id="name"
                           value="<?php echo $product->getName(); ?>" placeholder="<?php echo $product->getName(); ?>"
                           disabled>
                </div>
                <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="price" class="form-control" name="price" id="price"
                           value="<?php echo $product->getPrice(); ?>" placeholder="Enter product Price"
                           disabled>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description"
                           value="<?php echo $product->getDescription(); ?>"
                           placeholder="Enter Description" disabled>
                </div>
                <div class="form-group">
                    <label for="producer">Producer</label>
                    <input type="text" class="form-control" name="producer" id="producer"
                           value="<?php echo $product->getProducer(); ?>" placeholder="Enter Producer"
                           disabled>
                </div>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Close</button>
            </form>
        </div>
    </div>
</div>

