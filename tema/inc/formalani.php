    <div class="mb-30 d-flex text-left flex-column align-items-start">
                                            <p class="sub-heading line-shap line-shap-before mb-15">
                                                <span class="line-bg-right">Stay connected</span>
                                            </p>
                                            <h2 class="section-title  title-cap">
                                                Get in Touch
                                            </h2>
                                        </div>
                                        <p class="mb-30">
                                            It’s all about the humans behind a brand and those experiencing it,
                                            we’re right there. In the middle.
                                        </p>
                                        <form id="contact-form" class="form" method="post" action="contact.php"
                                            data-toggle="validator">
                                            <div class="messages"></div>
                                            <div class="input__wrap controls">
                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>Your name *</label>
                                                        <input id="form_name" type="text" name="name"
                                                            placeholder="Type your name" required="required"
                                                            data-error="name is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>Your E-Mail *</label>
                                                        <input id="form_email" type="email" name="email"
                                                            placeholder="Type your Email Address" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>What's up?</label>
                                                        <textarea id="form_message" class="form-control" name="message"
                                                            placeholder="Tell us about you and the world"
                                                            required="required"
                                                            data-error="Please,leave us a message."></textarea>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="text-right">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <button type="submit" class="dsn-button ">
                                                            <span class="dsn-border border-color-default"></span>
                                                            <span class="text-button">Send Message</span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>