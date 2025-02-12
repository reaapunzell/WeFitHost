<!DOCTYPE html>
<html lang="en">
 <!-- head area start -->
    <?php include 'layout/partials/head.php'?>
 <!-- head area end -->

<body class="page-template template-resell">

    <!-- HEADER AREA START-->
        <?php include 'layout/header/header.php';?>
    <!-- HEADER AREA END -->

    <!-- HERO BANNER ONE -->
    <section class="rts-hero-three rts-hosting-banner rts-hero__one domain-checker-padding banner-default-height">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="rts-hero__content domain">
                        <h1 data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Register Your Domain</h1>
                        <p class="description" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">Enter the domain that you would like to transfer to Hostie</p>

                        <form action="https://hostie-whmcs.themewant.com/cart.php">
                            <div class="rts-hero__form-area">
                                <input type="hidden" name="domain" value="register">
                                <input type="hidden" name="a" value="add">
                                <input type="text" placeholder="find your domain name" name="query" required>
                                <div class="select-button-area">
                                    <select name="domain_type" id="select" class="price__select">
                                        <option value=".com">.com</option>
                                        <option value=".net">.net</option>
                                        <option value=".love">.love</option>
                                        <option value=".pw">.pw</option>
                                        <option value=".org">.org</option>
                                        <option value=".org">.org</option>
                                        <option value=".info">.info</option>
                                        <option value=".info">.info</option>
                                        <option value=".xyz">.xyz</option>
                                    </select>
                                    <button type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                        <div class="banner-content-tag">
                            <p class="desc" data-sal-delay="400" data-sal-duration="800">Looking for a new domain name? <a href="domain-checker.php">Try domain checker</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape-area">
            <img class="three" src="assets/images/banner/banner-bg-element.svg" alt="">
        </div>
    </section>
    <!-- HERO BANNER ONE END -->

    <!-- HOSTIE SECURITY ANNOUNCEMENT SECTION -->
    <section class="rts-hosting-feature-two section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="rts-hosting-feature-two__image" data-sal="slide-right" data-sal-delay="100" data-sal-duration="800">
                        <img src="assets/images/hosting/hosting__feature__two.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="rts-hosting-feature-two__content">
                        <div class="rts-section__two">
                            <h6 class="sub__title" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">feature</h6>
                            <h2 class="title" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Advanced Security
                                Features</h2>
                            <p class="description" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">We’ll move your first website to Cloud ways from any web host for without breaking your live site hosted.</p>
                        </div>
                        <div class="feature" data-sal="slide-down" data-sal-delay="500" data-sal-duration="800">
                            <ul class="feature__list">
                                <li class="feature__item">Get unlimited SSL security certificates</li>
                                <li class="feature__item">Protect your website from DDoS attacks</li>
                                <li class="feature__item">Secure your files with automatic backups.</li>
                            </ul>
                        </div>
                        <a href="pricing.php" class="rts-btn rts-btn-secondary" data-sal="slide-down" data-sal-delay="600" data-sal-duration="800">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOSTIE SECURITY ANNOUNCEMENT SECTION END -->

    <!-- SUPPORT AREA -->
    <div class="rts-support black__friday--support">
        <div class="container">
            <div class="row">
                <div class="rts-support__wrapper">
                    <div class="rts-support__wrapper--content">
                        <h3 class="title" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">24/7 World-Class Support</h3>
                        <p data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">Ran into trouble? Contact our Customer Success team any
                            time via live chat or email.
                        </p>
                        <div class="feature" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                            <ul class="feature__list">
                                <li class="feature__item">Receive professional WordPress support</li>
                                <li class="feature__item">Our specialists are available round</li>
                            </ul>
                        </div>
                        <a href="support.php" class="rts-btn rts-btn-primary support-btn">Get Support <i class="fa-regular fa-chevron-right"></i></a>
                    </div>
                    <div class="rts-support__wrapper--image" data-sal="slide-left" data-sal-delay="400" data-sal-duration="800">
                        <img src="assets/images/support/support__image.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SUPPORT AREA END -->

    <!-- SHARED HOSTING FAQ -->
    <div class="rts-hosting-faq section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="rts-section text-center">
                        <h2 class="rts-section__title mb-0" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Frequently asked questions</h2>
                    </div>
                    <div class="rts-faq__accordion" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                        <div class="accordion accordion-flush" id="rts-accordion">
                            <div class="accordion-item active">
                                <div class="accordion-header" id="first">
                                    <h4 class="accordion-button collapse show" data-bs-toggle="collapse" data-bs-target="#item__one" aria-expanded="false" aria-controls="item__one">
                                        How do I transfer a domain from one host to another?
                                    </h4>
                                </div>
                                <div id="item__one" class="accordion-collapse collapse collapse show" aria-labelledby="first" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy a domain name from hostie, we guarantee it will be handed over.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="two">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__two" aria-expanded="false" aria-controls="item__two">
                                        How does domain registration work?
                                    </h4>
                                </div>
                                <div id="item__two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy a domain name from hostie, we guarantee it will be handed over.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="three">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__three" aria-expanded="false" aria-controls="item__three">
                                        Why is domain name registration required?
                                    </h4>
                                </div>
                                <div id="item__three" class="accordion-collapse collapse" aria-labelledby="three" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy a domain name from hostie, we guarantee it will be handed over.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="four">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__four" aria-expanded="false" aria-controls="item__four">
                                        Why is domain name registration required?
                                    </h4>
                                </div>
                                <div id="item__four" class="accordion-collapse collapse" aria-labelledby="four" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy a domain name from hostie, we guarantee it will be handed over.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="five">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__five" aria-expanded="false" aria-controls="item__four">
                                        Why is domain name registration required?
                                    </h4>
                                </div>
                                <div id="item__five" class="accordion-collapse collapse" aria-labelledby="five" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy a domain name from hostie, we guarantee it will be handed over.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- SHARED HOSTING FAQ END -->

    <!-- HOSTIE CTA -->
    <div class="rts-cta-two shared-page-bg">
        <div class="container">
            <div class="row">
                <div class="rts-cta-two__wrapper">
                    <div class="cta__shape"></div>
                    <div class="cta-content">
                        <span data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Need help choosing a plan?</span>
                        <h4 data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">Need help?
                            We're always here for you.</h4>
                    </div>
                    <div class="cta-btn">
                        <a href="#" class="contact__us primary__btn btn__two secondary__bg secondary__color">Go to Live chat Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOSTIE CTA END -->

    <!-- FOOTER AREA START-->
        <?php include 'layout/footer/footer-one.php';?>
    <!-- FOOTER AREA END -->

    <div id="anywhere-home" class=""></div>

    <!-- Sidebar area start -->
        <?php include 'layout/partials/sidebar.php';?>
    <!-- Sidebar area end -->

    <!-- THEME PRELOADER START -->
        <?php include 'layout/partials/preloader.php';?>
    <!-- THEME PRELOADER END -->

    <!-- BACK TO TOP AREA START -->
        <?php include 'layout/partials/back-to-top.php';?>
    <!-- BACK TO TOP AREA EDN -->

    <!-- Scripts -->
        <?php include 'layout/partials/scripts.php';?>

</body>
</html>