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
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" id="aboutpage"><span class="glyphicon glyphicon-folder-close">
                            </span>Page Content</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a data-toggle="collapse"  href="#PageName" data-parent="#aboutpage">Add Page Name</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-folder-open text-success"></span><a data-toggle="collapse"  href="#PageContent" >Add Page Content</a>
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








<!-- =======================================================================================================    -->

        <div class="col-sm-9 col-md-9" id="accordion">

            
                <div class="well " id="firstshow">
                        <h2> Administrative Dashboard </h2><hr>
                        <h4> Welcome: {{ $user->name }}</h4>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Check your input and try again.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Success </strong>{{ Session::get('message') }}<br>
                        </div>
                    @endif

            </div>


        <!-- The creating a new menu form -->
                
            <div class="well collapse" id="PageName">
               
                    <h1> Provide a menu for website. </h1>

                    {!! Form::open(array('url'=>'Pagename', 'method'=>'POST','class'=>''))  !!}
                    {!! Form::label('menu','Select Menu') !!}

                    {!! Form::select('menu_head',array('SERVICES'=>'Services','CAREGIVERS'=>'Caregivers','NEWS/VIDEOS'=>'News/Videos','RESOURCES'=>'Resources','General Services'=>'General Services','Quick links'=>'Quick links'), 'SERVICES', array('class'=>'form-control','id'=>'addname')) !!}

                    {!! Form::label('pgname','Page Name') !!}
                    {!! Form::text('name',old('name'),array('class'=>'form-control','id'=>'addname')) !!}
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>


            <!-- The creating a new content for a page -->
                
             <div class="well collapse" id="PageContent">
                
                    <h1> Provide a page content. </h1>

                    {!! Form::open(array('url'=>'Pagecontent', 'method'=>'POST','class'=>''))  !!}

                    {!! Form::label('pgnm','Select Menu') !!}
                    {!! Form::select('pagenames',$pages, Input::old('pagenames'), array('class'=>'form-control','id'=>'addname')) !!}

                    {!! Form::label('title','Page title') !!}
                    {!! Form::text('pg_title',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}

                    {!! Form::label('description','Page description') !!}
                    {!! Form::text('pg_description',Input::old('pg_description'),array('class'=>'form-control','id'=>'addname')) !!}

                    {!! Form::label('content','Page content') !!}
                    {!! Form::textarea('pg_content',Input::old('pg_content'),array('class'=>'form-control','id'=>'addname')) !!}

                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>




        </div>
                
                
      
  







    </div>
</div>






@stop