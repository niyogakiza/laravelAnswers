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
  public function about()
  {
    return "About Us Page";
  }
  public function contact()
  {
    return "Contact Page";
  }
}
