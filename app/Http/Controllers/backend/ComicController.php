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
        // dd ($request);
        $form_data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect ()->route( 'comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

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

        return view('pages.comics.show', compact('menus', 'comicsMenus', 'shopMenus', 'dcMenu', 'sitesMenu', 'socialIcons', 'bannerLink', 'comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);

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

        return view('pages.comics.edit', compact('menus', 'comicsMenus', 'shopMenus', 'dcMenu', 'sitesMenu', 'socialIcons', 'bannerLink', 'comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->all();

        $comic = Comic::find($id);

        $comic->update($formData);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
