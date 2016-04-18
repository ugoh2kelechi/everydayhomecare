@extends('layouts.pages_header')

@section('content')


			   
<div class="faq-page clearfix">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8">
    <!-- Filter -->
    <ul id="filters">
        <li><h2>FAQs</h2></li>
    </ul>
    <div class="blog-page-single clearfix">
        <article class="page  hentry  clearfix">
            <div class="full-width-contents">
                <div class="entry-content">
                    <p>This is Everyday Home care frequently asked questions page, find below the list of all questions and the answers. Contact us if you have any question to ask that is not in the list below, we are always ready to answer your question.</p>
                </div>
            </div>
        </article>
    </div>
    <div class="toggle-main faq">
        <div class="toggle health-record">
            <div class="toggle-title">                  <!--FAQ title-->

                <h3><i class="fa fa-question"></i>What information can be found in my health record</h3>
            </div>
            <div class="toggle-content">                   <!--FAQ Detail-->

                <div class="entry-content">
                    <p>health record is created any time you see a health professional such as a doctor, nurse, dentist, chiropractor, or psychiatrist. You could find the following in your health record:</p>
                    <ul>
                        <li>Your medical history and your family’s medical history</li>
                        <li>Labs and x-rays</li>
                        <li>Medications prescribed</li>
                        <li>Alcohol use and sexual activity</li>
                        <li>Details about your lifestyle (smoking, exercise, recreational drug use, high-risk sports, stress levels)</li>
                        <li>Doctor/nurse notes</li>
                        <li>Results of operations and proceduresGenetic testing</li>
                        <li>Research participation</li>
                        <li>Any Information you provide on applications for disability, life or accidental insurance with private insurers or government programs</li>
                        <li>Driver’s License</li>
                        <li>Social Security Number</li>
                        <li>Financial information such as credit cards and payment info</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="toggle health-record">
            <div class="toggle-title">                  <!--FAQ title-->
                <h3><i class="fa fa-question"></i>Who has access to my health records</h3>
            </div>
            <div class="toggle-content">                   <!--FAQ Detail-->
                <div class="entry-content">
                    <p>Many more people than you would ever want, including people outside the health care industry.</p>
                    <ul>
                        <li dir="ltr">Insurance companies</li>
                        <li dir="ltr">Government agencies especially if you receive Medicare, Medicaid, SCHIP, SSI, Workers Comp or any local, state or federal assistance</li>
                        <li dir="ltr">Employers</li>
                        <li dir="ltr">Banks, Financial Institutions</li>
                        <li dir="ltr">Researchers</li>
                        <li dir="ltr">If you are involved in a court case, your health records can be subpoenaed and available to the public</li>
                        <li dir="ltr">Marketers</li>
                        <li dir="ltr">Drug companies</li>
                        <li dir="ltr">Data miners</li>
                        <li dir="ltr">Transcribers in and outside the U.S.</li>
                        <li dir="ltr">Many health websites collect information about you</li>
                    </ul>
                </div>
            </div>
        </div>
        

    </div>
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



@stop