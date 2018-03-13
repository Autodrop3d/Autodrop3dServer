<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supplier;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class SupplierController.
 *
 * @author  The scaffold-interface created at 2018-03-13 04:21:28pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - supplier';
        $suppliers = Supplier::paginate(6);
        return view('supplier.index',compact('suppliers','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - supplier';
        
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Supplier();

        
        $supplier->name = $request->name;

        
        $supplier->address = $request->address;

        
        $supplier->phone = $request->phone;

        
        $supplier->fax = $request->fax;

        
        $supplier->email = $request->email;

        
        $supplier->url = $request->url;

        
        $supplier->orderURL = $request->orderURL;

        
        $supplier->notes = $request->notes;

        
        
        $supplier->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new supplier has been created !!']);

        return redirect('supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - supplier';

        if($request->ajax())
        {
            return URL::to('supplier/'.$id);
        }

        $supplier = Supplier::findOrfail($id);
        return view('supplier.show',compact('title','supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - supplier';
        if($request->ajax())
        {
            return URL::to('supplier/'. $id . '/edit');
        }

        
        $supplier = Supplier::findOrfail($id);
        return view('supplier.edit',compact('title','supplier'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $supplier = Supplier::findOrfail($id);
    	
        $supplier->name = $request->name;
        
        $supplier->address = $request->address;
        
        $supplier->phone = $request->phone;
        
        $supplier->fax = $request->fax;
        
        $supplier->email = $request->email;
        
        $supplier->url = $request->url;
        
        $supplier->orderURL = $request->orderURL;
        
        $supplier->notes = $request->notes;
        
        
        $supplier->save();

        return redirect('supplier');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/supplier/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$supplier = Supplier::findOrfail($id);
     	$supplier->delete();
        return URL::to('supplier');
    }
}
