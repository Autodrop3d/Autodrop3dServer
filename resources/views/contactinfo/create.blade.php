@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create contactinfo
    </h1>
    <a href="{!!url('contactinfo')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Contactinfo Index</a>
    <br>
    <form method = 'POST' action = '{!!url("contactinfo")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        {!! Form::hidden('redirect','contactinfo') !!}
        <div class="form-group">
            <label for="emailAddress">emailAddress</label>
            <input id="emailAddress" name = "emailAddress" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection