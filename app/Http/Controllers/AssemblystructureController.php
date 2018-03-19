<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Assemblystructure;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class AssemblystructureController.
 *
 * @author  The scaffold-interface created at 2018-03-18 11:27:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AssemblystructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ParentID !== null)
        {

            $assemblystructures = Assemblystructure::where ('ParentID', $request->ParentID )->paginate(1000);
        }
        else
        {
            $assemblystructures = Assemblystructure::paginate(10);
        }

        $title = 'Index - assemblystructure';

        return view('assemblystructure.index',compact('assemblystructures','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - assemblystructure';
        
        return view('assemblystructure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assemblystructure = new Assemblystructure();

        
        $assemblystructure->ParentID = $request->ParentID;

        
        $assemblystructure->ChildID = $request->ChildID;

        
        $assemblystructure->Callout = $request->Callout;

        
        $assemblystructure->Position = $request->Position;

        
        
        $assemblystructure->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new assemblystructure has been created !!']);

        return redirect('assemblystructure');
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
        $title = 'Show - assemblystructure';

        if($request->ajax())
        {
            return URL::to('assemblystructure/'.$id);
        }

        $assemblystructure = Assemblystructure::findOrfail($id);
        return view('assemblystructure.show',compact('title','assemblystructure'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - assemblystructure';
        if($request->ajax())
        {
            return URL::to('assemblystructure/'. $id . '/edit');
        }

        
        $assemblystructure = Assemblystructure::findOrfail($id);
        return view('assemblystructure.edit',compact('title','assemblystructure'  ));
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
        $assemblystructure = Assemblystructure::findOrfail($id);
    	
        $assemblystructure->ParentID = $request->ParentID;
        
        $assemblystructure->ChildID = $request->ChildID;
        
        $assemblystructure->Callout = $request->Callout;
        
        $assemblystructure->Position = $request->Position;
        
        
        $assemblystructure->save();

        return redirect('assemblystructure');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/assemblystructure/'. $id . '/delete');

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
     	$assemblystructure = Assemblystructure::findOrfail($id);
     	$assemblystructure->delete();
        return URL::to('assemblystructure');
    }
}
