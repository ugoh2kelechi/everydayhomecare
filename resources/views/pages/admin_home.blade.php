@extends('layouts.header')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <span class="">
                            </span><strong> Welcome: {{ $user->name }} </strong></a><hr>
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Page Content</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a data-toggle="collapse"  href="#PageName">Add Page Name</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-folder-open text-success"></span><a href="#">Add Page Content</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-picture text-info"></span><a href="#">Add Picture to Page</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-success"></span><a href="#">Delete Page</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>News / Events</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Add</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account Setting</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Change Password</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Activities</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span>
                                        <a href="" class="text-danger"> Delete Account </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="#">Contact Form</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="#">Job Application</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="#">Appointments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a href="#">Subscribers</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-9 col-md-9" id="accordion">
        <!-- The creating a new menu form -->
            <div class="well collapse" id="PageName">

                <h1> Provide a menu for website. </h1>

                {!! Form::open(array('url'=>'Pagename', 'method'=>'POST','class'=>''))  !!}
                {!! Form::label('menu','Select Menu') !!}

                {!! Form::select('menu_head',array('SERVICES'=>'Services','CAREGIVERS'=>'Caregivers','NEWS/VIDEOS'=>'News/Videos','RESOURCES'=>'Resources'), 'SERVICES', array('class'=>'form-control')) !!}

				{!! Form::label('pgname','Page Name') !!}
				{!! Form::text('name',old('name'),array('class'=>'form-control','id'=>'addname')) !!}
				{!! Form::Submit('Submit',array('class'=>'btn btn-primary')) !!}
				{!! Form::close() !!}

                <br><hr><br>

            </div>


            <!-- The creating a new menu form -->

             <div class="well collapse" id="PageName">

                <h1> Provide a menu for website. </h1>

                {!! Form::open(array('url'=>'Pagename', 'method'=>'POST','class'=>''))  !!}
                {!! Form::label('menu','Select Menu') !!}

                {!! Form::select('menu_head',array('SERVICES'=>'Services','CAREGIVERS'=>'Caregivers','NEWS/VIDEOS'=>'News/Videos','RESOURCES'=>'Resources'), 'SERVICES', array('class'=>'form-control')) !!}

                {!! Form::label('pgname','Page Name') !!}
                {!! Form::text('name',old('name'),array('class'=>'form-control','id'=>'addname')) !!}
                {!! Form::Submit('Submit',array('class'=>'btn btn-primary')) !!}
                {!! Form::close() !!}

            </div>
                
                
        </div>
  







    </div>
</div>






@stop