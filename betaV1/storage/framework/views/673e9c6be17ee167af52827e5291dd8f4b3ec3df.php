
<div class="row">
    <div class="col-2">
        <div class="form-group">
            <?php echo Form::label('barcode','Código de Barras'); ?>

            <?php echo Form::text('barcode', null,['class'=>'form-control']); ?>

        </div>
    </div>
    <div class="col-1">
        <div class="form-group">
            <?php echo Form::label('catcode','Catálogo'); ?>

            <?php echo Form::text('catcode', null,['class'=>'form-control']); ?>

        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <?php echo Form::label('description','Descripción de Producto'); ?>

            <?php echo Form::text('description', null,['class'=>'form-control']); ?>

        </div>
    </div>
    <div class="col-1">
        <div class="form-group">
            <?php echo Form::label('stock','Cantidad'); ?>

            <?php echo Form::text('stock', null,['class'=>'form-control']); ?>

        </div>
    </div>
    <div class="col-1">
        <div class="form-group">
            <?php echo Form::label('unity','Unidad '); ?>

            <?php echo Form::select('unity',['Pieza'=>'Pieza',
                                        'Kilogramo(s)'=>'Kilogramo(s)',
                                        'Metro(s)'=>'Metro(s)',
                                        'Litro(s)'=>'Litro(s)',
                                        'Caja'=>'Caja']
                                        , null,['class'=>'form-control']); ?>


        </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            <?php echo Form::label('provider','Proveedor '); ?>

            <?php echo Form::select('provider',[
            'PROVEEDOR'=>'PROVEEDOR',
            'SIGASA'=>'SIGASA',
            'VAQUEIRO'=>'VAQUEIRO',
            'CASA FERNANDEZ'=>'CASA FERNANDEZ',
            'ACEROS Y TUBOS'=>'ACEROS Y TUBOS',
            'CORPORATIVO'=>'CORPORATIVO',
            'TRUPER'=>'TRUPER',
            'DMT'=>'DMT',
            'C ELECTRICA'=>'C ELECTRICA',
            'MONTEALBAN'=>'MONTEALBAN',
            'PTB'=>'PTB',
            'CIA FERNANDEZ'=>'CIA FERNANDEZ',
            ], null,['class'=>'form-control']); ?>


        </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            <?php echo Form::label('brand','Marca'); ?>

            <?php echo Form::text('brand', null,['class'=>'form-control']); ?>

        </div>
    </div>
    <div class="col-1">
        <div class="form-group">
            <?php echo Form::label('cost','Costo'); ?>

            <?php echo Form::text('cost', null,['class'=>'form-control', 'id'=>'box1', 'oninput'=>'calculate()']); ?>

        </div>
    </div>
    <div class="col-1">
        <div class="form-group">
            <?php echo Form::label('average','%'); ?>

            <?php echo Form::text('average', null,['class'=>'form-control', 'id'=>'box2', 'oninput'=>'calculate()']); ?>

        </div>
    </div>
    <div class="col-1">
        <div class="form-group">
            <?php echo Form::label('price','Público'); ?>

            <?php echo Form::text('price', null,['class'=>'form-control','id'=>'result']); ?>

            
            
        </div>
    </div>



    <div class="col-12">
        <div class="form-group">
            <?php echo Form::label('head',' '); ?>

            <?php echo Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]); ?>


        </div>
    </div>
</div>



