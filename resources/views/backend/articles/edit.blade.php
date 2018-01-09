@include('backend.header')
@include('backend.sidebar')

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
                                                      
                        {!! Form::model($articles, ['method' => 'PATCH', 'files' => true, 'action' => ['ArticlesController@update', $articles->id]]) !!}

                        <div class="form-group">
                            <label>Makale Başlık Giriniz:</label>
                            <input type="text" class="form-control" name="articlesname" value="{{$articles->articlesname}}">
                        </div> 

                        @if($articles->category == '1') 
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
                    	
                    	@elseif($articles->category == '2') 
                    	<div class="form-group">
                            <label>Kategori Seçiniz</label>
                            <select name="category" class="form-control">
                                <option value="2">Teknoloji</option>
                                <option value="1">Magazin</option>
                                <option value="3">Oyun</option>
                                <option value="4">Yaşam</option>
                                <option value="5">Haber</option>
                                <option value="6">Spor</option>
                            </select>
                        </div>
                   		 
                   		@elseif($articles->category == '3') 
                   		<div class="form-group">
                            <label>Kategori Seçiniz</label>
                            <select name="category" class="form-control">
                                <option value="3">Oyun</option>
                                <option value="2">Teknoloji</option>
                                <option value="1">Magazin</option>
                                <option value="4">Yaşam</option>
                                <option value="5">Haber</option>
                                <option value="6">Spor</option>
                            </select>
                        </div>
                   		 
                   		 @elseif($articles->category == '4') 
                   		 <div class="form-group">
                            <label>Kategori Seçiniz</label>
                            <select name="category" class="form-control">
                                <option value="4">Yaşam</option>
                                <option value="3">Oyun</option>
                                <option value="2">Teknoloji</option>
                                <option value="1">Magazin</option>
                                <option value="5">Haber</option>
                                <option value="6">Spor</option>
                            </select>
                        </div>
                   		
                   		@elseif($articles->category =='5') 
                   		<div class="form-group">
                            <label>Kategori Seçiniz</label>
                            <select name="category" class="form-control">
                                <option value="5">Haber</option>
                                <option value="4">Yaşam</option>
                                <option value="3">Oyun</option>
                                <option value="2">Teknoloji</option>
                                <option value="1">Magazin</option>
                                <option value="6">Spor</option>
                            </select>
                        </div>
                   		
                   		@elseif($articles->category == '6') 

                   		<div class="form-group">
                            <label>Kategori Seçiniz</label>
                            <select name="category" class="form-control">
                                <option value="6">Spor</option>
                                <option value="5">Haber</option>
                                <option value="4">Yaşam</option>
                                <option value="3">Oyun</option>
                                <option value="2">Teknoloji</option>
                                <option value="1">Magazin</option>
                            </select>
                        </div>
                   		
                   		@endif


                        <div class="form-group">
                            <label for="exampleInputFile">Makale Resmini Seçiniz</label>
                            <input name="articlesimage" type="file" id="exampleInputFile">
                            <p class="help-block">Makalenizin Başında Yer Alacak Resim.</p>
                        </div> 
                        <br>

                        <label>Makale İçeriği:</label>

                        <textarea name="articlescontent" class="ckeditor">{{$articles->articlescontent}}</textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>   
                        <br>

                        
                        <button class="btn btn-warning">Düzenle</button>       
                        {!! Form::close() !!}
                           {!! Form::model($articles, ['method' => 'DELETE','action' => ['ArticlesController@destroy', $articles->id]]) !!}
                        <button class="btn btn-danger">SİL (x)</button>                  
                            {{ Form::close() }}

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

      