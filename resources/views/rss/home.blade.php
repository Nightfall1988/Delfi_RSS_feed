@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <form method="GET">
        @csrf
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/aculiecinieks'>Aculiecinieka ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/auto'>Auto ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/bizness'>Biznesa ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/calis'>Cālis.lv ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/delfi'>Visas DELFI jaunākās ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/sabiedriba'>Sabiedrība</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/izklaide'>Izklaide ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/kultura'>Kultūras ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/laikazinas'>Laika ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/majasdarzs'>Dārzs ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/mansdraugs'>Mans draugs ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/orakuls'>Orakuls ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/receptes'>Recepšu ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/skats'>Skats.lv ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/sports'>Sporta ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/tasty'>Tasty ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/tavamaja'>Tava māja ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/turismagids'>Tūrismagids.lv ziņas</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/tv'>DELFI TV ziņās</button>
        </div>
        <div>
            <br>
            <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' formaction='/category/vina'>Viņa.lv ziņas</button>
        </div>
    </form>
</div>