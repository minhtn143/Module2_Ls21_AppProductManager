<h3>LIST PRODUCTS</h3>

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
    <?php foreach ($products as $key => $product):?>

    <tr>
        <th scope="row"><?php echo ++$key; ?></th>
        <td><?php echo "$product->getName()"; ?></td>
        <td><?php echo "$product->getPrice()"; ?></td>
        <td><?php echo "$product->getDescription()"; ?></td>
        <td><?php echo "$product->getProducer()"; ?></td>
    <?php endforeach ?>
    </tbody>
</table>