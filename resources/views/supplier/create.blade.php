@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create supplier
    </h1>
    <a href="{!!url('supplier')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Supplier Index</a>
    <br>
    <form method = 'POST' action = '{!!url("supplier")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">address</label>
            <input id="address" name = "address" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input id="phone" name = "phone" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="fax">fax</label>
            <input id="fax" name = "fax" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="url">url</label>
            <input id="url" name = "url" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="orderURL">orderURL</label>
            <input id="orderURL" name = "orderURL" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="notes">notes</label>
            <input id="notes" name = "notes" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection