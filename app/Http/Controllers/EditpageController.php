<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditpageController extends Controller
{
	public function index()
	{
    $data['editpage'] = \DB::table('t_statistik')
    ->orderby('kasus','desc')
	->get();
    return view('editpage',$data);
	}

	public function create()
	{
    	return view('editpage.form');
    }

    public function store(Request $request)
    {
    	$rule = [
    		'negara' => 'required',
    		'kasus' => 'required',
    		'meninggal' => 'required',
    	];
    	$this->validate($request, $rule);
    	$input = $request->all();
        unset($input['_token']);
        $status = \DB::table('t_statistik')->insert($input);
        if ($status) {
            return redirect('edit')->with('success', 'Data berhasil ditambahkan');
        }else {
            return redirect('edit/create')->with('eror', 'Data gagal ditambahkan');
        }
    }

	public function edit(Request $request, $id)
	{
	  $data['editpage'] = \DB::table('t_statistik')->find($id);
	  return view('editpage.form', $data);
	}

	public function update(Request $request, $id)
	{
	  $input = $request->all();
	  unset($input['_token']);
	  unset($input['_method']);

	  $status = \DB::table('t_statistik')->where('id', $id)->update($input);

	  if ($status) {
	   return redirect('/edit')->with('success', 'Data berhasil diubah');
	  } else {
	   return redirect('/edit/create')->with('eror', 'Data gagal diubah');
	  }
	}

	public function destroy(Request $request, $id)
	{

	  $status = \DB::table('t_statistik')->where('id', $id)->delete();

	  if ($status) {
	   return redirect('/edit')->with('success', 'Data berhasil dihapus');
	} else {
	   return redirect('/edit/create')->with('eror', 'Data gagal dihapus');
		}
	}
}

?>
