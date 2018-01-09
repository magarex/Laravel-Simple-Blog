<?php echo $__env->make('backend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('backend.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Reklam Ayarları
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
                                                      
                 <?php echo Form::open(array('action' => 'AdsController@adsupdate','enctype' => 'multipart/form-data')); ?>


                <div class="form-group">
                  <label for="exampleInputFile">1. Reklam Alanı</label>
                  <input required="" type="file" name="ads1" id="exampleInputFile">
                  <p class="help-block">Headerda Logonun Yanında ki alan.</p>
                  <br>
                  <label>1. Reklam:</label>
                  <img width="100px;" src="uploads/<?php echo e($reklam->ads1); ?>">
                </div>  

                <button class="btn btn-primary">1.Reklam Güncelle</button>

                <br>
                <br>

                <div class="form-group">
                  <label for="exampleInputFile">2. Reklam Alanı</label>
                  <input required="" type="file" name="ads2" id="exampleInputFile">
                  <p class="help-block">Orta Bölümde Yer Alan Reklam Alanı.</p>
                  <br>
                  <label>2. Reklam:</label>
                  <img width="100px;" src="uploads/<?php echo e($reklam->ads2); ?>">
                </div> 

                <button class="btn btn-warning">2.Reklam Güncelle</button>

                <br>
                <br>


                <div class="form-group">
                  <label for="exampleInputFile">3. Reklam Alanı</label>
                  <input required="" type="file" name="ads3" id="exampleInputFile">
                  <p class="help-block">Sağ Orta Bölümde Yer Alan Reklam Alanı.</p>
                  <br>
                  <label>3. Reklam:</label>
                  <img width="100px;" src="uploads/<?php echo e($reklam->ads3); ?>">
                </div>   

                <button class="btn btn-danger">3.Reklam Güncelle</button>
                <br>
                <br>

                <?php echo Form::close(); ?>

                                                
                          


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

      