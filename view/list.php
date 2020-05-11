<h3>LIST PRODUCTS</h3>
<a class="btn btn-primary" href="./index.php?page=add" role="button">Add new product</a>
<table class="table table-bordered table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Producer</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products

    as $key => $product): ?>
    <tr>
        <th scope="row"><?php echo ++$key; ?></th>
        <td><?php echo $product->getName(); ?></td>
        <td><?php echo $product->getPrice(); ?></td>
        <td><?php echo $product->getDescription(); ?></td>
        <td><?php echo $product->getProducer(); ?></td>
        <td>
            <a class="btn btn-primary btn-sm" href="./index.php?page=update&id=<?php echo $product->getId(); ?>"
               role="button">Edit</a>
            <a class="btn btn-danger btn-sm" href="./index.php?page=delete&id=<?php echo $product->getId(); ?>"
               role="button">Delete</a>
            <a class="btn btn-info btn-sm" href="./index.php?page=details&id=<?php echo $product->getId(); ?>"
               role="button">Details</a>
        </td>

        <?php endforeach ?>
    </tbody>
</table>