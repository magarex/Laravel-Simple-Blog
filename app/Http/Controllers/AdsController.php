<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use Alert;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reklam=Ads::first();
        return view('backend.ads.ads')->with('reklam', $reklam);
    }

    
    public function adsupdate(Request $request)
    {

            if($request->hasFile('ads1')) {

                 $this->validate($request, [
            // check validtion for image or file
            'ads1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    // rename image name or file name 
        $getimageName = time().'.'.$request->ads1->getClientOriginalExtension();
        $request->ads1->move(public_path('uploads'), $getimageName);

                $request->merge([
                 'ads1' => $getimageName
                ]);
            }

         if ($request->hasFile('ads2')) {
            $this->validate($request, [
            // check validtion for image or file
            'ads2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image = $request->file('ads2');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        $request->merge([
                 'ads2' => $name
                ]);
      }


       if($request->hasFile('ads3')) {

                 $this->validate($request, [
            // check validtion for image or file
            'ads3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    // rename image name or file name 
        $getimageName = time().'.'.$request->ads3->getClientOriginalExtension();
        $request->ads3->move(public_path('uploads'), $getimageName);

                $request->merge([
                 'ads3' => $getimageName
                ]);
            }

          

            $ads = Ads::where('id',0)->firstOrFail();
            $ads->update($request->input());
        Alert::success('Başarılı!', 'Reklam Güncellendi.');


            return back();

    }

    

    
}
