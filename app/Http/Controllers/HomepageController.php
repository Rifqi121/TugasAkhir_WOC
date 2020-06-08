<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 *
 */
class HomepageController extends Controller
{

  public function index()
  {
    return view('homepage');
  }

  public function index1()
  {
  	$data['statistik'] = \DB::table('t_statistik')
  	->orderby('kasus','asc')
	->get();

	$covid['covid'] = \DB::table('t_covidindo')
	->get();

    return view('statistik',$data, $covid);
  }

  public function index2()
  {
    return view('cara');
  }

  public function index3()
  {
    return view('education');
  }

  public function create()
  {
    return view('homepage.form');
  }

}


 ?>
