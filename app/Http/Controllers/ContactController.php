<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title = "Contact Us";
        $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cumque, id eum recusandae earum laudantium quas esse enim. Eaque ullam pariatur totam accusamus quis dolores atque quam? Dolorum, error beatae?Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cumque, id eum recusandae earum laudantium quas esse enim. Eaque ullam pariatur totam accusamus quis dolores atque quam? Dolorum, error beatae?";

        return view('pages.contact.index',
        [ 
            'tittle' => $title, 
            'description' => $description 
        ]);
    }
}
