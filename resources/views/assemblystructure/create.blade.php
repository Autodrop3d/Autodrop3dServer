@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create assemblystructure
    </h1>
    <a href="{!!url('assemblystructure')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Assemblystructure Index</a>
    <br>
    <form method = 'POST' action = '{!!url("assemblystructure")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="ParentID">ParentID</label>
            <input id="ParentID" name = "ParentID" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ChildID">ChildID</label>
            <input id="ChildID" name = "ChildID" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Callout">Callout</label>
            <input id="Callout" name = "Callout" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Position">Position</label>
            <input id="Position" name = "Position" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection