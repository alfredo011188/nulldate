<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>
                <div class="panel-heading">Registro de usuarios</div>

                <div class="panel-body">
                    <form action="<?php echo url('/add/user'); ?>" method="post">
                        <div class="form-group">
                            <label for="email">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Fecha de nacimiento</label>
                            <input type="text" class="form-control" name="birthdate" id="birthdate" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Domicilio</label>
                            <input type="text" class="form-control" name="direction[]" id="direction">
                        </div>
                        <!--<div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                        </div>-->
                        <div class="form-group text-center">
                            <a type="button" class="btn btn-success" onclick="add();"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</a>
                        </div>
                        <div id="add_input">

                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>