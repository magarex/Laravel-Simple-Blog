<?php echo $__env->make('backend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('backend.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Makale Bölümü
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
                        <section class="col-lg-12 connectedSortable"> 
                            <!-- İÇERİK -->     
                                                      
                           
                        <a href="article-create"><button class="btn btn-success">Makale Ekle</button></a> 
                            <br><br>


                        <table class="table table-bordered" id="users-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Makale Başlığı</th>
                                    <th>Makale Resmi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            </table>
  <script type="text/javascript">
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://localhost/blog/public/articles/get_articlesdata',
        columns: [
            {data: 'id'},
            {data: 'articlesname'},
            {data: 'articlesimage'},
            {data: 'actions'},

        ]
    });
</script>           
                          


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

      