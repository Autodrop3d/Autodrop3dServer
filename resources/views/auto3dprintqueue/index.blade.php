@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')


    <section class="content">
        <h1>
            Your 3D Prints
        </h1>
        @can('upload stl')
        <div style="float: left;">
            <form class='col s3' method='get' action='{!!url("auto3dprintqueue")!!}/create'>
                <button class='btn btn-primary' type='submit'>Upload a new STL file to be printed!</button>
            </form>
        </div>
        @endcan()
        @can('view all prints')
            <div style="float: left;">
                <form class='col s3' method='get' action='{!!url("auto3dprintqueueall")!!}'>
                    <button class='btn btn-primary' type='submit'>Show All Prints</button>
                    <input id="id" name="id" type="hidden" class="form-control">
                </form>
            </div>
        @endcan
        <hr>
        <div style="width: 100%;">
            <br>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                    <li><a href="{!! url('auto3dprintmaterial') !!}">Auto3dprintmaterial</a></li>
                </ul>
            </div>
            <br>

            <div  class="table table-bordered table-hover">
                <table id='list3d' class="table table-bordered table-hover">
                    <thead>
                    <th>Name</th>
                    <th>Infill<br>Material</th>
                    {{--<th>name</th>--}}
                    <th>actions</th>
                    </thead>
                    <tbody>
                    @foreach($auto3dprintqueues as $auto3dprintqueue)
                        <tr>
                            <td>

                                <a href="{!! url('auto3dprintqueue/'.$auto3dprintqueue->id) !!}">
                                    <img src="{!! url('auto3dprintqueue/'.$auto3dprintqueue->id.'/thumb.png') !!}" style="width:100px;height:100px;">
                                    <div>{!!$auto3dprintqueue->Name!!}
                                        <br>
                                        Status: {!!$auto3dprintqueue->Status!!}
                                    </div>
                                </a>
                            </td>
                            <td>Infill: {!!$auto3dprintqueue->Infill!!}<br>

                                Material: {!!$auto3dprintqueue->auto3dprintmaterial->material!!}
                            </td>

                            {{--<td>{!!$auto3dprintqueue->user->name!!}</td>--}}
                            <td><div class="btn-group-vertical">


                                    <a data-toggle="modal" data-target="#myModal" class='delete btn btn-danger  btn-xs'
                                       data-link="/auto3dprintqueue/{!!$auto3dprintqueue->id!!}/deleteMsg">delete</a>

                                    @can('unapprove prints')
                                        @if($auto3dprintqueue->Status != "Done" & $auto3dprintqueue->Status != "canceled" &$auto3dprintqueue->Status != "" )
                                            <a data-toggle="modal" data-target="#myModal" class='viewShow btn btn-warning  btn-xs'
                                               data-link='/auto3dprintqueue/{!!$auto3dprintqueue->id!!}?printnow=false'><i
                                                        class='material-icons'>Unapprove</i></a>
                                        @endif
                                    @endcan()
                                    @can('approve prints')
                                        @if($auto3dprintqueue->Status == "Done" | $auto3dprintqueue->Status == "canceled" | $auto3dprintqueue->Status == "")
                                            <a data-toggle="modal" data-target="#myModal" class='viewShow btn btn-info  btn-xs' data-link='/auto3dprintqueue/{!!$auto3dprintqueue->id!!}?printnow=true'>Approve</a>
                                        @endif
                                    @endcan()
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {!! $auto3dprintqueues->render() !!}

    </section>


@endsection
