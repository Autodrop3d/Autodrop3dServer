@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit assemblystructure
    </h1>
    <a href="{!!url('assemblystructure')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Assemblystructure Index</a>
    <br>
    <form method = 'POST' action = '{!! url("assemblystructure")!!}/{!!$assemblystructure->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="ParentID">ParentID</label>
            <input id="ParentID" name = "ParentID" type="text" class="form-control" value="{!!$assemblystructure->
            ParentID!!}"> 
        </div>
        <div class="form-group">
            <label for="ChildID">ChildID</label>
            <input id="ChildID" name = "ChildID" type="text" class="form-control" value="{!!$assemblystructure->
            ChildID!!}"> 
        </div>
        <div class="form-group">
            <label for="Callout">Callout</label>
            <input id="Callout" name = "Callout" type="text" class="form-control" value="{!!$assemblystructure->
            Callout!!}"> 
        </div>
        <div class="form-group">
            <label for="Position">Position</label>
            <input id="Position" name = "Position" type="text" class="form-control" value="{!!$assemblystructure->
            Position!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection