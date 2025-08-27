<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <?php include 'links.php' ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->
    <!-- section banner -->
    <section class="hero-secion about-us-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1>Smarter Marketing, Faster <span>Growth</span> </h1>
                        <p>From startups to enterprises, we craft scalable strategies that <br> deliver real ROI.</p>
                        <button data-bs-target="#exampleModalToggle" data-bs-toggle="modal" class="btn btn-theme">Order Now</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hero-left">
                        <div class="img-box-content animate-zoom">
                            <img src="assets/images/hero-arrow-img.png" alt="">
                        </div>
                        <div class="hero-box">
                            <h3>10B+</h3>
                            <div class="hero-box-content">
                                <strong>Revenue Driven</strong>
                                <p>Iaculis lorem donec nullam tristique duis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End section -->




    <section class="contact-us portfolio">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="contact-us-main">
                        <div class="contact-us-heading main-heading">
                            <span>Contact us</span>
                            <h2>Place Your Order Here</h2>
                        </div>
                        <form method="POST" action="signup" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                                    <div class="mb-3">
                                        <input type="text" class="form-control contact-input " placeholder="Enter Name"
                                            pattern="[A-Za-z ]+" name="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                                    <div class="mb-3">
                                        <input type="email" class="form-control contact-input "
                                            placeholder="Enter Email" name="email"
                                            pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                                    <div class="mb-3">
                                        <input type="number" class="form-control contact-input "
                                            placeholder="Enter Contact No." name="phone"
                                            onkeypress="if(this.value.length==12) return false;" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6  col-12">
                                    <div class="mb-3">
                                        <div class="invalid-feedback">Please select an option.</div>
                                        <select class="form-control contact-input form-select" id="mySelect" required name="service">
                                            <option value="">Services</option>
                                            <option value="Digitizing">Digitizing</option>
                                            <option value="Vector Art">Vector Art</option>
                                            <option value="Custom Patches">Custom Patches</option>
                                            <option value="Custom Apparel">Custom Apparel</option>
                                            <option value="Beaniex">Beaniex</option>
                                            <option value="Screen Printing">Screen Printing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="mb-3">
                                        <textarea class="form-control contact-input long-text-area" id="message"
                                            placeholder="Write a message" onkeypress="if(this.value.length==250) return false;" name="message" rows="4"
                                            cols="50"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <button class="btn btn-theme">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <!-- <div class="img-box contact-us-img">
                        <img src="assets/images/contact-us-img.jpg" alt="">
                    </div> -->
                    <div class="testimonial-slider-main contact-side">
                        <div class="testimonial-heading main-heading">
                            <span>Get in touch</span>
                            <h2>Reach Out and Let’s Build Something Great.
                            </h2>
                            <p>Dapibus sed lectus eros dolor facilisi nec conubia suspendisse nam inceptos nisl</p>
                        </div>

                        <div class="contact-side-box">
                            <div class="discuss-box">
                                <div class="icon">
                                    <i class="ri-phone-fill"></i>
                                </div>
                                <div class="discuss-box-content">
                                    <span>Customer Support</span>
                                    <h4>(888) 4000-2424</h4>
                                </div>
                            </div>
                            <div class="discuss-box">
                                <div class="icon">
                                    <i class="ri-mail-fill"></i>
                                </div>
                                <div class="discuss-box-content">
                                    <span>Email Support</span>
                                    <h4>hello@growthlane.agency</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Get Quote Model -->
    <?php  // include 'get-quote.php'
    ?>
    <!-- end -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- end -->


</body>

</html>