<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Nuevo Producto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10">

            </div>
            <div class="col-2">
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-outline-dark">Cancelar</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo $__env->make('products.fragment.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::open(['route'=>'products.store', 'files'=>true]); ?>


                <?php echo $__env->make('products.fragment.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>