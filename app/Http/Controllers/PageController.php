<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($id)
    {
        return Page::find($id);
    }

    public function create(Request $request)
    {
        $new_page = new Page();
        $new_page->name = $request->name;
        $new_page->save();
        return 'done';
    }

    public function update(Request $request, $id){
        $new_page = Page::find($id);
        $new_page->name = $request->name;
        $new_page->save();
        return 'done';
    }

    public function destroy($id)
    {
        $page=page::find($id);
        $page->delete();
        return "delete";
    }
}
