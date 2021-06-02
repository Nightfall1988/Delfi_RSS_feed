@extends('layouts.app')

@section('content')

<div id="container">
    <div class="flex justify-center mt-10">
        <form method="POST" action="/refresh">
            @csrf
            <input type="hidden" name='category' value="{{ $category }}"/>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" >Refresh News Feed</button>
        </form>
    </div>
    @if ($collection->all() != [])
            <table>
                <tr class="table-row space-x-0.5">
                    <th>Title</th>
                    <th>Link</th>
                    <th>Description</th>
                    <th>Image URL</th>
                    <th>Date posted</th>
                </tr>
        @foreach ($collection->all() as $post)
                <tr class="border-solid border-2 border-blue-800">
                <td class="border-solid border-2 border-blue-800">{{ $post->title }}</td>
                <td class="border-solid border-2 border-blue-800"><a href="{{ $post->link }}" target="_blank">Link</a></td>
                <td class="border-solid border-2 border-blue-800">{{ $post->description }}</td>
                <td class="border-solid border-2 border-blue-800"><img src="{{ $post->image }}"/></td>
                <td class="border-solid border-2 border-blue-800">{{ $post->date }}</td>
                </tr>
        @endforeach
            </table>
    @else 
    <p>You don't have any news in this category yet. Please press "Refresh News Feed" to see the latest news in thi category</p>
    @endif
</div>