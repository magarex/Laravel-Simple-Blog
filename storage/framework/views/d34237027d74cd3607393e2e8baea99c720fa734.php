
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="backend/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo e(url('adminpanel')); ?>">
                                <i class="fa fa-dashboard"></i> <span>Anasayfa</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('homepage')); ?>">
                                <i class="fa fa-home"></i> <span>Anasayfa Ayarları</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('menu')); ?>">
                                <i class="fa fa-book"></i> <span>Menü Ayarları</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('ads')); ?>">
                                <i class="fa fa-usd"></i> <span>Reklam Ayarları</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('articles')); ?>">
                                <i class="fa fa-folder"></i> <span>Makale Paylaş</span>
                            </a>
                        </li>
                         
                        
                    
                       
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>