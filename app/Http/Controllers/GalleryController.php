<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photoList = 
        [
            'https://i.pinimg.com/originals/e0/d4/cf/e0d4cf6d2b1d267966b95ca33265c864.jpg',
            'https://i.pinimg.com/originals/17/86/0a/17860a8de7d4fe5cbcae6a692ce2c5a5.png',
            'https://i.pinimg.com/originals/71/e3/8a/71e38a176fef6f8d6559acfad2c443eb.jpg',
            'https://i.pinimg.com/originals/62/19/19/62191956784679f95131f3d1e5d341d1.jpg',
            'https://i.pinimg.com/originals/1f/a5/2e/1fa52e58e7090f723ac45e08e848c674.jpg',
            'https://i.pinimg.com/originals/5f/b9/07/5fb9075e64b0b40d8bd4d3559f85d2b2.jpg',
            'https://i.pinimg.com/originals/1f/a5/2e/1fa52e58e7090f723ac45e08e848c674.jpg',
            'https://i.pinimg.com/originals/1f/a5/2e/1fa52e58e7090f723ac45e08e848c674.jpg'
            
        ];

        $galleryTittle = "Check our Gallery";
        $galleryDescription = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tempore eveniet ad neque nemo molestias assumenda quae ab.";

        return view('pages.gallery.index',
        [
            'images'      => $photoList,
            'tittle'      => $galleryTittle,
            'description' => $galleryDescription 
        ]);
    }

}
