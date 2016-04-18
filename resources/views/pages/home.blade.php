
@extends('layouts.home_header')

@section('content')

<!--general services-->
<div class="home-features clearfix">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="features-intro clearfix">
                    <h3 id="homeword"><span>EveryDay Home Care</span></h3>
                    <p id="homeword">Everyday Home Care is a licensed Medicaid and Medicare Certified Home Health agency. We provide nursing care and supportive services in the patient’s home or residential facility, 24 hours a day, 7-days a week. Your loved one deserves care that’s nothing less than extraordinary. </p> <p>At Everyday Home Care, our Registered Nurse Director of Nursing leads experienced, trustworthy, compassionate caregivers who provide a full range of services in the comfort and safety of home.</p>
                    <a class="read-more" href="{{ URL('services') }}">View Our Services</a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    
                    <div class="col-sm-6 single-feature">
                    <a href="{{ URL('page/home.care.aides') }}">
                        <div class="row">
                            <div class="col-sm-3 icon-wrapper">
                                <i class="fa fa-plus-square fa-custom"></i>
                            </div>
                            <div class="col-sm-9">
                                <h3>Home Care Aides</h3>
                                <p>Includes:  Private Duty Nursing, Intermittent Homecare, Respite Care, Pediatric Care, Care for People with Disabilities.</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    

                    
                    <div class="col-sm-6 single-feature">
                      <a href="{{ URL('page/professional.therapy') }}"> 
                        <div class="row">
                            <div class="col-sm-3 icon-wrapper">
                                <i class="fa fa-medkit fa-custom"></i>
                            </div>
                            <div class="col-sm-9">
                                <h3>Professional Therapy</h3>
                                <p>Include Services: Behavioral Health, Disabilities Assistance, Therapy Services, Physical Therapy (PT), Respite Care</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    

                     
                    <div class="col-sm-6 single-feature">
                    <a href="{{ URL('page/personal.care') }}">
                        <div class="row">
                            <div class="col-sm-3 icon-wrapper">
                                <i class="fa fa-user-md fa-custom"></i>
                            </div>
                            <div class="col-sm-9">
                                <h3>Personal Care</h3>
                                <p>Services Include: Daily Activity Assistance, Reminder Services, Meal Preparation Services, Laundry and Grocery Services.</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    

                    
                    <div class="col-sm-6 single-feature">
                    <a href="{{ URL('page/autism.care') }}"> 
                        <div class="row">
                            <div class="col-sm-3 icon-wrapper">
                                <i class="fa fa-ambulance fa-custom"></i> 
                            </div>
                            <div class="col-sm-9">
                                <h3>Austism</h3>
                                <p>Community inclusion, Respite, Temporary crisis services, Supported employment, Behavioral specialist.</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    


                </div>
            </div>
        </div>
    </div>
</div>
<!--general services end-->



<!--blog posts section-->
<div class="home-blog text-center clearfix">
    <div class="container">
        <div class="slogan-section animated fadeInUp clearfix">
            <h2>Area where services is covered by <span>Everyday Home Care</span></h2>
            <p>This is the listing of area where Everyday home care render services in the united states.</p>
        </div>
        <div class="row">

            <div class="col-md-8">
                <article class="common-blog-post animated fadeInRight clearfix" id="common-blog-post">
                    <figure>
                        <a href="image-post-format.html" title="Image Post Format">
                            <img src="images/areas2.jpg"  alt="news-2" />
                        </a>
                    </figure>
                    <div class="text-content clearfix">
                       <table class="col-md-11" id="tabbb">
                           <caption>List of region and county. </caption>
                           <thead>
                               <tr>
                                   <th>Region</th>
                                   <th>County</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td> SouthEast </td>
                                   <td>Bucks, Delaware, Montgomery, Philadelphia and Chester </td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td></td>
                               </tr>
                               <tr>
                                   <td> NorthEast </td>
                                   <td> Lehigh, Northampton, Pike, Monroe, Carbon, Schuylkill, Reading, Lancaster, Lebanon, Adams, York, Bradford, Lackawanna, Luzerne, Sullivan, Susquehanna, Wyoming.</td>
                               </tr>
                           </tbody>
                       </table>

                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <div class="fb-page" data-href="https://www.facebook.com/Everyday-Home-Care-LLC-557796061042228/" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="margin-bottom: 8px;"></div>

               

                    <!--appointment form-->
                    
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

    





            </div>

        </div>
    </div>
</div>
<!--blog posts section end-->

<!--testimonials section-->
<div class="home-testimonial  clearfix">
    <div class="container">
        <div class="text-center">
            <div class="slogan-section animated fadeInUp clearfix">
                <h2>What patients say <span>About Everyday Home Care</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 text-center">
                <div class="flexslider-three animated fadeInUp">
                    <ul class="slides">
                        <li>
                            <img class="img-circle" src="images/temp-images/author-22-130x130.jpg" alt="author-22" />
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation.</p>
                            </blockquote>

                            <div class="testimonial-footer clearfix">
                                <h3>Marina Forrest</h3>
                                <div class="for-border"></div>
                                <p><a target="_blank" href="#">Autommatic</a></p>
                            </div>
                        </li>
                        <li>
                            <img class="img-circle" src="images/temp-images/author-11-130x130.jpg"  alt="author-11" />
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            </blockquote>

                            <div class="testimonial-footer clearfix">
                                <h3>Jaden Wayne</h3>
                                <div class="for-border"></div>
                                <p><a target="_blank" href="#">Themeforest</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</div>
<!--testimonials section end-->



@stop