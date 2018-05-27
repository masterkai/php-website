<!-- ================================== Contacts ================================ -->
<section id="contacts">
    <div class="container">
        <div class="sep-line"></div>
        <div class="row">
            <div class="col-md-12">

                <h2 class="title">Contacts</h2>
                <div class="sep-content"></div>

            </div>
        </div>

        <!-- 1 col -->

        <div class="row">
            <div class="col-md-6">

                <!-- 1-2 -->

                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="media">
                            <div class="pull-left">
                                <i class="fa fa-envelope icon-md"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Questions?</h3>
                                <p>
                                    co-mail@domain.com<br>
                                    your-own-mail@com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="media">
                            <div class="pull-left">
                                <i class="fa fa-phone icon-md"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Phones</h3>
                                <p>
                                    + 1 305 1-456-786<br>
                                    + 1 305 5-666-145</p>
                            </div>
                        </div>
                    </div>

                </div><!-- /.row -->

                <!-- 3-4 -->

                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="media">
                            <div class="pull-left">
                                <i class="fa fa-map-marker icon-md"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Location</h3>
                                <p>
                                    We have many offices.<br>
                                    Main Office: Miami, Street 24, Golden House</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="media">
                            <div class="pull-left">
                                <i class="fa fa-life-ring icon-md"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Support</h3>
                                <p>
                                    admin@domain.com<br>
                                    We work for you 24/7</p>
                            </div>
                        </div>
                    </div>

                </div><!-- /.row -->

                <!-- text row -->

                <div class="row">
                    <div class="col-md-12">

                        <div class="sep-line-small"></div>
                        <h3>Glad to see you</h3>
                        <br>
                        <p>

                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo <span class="text-color">ligula eget</span> dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ullamcorper ultricies nisi. </p>

                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                            &nbsp;&nbsp;<i class="fa fa-thumbs-o-up"></i>
                        </p>

                    </div>
                </div><!-- /.row -->



            </div><!-- /.col-md -->

            <!-- 2 col -->


            <div class="col-md-6">

                <div class="contacts-form-bg">
                    <div class="contacts-form">


                        <h2 class="text-center text-gray no-line-height">Contact Form</h2>


                        <!-- The contactform -->
                        <form method="post" action="contact.php" name="contactform" id="contactform">
                            <fieldset>


                                <!-- Name -->
                                <label for="name" accesskey="U"><i class="fa fa-user"></i></label>
                                <input name="name" type="text" id="name" size="30" value="" />


                                <!-- Email -->
                                <label for="email" accesskey="E"><i class="fa fa-envelope-o"></i></label>
                                <input name="email" type="text" id="email" size="30" value="" />


                                <!-- Phone -->
                                <label for="phone" accesskey="P"><i class="fa fa-phone"></i></label>
                                <input name="phone" type="text" id="phone" size="30" value="" />



                                <!-- Comments / Message -->
                                <label for="comments" accesskey="C"><i class="fa fa-pencil-square-o"></i></label>
                                <textarea name="comments" id="comments"></textarea>


                                <!-- Verification -->
                                <label for="verify" accesskey="V">2 + 2 =</label>
                                <input name="verify" type="text" id="verify" size="4" value="" class="input-verify" />




                                <!-- Send button -->
                                <input type="submit" class="submit btn btn-default" id="submit" value="Send message" />

                            </fieldset>
                        </form>

                        <!-- Succes message after sending the form, see also the php file around line 90 -->
                        <div class="twelve columns">
                            <div id="message"></div>
                        </div>

                    </div><!-- /.contacts-form -->
                </div><!-- /.contacts-form-bg -->

            </div><!-- /.col-md -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#contacts -->
<!-- ================================ End Contacts ============================== -->