<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contactinfo;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ContactinfoController.
 *
 * @author  The scaffold-interface created at 2017-09-14 01:43:22am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ContactinfoController extends Controller
{
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - contactinfo';
        $contactinfos = Contactinfo::paginate(6);
        return view('contactinfo.index',compact('contactinfos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - contactinfo';
        
        return view('contactinfo.create');
    }

    public function storeAjax(Request $request)
    {
        $this->validate($request, [
            'emailAddress' => 'required|unique:contactinfos|max:255|email'
        ]);

        $contactinfo = new Contactinfo();

        $contactinfo->emailAddress = $request->emailAddress;

        $contactinfo->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
            'test-event',
            ['message' => 'A new contactinfo has been created !!']);

        return json_encode(['responseJSON'=>['emailAddress'=>'Got it. We\'ll send you news when we have it!']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'emailAddress' => 'required|unique:contactinfos|max:255|email'
        ]);

        $contactinfo = new Contactinfo();

        $contactinfo->emailAddress = $request->emailAddress;
        
        $contactinfo->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new contactinfo has been created !!']);

        return redirect($request->redirect);
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
        $title = 'Show - contactinfo';

        if($request->ajax())
        {
            return URL::to('contactinfo/'.$id);
        }

        $contactinfo = Contactinfo::findOrfail($id);
        return view('contactinfo.show',compact('title','contactinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - contactinfo';
        if($request->ajax())
        {
            return URL::to('contactinfo/'. $id . '/edit');
        }

        
        $contactinfo = Contactinfo::findOrfail($id);
        return view('contactinfo.edit',compact('title','contactinfo'  ));
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
        $contactinfo = Contactinfo::findOrfail($id);
    	
        $contactinfo->emailAddress = $request->emailAddress;
        
        
        $contactinfo->save();

        return redirect('contactinfo');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/contactinfo/'. $id . '/delete');

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
     	$contactinfo = Contactinfo::findOrfail($id);
     	$contactinfo->delete();
        return URL::to('contactinfo');
    }
}
