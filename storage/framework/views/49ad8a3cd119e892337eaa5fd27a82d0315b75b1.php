<?php echo $__env->make('backend.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('backend.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Menü Ayarları
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
                                                      
                    <a href="menu-create"><button class="btn btn-success">Menü Ekle</button></a>
                                                
                          
                        <section class="content">
      
                        

                            <table class="table table-bordered" id="users-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Menü İsim</th>
                                    <th>Menü Link</th>
                                    <th>Menü İcon</th>
                                    <th></th>
                                </tr>
                            </thead>
                            </table>
  <script type="text/javascript">
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://localhost/blog/public/menu/get_datatable',
        columns: [
            {data: 'id'},
            {data: 'menuname'},
            {data: 'menulink'},
            {data: 'menuicon'},
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

      