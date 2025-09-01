<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
 
class DemoController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $uuid = Str::uuid()->toString();
        //$uuid = Str::orderedUuid()->toString();
 
        dd($uuid);
    }
}