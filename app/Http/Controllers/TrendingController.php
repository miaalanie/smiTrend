<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrendingController extends Controller
{
    public function index(Request $request)
    {
        $time = $request->get('time', '24');
        $category = $request->get('category', 'all');

        $trending = [

            [
                'rank' => 1,
                'topic' => 'Seblak Viral Sukabumi',
                'platform' => 'Instagram, TikTok',
                'volume' => '12.4K',
                'start' => '2 jam lalu',
                'category' => 'Makanan dan Minuman',
                'link' => 'https://www.instagram.com/explore/tags/seblak/'
            ],

            [
                'rank' => 2,
                'topic' => 'Cafe Hits Sukabumi',
                'platform' => 'Instagram',
                'volume' => '8.1K',
                'start' => '5 jam lalu',
                'category' => 'Bisnis',
                'link' => 'https://www.instagram.com/explore/tags/cafesukabumi/'
            ],

            [
                'rank' => 3,
                'topic' => 'Game Mobile Baru',
                'platform' => 'TikTok, Twitter',
                'volume' => '6.5K',
                'start' => '3 jam lalu',
                'category' => 'Game',
                'link' => 'https://www.tiktok.com/search?q=game'
            ],

            [
                'rank' => 4,
                'topic' => 'Promo Skincare Viral',
                'platform' => 'Instagram, TikTok',
                'volume' => '4.2K',
                'start' => '6 jam lalu',
                'category' => 'Kecantikan dan Fashion',
                'link' => 'https://www.tiktok.com/search?q=skincare'
            ],

            [
                'rank' => 5,
                'topic' => 'Wisata Situ Gunung',
                'platform' => 'Instagram, Facebook',
                'volume' => '3.9K',
                'start' => '8 jam lalu',
                'category' => 'Wisata',
                'link' => 'https://www.instagram.com/explore/tags/situgunung/'
            ],

        ];

        if ($category !== 'all') {
            $trending = array_filter($trending, function ($item) use ($category) {
                return $item['category'] === $category;
            });
        }

        $trending = array_values($trending);

        return view('trending', compact('trending','time','category'));
    }
}