@extends('layouts.pages_header')

@section('content')


<div class="services-page clearfix">
    <div class="container">
        <div class="row ">
        <ul id="filters">
        <li><h2>Professional Services</h2></li>
    </ul>
            <!--column start-->
            <div class="col-md-4 col-sm-6">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="{{ URL('page/home.care.aides') }}" title="Dental Implants">
                            <img src="images/temp-images/service-3.jpg"  alt="Dental Implants" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="{{ URL('page/home.care.aides') }}">Home Care Aides</a></h4>
                        <div class="entry-content">
                            <p>Includes:  Private Duty Nursing, Intermittent Homecare, Respite Care, Pediatric Care, Care for People with Disabilities.&hellip;</p>
                        </div>
                        <a class="read-more" href="{{ URL('page/home.care.aides') }}">Read More</a>
                    </div>
                </article>
            </div>
            <!--column end-->

            <!--column start-->
            <div class="col-md-4 col-sm-6">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="{{ URL('page/professional.therapy') }}" title="Blood Bank">
                            <img src="images/temp-images/service-2.jpg" class="attachment-service-gallery-thumb wp-post-image" alt="Blood Bank" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="{{ URL('page/professional.therapy') }}">Professional Therapy</a></h4>
                        <div class="entry-content">
                            <p>Include Services: Behavioral Health, Disabilities Assistance, Therapy Services, Physical Therapy (PT), Respite Care &hellip;</p>
                        </div>
                        <a class="read-more" href="{{ URL('page/professional.therapy') }}">Read More</a>
                    </div>
                </article>
            </div>
            <!--column end-->

            <!--column start-->
            <div class="visible-sm clearfix"></div>
            <div class="col-md-4 col-sm-6 ">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="{{ URL('page/personal.care') }}" title="Medicine Research">
                            <img src="images/temp-images/service-5.jpg" alt="Medicine Research" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="{{ URL('page/personal.care') }}">Personal Care</a></h4>
                        <div class="entry-content">
                            <p>Services Include: Daily Activity Assistance, Reminder Services, Meal Preparation Services, Laundry and Grocery Services.&hellip;</p>
                        </div>
                        <a class="read-more" href="{{ URL('page/personal.care') }}">Read More</a>
                    </div>
                </article>
            </div>
            <!--column end-->

            <div class="visible-lg clearfix"></div>
            <div class="visible-md clearfix"></div>
            <!--column start-->
            <div class="col-md-4 col-sm-6 ">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="{{ URL('page/autism.care') }}" title="Pharmaceutical Advice">
                            <img src="images/temp-images/service-4.jpg" alt="Pharmaceutical Advice" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="{{ URL('page/autism.care') }}">Austism care</a></h4>
                        <div class="entry-content">
                            <p>Community inclusion, Respite, Temporary crisis services, Supported employment, Behavioral specialist.&hellip;</p>
                        </div>
                        <a class="read-more" href="{{ URL('page/autism.care') }}">Read More</a>
                    </div>
                </article>
            </div>
            <!--column end-->
            <div class="visible-sm clearfix"></div>
            <!--column start-->
            <div class="col-md-4 col-sm-6 ">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="{{ URL('page/palliative.care') }}" title="Medical Counseling">
                            <img  src="images/temp-images/service-1.jpg" alt="Medical Counseling" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="{{ URL('page/palliative.care') }}">Palliative Care</a></h4>
                        <div class="entry-content">
                            <p>The purpose of Palliative Care is to optimize the quality of life for patients with an advanced or chronic disease process by ...&hellip;</p>
                        </div>
                        <a class="read-more" href="{{ URL('page/palliative.care') }}">Read More</a>
                    </div>
                </article>
            </div>
            <!--column end-->

            <div class="visible-sm clearfix"></div>
            <!--column start-->
            <div class="col-md-4 col-sm-6 ">
                <article class="service type-service hentry three-col-service">
                    <figure>
                        <a href="{{ URL('page/waivers') }}" title="Medical Counseling">
                            <img  src="images/temp-images/service-1.jpg" alt="Medical Counseling" />
                        </a>
                    </figure>
                    <div class="contents clearfix">
                        <h4><a href="{{ URL('page/waivers') }}">Waiver</a></h4>
                        <div class="entry-content">
                            <p>Everyday Home Care is licensed in several different Government funded waivers that help pay for care&hellip;</p>
                        </div>
                        <a class="read-more" href="{{ URL('page/waivers') }}">Read More</a>
                    </div>
                </article>
            </div>
            <!--column end-->

        </div>
    </div>
</div>

@stop
