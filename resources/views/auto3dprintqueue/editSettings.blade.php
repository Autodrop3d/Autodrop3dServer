@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')


    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3>Cura Settings File</h3>
            </div>
            <div class="box-body">
                <form id="usrform">
                    <input type="submit">
                </form>
                <textarea rows="25"  name="settingsFile" form="usrform" style="width:100%;">{{$settingsFile}}</textarea>
            </div>
        </div>
    </section>

@endsection
