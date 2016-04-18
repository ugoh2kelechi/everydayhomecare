@extends('layouts.pages_header')

@section('content')

<div class="blog-page default-page full-width clearfix">
    <div class="container">
        <div class="blog-page-single clearfix">
            <article  class=" page hentry  clearfix">
                <div class="full-width-contents">
                    <div class="entry-content">


			<div class="row">

			    <div class="col-sm-8">
			    <h3 class="title">Client Testimony</h3>
			    

  
			    </div>

			    <div class="col-sm-4">
			        
    <aside class="sidebar clearfix">
        <!--categories-->
        <section class="widget widget_categories">
            <h3 class="title">Categories</h3>
            <ul>
            @foreach($generals as $links)
                <li><a href="{{ $links->slug_name }}" title="{{ $links->name }}">{{ $links->name }}</a></li>
            @endforeach
            </ul>
        </section>

        <section class="widget widget_categories">

            <div class="row col-md-12">
                <div class="slogan-section animated fadeInUp clearfix">
                    <h3>Make an Appointment</h3>
                <div class="appointment-form animated fadeInDown clearfix">

                    <form id="appointment_form_three" action="appointment_form_handler.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Name" title="* Please provide your name"/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="number" id="app-number" class="required number" placeholder="Phone Number" title="* Please provide a valid phone number."/>
                            </div>

                            <div class="col-sm-6">
                                <input type="email" name="email" id="app-email" class="required email" placeholder="Email Address" title="* Please provide a valid email address"/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="date" id="datepicker" class="required" placeholder="Appointment Date" title="* Please provide appointment date">
                            </div>
                        </div>
                        <textarea name="message" id="app-message" class="required"  placeholder="Message" title="* Please provide your message"></textarea>
                        <input type="submit" name="Submit" class="btn" value="SEND"/>
                        <img src="images/loader.gif" id="appointment-loader" alt="Loading...">
                        <input type="hidden" name="action" value="make_appointment">
                        <div id="message-sent"></div>
                        <div id="error-container"></div>
                    </form>
                </div>
            </div>
        </div>

        </section>
        <!--tags-->
        <section class="widget widget_tag_cloud">
            <h3 class="title">Facebook Connect</h3>
            <div class="tagcloud">
                <div class="fb-page" data-href="https://www.facebook.com/Everyday-Home-Care-LLC-557796061042228/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
            </div>
        </section>
    </aside>


			    </div>

			</div>


			</div>
                </div>
            </article>
        </div>

    </div>
</div>


@stop