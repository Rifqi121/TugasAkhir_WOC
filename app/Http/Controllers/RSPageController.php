<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RSPageController extends Controller
{
	public function index()
	{
    $data['education'] = \DB::table('t_rsrujuk')
	->get();
    return view('education',$data);
	}
  }
?>
