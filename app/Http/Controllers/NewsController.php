<?php

namespace App\Http\Controllers;
use App\Http\Services\ImportXMLService;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private ImportXMLService $service;

    public function __construct(ImportXMLService $importXMLService)
    {
        $this->service = $importXMLService;
    }
    public function home()
    {
        return view('rss.home');
    }


    public function execute(Request $request)
    {
        $category = $request->category;
        $this->service->execute($category);
        return redirect()->route('category', ['category' => $category]);
    }

    public function getNews($category)
    {
        $collection = $this->service->getCollection($category);
        return view('rss.newsfeed', compact('collection', 'category'));
    }
}
