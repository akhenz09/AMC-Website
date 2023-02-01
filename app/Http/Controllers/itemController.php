<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item_table;
use Session;

class itemController extends Controller
{
    //
    public function items()
    {
        return view('itemRecords.items', ['listitems'=>item_table::all()]);
    }

    public function newItem()
    {
        return view('itemRecords.newItem');
    }

    public function saveItem(Request $req){
        $NewItemRec = new item_table;
        $NewItemRec->ItemName = $req->txtItemName;
        $NewItemRec->Description = $req->txtDescription;
        $NewItemRec->Amount = $req->txtAmount;
        $NewItemRec->Stocks = $req->txtStocks;
        if($req->txtStocks==0)
        {
            $NewItemRec->has_Stocks = 0;
        }
        {
            $NewItemRec->has_Stocks = 1;
        }
        $NewItemRec->save();
        Session::put('success', '1 Item Record Saved!');
        return redirect('/items');

    }
    public function editItem($id)
    {
        $items = item_table::find($id);
        return view('itemRecords.editItem',['itemdetails'=>$items]);
    }
    public function updateItem(Request $req, $id)
    {
        $items = item_table::find($id);
        $items->ItemName = $req->txtItemName;
        $items->Description = $req->txtDescription;
        $items->Amount = $req->txtAmount;
        $items->Stocks = $req->txtStocks;
        if($req->txtStocks==0)
        {
            $items->has_Stocks = 0;
        }
        else
        {
            $items->has_Stocks = 1;
        }
        $items->save();
        Session::put('success', 'Item Record Updated!');
        return redirect('/items');
    }
    public function deleteItem($id)
    {
        $items = item_table::find($id);
        $items->delete();
        Session::put('success', 'Item Record Deleted!');
        return redirect('/items');
    }
}
