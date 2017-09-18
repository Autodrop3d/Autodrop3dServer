@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit contactinfo
    </h1>
    <a href="{!!url('contactinfo')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Contactinfo Index</a>
    <br>
    <form method = 'POST' action = '{!! url("contactinfo")!!}/{!!$contactinfo->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="emailAddress">emailAddress</label>
            <input id="emailAddress" name = "emailAddress" type="text" class="form-control" value="{!!$contactinfo->
            emailAddress!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection