<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index($page_id)
    {
        return Component::find($page_id);
    }

    public function create(Request $request)
    {
        $new_component = new Component();
        $new_component->page_id = $request->page_id;
        $new_component->position = $request->position;
        $new_component->type = $request->type;
        $new_component->pinned = $request->pinned;
        $new_component->save();
        return 'done';
    }

    public function update(Request $request,$id)
    {
        $new_component = Component::find($id);
        $new_component->page_id = $request->page_id;
        $new_component->position = $request->position;  
        $new_component->type = $request->type;
        $new_component->pinned = $request->pinned;
        $new_component->save();
        return 'done';

    }

    public function destroy($id)
    {
        $component=component::find($id);
        $component->delete();
        return "delete";
    }
}
