<?php 
namespace App\Http\Services;

use App\Models\Post;

class ImportXMLService
{
    
    public function execute(string $category)
    {
        $xmlString = file_get_contents("https://www.delfi.lv/rss/?channel=" . $category);
        $xmlObject = simplexml_load_string($xmlString, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS);
        $json = json_encode($xmlObject);
        $response = json_decode($json, true);        

        if (isset($response['channel']['item'])) {
            
            foreach ($response['channel']['item'] as $item)
            {
                $post = Post::where('title', $item['title'])->first();
                if ($post == null) {
                    $post = new Post;
                    $post->category = $category;
                    $post->title = htmlspecialchars_decode($item['title']);
                    $post->link = $item['link'];
                    if (gettype($item['description']) != 'string') {
                        $post->description = '';
                    } else {
                        $post->description = htmlspecialchars_decode($item['description']);
                    }
                    $post->image = $response['channel']['image']['url'];
                    $post->date = $item['pubDate'];
                    $post->save();
                }
            }
        }
    }

    public function getCollection($category)
    {
        $posts = Post::where('category', $category)->get();
        return $posts;
    }
}
?>