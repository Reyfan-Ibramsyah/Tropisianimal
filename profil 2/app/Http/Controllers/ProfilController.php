<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profil::latest()->paginate(5);
    
        return view('profil.index',compact('profils'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi_judul' => 'required',
            'image_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'image_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'image_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'visi' => 'required',
            'isi_visi' => 'required',
            'misi' => 'required',
            'isi_misi' => 'required',
        ]);

        $input = $request->all();

        for ($i= 1; $i < 4; $i++) { 
            $a = $request->file()['image_'. $i];
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $a->getClientOriginalName();
            $input['image_'. $i] = "$profileImage";
            $a->move($destinationPath, $profileImage);
        }

        Profil::create($input);
     
        return redirect()->route('profil.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        return view('profil.show',compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('profil.edit',compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $request->validate([
            'judul' => 'required',
            'isi_judul' => 'required',
            'image_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'visi' => 'required',
            'isi_visi' => 'required',
            'misi' => 'required',
            'isi_misi' => 'required',
            
        ]);
  
        $input = $request->all();
        

        for($i= 0; $i < 4; $i++){
            if ($image = $request->file('image_'. $i)) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalName();
                $input['image_'. $i] = "$profileImage";
                $image->move($destinationPath, $profileImage);
            }else{
                unset($input['image_']);
            }
        }

          
        $profil->update($input);
    
        return redirect()->route('profil.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        $profil->delete();
     
        return redirect()->route('profil.index')
                        ->with('success','Product deleted successfully');
    }
}
