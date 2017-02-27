<?php
namespace App\Http\Controllers;
use App\mahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;


class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
		return view ('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return  View('pages.add'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data =new mahasiswa;
	  $data->nim =$request->nim;
	  $data->nama =$request->nama;
	  $data->alamat =$request->alamat;
	  $data->save();
	  
	  return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     $data = mahasiswa::all();
	 return View ('pages.home')->with ('homeList',$data);	 //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $data = mahasiswa::FindOrFail($id);
return View ('pages.edit')->with ('homeList',$data);
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
      $data = mahasiswa::FindOrFail($id);
	  $data->nim =$request->nim;
	  $data->nama =$request->nama;
	  $data->alamat =$request->alamat;
	  $data->save();
		return redirect('home');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = mahasiswa::FindOrFail($id);
		$data->delete();
		return redirect('home');//
    }
}
