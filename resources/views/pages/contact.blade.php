
@extends('layouts.pages_header')

@section('content')


<div class="contact-page clearfix">
    <div class="container">

        <!--contact form section-->
        <div class="blog-page-single clearfix">
            <article class="page type-page hentry  clearfix">
                <div class="full-width-contents">
                    <div class="entry-content">
                        <h2>Get in Touch</h2>
                        <p>Please use this form to contact us,<br />
                            We will be glad to speak with you for your enquiry.</p>
                    </div>
                </div>
            </article>
        </div>

        <div class="clearfix"></div>
        <!--contact form-->
        <div class="row">
            <div class="col-sm-6">
                <form id="contact_form" class="contact-form" action="contact_form_handler.php" method="post">
                    <input type="text" name="name" id="name" class="required" placeholder="Full Name" title="* Please provide your name">
                    <input type="text" name="email" id="email" class="required email" placeholder="Email Address" title="* Please provide a valid email address">
                    <input type="text" name="number" id="number" placeholder="Phone Number">
                    <input type="hidden" name="action" value="send_message">
                    <input type="hidden" name="nonce" value="">
                    <textarea name="message" id="message" class="required"  placeholder="Message" title="* Please provide your message"></textarea>
                    <input id="contact-form-submit" type="submit" value="SUBMIT">
                    <img src="images/loader.gif" id="contact-loader" alt="Loading...">
                    <div id="error-container"></div>
                    <div id="response-container"></div>
                </form>
            </div>

            <!--contact detail-->
            <div class="col-sm-6">
                <div class="contact-sidebar clearfix">
                    <article class="address-area clearfix">
                        <h2><span>Everyday Homecare</span></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <address>121 King Street, Melbourne
                                    Allentown, PA. 18018</address>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <strong>Phone :</strong>+1-610-966-2676 
                                </p>
                                <p>
                                    <strong>Fax :</strong>+1-610-966-2676 
                                </p>
                            </div>
                        </div>
                    </article>
                    <!--social icons-->
                    <article class="social-icon clearfix">
                        <h5><span>Social :</span></h5>
                        <ul class="clearfix">
                            <li class="twitter-icon"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook-icon"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="google-icon"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin-icon"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="instagram-icon"><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="youtube-icon"><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="skype-icon"><a target="_blank" href="skype:skypeusername?add"><i class="fa fa-skype"></i></a></li>
                            <li class="rss-icon"><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>

    </div>
    <!--google map -->
    <div class="container">
        <div class="map-wrapper">
            <h5>Location in Map</h5>
            <div id="map-canvas"></div>
        </div>
    </div>

</div>

@stop