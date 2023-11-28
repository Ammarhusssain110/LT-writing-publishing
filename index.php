<?php
include 'includes/header.php';
$page = 'home';
?>
<main>
    <!-- sec-banner start here -->
    <section class="main-banner-bg">
        <div class="container">
            <div class="row justify-content-evenly align-items-center">
                <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="banner-content">
                        <h1>Publishing Your Book
                            Has Never Been Easier!</h1>
                        <p>A One-Stop Shop For All Your Publishing Needs
                            An Exclusive Bundle Of Proofreading, Formatting, Cover Design, Ebooks, Print-On-Demand, And
                            Distribution Over 100+ Channels</p>
                        <div class="banner-brand">
                            <div class="brand-inner">
                                <img src="assets/images/icon/48-hours.png" alt="img" class="img-fluid">
                                <div class="brand-details">
                                    <p>48 Hour <br> Delivery</p>
                                </div>
                            </div>
                            <div class="brand-inner">
                                <img src="assets/images/icon/infinity.png" alt="img" class="img-fluid">
                                <div class="brand-details">
                                    <p>Unlimited <br>Revisions</p>
                                </div>
                            </div>
                            <div class="brand-inner">
                                <img src="assets/images/icon/flash.png" alt="img" class="img-fluid">
                                <div class="brand-details">
                                    <p>Get Accepted To <br>
                                        Amazon Fast</p>
                                </div>
                            </div>
                        </div>
                        <button class="start-btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">Let's Get
                            Started</button>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-5 col-xxl-5" data-aos="fade-right"
                    data-aos-duration="1000">
                    <div class="inner-published-form">
                        <h3>Become Published Author</h3>
                        <form action="https://leads.infinityprojectmanager.com/brand/lt-writing/lead" method="GET"
                            class="serv-published-form">
                            <input type="hidden" name="brand_name" value="lt-writing.com">
                            <input type="hidden" id="lead_area" name="lead_area"
                                value="https://www.lt-writing.com/lp/publishing">
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <select name="manuscript-ready" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="" disabled="">Do You Have A Manuscript Ready?</option>
                                            <option value="Yes, I'm ready to publish today">Yes, I'm ready to publish
                                                today</option>
                                            <option value="Yes, I'll be ready to publish in 1 to 3 months">Yes, I'll be
                                                ready to publish in 1 to 3 months</option>
                                            <option value="Yes, I'll be ready to publish in 3 to 6 months">Yes, I'll be
                                                ready to publish in 3 to 6 months</option>
                                            <option value="Yes, I’ll be ready to publish in 6 to 12 months">Yes, I’ll be
                                                ready to publish in 6 to 12 months</option>
                                            <option value="No, I do not have a book or manuscript ready">No, I do not
                                                have a book or manuscript ready</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <select name="published-before" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="" disabled="">Have You Published Before?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <select name="plan-on-publishing" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="" disabled="">What Type Of Book You Plan On Publishing?
                                            </option>
                                            <option value="Business">Business</option>
                                            <option value="Biography">Biography</option>
                                            <option value="Inspirational">Inspirational</option>
                                            <option value="Non-Fiction">Non-Fiction</option>
                                            <option value="How-To">How-To</option>
                                            <option value="Autobiography/Memoir">Autobiography/Memoir</option>
                                            <option value="Self-Help">Self-Help</option>
                                            <option value="Children">Children</option>
                                            <option value="Spiritual/Religious">Spiritual/Religious</option>
                                            <option value="Fiction">Fiction</option>
                                            <option value="Art/Photography">Art/Photography</option>
                                            <option value="Cookbook">Cookbook</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group-select">
                                        <h4>What services are you looking for?</h4>
                                        <div class="form-check-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="self-publishing"
                                                    value="Self Publishing" id="selfPublishing">
                                                <label class="form-check-label" for="selfPublishing">
                                                    Self Publishing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="editing"
                                                    value="Editing" id="editing">
                                                <label class="form-check-label" for="editing">
                                                    Editing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cover-design"
                                                    value="Cover Design" id="coverDesign">
                                                <label class="form-check-label" for="coverDesign">
                                                    Cover Design
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="printing"
                                                    value="Printing" id="printing">
                                                <label class="form-check-label" for="printing">
                                                    Printing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="interior-formatting" value="Interior Formatting"
                                                    id="interiorFormatting">
                                                <label class="form-check-label" for="interiorFormatting">
                                                    Interior Formatting
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="illustration"
                                                    value="Illustration" id="illustration">
                                                <label class="form-check-label" for="illustration">
                                                    Illustration
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="number" name="phone" placeholder="contact Number" required="">
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <button type="submit" class="submit-btn">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-banner end here -->
    <!-- Banner Down Brands Section Start Here -->
    <section class="bandown-brands-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="brand-details">
                        <h4>Your Book Deserves A Global Audience</h4>
                        <h2>We Can Make It Happen.</h2>
                        <p>Manage Your Royalties From One Place, And Distribute Your Book Across More Than 100 Channels.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bandown-brands-inner">
                        <div class="bandown-brands-item">
                            <div class="brands-item-img">
                                <img src="assets/images/brand-logo/bl-1.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="brands-item-img">
                                <img src="assets/images/brand-logo/bl-2.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="brands-item-img">
                                <img src="assets/images/brand-logo/bl-3.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="brands-item-img">
                                <img src="assets/images/brand-logo/bl-4.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="brands-item-img">
                                <img src="assets/images/brand-logo/bl-5.png" alt="brand" class="img-fluid">
                            </div>
                            <div class="brands-item-img">
                                <img src="assets/images/brand-logo/bl-6.png" alt="brand" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Down Brands Section End Here -->
    <!-- sec-story-book start here -->
    <section class="sec-story-book">
        <div class="container">
            <div class="row justify-content-evenly align-items-center flex-column-reverse flex-md-row flex-lg-row  flex-xl-row flex-xxl-row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="story-book">
                        <img src="assets/images/story-book.png" alt="img" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="story-details">
                        <h4>Become A Published Author Today!</h4>
                        <p>Your One-Stop Self-Publishing Solution. Everything A Self-Publishing Author Needs, From Copy
                            Editing And Illustrations To Distribution, Book Promotion, And Screenwriting</p>
                        <p>Our Team Consists Of Experienced Editors, Designers, And Publishing Professionals Dedicated
                            To Helping You Succeed. We Understand The Challenges Of Self-Publishing, And We Are Here To
                            Guide You Every Step Of The Way. From Manuscript Editing To Cover Design To Book Formatting,
                            We Offer A Wide Range Of Services To Help You Bring Your Book To Life.</p>
                        <button class="start-btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">Let's Get
                            Started</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- sec-story-book end here -->
    <!-- sec-services start here -->
    <section class="sec-services">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="services-title">
                        <h2>Our Services</h2>
                        <p>LT-Writing Offers Premium Book Writing Services In The Following Genres</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="services-main">
                        <div class="card services-card">
                            <div class="services-details">
                                <img src="assets/images/icon/book.png" alt="img" class="img-fluid">
                                <h4>Printed</h4>
                                <p>Print Paper &amp; Hardcover On Demand</p>
                            </div>
                        </div>
                        <div class="card services-card">
                            <div class="services-details">
                                <img src="assets/images/icon/e-book.png" alt="img" class="img-fluid">
                                <h4>E-Book</h4>
                                <p>Hand-Formatted For Every
                                    Tablet, Phone, &amp; Ereader.</p>
                            </div>
                        </div>
                        <div class="card services-card">
                            <div class="services-details">
                                <img src="assets/images/icon/edit.png" alt="img" class="img-fluid">
                                <h4>Editing</h4>
                                <p>Polish Your Words With A
                                    Professional Edit.</p>
                            </div>
                        </div>
                        <div class="card services-card">
                            <div class="services-details">
                                <img src="assets/images/icon/cover.png" alt="img" class="img-fluid">
                                <h4>Cover Design</h4>
                                <p>Custom Covers That Connect With Readers At A Glance.</p>
                            </div>
                        </div>
                        <div class="card services-card">
                            <div class="services-details">
                                <img src="assets/images/icon/graphic-design.png" alt="img" class="img-fluid">
                                <h4>Illustrations</h4>
                                <p>Brilliant Illustrations Created
                                    By Our Talented Artists.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-services end here -->
    <!-- sec-testimonial start here -->
    <section class="sec-testimonial">
        <div class="container-fluid p-0">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
                    <div class="testi-title">
                        <h2>Make A Lasting Impression!</h2>
                        <p>Your One-Stop Self-Publishing Solution. Everything A Self-Publishing Author Needs, From Copy
                            Editing And Illustrations
                            To Distribution, Book Promotion, And Screenwriting.</p>
                        <div class="test-button">
                            <button class="start-btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">Let's Get
                                Started</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center gy-0 gx-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="testi-main">
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-1.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-2.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-3.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-4.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-5.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-1.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-2.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-3.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-4.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tesi-item-slider">
                                <div class="testi-item">
                                    <div class="card test-card">
                                        <div class="testi-img">
                                            <img src="assets/images/testi/testi-5.png" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-testimonial end here -->
    <!-- sec-portfolio start here -->
    <section class="sec-portfolio">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="portfolio-title">
                        <h3>Books Straight From Our Vault</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="portfolio-tab-inner">
                        <nav>
                            <div class="justify-content-evenly nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-fiction-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-fiction" type="button" role="tab" aria-controls="nav-fiction"
                                    aria-selected="false" tabindex="-1">Fiction</button>
                                <button class="nav-link" id="nav-action-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-action" type="button" role="tab" aria-controls="nav-action"
                                    aria-selected="true">Biography</button>
                                <button class="nav-link" id="nav-comics-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-comics" type="button" role="tab" aria-controls="nav-comics"
                                    aria-selected="false" tabindex="-1">Non-Fiction</button>
                                <button class="nav-link" id="nav-rome-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-rome" type="button" role="tab" aria-controls="nav-rome"
                                    aria-selected="false" tabindex="-1">Romance</button>
                                <button class="nav-link" id="nav-triller-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-triller" type="button" role="tab" aria-controls="nav-triller"
                                    aria-selected="false" tabindex="-1">Triller</button>
                                <button class="nav-link" id="nav-ch-tab" data-bs-toggle="tab" data-bs-target="#nav-ch"
                                    type="button" role="tab" aria-controls="nav-ch" aria-selected="false"
                                    tabindex="-1">Children's Book</button>
                            </div>
                        </nav>
                        <div class="row">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="fade tab-pane active show" id="nav-fiction" role="tabpanel"
                                    aria-labelledby="nav-fiction-tab">
                                    <div class="pt-portfolio-wrap">
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/1.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/2.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/3.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/4.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/5.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/6.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/7.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/8.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/9.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/10.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/11.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/fiction/12.webp" class="img-fluid" alt>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="nav-action" role="tabpanel"
                                    aria-labelledby="nav-action-tab">
                                    <div class="pt-portfolio-wrap">
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-1.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-2.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-3.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-4.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-5.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-6.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-7.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-8.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-9.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-10.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-11.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/biography/b-12.webp" class="img-fluid" alt>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="nav-comics" role="tabpanel"
                                    aria-labelledby="nav-comics-tab">
                                    <div class="pt-portfolio-wrap">
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-1.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-2.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-3.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-4.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-5.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-6.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-7.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-8.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-9.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-10.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-11.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/non-fiction/f-12.webp" class="img-fluid" alt>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="nav-rome" role="tabpanel" aria-labelledby="nav-rome-tab">
                                    <div class="pt-portfolio-wrap">
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-1.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-2.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-3.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-4.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-5.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-6.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-7.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-8.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-9.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-10.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-11.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/romance/r-12.webp" class="img-fluid" alt>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="nav-triller" role="tabpanel"
                                    aria-labelledby="nav-triller-tab">
                                    <div class="pt-portfolio-wrap">
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-1.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-2.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-3.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-4.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-5.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-6.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-7.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-8.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-9.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-10.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-11.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/thriller/t-12.webp" class="img-fluid" alt>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id="nav-ch" role="tabpanel" aria-labelledby="nav-ch-tab">
                                    <div class="pt-portfolio-wrap">
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-1.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-2.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-3.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-4.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-5.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-6.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-7.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-8.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-9.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-10.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-11.webp" class="img-fluid" alt>
                                        </div>
                                        <div class="pt-new-img">
                                            <img src="assets/images/books/children/c-12.webp" class="img-fluid" alt>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-portfolio  end here -->

    <!-- Process Main Section Start Here -->
    <section class="process-main-sec">
        <div class="container">
            <div class="process-main-head">
                <h2 class="heading-two">Our Process</h2>
                <p>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam Nonumy Eirmod Tempor Invidunt Ut
                    Labore Et Dolore
                    Magna Aliquyam Erat, Sed Diam Voluptua. At Vero Eos.</p>
            </div>
            <div class="process-main-inner">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="process-inner-box">
                            <div class="step-tag odd-step-tag">
                                <span>Step 01</span>
                            </div>
                            <div class="round-div"></div>
                            <div class="process-box-content odd-box-content">
                                <h4 class="heading-five">Place Your Order</h4>
                                <p>Call Us Now And Give Us The Details Of Your Book. Our Experts Will Create An Outline
                                    Accordingly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="process-inner-box">
                            <div class="step-tag even-step-tag">
                                <span>Step 02</span>
                            </div>
                            <div class="round-div"></div>
                            <div class="process-box-content even-process-box-content">
                                <h4 class="heading-five">Chapters Delivery</h4>
                                <p>Next, We Will Begin Drafting The Chapters As Per The Outline, And Send Them To You
                                    For Feedback.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="process-inner-box">
                            <div class="step-tag odd-step-tag">
                                <span>Step 03</span>
                            </div>
                            <div class="round-div"></div>
                            <div class="process-box-content odd-box-content">
                                <h4 class="heading-five">Feedback &amp; Approval</h4>
                                <p>Our Professional Book Writers Will Cater To Your Comments And Feedback And Revise The
                                    Content Accordingly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="process-inner-box">
                            <div class="step-tag even-step-tag">
                                <span>Step 04</span>
                            </div>
                            <div class="round-div round-div-last"></div>
                            <div class="process-box-content even-process-box-content">
                                <h4 class="heading-five">Publication</h4>
                                <p>LT-Writing Will Then Publish The Book &amp; Promote It To Boost Sales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process Main Section End Here -->

    <!-- sec-author start here -->
    <section class="sec-author">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xx-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="author-title">
                        <h2>Why Authors Love Us</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="card author-card">
                        <div class="author-img">
                            <img src="assets/images/auth-1.png" alt="img" class="img-fluid">
                        </div>
                        <div class="author-details">
                            <p>One-Stop Shop For All Your Publishing Needs
                                In An All-Inclusive Quote.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="card author-card">
                        <div class="author-img">
                            <img src="assets/images/auth-2.png" alt="img" class="img-fluid">
                        </div>
                        <div class="author-details">
                            <p>Dedicated Project Manager To Guide You
                                Every Step Of The Way.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="card author-card">
                        <div class="author-img">
                            <img src="assets/images/auth-3.png" alt="img" class="img-fluid">
                        </div>
                        <div class="author-details">
                            <p>Unlimited Revisions Until You Are 100%
                                Satisfied With Your Book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-author end here -->
    <!--sec-client  start here  -->
    <section class="sec-home-client">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="slider-title">
                        <h4>Trusted Publisher Since 2009</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
                    <div class="card box-card">
                        <h6>Excellent</h6>
                        <div class="slide-img">
                            <img src="assets/images/review-5star.png" alt="img" class="img-fluid thumb">
                            <p>Based On 218 Reviews</p>
                            <img src="assets/images/trust.png" alt="img" class="img-fluid thumb-2">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
                    <div class="owl-carousel owl-theme meetnow-slider" id="meetnow-slider">
                        <div class="item">
                            <div class="card slider-card">
                                <div class="box-image">
                                    <img src="assets/images/testimonials/girl-thumb4.png" alt="img" class="img-fluid">
                                    <div class="box-desc">
                                        <h6>Laurie A. Couture</h6>
                                        <p>November 2, 2022</p>
                                        <div class="slide-img">
                                            <img src="assets/images/review-5star.png" alt="img" class="img-fluid thumb">
                                        </div>
                                    </div>
                                </div>
                                <div class="desc">
                                    <p>I'm A Poet Working On My Second Book With LT Writers. My God, They're Amazing, I
                                        Mean
                                        It. They Will Work With You Until Your Project Is As Close To Perfect As It Can
                                        Be.
                                        Then They'll Introduce It To The World. I'm Working With Madison. She's A
                                        Genius,
                                        And So Hardworking. Call 'Em. And Get Yourself A Copy Of Blameforest.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card slider-card">
                                <div class="box-image">
                                    <img src="assets/images/testimonials/thumb-girl3.png" alt="img" class="img-fluid">
                                    <div class="box-desc">
                                        <h6>Dr. Rita Carr</h6>
                                        <p>January 25, 2023</p>
                                        <div class="slide-img">
                                            <img src="assets/images/review-5star.png" alt="img" class="img-fluid thumb">
                                        </div>
                                    </div>
                                </div>
                                <div class="desc">
                                    <p>Rejoicing! As A Christian Author, I Have Had An Exceptional, Wonderful And
                                        Absolutely
                                        Great Experience With LT Writers As One Of Their Authors. The CEO Is A Caring
                                        Individual That Truly Seeks To Help The Author Have A Successful Experience And
                                        Rewarding Journey.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card slider-card">
                                <div class="box-image">
                                    <img src="assets/images/testimonials/thumb-girl1.png" alt="img" class="img-fluid">
                                    <div class="box-desc">
                                        <h6>Venetta Cox</h6>
                                        <p>July 12, 2022</p>
                                        <div class="slide-img">
                                            <img src="assets/images/review-5star.png" alt="img" class="img-fluid thumb">
                                        </div>
                                    </div>
                                </div>
                                <div class="desc">
                                    <p>Outstanding!!
                                        From The Moment I Called LT Writers To Inquire, I Knew I Was In The Right Hands!
                                        Their Stellar Reviews Impressed Me And So My Publishing Journey Began. The
                                        Entire
                                        Process Has Been Top Notch! I Was Consulted On Every Detail For Approval
                                        Throughout,
                                        And There Were No Hidden Costs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card slider-card">
                                <div class="box-image">
                                    <img src="assets/images/testimonials/thumb-girl2.png" alt="img" class="img-fluid">
                                    <div class="box-desc">
                                        <h6>Lisa Jeffers</h6>
                                        <p>July 11, 2022</p>
                                        <div class="slide-img">
                                            <img src="assets/images/review-5star.png" alt="img" class="img-fluid thumb">
                                        </div>
                                    </div>
                                </div>
                                <div class="desc">
                                    <p>Excellent Experience!
                                        I Recently Published My Children's Book: MRS.TINKER AND HER SUPER ROCKET POWERED
                                        RECLINER With LT Writers. They Were Kind, Efficient & Very Affordable. Founder
                                        J.J.
                                        Herbert Calls Each Customer Individually. I Will Definitely Publish With Them
                                        Again.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--sec-client end   here  -->

    <!-- contact-form start here -->
    <section class="sec-contact-form">
        <div class="container">
            <div class="row justify-content-evenly align-items-center flex-column-reverse  flex-lg-row  flex-xl-row flex-xxl-row ">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="contact-image">
                        <img src="assets/images/cta.png" alt="img" class="img-fluid">
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="contact-details">
                        <h2>Talk To Us!</h2>
                        <p>Get In Touch With Our Book Writing Experts &amp; Kickstart Your Journey To Becoming An Author.
                        </p>
                        <form action="https://leads.infinityprojectmanager.com/brand/lt-writing/lead" method="GET">
                            <input type="hidden" name="brand_name" value="lt-writing.com">
                            <input type="hidden" id="lead_area" name="lead_area" value="https://lt-writing.com/lp/black-friday">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="form-group">
                                        <input type="text" name="Name" placeholder=" Name" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="form-group">
                                        <input type="number" name="contact" placeholder="contact Number" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="form-group">
                                        <input type="Email" name="Email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea name="Message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <button type="submit" class="submit-btn">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form end here -->



</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>