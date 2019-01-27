<?php
/**
 * Created by PhpStorm.
 * User: aniyogakiza
 * Date: 22/01/2019
 * Time: 20:20
 */
namespace App\Http\Controllers;

class PageController extends Controller
{
  public function show()
  {
      return view('answers.store');
  }
  public function index()
  {
      return view('questions.create');
  }
}
