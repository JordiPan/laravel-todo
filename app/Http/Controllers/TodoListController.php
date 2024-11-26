<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function saveItem(Request $request){
        $item = new ListItem;
        $item->name = $request->itemname;
        $item->is_done = 0;
        $item->save();
        return redirect("/");
    }

    public function index() {
        return View('welcome', ['listItems' => ListItem::all()]);
        // return View('welcome', ['listItems' => ListItem::where('is_done', 0)->get()]);
    }
    public function markDone($id) {
        $item = ListItem::find($id);
        $item->is_done = !$item->is_done;
        $item->save();
        return redirect("/");
    }
}
