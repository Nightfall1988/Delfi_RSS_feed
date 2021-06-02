<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
use Illuminate\Http\Request;
use App\Http\Services\ImportXMLService;

class RssFeedController extends Controller
{
    private ImportXMLService $importXMLService;

    public function __construct()
    {
        $this->importXMLService = new ImportXMLService;
    }
    public function feed()
    {
        $this->importXMLService->execute();
        // $posts = Post::where('status', 'published')->
        // orderBy('created_at', 'desc')->
        // limit(50)->get();
        // return response()->view('rss.feed', compact('posts'))->header('Content-Type', 'application/xml');
    }
}
