<?php
namespace se468\RestHooks\Http\Controllers;

use Illuminate\Http\Request;
use se468\RestHooks\RestHook;
use App\Http\Controllers\Controller;

class RestHooksController extends Controller
{
    public function subscribe(Request $request)
    {
        $input = $request->all();

        $webhook = RestHook::create([
            "tenant_id" => auth()->user()->id,
            "url" => $input["target_url"],
            "event" => $input["event"]
        ]);

        return $webhook;
    }

    public function delete($id)
    {
        $webhook = RestHook::find($id);
        $webhook->delete();

        return response()->json([
            "success" => "success"
        ]);
    }
}
