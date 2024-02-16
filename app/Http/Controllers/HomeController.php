<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        
        $cardCars = 
        [
            "cardTittle1" => "x Tittle ",
            "cardTxt1"    => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus itlum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!",
            "cardImage1"  => "https://i.pinimg.com/originals/07/0b/af/070bafb58e424988f2e08a18def8ec83.jpg",

            "cardTittle2" => "y Tittle ",
            "cardTxt2"    => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus itlum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!",
            "cardImage2"  => "https://i.pinimg.com/originals/58/e7/47/58e747d48d55238d95aa628b9e21805d.jpg",
            
            "cardTittle3" => "z Tittle ",
            "cardTxt3"    => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus illum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!",
            "cardImage3"  =>  "https://i.pinimg.com/originals/97/e6/03/97e60364402ccceee053f2bb4e87cb7c.jpg"
        ];

        $carouselCars =
        [   
            "carouselLabel1" => "x slide label ",
            "carouselTxt1"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam ",
            "carouselImage1" => "https://i.pinimg.com/736x/fe/0c/2a/fe0c2aac1b9d815d99cfadfc449d49a0.jpg",

            "carouselLabel2" => "y slide label ",
            "carouselTxt2"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam ",
            "carouselImage2" => "https://i.pinimg.com/originals/1a/75/3f/1a753fb20a8a5e14736fee0de521f47f.jpg",
            
            "carouselLabel3" => "z slide label ",
            "carouselTxt3"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam ",
            "carouselImage3" => "https://i.pinimg.com/originals/ce/ed/55/ceed55c3a931c1f3c17143295b80ab7e.jpg"
            
        ];

        $gridCars = 
        [   
            "gridTxt1"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus illum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus illum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus illum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!",
            "gridImage1" => "https://i.pinimg.com/originals/b4/ac/f9/b4acf9c077404a649d2190ae61e1571a.jpg",

            "gridTxt2"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus illum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus illum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquid, quisquam perferendis hic consectetur quos at. Aliquid necessitatibus illum reiciendis quod quisquam, modi hic alias magni! Explicabo eum odio minima!",
            "gridImage2" => "https://images.nightcafe.studio/jobs/qFd6aZpvVge2HMg3dyKg/qFd6aZpvVge2HMg3dyKg--2--y9ru7.jpg?tr=w-1600,c-at_max"
        ];

        return view('pages.home.index', 
        [
            'carsCarousel' => $carouselCars,
            'carsCard'     => $cardCars,
            'carsGrid'     => $gridCars
        ]);
    }
}
