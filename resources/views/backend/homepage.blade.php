@include('backend.header')
@include('backend.sidebar')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Anasayfa Ayarları
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


                


               {!! Form::open(array('action' => 'HomepageController@settings','enctype' => 'multipart/form-data')) !!}    

                <div class="form-group">
                  <label for="exampleInputFile">Logo Seçiniz</label>
                  <input type="file" name="logo" id="exampleInputFile">

                  <p class="help-block">Seçeceğiniz Resim Sitenizin Logosu Olacaktır...</p>
                  <br>
                  <label>Şuanki Logonuz:</label>
                  <img width="100px;" src="uploads/{{$listele->logo}}">
                </div>  
                <br>                                 
                           
                <div class="form-group">
                  <label>Site Title:</label>
                  <input type="text" class="form-control" name="title" value="{{$listele->title}}">
                </div>

                <div class="form-group col-md-6">
                  <label>Facebook Adresiniz:</label>
                  <input type="text" class="form-control" name="facebook" value="{{$listele->facebook}}">
                </div>

                <div class="form-group col-md-6">
                  <label>Twitter Adresiniz:</label>
                  <input type="text" class="form-control" name="twitter" value="{{$listele->twitter}}">
                </div>

                <div class="form-group col-md-6">
                  <label>Google+ Adresiniz:</label>
                  <input type="text" class="form-control" name="google" value="{{$listele->google}}">
                </div>

                <div class="form-group col-md-6">
                  <label>LinkedIn Adresiniz:</label>
                  <input type="text" class="form-control" name="linkedin" value="{{$listele->linkedin}}">
                </div>

                <div class="form-group">
                  <label>Hakkımızda Alanı:</label>
                  <input type="text" class="form-control" name="aboutus" value="{{$listele->aboutus}}">
                </div>

                <div class="form-group">
                  <label>Günün Videosu: (Youtube Videosuna Sağ Tıklayarak Yerleştirme Kodunu Kopyalayıp (Kodun içerisindeki !!LİNKİ!!) Buraya Yapıştırın...)</label>
                  <input type="text" class="form-control" name="dailyvideo" value="{{$listele->dailyvideo}}">
                </div>

                <div class="form-group col-md-6">
                  <label>Duyuru1 : </label>
                  <input type="text" class="form-control" name="not1" value="{{$listele->not1}}">
                </div>

                <div class="form-group col-md-6">
                  <label>Duyuru2 :</label>
                  <input type="text" class="form-control" name="not2" value="{{$listele->not2}}">
                </div>

                <div class="form-group">
                  <label>Footer Alanı:</label>
                  <input type="text" class="form-control" name="footer" value="{{$listele->footer}}">
                </div>

                <button class="btn btn-warning">Kaydet</button>


                {!! Form::close() !!}


                          


                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">
                            <!-- Map box -->




                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        @include('backend.footer')

      