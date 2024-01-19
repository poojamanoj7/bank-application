<!-- resources/views/test/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Message Test</title>
</head>
<body>
    <h1>Flash Message Test</h1>

    <?php if(session('success')): ?>
        <div style="color: green;">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form method="post" action="<?php echo e(route('test.store')); ?>">
        <?php echo csrf_field(); ?>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Insert Record</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\bank\resources\views/test.blade.php ENDPATH**/ ?>