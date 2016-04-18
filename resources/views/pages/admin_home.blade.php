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
                                        <span class="glyphicon glyphicon-picture text-info"></span><a data-toggle="collapse" href="#PageMedia">Add Picture to Page</a>
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
                                        <span class="glyphicon glyphicon-th-list"></span><a data-toggle="collapse"  href="#newsevent">Blogs</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus"></span><a data-toggle="collapse"  href="#newsevent">Add Post</a>
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
                                        <span class="glyphicon glyphicon-list"></span><a data-toggle="collapse"  href="#partners">Activities</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a data-toggle="collapse"  href="#partners">Partners</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span>
                                        <a data-toggle="collapse"  href="#partners" class="text-danger"> Delete Account </a>
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
                                        <span class="glyphicon glyphicon-envelope"></span><a data-toggle="collapse"  href="#contactform">Contact Form</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a data-toggle="collapse"  href="#adverts">Testimony</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a data-toggle="collapse"  href="#jobapply">Job Application</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a data-toggle="collapse"  href="#appointment">Appointments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-shopping-cart"></span><a data-toggle="collapse"  href="#subscribe">Subscribers</a>
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
                        <div class="message alert alert-danger">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                            <strong>Sorry !</strong> Check your input and try again.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(Session::has('message'))
                        <div class="message alert alert-success">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                            <strong>Success </strong>{{ Session::get('message') }}<br>
                        </div>
                    @endif

            </div>


        <!-- The creating a new menu form -->
                
            <div class="well collapse" id="PageName">
               
                    <h1> Provide a menu for website. </h1>

                    {!! Form::open(array('url'=>'Pagename', 'method'=>'POST','class'=>'','files'=>true))  !!}
                    {!! Form::label('menu','Select Menu') !!}

                    {!! Form::select('menu_head',array(''=>'Select','SERVICES'=>'Services','CAREGIVERS'=>'Caregivers','NEWS/VIDEOS'=>'News/Videos','RESOURCES'=>'Resources','General Services'=>'General Services','Quick links'=>'Quick links'), 'Select', array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('pgname','Page Name') !!}
                    {!! Form::text('name',old('name'),array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('page_file','Browse header image') !!}
                    {!! Form::file('page_media',Input::old('page_media'),array('class'=>'form-control','id'=>'addname')) !!}

                    {!! Form::select('menu_status',array('ON'=>'ON','OFF'=>'OFF'), 'ON', array('class'=>'form-control','id'=>'addname')) !!}
                     <br/>
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>


            <!-- The creating a new content for a page -->
                
             <div class="well collapse" id="PageContent">
                
                    <h1> Provide a page content. </h1>

                    {!! Form::open(array('url'=>'Pagecontent', 'method'=>'POST','class'=>'','files'=>true))  !!}

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



<!--  ========================  Begins media details ==========================================  -->


             <div class="well collapse" id="PageMedia">
                
                    <h1> Provide a media file to a web page. </h1>

                    {!! Form::open(array('url' => 'pageMedia', 'method'=>'POST','class'=>'','files'=>true))  !!}

                    {!! Form::label('pgnm','Select Menu') !!}
                    {!! Form::select('pagenames',$pages, Input::old('pagenames'), array('class'=>'form-control','id'=>'addname')) !!}

                    <br>
                    {!! Form::label('mediadesc','Media description') !!}
                    {!! Form::text('media_desc',Input::old('media_desc'),array('class'=>'form-control','id'=>'addname')) !!}

                    
                    {!! Form::label('media_type','Select media type') !!}
                    {!! Form::select('media_type',array('Image'=>'Image','Video'=>'Video'), 'Image', array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('media_file','Browse file') !!}
                    {!! Form::file('media',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}
                    
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>


<!--  ========================  Begins news and event  ==========================================  -->

                
             <div class="well collapse" id="newsevent">
                
                    <h1> Provide blog posts </h1>

                    {!! Form::open(array('url' => 'pageMedia', 'method'=>'POST','class'=>'','files'=>true))  !!}

                    {!! Form::label('pgnm','Select page name') !!}
                    {!! Form::select('pagenames',$content, Input::old('pagenames'), array('class'=>'form-control','id'=>'addname')) !!}

                    <br>
                    {!! Form::label('mediadesc','Media description') !!}
                    {!! Form::text('media_desc',Input::old('media_desc'),array('class'=>'form-control','id'=>'addname')) !!}

                    
                    {!! Form::label('media_type','Select media type') !!}
                    {!! Form::select('media_type',array('Image'=>'Image','Video'=>'Video'), 'Image', array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('media_file','Browse file') !!}
                    {!! Form::file('media',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}
                    
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>



<!--  ========================  Begins partners details  ==========================================  -->


              <div class="well collapse" id="partners">
                
                    <h1> Provide partners informations. </h1>

                    {!! Form::open(array('url' => 'pageMedia', 'method'=>'POST','class'=>'','files'=>true))  !!}

                    {!! Form::label('pgnm','Select page name') !!}
                    {!! Form::select('pagenames',$content, Input::old('pagenames'), array('class'=>'form-control','id'=>'addname')) !!}

                    <br>
                    {!! Form::label('mediadesc','Media description') !!}
                    {!! Form::text('media_desc',Input::old('media_desc'),array('class'=>'form-control','id'=>'addname')) !!}

                    
                    {!! Form::label('media_type','Select media type') !!}
                    {!! Form::select('media_type',array('Image'=>'Image','Video'=>'Video'), 'Image', array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('media_file','Browse file') !!}
                    {!! Form::file('media',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}
                    
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>


<!--  ========================  Begins contact us form details  ==========================================  -->



              <div class="well collapse" id="contactform">
                
                    <h1> Provide partners informations. </h1>

                    {!! Form::open(array('url' => 'pageMedia', 'method'=>'POST','class'=>'','files'=>true))  !!}

                    {!! Form::label('pgnm','Select page name') !!}
                    {!! Form::select('pagenames',$content, Input::old('pagenames'), array('class'=>'form-control','id'=>'addname')) !!}

                    <br>
                    {!! Form::label('mediadesc','Media description') !!}
                    {!! Form::text('media_desc',Input::old('media_desc'),array('class'=>'form-control','id'=>'addname')) !!}

                    
                    {!! Form::label('media_type','Select media type') !!}
                    {!! Form::select('media_type',array('Image'=>'Image','Video'=>'Video'), 'Image', array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('media_file','Browse file') !!}
                    {!! Form::file('media',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}
                    
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>


<!--  ========================  Begins  Testimony details  ==========================================  -->



              <div class="well collapse" id="adverts">
                
                    <h1> Provide partners informations. </h1>

                    {!! Form::open(array('url' => 'testmonypost', 'method'=>'POST','class'=>'','files'=>true))  !!}

                    {!! Form::label('pgnm','Name') !!}
                    {!! Form::text('testy_name',Input::old('testy_name'),array('class'=>'form-control','id'=>'addname')) !!}

                    <br>
                    {!! Form::label('mediadesc','Testimony description') !!}
                    {!! Form::textarea('testy_msg',Input::old('testy_msg'),array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('media_file','Browse picture') !!}
                    {!! Form::file('testy_img',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}
                    
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>


<!--  ========================  Begins job application details  ==========================================  -->


            <div class="well collapse" id="jobapply">
                
                    <h1> Provide partners informations. </h1>

                    {!! Form::open(array('url' => 'pageMedia', 'method'=>'POST','class'=>'','files'=>true))  !!}

                    {!! Form::label('pgnm','Select page name') !!}
                    {!! Form::select('pagenames',$content, Input::old('pagenames'), array('class'=>'form-control','id'=>'addname')) !!}

                    <br>
                    {!! Form::label('mediadesc','Media description') !!}
                    {!! Form::text('media_desc',Input::old('media_desc'),array('class'=>'form-control','id'=>'addname')) !!}

                    
                    {!! Form::label('media_type','Select media type') !!}
                    {!! Form::select('media_type',array('Image'=>'Image','Video'=>'Video'), 'Image', array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('media_file','Browse file') !!}
                    {!! Form::file('media',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}
                    
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>


<!--  ========================  Begins Appointments details  ==========================================  -->


                    <div class="well collapse" id="appointment">
                
                    <h1> Provide partners informations. </h1>

                    {!! Form::open(array('url' => 'pageMedia', 'method'=>'POST','class'=>'','files'=>true))  !!}

                    {!! Form::label('pgnm','Select page name') !!}
                    {!! Form::select('pagenames',$content, Input::old('pagenames'), array('class'=>'form-control','id'=>'addname')) !!}

                    <br>
                    {!! Form::label('mediadesc','Media description') !!}
                    {!! Form::text('media_desc',Input::old('media_desc'),array('class'=>'form-control','id'=>'addname')) !!}

                    
                    {!! Form::label('media_type','Select media type') !!}
                    {!! Form::select('media_type',array('Image'=>'Image','Video'=>'Video'), 'Image', array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('media_file','Browse file') !!}
                    {!! Form::file('media',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}
                    
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>


<!--  ========================  Begins Subscriber details  ==========================================  -->



              <div class="well collapse" id="subscribe">
                
                    <h1> Provide partners informations. </h1>

                    {!! Form::open(array('url' => 'pageMedia', 'method'=>'POST','class'=>'','files'=>true))  !!}

                    {!! Form::label('pgnm','Select page name') !!}
                    {!! Form::select('pagenames',$content, Input::old('pagenames'), array('class'=>'form-control','id'=>'addname')) !!}

                    <br>
                    {!! Form::label('mediadesc','Media description') !!}
                    {!! Form::text('media_desc',Input::old('media_desc'),array('class'=>'form-control','id'=>'addname')) !!}

                    
                    {!! Form::label('media_type','Select media type') !!}
                    {!! Form::select('media_type',array('Image'=>'Image','Video'=>'Video'), 'Image', array('class'=>'form-control','id'=>'addname')) !!}

                    <br/>
                    {!! Form::label('media_file','Browse file') !!}
                    {!! Form::file('media',Input::old('pg_title'),array('class'=>'form-control','id'=>'addname')) !!}
                    
                    {!! Form::submit('Submit',array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}

                    <br><hr><br>

                
            </div>

<!--  ========================  details  ==========================================  -->







        </div>
                
                
      
  







    </div>
</div>






@stop