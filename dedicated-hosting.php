<!DOCTYPE html>
<html lang="en">
 <!-- head area start -->
    <?php include 'layout/partials/head.php'?>
 <!-- head area end -->
<body class="page-template template-dedicated">

   <!-- HEADER AREA START-->
        <?php include 'layout/header/header.php';?>
    <!-- HEADER AREA END -->

    <!-- shared hosting banner -->
    <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content dedicated__banner">
                        <span class="starting__price">Dedicated Hosting</span>
                        <h1 class="banner-title">
                            Fully-Managed
                            Dedicated Server Hosting
                        </h1>
                        <p class="slogan">Professional hosting at an affordable price.</p>
                        <div class="hosting-action">
                            <a href="pricing.php" class="btn__two secondary__bg secondary__color">View Plan <i class="fa-regular fa-arrow-right"></i></a>
                            <a href="pricing-two.php" class="btn__white">Starting @ $10.00/mo</a>
                        </div>
                    </div>
                    <div class="rts-hosting-banner__image dedicated-banner__image">
                        <img src="assets/images/banner/banner__dedicated__image.svg" alt="">
                        <img class="shape-image one" src="assets/images/banner/banner__dedicated__image-sm1.svg" alt="">
                        <img class="shape-image two" src="assets/images/banner/banner__dedicated__image-sm2.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

    <!-- FEATURE -->
    <div class="rts-dedicated-feature section__padding">
        <div class="container">
            <div class="row gy-30">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="dedicated-feature">
                        <div class="icon">
                            <img src="assets/images/feature/dedicated/1.svg" alt="">
                        </div>
                        <h4 class="title">Multi-server management</h4>
                        <p class="description">
                            Multi-Server Management simplifies control with a unified dashboard for seamless scaling and efficiency.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="dedicated-feature">
                        <div class="icon">
                            <img src="assets/images/feature/dedicated/2.svg" alt="">
                        </div>
                        <h4 class="title">Hosting Access Control</h4>
                        <p class="description">
                            Hosting Access Control provides secure management, allowing you to set permissions and protect sensitive data.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="dedicated-feature">
                        <div class="icon">
                            <img src="assets/images/feature/dedicated/3.svg" alt="">
                        </div>
                        <h4 class="title">Root Access</h4>
                        <p class="description">
                            Root Access gives you full control over your server, enabling custom configurations and advanced management.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>    <!-- FEATURE END -->


    <!-- PRICING PLAN START -->
    <div class="rts-pricing-plan table-pricing pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section w-640 text-center">
                    <h2 class="rts-section__title">
                        Compare Hostie Dedicated
                        Hosting Plans
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="rts-pricing-plan__tab pricing__tab">
                            <div class="tab__button">
                                <div class="tab__button__item">
                                    <button class="active tab__btn" data-tab="monthly">monthly</button>
                                    <button class="tab__btn" data-tab="yearly">yearly</button>
                                </div>
                            </div>
                            <div class="discount">
                                <span class="line"><img src="assets/images/pricing/offer__vactor.svg" height="20" width="85" alt=""></span>
                                <p>20% save</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRICING PLAN -->
                <div class="tab__content open" id="monthly">
                    <table class="table">
                        <thead class="heading__bg">
                            <tr>
                                <th class="cell">Value</th>
                                <th class="cell">Core</th>
                                <th class="cell">RAM</th>
                                <th class="cell">Storage</th>
                                <th class="cell">Monthly Price</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody class="table__content">
                            <tr>
                                <td class="package">Standard 4</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">4 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$167.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 4</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">8 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$199.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 8</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$299.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 16</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$399.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced 32</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">32 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$499.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced 64</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">64 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$599.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced SSD 16</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">240 GB SSD</td>
                                <td class="price">$299.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced SSD 64</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">64 GB</td>
                                <td class="storage">240 GB SSD</td>
                                <td class="price">$399.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- PRICING PLAN -->
                <div class="tab__content" id="yearly">
                    <table class="table">
                        <thead class="heading__bg">
                            <tr>
                                <th class="cell">Value</th>
                                <th class="cell">Core</th>
                                <th class="cell">RAM</th>
                                <th class="cell">Storage</th>
                                <th class="cell">Monthly Price</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody class="table__content">
                            <tr>
                                <td class="package">Standard 4</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">4 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$367.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 4</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">8 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$499.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 8</td>
                                <td class="process">Intel Xeon 4-Core 8-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">1 TB HDD</td>
                                <td class="price">$599.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Standard 16</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$499.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced 32</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">32 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$699.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced 64</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">64 GB</td>
                                <td class="storage">2 TB HDD</td>
                                <td class="price">$899.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced SSD 16</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">16 GB</td>
                                <td class="storage">240 GB SSD</td>
                                <td class="price">$499.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="package">Enhanced SSD 64</td>
                                <td class="process">Intel Xeon 12-Core 24-Thread</td>
                                <td class="ram">64 GB</td>
                                <td class="storage">240 GB SSD</td>
                                <td class="price">$599.00/mo</td>
                                <td>
                                    <div class="btn__two primary__btn">sign up</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- PRICING PLAN START END -->

    <!-- HOSTING FEATURE AREA -->
    <div class="dedicated-feature-area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section w-670 text-center">
                    <h2 class="rts-section__title mb-0">
                        Dedicated Hosting Features
                        Matter to Your Success
                    </h2>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-lg-6 col-xl-4 col-md-12">
                    <div class="dedicated-feature-section">
                        <h3>Extreme Performance</h3>
                        <p>Dedicated servers from WefitHost use top-tier hardware and software to ensure consistently fast and reliable performance.</p>
                        <div class="single-feature">
                            <div class="icon">
                                <img src="assets/images/feature/dedicated/server.svg" alt="">
                            </div>
                            <p>Extreme Performance for fast load times and smooth user experiences.</p>
                        </div>
                        <div class="single-feature">
                            <div class="icon">
                                <img src="assets/images/feature/dedicated/ram.svg" alt="">
                            </div>
                            <p>Enjoy Extreme Performance with optimized resources for high-traffic sites.</p>
                        </div>
                        <div class="single-feature">
                            <div class="icon">
                                <img src="assets/images/feature/dedicated/support.svg" alt="">
                            </div>
                            <p>Get Extreme Performance with powerful hardware for unparalleled speed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-xl-6 offset-xl-2 col-md-12">
                    <div class="dedicated-feature-image">
                        <img src="assets/images/feature/dedicated/image-1.png" alt="" height="444" width="645">
                        <div class="feature-text">
                            <div class="seo">
                                <p>SEO Score</p>
                                <div class="score">99</div>
                            </div>
                            <div class="performance">
                                <p>performance</p>
                                <div class="score">100</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt--100">
                    <div class="dedicated-feature-image">
                        <img src="assets/images/feature/dedicated/image-2.png" alt="" height="444" width="645">
                        <div class="featured-item">
                            <div class="icon">
                                <img src="assets/images/feature/dedicated/email.svg" alt="">
                            </div>
                            <div class="content">
                                <h6>Hostie Mail</h6>
                                <p>Shared Unlimited hosting Plan Comes
                                    with unlimited Free Email addresses.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-12 mt--100">
                    <div class="dedicated-feature-section">
                        <h3>Intuitive Management</h3>
                        <p>Dedicated servers from Hostie use the best hardware and software available to ensure and always fast.</p>
                        <div class="single-feature">
                            <div class="icon">
                                <img src="assets/images/feature/dedicated/server.svg" alt="">
                            </div>
                            <p>Use your server resources how you want without having to share.</p>
                        </div>
                        <div class="single-feature">
                            <div class="icon">
                                <img src="assets/images/feature/dedicated/ram.svg" alt="">
                            </div>
                            <p>Use your server resources how you want without having to share.</p>
                        </div>
                        <div class="single-feature">
                            <div class="icon">
                                <img src="assets/images/feature/dedicated/support.svg" alt="">
                            </div>
                            <p>Use your server resources how you want without having to share.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- HOSTING FEATURE AREA END -->

    <!-- HOSTIE QUICK FEATURE -->
    <section class="rts-feature section__padding">
        <div class="container">
            <div class="row g-30 align-items-center">
                <div class="col-lg-6">
                    <div class="rts-feature-section dedicated">
                        <h2 class="title">
                            Included with Every
                            Dedicated Hosting Plan
                        </h2>
                        <p>
                            Own your virtual presence with the power of Hostie
                            with 1.5 million websites already under our care,
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card-feature">
                        <div class="card-feature__single">
                            <div class="card-feature__single--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M19.8333 0C30.787 0 39.6667 8.87969 39.6667 19.8333C39.6667 30.787 30.787 39.6667 19.8333 39.6667C8.87969 39.6667 0 30.787 0 19.8333C0 8.87969 8.87969 0 19.8333 0ZM19.8333 2.08772C10.0327 2.08772 2.08772 10.0327 2.08772 19.8333C2.08772 29.634 10.0327 37.5789 19.8333 37.5789C29.634 37.5789 37.5789 29.634 37.5789 19.8333C37.5789 10.0327 29.634 2.08772 19.8333 2.08772ZM31.0101 8.65662C31.3863 9.03291 31.4542 9.71168 31.0101 10.1329L23.4306 17.7122C23.798 18.3339 24.0088 19.059 24.0088 19.8333C24.0088 22.1394 22.1394 24.0088 19.8333 24.0088C17.5273 24.0088 15.6579 22.1394 15.6579 19.8333C15.6579 17.5273 17.5273 15.6579 19.8333 15.6579C20.6077 15.6579 21.3328 15.8687 21.9544 16.236L29.5338 8.65662C29.9415 8.24896 30.6024 8.24896 31.0101 8.65662ZM19.8333 17.7456C18.6803 17.7456 17.7456 18.6803 17.7456 19.8333C17.7456 20.9864 18.6803 21.9211 19.8333 21.9211C20.9864 21.9211 21.9211 20.9864 21.9211 19.8333C21.9211 18.6803 20.9864 17.7456 19.8333 17.7456ZM32.1693 14.1715C32.9788 15.9325 33.4035 17.8539 33.4035 19.8333C33.4035 20.4098 32.9362 20.8772 32.3596 20.8772C31.7831 20.8772 31.3158 20.4098 31.3158 19.8333C31.3158 18.1565 30.9568 16.5323 30.2724 15.0435C30.0316 14.5197 30.261 13.8998 30.7849 13.659C31.3087 13.4183 31.9285 13.6477 32.1693 14.1715ZM19.8333 6.26316C21.831 6.26316 23.7695 6.6958 25.5435 7.51973C26.0664 7.76258 26.2934 8.38331 26.0506 8.90617C25.8077 9.42904 25.187 9.65604 24.6641 9.41319C23.1642 8.71657 21.5257 8.35088 19.8333 8.35088C13.4917 8.35088 8.35088 13.4917 8.35088 19.8333C8.35088 20.4098 7.88353 20.8772 7.30702 20.8772C6.73051 20.8772 6.26316 20.4098 6.26316 19.8333C6.26316 12.3387 12.3387 6.26316 19.8333 6.26316Z" fill="white" />
                                </svg>
                            </div>
                            <h5 class="card-feature__single--title">
                                Security, & Updates
                            </h5>
                            <p class="card-feature__single--description">
                                If your website is slow or down
                                then you losing customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card-feature">
                        <div class="card-feature__single">
                            <div class="card-feature__single--icon">
                                <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1992 20H23.1992V5.60004H15.1992V20ZM16.7992 7.20004H21.5992V18.4H16.7992V7.20004Z" fill="#2D3C58" />
                                    <path d="M24.7988 20H32.7988V5.60004H24.7988V20ZM26.3988 7.20004H31.1988V18.4H26.3988V7.20004Z" fill="#2D3C58" />
                                    <path d="M5.59961 20H13.5996V5.60004H5.59961V20ZM7.19961 7.20004H11.9996V18.4H7.19961V7.20004Z" fill="#2D3C58" />
                                    <path d="M34.3984 20H42.3984V5.60004H34.3984V20ZM35.9984 7.20004H40.7984V18.4H35.9984V7.20004Z" fill="#2D3C58" />
                                    <path d="M47.2 10.4C47.6418 10.4 48 10.0418 48 9.60005V3.20005C48 1.87455 46.9255 0.800049 45.6 0.800049H2.4C1.0745 0.800049 0 1.87455 0 3.20005V9.60005C0 10.0418 0.3582 10.4 0.8 10.4C1.2418 10.4 1.6 10.7582 1.6 11.2C1.6 11.6418 1.2418 12 0.8 12C0.3582 12 0 12.3582 0 12.8V24C0 24.4418 0.3582 24.8 0.8 24.8H4V30.4C4 30.8418 4.3582 31.2 4.8 31.2H17.6C18.0418 31.2 18.4 30.8418 18.4 30.4V28.8C18.4 28.3582 18.7582 28 19.2 28C19.4158 27.9993 19.6223 28.0879 19.7704 28.2448C19.9188 28.3913 20.0016 28.5915 20 28.8V30.4C20 30.8418 20.3582 31.2 20.8 31.2H43.2C43.6418 31.2 44 30.8418 44 30.4V24.8H47.2C47.6418 24.8 48 24.4418 48 24V12.8C48 12.3582 47.6418 12 47.2 12C46.7582 12 46.4 11.6418 46.4 11.2C46.4 10.7582 46.7582 10.4 47.2 10.4ZM42.4 29.6H40.8V26.4H39.2V29.6H37.6V26.4H36V29.6H34.4V26.4H32.8V29.6H31.2V26.4H29.6V29.6H28V26.4H26.4V29.6H24.8V26.4H23.2V29.6H21.6V28.8C21.5943 27.4769 20.5231 26.4057 19.2 26.4C17.8745 26.4 16.8 27.4745 16.8 28.8V29.6H15.2V26.4H13.6V29.6H12V26.4H10.4V29.6H8.8V26.4H7.2V29.6H5.6V24.8H42.4V29.6ZM46.4 8.93685C45.1501 9.37795 44.4944 10.7488 44.9355 11.9987C45.1771 12.6832 45.7155 13.2216 46.4 13.4632V23.2H1.6V13.4632C2.8499 13.0221 3.5056 11.6512 3.0645 10.4013C2.8229 9.71685 2.2845 9.17845 1.6 8.93685V3.20005C1.6 2.75825 1.9582 2.40005 2.4 2.40005H45.6C46.0418 2.40005 46.4 2.75825 46.4 3.20005V8.93685Z" fill="#2D3C58" />
                                </svg>
                            </div>
                            <h5 class="card-feature__single--title">
                                RAM & storage
                            </h5>
                            <p class="card-feature__single--description">
                                If your website is slow or down
                                then you losing customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card-feature">
                        <div class="card-feature__single">
                            <div class="card-feature__single--icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M35 5H5C4.33696 5 3.70107 5.26339 3.23223 5.73223C2.76339 6.20107 2.5 6.83696 2.5 7.5V32.5C2.5 33.163 2.76339 33.7989 3.23223 34.2678C3.70107 34.7366 4.33696 35 5 35H35C35.663 35 36.2989 34.7366 36.7678 34.2678C37.2366 33.7989 37.5 33.163 37.5 32.5V7.5C37.5 6.83696 37.2366 6.20107 36.7678 5.73223C36.2989 5.26339 35.663 5 35 5V5ZM5 7.5H12.5V32.5H5V7.5ZM35 32.5H15V7.5H35V32.5Z" fill="#2D3C58" />
                                </svg>
                            </div>
                            <h5 class="card-feature__single--title">
                                Quick & easy
                            </h5>
                            <p class="card-feature__single--description">
                                If your website is slow or down
                                then you losing customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card-feature">
                        <div class="card-feature__single">
                            <div class="card-feature__single--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M19.8333 0C30.787 0 39.6667 8.87969 39.6667 19.8333C39.6667 30.787 30.787 39.6667 19.8333 39.6667C8.87969 39.6667 0 30.787 0 19.8333C0 8.87969 8.87969 0 19.8333 0ZM19.8333 2.08772C10.0327 2.08772 2.08772 10.0327 2.08772 19.8333C2.08772 29.634 10.0327 37.5789 19.8333 37.5789C29.634 37.5789 37.5789 29.634 37.5789 19.8333C37.5789 10.0327 29.634 2.08772 19.8333 2.08772ZM31.0101 8.65662C31.3863 9.03291 31.4542 9.71168 31.0101 10.1329L23.4306 17.7122C23.798 18.3339 24.0088 19.059 24.0088 19.8333C24.0088 22.1394 22.1394 24.0088 19.8333 24.0088C17.5273 24.0088 15.6579 22.1394 15.6579 19.8333C15.6579 17.5273 17.5273 15.6579 19.8333 15.6579C20.6077 15.6579 21.3328 15.8687 21.9544 16.236L29.5338 8.65662C29.9415 8.24896 30.6024 8.24896 31.0101 8.65662ZM19.8333 17.7456C18.6803 17.7456 17.7456 18.6803 17.7456 19.8333C17.7456 20.9864 18.6803 21.9211 19.8333 21.9211C20.9864 21.9211 21.9211 20.9864 21.9211 19.8333C21.9211 18.6803 20.9864 17.7456 19.8333 17.7456ZM32.1693 14.1715C32.9788 15.9325 33.4035 17.8539 33.4035 19.8333C33.4035 20.4098 32.9362 20.8772 32.3596 20.8772C31.7831 20.8772 31.3158 20.4098 31.3158 19.8333C31.3158 18.1565 30.9568 16.5323 30.2724 15.0435C30.0316 14.5197 30.261 13.8998 30.7849 13.659C31.3087 13.4183 31.9285 13.6477 32.1693 14.1715ZM19.8333 6.26316C21.831 6.26316 23.7695 6.6958 25.5435 7.51973C26.0664 7.76258 26.2934 8.38331 26.0506 8.90617C25.8077 9.42904 25.187 9.65604 24.6641 9.41319C23.1642 8.71657 21.5257 8.35088 19.8333 8.35088C13.4917 8.35088 8.35088 13.4917 8.35088 19.8333C8.35088 20.4098 7.88353 20.8772 7.30702 20.8772C6.73051 20.8772 6.26316 20.4098 6.26316 19.8333C6.26316 12.3387 12.3387 6.26316 19.8333 6.26316Z" fill="white" />
                                </svg>
                            </div>
                            <h5 class="card-feature__single--title">
                                Unlimited bandwidth
                            </h5>
                            <p class="card-feature__single--description">
                                If your website is slow or down
                                then you losing customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card-feature">
                        <div class="card-feature__single">
                            <div class="card-feature__single--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M19.8333 0C30.787 0 39.6667 8.87969 39.6667 19.8333C39.6667 30.787 30.787 39.6667 19.8333 39.6667C8.87969 39.6667 0 30.787 0 19.8333C0 8.87969 8.87969 0 19.8333 0ZM19.8333 2.08772C10.0327 2.08772 2.08772 10.0327 2.08772 19.8333C2.08772 29.634 10.0327 37.5789 19.8333 37.5789C29.634 37.5789 37.5789 29.634 37.5789 19.8333C37.5789 10.0327 29.634 2.08772 19.8333 2.08772ZM31.0101 8.65662C31.3863 9.03291 31.4542 9.71168 31.0101 10.1329L23.4306 17.7122C23.798 18.3339 24.0088 19.059 24.0088 19.8333C24.0088 22.1394 22.1394 24.0088 19.8333 24.0088C17.5273 24.0088 15.6579 22.1394 15.6579 19.8333C15.6579 17.5273 17.5273 15.6579 19.8333 15.6579C20.6077 15.6579 21.3328 15.8687 21.9544 16.236L29.5338 8.65662C29.9415 8.24896 30.6024 8.24896 31.0101 8.65662ZM19.8333 17.7456C18.6803 17.7456 17.7456 18.6803 17.7456 19.8333C17.7456 20.9864 18.6803 21.9211 19.8333 21.9211C20.9864 21.9211 21.9211 20.9864 21.9211 19.8333C21.9211 18.6803 20.9864 17.7456 19.8333 17.7456ZM32.1693 14.1715C32.9788 15.9325 33.4035 17.8539 33.4035 19.8333C33.4035 20.4098 32.9362 20.8772 32.3596 20.8772C31.7831 20.8772 31.3158 20.4098 31.3158 19.8333C31.3158 18.1565 30.9568 16.5323 30.2724 15.0435C30.0316 14.5197 30.261 13.8998 30.7849 13.659C31.3087 13.4183 31.9285 13.6477 32.1693 14.1715ZM19.8333 6.26316C21.831 6.26316 23.7695 6.6958 25.5435 7.51973C26.0664 7.76258 26.2934 8.38331 26.0506 8.90617C25.8077 9.42904 25.187 9.65604 24.6641 9.41319C23.1642 8.71657 21.5257 8.35088 19.8333 8.35088C13.4917 8.35088 8.35088 13.4917 8.35088 19.8333C8.35088 20.4098 7.88353 20.8772 7.30702 20.8772C6.73051 20.8772 6.26316 20.4098 6.26316 19.8333C6.26316 12.3387 12.3387 6.26316 19.8333 6.26316Z" fill="white" />
                                </svg>
                            </div>
                            <h5 class="card-feature__single--title">
                                SSDs, email & SSL
                            </h5>
                            <p class="card-feature__single--description">
                                If your website is slow or down
                                then you losing customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card-feature">
                        <div class="card-feature__single">
                            <div class="card-feature__single--icon">
                                <svg width="37" height="29" viewBox="0 0 37 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M35.7716 13.1458L27.5948 4.48282C27.0923 3.94981 26.2534 3.9255 25.7204 4.42847C25.1882 4.93102 25.1635 5.77031 25.6665 6.30291L32.9845 14.0554L25.6665 21.8088C25.1635 22.3413 25.1882 23.1802 25.7204 23.6832C25.9767 23.925 26.3042 24.0447 26.6305 24.0447C26.9828 24.0447 27.3346 23.9051 27.5949 23.6297L35.7717 14.9663C36.2538 14.455 36.2538 13.6567 35.7716 13.1458Z" fill="#2D3C58" />
                                    <path d="M11.2407 21.8082L3.92312 14.0552L11.2407 6.30236C11.7432 5.76976 11.7189 4.9304 11.1863 4.42791C10.6541 3.92536 9.81434 3.94967 9.31186 4.48226L1.13507 13.1452C0.652892 13.6561 0.652892 14.4548 1.13507 14.9658L9.31227 23.6292C9.57304 23.9054 9.92442 24.0447 10.2767 24.0447C10.6029 24.0447 10.9304 23.9244 11.1863 23.6826C11.7194 23.1801 11.7432 22.3408 11.2407 21.8082Z" fill="#2D3C58" />
                                    <path d="M20.5996 0.0151505C19.8761 -0.0944488 19.199 0.402305 19.0885 1.12585L15.199 26.5844C15.0885 27.3083 15.5857 27.9851 16.3097 28.0956C16.3778 28.1057 16.4449 28.1106 16.5117 28.1106C17.1557 28.1106 17.7205 27.6408 17.8208 26.9849L21.7103 1.52634C21.8208 0.802304 21.3236 0.125648 20.5996 0.0151505Z" fill="#2D3C58" />
                                </svg>
                            </div>
                            <h5 class="card-feature__single--title">
                                PHP7/Perl/Python
                            </h5>
                            <p class="card-feature__single--description">
                                If your website is slow or down
                                then you losing customers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOSTIE QUICK FEATURE END -->

    <!-- HOSTIE CLIENT FEEDBACK AREA -->
    <div class="rts-client-feedback dedicated-feedback-bg section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section w-500 text-center">
                    <h2 class="rts-section__title">Our Client Feedback</h2>
                    <p class="rts-section__description">We’re honored and humbled by the great feedback we receive from our customers on a daily basis.
                    </p>
                </div>
            </div>
            <!-- client feedback -->
            <div class="row">
                <div class="feedback-slider">
                    <div class="swiper-wrapper">
                        <!-- single slider -->
                        <div class="swiper-slide">
                            <div class="feedback-card">
                                <div class="feedback-card__border"></div>
                                <div class="feedback-card__single">
                                    <div class="quote-icon">
                                        <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.12927 12.9165H11.1667C11.8905 12.9165 12.5847 13.204 13.0965 13.7159C13.6083 14.2277 13.8958 14.9219 13.8958 15.6457V23.8332C13.8958 24.557 13.6083 25.2512 13.0965 25.763C12.5847 26.2748 11.8905 26.5623 11.1667 26.5623H2.97917C2.25535 26.5623 1.56117 26.2748 1.04935 25.763C0.537536 25.2512 0.25 24.557 0.25 23.8332V14.7587C0.250828 12.2879 0.861546 9.85559 2.02796 7.67749C3.19437 5.49939 4.88041 3.6429 6.93646 2.27275L9.37906 0.635254L10.8801 2.90046L8.4375 4.53796C7.01878 5.48869 5.81394 6.72487 4.89994 8.16753C3.98594 9.61019 3.38288 11.2276 3.12927 12.9165ZM22.2328 12.9165H30.2702C30.994 12.9165 31.6882 13.204 32.2 13.7159C32.7118 14.2277 32.9993 14.9219 32.9993 15.6457V23.8332C32.9993 24.557 32.7118 25.2512 32.2 25.763C31.6882 26.2748 30.994 26.5623 30.2702 26.5623H22.0827C21.3589 26.5623 20.6647 26.2748 20.1529 25.763C19.6411 25.2512 19.3535 24.557 19.3535 23.8332V14.7587C19.3543 12.2879 19.9651 9.85559 21.1315 7.67749C22.2979 5.49939 23.9839 3.6429 26.04 2.27275L28.4962 0.635254L29.9836 2.90046L27.541 4.53796C26.1223 5.48869 24.9175 6.72487 24.0035 8.16753C23.0895 9.61019 22.4864 11.2276 22.2328 12.9165Z" fill="#4C5671" />
                                        </svg>
                                    </div>
                                    <p class="feedback-card__single--text">I am using Digital Ocean Plan in Cloud ways and I can confirm it is very good. Also, additional the backup with my hosting is awesome too.</p>
                                    <div class="feedback-card__single--author">
                                        <div class="author">
                                            <img src="assets/images/author/author__one.png" height="50" width="50" alt="">
                                        </div>
                                        <div class="author__meta">
                                            <h6>Zayed Khan</h6>
                                            <span>Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slider end -->
                        <!-- single slider -->
                        <div class="swiper-slide">
                            <div class="feedback-card">
                                <div class="feedback-card__border"></div>
                                <div class="feedback-card__single">
                                    <div class="quote-icon">
                                        <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.12927 12.9165H11.1667C11.8905 12.9165 12.5847 13.204 13.0965 13.7159C13.6083 14.2277 13.8958 14.9219 13.8958 15.6457V23.8332C13.8958 24.557 13.6083 25.2512 13.0965 25.763C12.5847 26.2748 11.8905 26.5623 11.1667 26.5623H2.97917C2.25535 26.5623 1.56117 26.2748 1.04935 25.763C0.537536 25.2512 0.25 24.557 0.25 23.8332V14.7587C0.250828 12.2879 0.861546 9.85559 2.02796 7.67749C3.19437 5.49939 4.88041 3.6429 6.93646 2.27275L9.37906 0.635254L10.8801 2.90046L8.4375 4.53796C7.01878 5.48869 5.81394 6.72487 4.89994 8.16753C3.98594 9.61019 3.38288 11.2276 3.12927 12.9165ZM22.2328 12.9165H30.2702C30.994 12.9165 31.6882 13.204 32.2 13.7159C32.7118 14.2277 32.9993 14.9219 32.9993 15.6457V23.8332C32.9993 24.557 32.7118 25.2512 32.2 25.763C31.6882 26.2748 30.994 26.5623 30.2702 26.5623H22.0827C21.3589 26.5623 20.6647 26.2748 20.1529 25.763C19.6411 25.2512 19.3535 24.557 19.3535 23.8332V14.7587C19.3543 12.2879 19.9651 9.85559 21.1315 7.67749C22.2979 5.49939 23.9839 3.6429 26.04 2.27275L28.4962 0.635254L29.9836 2.90046L27.541 4.53796C26.1223 5.48869 24.9175 6.72487 24.0035 8.16753C23.0895 9.61019 22.4864 11.2276 22.2328 12.9165Z" fill="#4C5671" />
                                        </svg>
                                    </div>
                                    <p class="feedback-card__single--text">I am using Digital Ocean Plan in Cloud ways and I can confirm it is very good. Also, additional the backup with my hosting is awesome too.</p>
                                    <div class="feedback-card__single--author">
                                        <div class="author">
                                            <img src="assets/images/author/author__two.png" height="50" width="50" alt="">
                                        </div>
                                        <div class="author__meta">
                                            <h6>Rubel Hossen</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slider end -->
                        <!-- single slider -->
                        <div class="swiper-slide">
                            <div class="feedback-card">
                                <div class="feedback-card__border"></div>
                                <div class="feedback-card__single">
                                    <div class="quote-icon">
                                        <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.12927 12.9165H11.1667C11.8905 12.9165 12.5847 13.204 13.0965 13.7159C13.6083 14.2277 13.8958 14.9219 13.8958 15.6457V23.8332C13.8958 24.557 13.6083 25.2512 13.0965 25.763C12.5847 26.2748 11.8905 26.5623 11.1667 26.5623H2.97917C2.25535 26.5623 1.56117 26.2748 1.04935 25.763C0.537536 25.2512 0.25 24.557 0.25 23.8332V14.7587C0.250828 12.2879 0.861546 9.85559 2.02796 7.67749C3.19437 5.49939 4.88041 3.6429 6.93646 2.27275L9.37906 0.635254L10.8801 2.90046L8.4375 4.53796C7.01878 5.48869 5.81394 6.72487 4.89994 8.16753C3.98594 9.61019 3.38288 11.2276 3.12927 12.9165ZM22.2328 12.9165H30.2702C30.994 12.9165 31.6882 13.204 32.2 13.7159C32.7118 14.2277 32.9993 14.9219 32.9993 15.6457V23.8332C32.9993 24.557 32.7118 25.2512 32.2 25.763C31.6882 26.2748 30.994 26.5623 30.2702 26.5623H22.0827C21.3589 26.5623 20.6647 26.2748 20.1529 25.763C19.6411 25.2512 19.3535 24.557 19.3535 23.8332V14.7587C19.3543 12.2879 19.9651 9.85559 21.1315 7.67749C22.2979 5.49939 23.9839 3.6429 26.04 2.27275L28.4962 0.635254L29.9836 2.90046L27.541 4.53796C26.1223 5.48869 24.9175 6.72487 24.0035 8.16753C23.0895 9.61019 22.4864 11.2276 22.2328 12.9165Z" fill="#4C5671" />
                                        </svg>
                                    </div>
                                    <p class="feedback-card__single--text">I am using Digital Ocean Plan in Cloud ways and I can confirm it is very good. Also, additional the backup with my hosting is awesome too.</p>
                                    <div class="feedback-card__single--author">
                                        <div class="author">
                                            <img src="assets/images/author/author__three.png" height="50" width="50" alt="">
                                        </div>
                                        <div class="author__meta">
                                            <h6>Ashique Mahmud</h6>
                                            <span>Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slider end -->
                        <!-- single slider -->
                        <div class="swiper-slide">
                            <div class="feedback-card">
                                <div class="feedback-card__border"></div>
                                <div class="feedback-card__single">
                                    <div class="quote-icon">
                                        <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.12927 12.9165H11.1667C11.8905 12.9165 12.5847 13.204 13.0965 13.7159C13.6083 14.2277 13.8958 14.9219 13.8958 15.6457V23.8332C13.8958 24.557 13.6083 25.2512 13.0965 25.763C12.5847 26.2748 11.8905 26.5623 11.1667 26.5623H2.97917C2.25535 26.5623 1.56117 26.2748 1.04935 25.763C0.537536 25.2512 0.25 24.557 0.25 23.8332V14.7587C0.250828 12.2879 0.861546 9.85559 2.02796 7.67749C3.19437 5.49939 4.88041 3.6429 6.93646 2.27275L9.37906 0.635254L10.8801 2.90046L8.4375 4.53796C7.01878 5.48869 5.81394 6.72487 4.89994 8.16753C3.98594 9.61019 3.38288 11.2276 3.12927 12.9165ZM22.2328 12.9165H30.2702C30.994 12.9165 31.6882 13.204 32.2 13.7159C32.7118 14.2277 32.9993 14.9219 32.9993 15.6457V23.8332C32.9993 24.557 32.7118 25.2512 32.2 25.763C31.6882 26.2748 30.994 26.5623 30.2702 26.5623H22.0827C21.3589 26.5623 20.6647 26.2748 20.1529 25.763C19.6411 25.2512 19.3535 24.557 19.3535 23.8332V14.7587C19.3543 12.2879 19.9651 9.85559 21.1315 7.67749C22.2979 5.49939 23.9839 3.6429 26.04 2.27275L28.4962 0.635254L29.9836 2.90046L27.541 4.53796C26.1223 5.48869 24.9175 6.72487 24.0035 8.16753C23.0895 9.61019 22.4864 11.2276 22.2328 12.9165Z" fill="#4C5671" />
                                        </svg>
                                    </div>
                                    <p class="feedback-card__single--text">I am using Digital Ocean Plan in Cloud ways and I can confirm it is very good. Also, additional the backup with my hosting is awesome too.</p>
                                    <div class="feedback-card__single--author">
                                        <div class="author">
                                            <img src="assets/images/author/author__four.png" height="50" width="50" alt="">
                                        </div>
                                        <div class="author__meta">
                                            <h6>Samira Khan</h6>
                                            <span>Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single slider end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOSTIE CLIENT FEEDBACK AREA END -->

    <!-- SHARED HOSTING FAQ -->
    <div class="rts-hosting-faq bg-white section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="rts-section text-center">
                        <h2 class="rts-section__title" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">Frequently asked questions</h2>
                    </div>
                    <div class="rts-faq__accordion">
                        <div class="accordion accordion-flush" id="rts-accordion">
                            <div class="accordion-item active">
                                <div class="accordion-header" id="first">
                                    <h4 class="accordion-button collapse show" data-bs-toggle="collapse" data-bs-target="#item__one" aria-expanded="false" aria-controls="item__one">
                                        Why buy a domain name from hostie?
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
                        <h4 data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Need help?
                            We're always here for you.</h4>
                    </div>
                    <div class="cta-btn">
                        <a href="#" class="contact__us rts-btn rts-btn-secondary" data-sal="slide-left" data-sal-delay="100" data-sal-duration="800">Go to Live chat Page</a>
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