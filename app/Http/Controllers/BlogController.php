<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogTittle = "Tittle of a longer Featured blog post";
        $blogDescription = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia reprehenderit porro, aliquid delectus ipsum quae illo veritatis ut inventore dolorum iure minus soluta sit consectetur quis fugiat cupiditate debitis!";

        $dates = 
        [
            "March    2014",
            "February 2014",
            "January  2014",
            "December 2013",
            "November 2013",
            "April    2013",
            "March    2013",
            "March    2013",
            "March    2013",
            "March    2013",
            "March    2013",
            "March    2013"
        ];

        $links =
        [
            "GitHub",
            "Twiter",
            "Facebook"
        ];

        $posts = 
        [
            [
                "tittle1"  => "Another Blog Post 1",
                "content1" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita officiis placeat enim, eligendi nemo iure facere eos delectus veniam accusamus, dolorum sint. Dolor officia, nostrum animi sint numquam repellendus nisi!",
                "auth1"    => "Jocab",
                "day"      => 23,
                "month"    => "December",
                "year"     => 2013
            ],
            [
                "tittle2"  => "Another Blog Post 2",
                "content2" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita officiis placeat enim, eligendi nemo iure facere eos delectus veniam accusamus, dolorum sint. Dolor officia, nostrum animi sint numquam repellendus nisi!",
                "auth2"    => "Josep",
                "day"      => 22,
                "month"    => "December",
                "year"     => 2013
            ],
            [
                "tittle3"  => "Another Blog Post 3",
                "content3" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita officiis placeat enim, eligendi nemo iure facere eos delectus veniam accusamus, dolorum sint. Dolor officia, nostrum animi sint numquam repellendus nisi!",
                "auth3"    => "Jhon",
                "day"      => 21,
                "month"    => "December",
                "year"     => 2013
            ]

        ];





        return view('pages.blog.index',
        [
            'tittle'       => $blogTittle,
            'description'  => $blogDescription,
            'archiveDates' => $dates,
            'linksList'    => $links,
            'posts'        => $posts
        ]);
    }
}
