<?php echo $__env->make('backend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('backend.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Makale Ekle
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
                                                      
                         <?php echo Form::open(array('action' => 'ArticlesController@store','enctype' => 'multipart/form-data')); ?>


                        <div class="form-group">
                            <label>Makale Başlık Giriniz:</label>
                            <input required="" type="text" class="form-control" name="articlesname" value="">
                        </div> 

                        <div class="form-group">
                            <label>Kategori Seçiniz</label>
                            <select name="category" class="form-control">
                                <option value="1">Magazin</option>
                                <option value="2">Teknoloji</option>
                                <option value="3">Oyun</option>
                                <option value="4">Yaşam</option>
                                <option value="5">Haber</option>
                                <option value="6">Spor</option>
                            </select>
                        </div>  

                        <div class="form-group">
                            <label for="exampleInputFile">Makale Resmini Seçiniz</label>
                            <input required="" name="articlesimage" type="file" name="ads1" id="exampleInputFile">
                            <p class="help-block">Makalenizin Başında Yer Alacak Resim.</p>
                        </div> 
                        <br>

                        <label>Makale İçeriği:</label>

                        <textarea name="articlescontent" class="ckeditor"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>   


                        <button class="btn btn-warning">Paylaş</button>       

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

      