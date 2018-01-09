<?php echo $__env->make('backend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('backend.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Menü Düzenliyorsunuz
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">


                
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable"> 
                            <!-- İÇERİK -->     
                           
                            <?php echo Form::model($edit, ['method' => 'PATCH','action' => ['MenusController@update', $edit->id]]); ?>

                        <div class="form-group">
                            <label>Menü Ad:</label>
                            <input type="text" class="form-control" name="menuname" value="<?php echo e($edit->menuname); ?>">
                        </div>   

                        <div class="form-group">
                            <label>Menü Link:</label>
                            <input type="text" class="form-control" name="menulink" value="<?php echo e($edit->menulink); ?>">
                        </div>

                        <div class="form-group">
                            <label>Menü Icon:</label>
                            <input type="text" class="form-control" name="menuicon" value="<?php echo e($edit->menuicon); ?>">
                        </div>

                        <div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Dikkat!</h4>
                Menü İconlarında fontawesome vb. iconlar kullanamazsınız...
                Kullanabileceğiniz iconlar sınırlıdır...
                Şu İconları kullanabilirsiniz:
                (nav_fashion , nav_features , nav_gadgets , nav_lifeguide , nav_lifestyle , nav_news , nav_video )
              </div>

                        <button class="btn btn-warning">Düzenle</button>  
                            <?php echo Form::close(); ?>

                            
                            <br>

                            <?php echo Form::model($edit, ['method' => 'DELETE','action' => ['MenusController@destroy', $edit->id]]); ?>

                        <button class="btn btn-danger">SİL (x)</button>                  
                            <?php echo e(Form::close()); ?>

                                                      

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Map box -->


                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <?php echo $__env->make('backend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      