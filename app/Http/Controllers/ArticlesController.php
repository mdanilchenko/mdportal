<?php
/**
 * Created by PhpStorm.
 * User: maksimdanilchenko
 * Date: 02.05.16
 * Time: 10:33
 */


namespace App\Http\Controllers;


class ArticlesController extends Controller
{
    public function show($id)
    {
        return view('welcome', array('name' => $id));
    }

}