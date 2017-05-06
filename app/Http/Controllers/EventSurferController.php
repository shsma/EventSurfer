<?php
/**
 * Created by PhpStorm.
 * User: shady
 * Date: 06/05/2017
 * Time: 00:00
 */

namespace App\Http\Controllers;


class EventSurferController extends Controller
{
    public function getHomePage()
    {
        return view('welcome');
    }

    public function getAboutPage()
    {
        return view('about');
    }

    public function getContactPage()
    {
        return view('contact');
    }
}