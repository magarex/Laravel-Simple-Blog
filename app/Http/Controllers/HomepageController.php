<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepagesettings;
use Alert;

class HomepageController extends Controller
{
    
	public function getHome()
    {
    	$listele= Homepagesettings::first();
        return view('frontend.index')->with('listele', $listele);
    }



    public function getHomepage()
    {

    	$listele= Homepagesettings::first();
        return view('backend.homepage')->with('listele', $listele);
    }




    public function settings(Request $request) {

		unset($request['_token']);
        Alert::success('Başarılı!', 'Güncellendi.');
        
    	Homepagesettings::where('id',0)->update($request->input());
        
         $this->validate($request, [
      // check validtion for image or file
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    // rename image name or file name 
        $getimageName = time().'.'.$request->logo->getClientOriginalExtension();
        $request->logo->move(public_path('uploads'), $getimageName);

                $request->merge([
                 'logo' => $getimageName
                ]);

    	
    	Homepagesettings::where('id',0)->update($request->input());
        
        $listele = Homepagesettings::first();
        Alert::success('Başarılı!', 'Güncellendi.');

        return back()->with('listele', $listele);


    }













}
