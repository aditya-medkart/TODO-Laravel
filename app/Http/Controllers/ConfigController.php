<?php

namespace App\Http\Controllers;


use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

    public function index($component_id)
    {
        return Config::find($component_id);
    }

    public function create(Request $request)
    {
        $new_config = new Config();
        $new_config->component_id = $request->component_id;
        $new_config->config = $request->config;
        $new_config->save();
        return 'done';
    }

    public function update(Request $request,$id)
    {
        $new_config = Config::find($id);
        $new_config->component_id = $request->component_id;
        $new_config->config = $request->config;
        $new_config->save();
        return 'done';
    }

    public function destroy($id)
    {
        $config=Config::find($id);
        $config->delete();
        return "delete";
    }
}
