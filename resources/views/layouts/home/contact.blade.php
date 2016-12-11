
<!-- CONTACT -->
<section id="contact" class="bg-dark">
    <div class="container">
        <div class="row text-center info-contact">
            <div class="col-sm-4 margin-b-md">
                <i class="icon-envelope"></i>
                <h4>Get in touch</h4>
                <ul class="list-unstyled">
                    <li><a href="mailto:support@synero.com">E: Khaled.ebdelli@esprit.tn</a></li>
                    <li><a href="tel:0123456789">P: +216 50986839</a></li>
                    <li><a href="http://www.khaledebdelli.site">W: www.khaledebdelli.site</a></li>
                </ul>
            </div> <!-- end Get in touch -->

            <div class="col-sm-4 margin-b-md">
                <i class="icon-pointer"></i>
                <h4>Our Location</h4>
                <address>Aryana<br> hedi meski street <br>2083</address>
            </div> <!-- end Our Location -->

            <div class="col-sm-4 margin-b-md">
                <i class="icon-support"></i>
                <h4>Free Support</h4>
                Call Now
                <a class="support" href="tel:0021650986839">50 986 839</a>
            </div> <!-- end Support -->
        </div> <!-- /row -->

        <div class="row">
            <div class="col-md-12">
                <form role="form" name="ajax-form" id="ajax-form" action="php/contact.php" method="post" class="form-main">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="name2">Name</label>
                                <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
                                <div class="error" id="err-name" style="display: none;">Please enter name</div>
                            </div> <!-- /Form-name -->

                            <div class="form-group col-sm-4">
                                <label for="email2">Email</label>
                                <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                                <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div>
                            </div> <!-- /Form-email -->

                            <div class="form-group col-sm-4">
                                <label for="subject1">Subject</label>
                                <input class="form-control" id="subject1" name="name" onblur="if(this.value == '') this.value='Subject'" onfocus="if(this.value == 'Subject') this.value=''" type="text" value="Subject">
                            </div> <!-- /Form-Subject -->
                        </div>  <!-- /row -->

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="message2">Message</label>
                                <textarea class="form-control" id="message2" name="message" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Message</textarea>
                                <div class="error" id="err-message" style="display: none;">Please enter message</div>
                            </div> <!-- /col -->
                        </div> <!-- /row -->

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <p class="text-center con_sub_text">{{ Inspiring::quote() }}</p>
                            </div> <!-- /col -->
                        </div> <!-- /row -->

                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <div id="ajaxsuccess">E-mail was successfully sent.</div>
                                <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
                                <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                <div class="error" id="err-state"></div>
                                <button type="submit" class="btn btn-custom" id="send">Submit</button>
                            </div> <!-- /col -->
                        </div> <!-- /row -->

                    </div>  <!-- /row -->
                </form> <!-- /form -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div> <!-- container -->
</section>
<!-- End CONTACT -->
