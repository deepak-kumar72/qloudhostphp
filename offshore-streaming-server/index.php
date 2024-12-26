<?php
$page = 'offshore-streaming-server';
include('../inc/navbar.php');
?>



<div class="hero-container p-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="hero-content">
                    <h4 class="mb-3 hero-subTitle">
                        <i class="me-2 sub-title-icon"></i>
                        Offshore Streaming Server
                    </h4>
                    <h1 class="mb-4">Robust offshore Streaming Server</h1>
                    <p class="mb-4">Host your IPTV or movie site offshore in Amsterdam with powerful DMCA-ignored streaming servers. Get 100% uptime, unmetered ports, white-label IP, and a fully redundant network. Secure, reliable, and unshared.</p>
                    <div class="hero-options-container mb-4">
                        <div class="option-item d-flex align-items-center mb-2">
                            <i class="me-2 option-icon"></i>
                            <span>Fast, Secure, Reliable</span>
                        </div>
                        <div class="option-item d-flex align-items-center mb-2">
                            <i class="me-2 option-icon"></i>
                            <span>Strong Infrastructure</span>
                        </div>
                        <div class="option-item d-flex align-items-center mb-2">
                            <i class="me-2 option-icon"></i>
                            <span>DDoS Protection</span>
                        </div>
                        <div class="option-item d-flex align-items-center mb-2">
                            <i class="me-2 option-icon"></i>
                            <span>Cost-effective & Scalable</span>
                        </div>
                    </div>
                    <div class="hero-buttons mb-4">
                        <a href="#explore" class="btn btn-primary start-now-btn me-3">
                            Get Started Now
                            <i class="ms-4 start-now-icon"></i>
                        </a>

                        <!-- <a href="" class="btn btn-secondary explore-btn">   
                            </a> -->

                    </div>
                    <div class="money-back-text">
                        <i class="me-2"></i>
                        14-Day Money-Back Guarantee
                    </div>
                </div>
            </div>
            <div class="col-md-6 m-auto">
                <div class="hero-image-container position-relative text-end w-100 h-100">
                    <img src="../assets/img/Frame/" alt="" class="hero-frame h-100 w-100" />
                    <div class="features"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- streming server plan -->


<div class="hosting-plan mb-5" id='explore'>
    <div class="container plan-sec mt-5">
        <h2 class="text-center m-auto mb-3">Reliable Offshore Streaming Servers Plans!</h2>
        <p class="text-center mb-5 planHead-con m-auto">Tell us your needs, and we will prepare a Best offshore streaming servers according to your needs.</p>

        <div class="row qloudHost-plan streaming-plan justify-content-center m-auto">
            <div key={plan.id} class="col-12 col-md-6 col-lg-6 explore-plan-col">
                <div
                    class="popular-qloudhost-card h-100 position-relative">
                    <div class="popular-badge streaming-badge position-absolute">Popular</div>
                    <div>
                        <h5 class="card-title mt-3 mb-3">AMD EPYC 7502P (32c/64t)</h5>
                        <h3 class="card-price qloudHostplan-price mb-3">$349.00<span class="price-unit">/month</span></h3>
                        <p class="fw-bold mb-3">Save30% <span class="save-price ms-3"><del>$499.00/mo</del></span></p>
                        <a href={plan.url} class='dedicated-plan-btn'>
                        <button class="plan-btn dedicated-plan-btn d-flex justify-content-between mb-4">
                            Buy Now
                            <FaArrowRight class="" />
                        </button></a>
                        <h4 class='mb-3 top-feature'>Top Features</h4>
                        <ul class="list-unstyled mb-4 streaming-server-feature">
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 2.0-3.0 GHz
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 2×1.92 TB NVMe SSD
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 1 Gbit Port Speed
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 256 GB DDR4 ECC*
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> Unmetered Transfer
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 1 IPv4 IP Address
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div key={plan.id} class="col-12 col-md-6 col-lg-6 explore-plan-col">
                <div class="card-body offshore-plan-body position-relative h-100">
                    <div>
                        <h5 class="card-title mt-3 mb-3">AMD EPYC 7551P(32c/64t)</h5>
                        <div class="best-streaming mb-2">On Demand</div>
                        <a href={plan.url} class='dedicated-plan-btn'>
                        <button class="plan-btn dedicated-plan-btn d-flex justify-content-between mb-4">
                            Buy Now
                            <FaArrowRight class="" />
                        </button></a>
                        <h4 class='mb-3 top-feature'>Top Features</h4>
                        <ul class="list-unstyled mb-4 streaming-server-feature">
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 2.0-3.0 GHz
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 100 TB Transfer
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 1 Gbit Port Speed
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 256 GB DDR4 ECC*
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 2x 1.92 TB NVMe SSD
                            </li>
                            <li key={index} class="mb-2 qloudHostPlan-features">
                                <i class="fa fa-check check"></i> 1 IPv4 IP Address
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="py-5 custom-sol mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12  customSol-text">
                <h3 class="mb-4">Need Custom Solution Media Streaming Offshore Servers</h3>
                <p>Server solutions that scale with your business to deliver exceptional performance on even the most demanding Streaming, IPTV media streaming projects.</p>
            </div>
            <div class="col-lg-4 col-sm-12 m-auto text-center">
                <a href="https://my.qloudhost.com/submitticket.php?step=2&deptid=2">
                <button class=" start-now-btn custom-sol-btn">
                    Contact Us
                    <FaArrowRight class="ms-2" />
                </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="py-4">
        <h2 class="text-center mb-4 w-100">QloudHost Guarantees</h2>
        <p class="text-center mb-5">Boost your website performance with world-class Best & Cheap offshore streaming servers and guaranteed performance.</p>
        <div class="row guarantees-box rounded">
            <div class="col-md-4 mb-4 mb-md-0 guarantee-item d-flex">
                <div class="p-3">
                    <div class="icon mb-3">
                        <img src='/assets/feature/ssd.svg' alt="SSD Icon" class='qloudGurantee-img' />
                    </div>
                    <h5>Fastest NVMe SSD</h5>
                    <p>
                        Get Super-fast performance with blazing fast NVMe SSD drive storage! Our service comes
                        with guaranteed quality, using industry-standard equipment to run our servers.
                    </p>
                </div>
                <div class='gurantee-seprator'></div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0 guarantee-item d-flex">
                <div class="p-3">
                    <div class="icon mb-3">
                        <img src='/assets/icon/netherlands.svg' alt="Netherlands Icon" class='qloudGurantee-img' />
                    </div>
                    <h5>Hosted in Netherlands</h5>
                    <p>
                        We have chosen the best data centers in Netherlands to ensure full privacy and security for
                        your website. It helps you bypass biased country-specific restrictions!
                    </p>
                </div>
                <div class='gurantee-seprator'></div>
            </div>
            <div class="col-md-4 guarantee-item">
                <div class="vertical-divider"></div>
                <div class="p-3">
                    <div class="icon mb-3">
                        <img src='/assets/serviceImg/support.svg' alt="Support Icon" class='qloudGurantee-img'>
                    </div>
                    <h5>24/7 Support</h5>
                    <p>
                        We have a team of individuals who possess technical expertise and are working tirelessly 24/7 to provide support at every step of your online journey.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../inc/technicalSpecification.php');
?>



<div class="install-panel">
    <div class="container py-5">
        <div class="row panel-sec m-auto">
            <!-- Left Section -->
            <div class="col-md-7 d-flex">
                <div class="m-auto">
                    <h2 class="mb-4 w-100">Available Operating Systems</h2>
                    <p class="planHead-con w-100 mb-4">Install your desired OS in just a matter of seconds!!</p>
                    <a href="#explore" class="smooth-scroll">
                        <button class="start-now-btn mb-4">
                            Get Started Now
                            <i class="ms-4 fa fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-md-5">
                <div class="d-flex flex-column align-items-center gap-3 panel-item">
                    <div class="panel-opt">
                        <img src="../assets/img/icon/almaLinux.png" alt="icon" class="h-100" />
                        AlmaLinux
                    </div>
                    <div class="panel-opt">
                        <img src="../assets/img/icon/rockyLinux.png" alt="icon" class="h-100" />
                        RockeyLinux
                    </div>
                    <div class="panel-opt">
                        <img src="../assets/img/icon/window-icon.png" alt="icon" class="h-100" />
                        Windows
                    </div>
                    <div class="panel-opt">
                        <img src="../assets/img/icon/ubuntu.png" alt="icon" class="h-100" />
                        Ubuntu
                    </div>
                    <div class="panel-opt">
                        <img src="../assets/img/icon/debain.png" alt="icon" class="h-100" />
                        Debian
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="privacy-hardware-container mt-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 text-center">
                <img
                    src='/assets/feature/fast-and-reliable.webp'
                    alt="Fast and Reliable Offshore Video Streaming Server"
                    class="img-fluid m-auto" />
            </div>
            <div class="col-md-6 feature-element-sec">
                <h2 class="w-100 mb-3">
                    Fast and Reliable Offshore Video Streaming Server
                </h2>
                <p class="">
                    <a href='/' class='faq-link'>QloudHost</a> is offering you a wide range of offshore video streaming
                    servers with the best and latest hardware equipment. Our servers
                    are especially optimized with higher load balancing features and
                    unmetered resources to provide services that you can rely on! No
                    worries!! If you are a beginner, QloudHost provides you services
                    with automatic features so that you can focus on your video
                    streaming without worrying about the backend part.
                </p>
                <a href="#explore" smooth={true} duration={200}>
                    <button class="btn start-now-btn mt-3">
                        Get Started Now
                        <FaArrowRight class="ms-2" />
                    </button>
                </a>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2 mb-3 text-center">
                <img src='/assets/feature/at-qloudhost.webp' alt="At QloudHost, Quality Matters" class="img-fluid" />
            </div>
            <div class="col-md-6 order-md-1 feature-element-sec">
                <h2 class="mb-3 w-100">At QloudHost, Quality Matters</h2>
                <p class="">
                    Our Cheap offshore streaming servers are running at the
                    <a href='/offshore-hosting/' class="faq-link">best
                    offshore hosting</a> locations with robust hardware equipment and
                    onsite technical experts to ensure that you get quality services
                    and with uncompromised performance
                </p>
                <p class="">
                    Hence it doesn’t really matter how much traffic you have! We can
                    confidently manage everything to provide you with best-in-class
                    services with a smooth streaming experience and untraceable
                    security.
                </p>
                <a href="#explore" smooth={true} duration={200}>
                    <button class="btn start-now-btn mt-3">
                        Get Started Now
                        <FaArrowRight class="ms-2" />
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>




<!-- QloudHost Services -->
<div class="container my-5 qloudService-section">
    <h2 class="text-center mb-3 m-auto">Some Good Reasons To Go With Us!</h2>
    <p class="text-center planHead-con m-auto mb-5">Why choose QloudHost? Well, the clear and confident answer is our features that are mentioned below!</p>
    <div class="row mt-4 justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card service-card-body">
                <div class="p-3">
                    <img src="/assets/serviceImg/secure-offshore-location.svg" alt="" class="mb-3 qloudService-img" />
                    <div class="qloudservice-desc">
                        <div class="service-title mb-2">Secure Offshore Location
                        </div>
                        <div class="card-text service-text mb-3">
                            Our <a href='/offshore-dedicated-servers/' class='faq-link'>Offshore Dedicated server</a> are built far away from the origin country to bypass all the country-specific restrictions and allow you to post your desired DMCA ignored content without any arbitrary restrictions or interruptions.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card service-card-body">
                <div class="p-3">
                    <img src="/assets/serviceImg/anonymous-service.svg" alt="" class="mb-3 qloudService-img" />
                    <div class="qloudservice-desc">
                        <div class="service-title mb-2">100% Anonymous Service
                        </div>
                        <div class="card-text service-text mb-3">
                            `We are running our offshore streaming servers at the best locations that are especially <a href='/' class='faq-link'>popular for offshore hosting services</a> and help us to decrease your visibility on the internet making you untraceable.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card service-card-body">
                <div class="p-3">
                    <img src="/assets/serviceImg/os-choice.svg" alt="" class="mb-3 qloudService-img" />
                    <div class="qloudservice-desc">
                        <div class="service-title mb-2">OS Choice
                        </div>
                        <div class="card-text service-text mb-3">
                            All thanks to our resilient server that is compatible with all the Operating systems, we can offer you a wide range of options to choose and work with your desired OS anytime and anywhere!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card service-card-body">
                <div class="p-3">
                    <img src="/assets/serviceImg/ddos.svg" alt="" class="mb-3 qloudService-img" />
                    <div class="qloudservice-desc">
                        <div class="service-title mb-2">DDoS Protection
                        </div>
                        <div class="card-text service-text mb-3">
                            Our servers come with the best and industry-standard security features that will help you to save your website against illegitimate traffic and ensure your maximum availability on the internet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card service-card-body">
                <div class="p-3">
                    <img src="/assets/feature/uptime.svg" alt="" class="mb-3 qloudService-img" />
                    <div class="qloudservice-desc">
                        <div class="service-title mb-2">99.9% Uptime
                        </div>
                        <div class="card-text service-text mb-3">
                            Why go anywhere else when you get maximum uptime here? Yes!! Our services come with a 99.9% uptime guarantee to provide full assurance of your availability on the internet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card service-card-body">
                <div class="p-3">
                    <img src="/assets/serviceImg/secure-offshore-location.svg" alt="" class="mb-3 qloudService-img" />
                    <div class="qloudservice-desc">
                        <div class="service-title mb-2">24/7 Tech Support
                        </div>
                        <div class="card-text service-text mb-3">
                            We have built a dedicated team of technical experts that are working 24*7 to help you at every stage of your journey and ensure that you can set up your offshore streaming servers without any errors!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='service-section'>
    <div class="container my-5 py-5">
        <h2 class="text-center text-white mb-3 m-auto w-100">Most Popular Streaming Use Cases</h2>
        <p class="text-center text-white w-75 mb-5 planHead-con m-auto">
            The most popular use cases for streaming include servers that comply with the DMCA for streaming, servers that ignore DMCA regulations for streaming, and offshore IPTV servers
        </p>

        <div class='row'>
            <div class="col-md-12 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm service-card">
                    <div class=' d-flex p-4'>
                        <div class="mb-0  text-center me-3">
                            <img src="/assets/icon/" alt='icon' class='streaming-image-icon'>
                        </div>
                        <div>
                            <div class='card-title'>YouTube Streaming</div>
                            <div class='card-text service-desc mb-0'>Are you a YouTuber and Looking for powerful streaming servers? If Yes, then QloudHost will be the right pick for you, thanks to our powerful servers that provide you with a bufferless streaming experience</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm service-card">
                    <div class=' d-flex p-4'>
                        <div class="mb-0  text-center me-3">
                            <img src="/assets/icon/game-streaming.svg" alt='icon' class='streaming-image-icon'>
                        </div>
                        <div>
                            <div class='card-title'>Game Streaming</div>
                            <div class='card-text service-desc mb-0'>Boost your gaming experience with our reliable servers that allow you to perform unhindered streaming for as long as you want! In addition, you will get unmetered resources for uninterrupted performance.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm service-card">
                    <div class=' d-flex p-4'>
                        <div class="mb-0  text-center me-3">
                            <img src="/assets/icon/iptv.svg" alt='icon' class='streaming-image-icon'>
                        </div>
                        <div>
                            <div class='card-title'>IPTV</div>
                            <div class='card-text service-desc mb-0'>QloudHost provides you with the offshore streaming server that you can use to enjoy you country’s television channels from anywhere without any restrictions or arbitrary troubles.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include('../inc/testimonial.php');
?>


<div class='testimonial py-5'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-5 position-relative text-center m-auto'>
                <h2 class="text-center mb-4 m-auto faq-heading">Frequently Asked Questions</h2>
                <div class='faq-header circle-3 position-absolute'></div>
                <div class='faq-header circle-2'></div>
                <div class='faq-header d-flex justify-content-center align-items-center z-1 position-relative'>
                    <h2>Frequently <br /> Asked <br /> Questions</h2>
                </div>
            </div>
            <div class='col-md-7'>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item faq-items">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What is Offshore streaming server?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Offshore streaming servers are especially optimized servers that are used to perform bufferless online video or game streaming on the video platforms such as <a href='https://discord.com/' class='faq-link'>Discord</a> , YouTube, 
                                Facebook streaming and much more.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-items">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                How does Video Streaming Server Work?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Offshore streaming servers work similarly to regular servers, but one key difference is their ability to handle media efficiently. In streaming servers, audio and videos are broken into smaller data packets, which are transmitted to clients in a way that ensures smooth playback. For this purpose, DMCA Ignored Offshore <a href='https://qloudhost.com/ffmpeg-hosting' class='faq-link'>FFmpeg Hosting</a> plays a crucial role, as it provides the necessary tools and support to manage, transcode, and deliver high-quality streaming content seamlessly from the server to the client.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-items">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                How Long Does It Take for Offshore Streaming Server Setup?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Once you finish the payment, <a href='/contact-us/' class='faq-link'></a>our team of technical experts will immediately start working on your servers to complete the setup as soon as possible,
                            and your servers will be ready to use within 2-3 days.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-items">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Are Your Offshore Streaming Servers Managed?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">No, our offshore streaming servers are unmanaged to ensure that you get complete resilience and customisation options with your servers so that you 
                            can customise your resources as per your needs and requirements.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-items">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                                Can I upgrade my Offshore Streaming Servers?

                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes…..! Along with our normal <a href='/offshore-hosting/' class='faq-link'>offshore hosting plans</a> , we also offer you upgraded plans that comes with more powerful resources and features. 
                            You can anytime shift to our upgraded plans without any complex formalities. 
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-items">
                        <h2 class="accordion-header" id="flush-headingseven1">
                            <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseseven1" aria-expanded="false" aria-controls="flush-collapseFour">
                                What Payment Methods Do You Accept?

                            </button>
                        </h2>
                        <div id="flush-collapseseven1" class="accordion-collapse collapse" aria-labelledby="flush-headingseven1"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We use multiple payment methods such as PayPal, debit card, credit card,<a href='https://g.co/kgs/g41cnt' class='faq-link'>UPI</a>  and much more to ensure that you can easily avail our services 
                            from any country with any method you are comfortable!</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





<?php
include('../inc/chatNow.php');
?>

<?php
include('../inc/footer.php');
?>