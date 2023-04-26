<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="<?php echo e(route('products.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\lafnef\phpKpi\resources\views/products/create.blade.php ENDPATH**/ ?>