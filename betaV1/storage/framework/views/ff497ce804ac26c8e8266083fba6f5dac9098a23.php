<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <form class="form-inline my-2 my-lg-0" action="/search" method="get" role="search">

                    <input class="form-control mr-sm-2" type="search" placeholder="Descripción" aria-label="Buscar" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
            <div class="col-md-2">
                <a href="<?php echo e(route('products.create')); ?>" class="btn btn-outline-dark">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <br>
        </div>

        <?php echo $__env->make('products.fragment.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>C. Barras</th>
                            <th>C. Catálogo</th>
                            <th colspan="6">Descripción</th>
                            <th>Proveedor</th>
                            <th>Precio Costo</th>
                            <th>%</th>
                            <th>Precio Público</th>
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product-> barcode); ?></td>
                            <td><?php echo e($product-> catcode); ?></td>
                            <td colspan="6"><?php echo e($product->description); ?></td>
                            <td><?php echo e($product->provider); ?></td>

                            <td>$ <?php echo e($product-> cost); ?></td>
                            <td><?php echo e($product-> average); ?></td>
                            <td>$ <?php echo e($product-> price); ?></td>
                            <td>
                                <div class="btn-group btn-group-toggle" >
                                    <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-outline-success" role="button" aria-pressed="true">Ver</a>

                                    <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-outline-warning"  role="button" aria-pressed="true">Editar</a>

                                    <form class="btn-group btn-group-toggle" action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-outline-danger" style="cursor: pointer;" type="submit">Borrar</button>
                                    </form>

                                </div>
                            </td>
                            
                            
                            
                            

                            
                        </tr>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>


                </table>
                <?php echo $products->render(); ?>


            </div>
        </div>
    </div>







    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>