<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container" body style="background-color:powderblue;">
    <form class="mt-5" action="<?php echo e(route('student.update',$student->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <?php endif; ?>
        <h1 style="text-align:center;" class="mt-5">Items Edit Page</h1>
        <div class="form-group">
          <label for="exampleInputtxt" class="mt-5">Item Name :</label>
          <input type="text" class="form-control" name="item_name" value="<?php echo e($student->item_name); ?>" placeholder="Enter">
        </div>
        <div class="form-group">
            <label for="exampleInputtxt" class="mt-2">Item Discription :</label>
            <input type="text" class="form-control" name="item_dis" value="<?php echo e($student->item_dis); ?>" placeholder="Enter" required>
          </div>
          <div class="form-group">
            <label for="exampleInputtxt" class="mt-2">Item Count :</label>
            <input type="text" class="form-control" name="item_c" value="<?php echo e($student->item_c); ?>" placeholder="Enter" required>
          </div>
          <div class="form-group">
            <label for="exampleInputtxt" class="mt-2">Item Price :</label>
            <input type="text" class="form-control" name="price" value="<?php echo e($student->price); ?>" placeholder="Enter">
          </div>
          <div class="form-group">
            <label for="exampleInputtxt" class="mt-2">Item Qulity :</label>
            <input type="text" class="form-control" name="stat" value="<?php echo e($student->stat); ?>" placeholder="Enter" required>
          </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
      </form>

</body>
</html>
<?php /**PATH C:\Users\Tecky\Desktop\2d\example-app\resources\views/student/edit.blade.php ENDPATH**/ ?>