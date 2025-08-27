<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'index') {
                                                echo 'active';
                                            } ?>" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'about-us') {
                                                echo 'active';
                                            } ?>" href="about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown navdesktop">
                        <a class="nav-link <?php if ($page == '#') {
                                                echo 'active';
                                            } ?>" href="#">
                            Services <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="digitizing">Digitizing</a></li>
                            <li><a class="dropdown-item" href="vector">Vector</a></li>
                            <li><a class="dropdown-item" href="#">Custom Patches</a></li>
                            <li><a class="dropdown-item" href="#">Custom Apparel</a></li>
                            <li><a class="dropdown-item" href="#">Custom Beanies</a></li>
                            <li><a class="dropdown-item" href="#">Screen Printing</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
            <div class="my-2 my-lg-0 d-xl-block d-none">
                <a href="contact-us" class="btn btn-theme">Contact Us</a>
            </div>
        </div>
    </nav>
</header>



<!-- popup -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md model-sec">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="model-discount">
                            <div class="d-block text-center align-items-center">
                                <div class="animate-div"><span>Order Now</span></div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <hr>
                            <form method="POST" action="signup" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control " placeholder="Enter Name"
                                                pattern="[A-Za-z ]+" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <input type="email" class="form-control "
                                                placeholder="Enter Email" name="email"
                                                pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <input type="number" class="form-control "
                                                placeholder="Enter Contact No." name="phone"
                                                onkeypress="if(this.value.length==12) return false;" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <div class="invalid-feedback">Please select an option.</div>
                                            <select class="form-control form-select" id="mySelect" required name="service">
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
                                            <textarea class="form-control long-text-area" id="message"
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->