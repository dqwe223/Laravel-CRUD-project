<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container" body style="background-color:powderblue;">

<h1 style="text-align:center;" class="mt-5">Book Shop Inventory System</h1>
<a href="<?php echo e(route('student.create')); ?>" class="btn btn-primary mt-5">Create Items</a>
<table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Discription</th>
      <th scope="col">Item Count</th>
      <th scope="col">Item Price</th>
      <th scope="col">Edit</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <th scope="row"><?php echo e($student->id); ?></th>
      <td><?php echo e($student->item_name); ?></td>
      <td><?php echo e($student->item_dis); ?></td>
      <td><?php echo e($student->item_c); ?></td>
      <td><?php echo e($student->price); ?></td>
      <td><a class="btn btn-primary" href="<?php echo e(route('student.edit',$student->id)); ?>">Edit</a></td>
      <td><a class="btn btn-primary" href="<?php echo e(route('student.delete',$student->id)); ?>">DELETE</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>

</body>
</html>
<?php /**PATH C:\Users\Tecky\Desktop\2d\example-app\resources\views/student/index.blade.php ENDPATH**/ ?>