<?php

namespace App\Http\Controllers\backend;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        // HEADER
        $menus = config('menus');
        //FOOTER
        $comicsMenus = config('comicsMenus');
        $shopMenus = config('shopMenus');
        $dcMenu = config('dcmenu');
        $sitesMenu = config('sitesMenus');
        $socialIcons = config('socialIcons');
        //BANNER
        $bannerLink = config('bannerLink');

        return view('pages.comics.index', compact('menus', 'comicsMenus', 'shopMenus', 'dcMenu', 'sitesMenu', 'socialIcons', 'bannerLink', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // HEADER
        $menus = config('menus');
        //FOOTER
        $comicsMenus = config('comicsMenus');
        $shopMenus = config('shopMenus');
        $dcMenu = config('dcmenu');
        $sitesMenu = config('sitesMenus');
        $socialIcons = config('socialIcons');
        //BANNER
        $bannerLink = config('bannerLink');

        return view('pages.comics.create', compact('menus', 'comicsMenus', 'shopMenus', 'dcMenu', 'sitesMenu', 'socialIcons', 'bannerLink'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
