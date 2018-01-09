<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Datatables;
use Alert;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles= Articles::all();
        return view('backend.articles.articles')->with('articles', $articles);
    }

    public function get_articlesdata()
    {

         $articles  = Articles::all();
            return Datatables::of($articles)
            ->addColumn('id', '{{ $id }}')
            ->addColumn('articlesname', '{{ $articlesname }}')
            ->addColumn('articlesimage', function($articles){
                return '<img src="uploads/'.$articles->articlesimage.'"width="150px;">'
                ;
            })
            ->addColumn('actions', function ($articles) {
                return '<a href="articles/'.$articles->id.'"><button class="btn btn-primary">Düzenle</button></a>';
            })

            ->make(true);

    }


    public function getContent($id)
    {
        $list= Articles::find($id);
        return view('frontend.content')->with('list', $list);

    }

    public function getMagazine()
    {
        $magazine=Articles::where('category',1)->orderBy('id','desc')->paginate(10);
        return view('frontend.magazine')->with('magazine', $magazine);

    }

    public function getTechnologies()
    {
        $techno=Articles::where('category',2)->orderBy('id','desc')->paginate(10);
        return view('frontend.technologies')->with('techno', $techno);

    }

    public function getGame()
    {
        $game=Articles::where('category',3)->orderBy('id','desc')->paginate(10);
        return view('frontend.game')->with('game', $game);

    }

    public function getLifestyle()
    {
        $lifestyle=Articles::where('category',4)->orderBy('id','desc')->paginate(10);
        return view('frontend.lifestyle')->with('lifestyle', $lifestyle);

    }

     public function getNews()
    {
        $news=Articles::where('category',5)->orderBy('id','desc')->paginate(10);
        return view('frontend.news')->with('news', $news);

    }

     public function getSpor()
    {
        $spor=Articles::where('category',6)->orderBy('id','desc')->paginate(10);
        return view('frontend.spor')->with('spor', $spor);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        unset($request['_token']);
        
         $this->validate($request, [
      // check validtion for image or file
            'articlesimage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    // rename image name or file name 
        $getimageName = time().'.'.$request->articlesimage->getClientOriginalExtension();
        $request->articlesimage->move(public_path('uploads'), $getimageName);

                $request->merge([
                 'articlesimage' => $getimageName
                ]);

        Articles::create($request->input());
        Alert::success('Başarılı!', 'Makale Eklendi.');
        return view('backend.articles.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $articles= Articles::find($id);
        return view('backend.articles.edit')->with('articles', $articles);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        if($request->hasFile('articlesimage')) {

           $this->validate($request, [
      // check validtion for image or file
            'articlesimage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    // rename image name or file name 
        $getimageName = time().'.'.$request->articlesimage->getClientOriginalExtension();
        $request->articlesimage->move(public_path('uploads'), $getimageName);

                $request->merge([
                 'articlesimage' => $getimageName
                ]);
            }

        Articles::find($id)->update($request->input());
        Alert::success('Başarılı!', 'Makale Düzenlendi.');
        return back();        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articles::find($id)->delete();
        Alert::success('Başarılı!', 'Makale Silindi.');

        return redirect('articles');
    }
}
