<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menus;
use Datatables;
use Alert;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.menu.menu');
    }


   public function get_datatable() 
    {
        
            $menu  = Menus::all();
            return Datatables::of($menu)
            ->addColumn('id', '{{ $id }}')
            ->addColumn('menuname','{{ $menuname }}')
            ->addColumn('menulink','{{$menulink}}')
            ->addColumn('menuicon','{{$menuicon}}')
            ->addColumn('actions', function ($menu) {
                return '<a href="menu/'.$menu->id.'"><button class="btn btn-primary">Düzenle</button></a>';
            })

            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Menus::create($request->all());
        Alert::success('Başarılı!', 'Menü Eklendi.');

        return view('backend.menu.create');
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
        $edit= Menus::find($id);
        return view('backend.menu.edit')->with('edit', $edit);
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
        Menus::find($id)->update($request->all());
        Alert::success('Başarılı!', 'Menü Güncellendi.');

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
        Menus::find($id)->delete();
        Alert::success('Başarılı!', 'Menü Silindi.');

         return redirect('menu');
    }
}
