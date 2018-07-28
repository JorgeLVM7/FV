<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Editar Producto </h3>
                <?php echo $__env->make('products.fragment.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                <?php echo Form::model($product, ['route'=>['products.update',$product->id], 'method'=> 'PUT','files'=>true]); ?>


                <?php echo $__env->make('products.fragment.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::close(); ?>


            </div>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-outline-dark" href="<?php echo e(route('products.index')); ?>">Cancelar</a>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>