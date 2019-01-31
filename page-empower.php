<?php

add_filter( 'body_class', 'add_class' );
function add_class($classes) {
  global $post;

  $classes[] = 'jobs empower-jobs';
  return $classes;
}

include 'pages-shared/static-header.php';
?>
<section id="job-hero">
  <div class="inner xlarge-inner">
    <div class="intro-header center-text center-block">
      <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/home-engage.svg" alt="Engage icon">

      <h1 class="biggie semi-bold bottom-margin-small center-text">Cut coding and speed up your iteration</h1>

      <p class="large bottom-margin-medium">Empower your marketing team to create and test customer experiences using real-time, accurate product data.</p>

      <div class="flex items-center justify-center intro-footer bottom-margin-medium">
        <a class="btn btn-success btn-large md-right-margin-small" href="https://app.getvero.com/signup">Start a free trial</a>
        <a class="medium regular unstyled underline-link" id="demo-trigger" rel="leanModal" href="#demo">Talk to our sales team</a>
      </div>
    </div>
  </div>
</section>
<section class="small-padding bg-dots-strip" id="job-quote">
  <div class="inner large-inner">
    <div class="flex flex-wrap justify-center items-center">
      <div class="col-aside">
        <img class="border-radius-4 avatar responsive-image" src="/wp-content/themes/vero/assets/images/jobs/julien-catani.jpg" srcset="/wp-content/themes/vero/assets/images/jobs/julien-catani@2x.jpg 2x" alt="A portrait of Julien Catani">
      </div>

      <div class="col-main">
        <blockquote class="quotation-marks">
          <p class="large quote">We push all of our behavioural events to Vero…, that moves email engagement out of our apps and into the hands of our non-developer teammates, allowing them to build highly-personalized emails, based on complex event-based logic on their own insights.</p>

          <a class="d-block medium regular unstyled underline-link no-bottom-margin" href="https://www.getvero.com/resources/driving-revenue-increasing-nps-personalised-email/">Luke Chesser</a>
          <span class="d-block medium">Founder at Unsplash</span>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="bg-offwhite">
  <div class="inner xlarge-inner">
    <div class="section-header center-block center-text bottom-margin-large">
      <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">API integration</span>

      <h2 class="chunk regular bottom-margin-tiny">Seamlessly integrate Vero with your software</h2>

      <p class="large">Improve the impact of every message you send your customers by including helpful and engaging content.</p>
    </div>

    <div class="grid job-feature job-feature-thirds items-center">
      <div class="col md-right-text">
        <p class="medium">Vero’s flexible API ensures seamless integration with your core software, allowing you to easily transfer and manage your customer data. Vero’s lets you define the user model to ensure it makes sense for your product and business.</p>
      </div>
      <div class="col flex justify-center">
        <div class="image-dots image-dots-1">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/personalization.svg" alt="UI of Fusion with abstract shapes">
        </div>
      </div>
      <div class="col">
        <p class="medium no-bottom-margin">Store, track and segment:</p>

        <ul class="medium bottom-margin-small">
          <li>customer properties (such as name, location, 	timezone); and</li>
          <li>customer activity (checkouts, browsing 	behaviour, product interactions)</li>
        </ul>

        <p class="medium no-bottom-margin">Quickly connect Vero with:</p>

        <ul class="medium bottom-margin-xsmall">
          <li>Customer Data Platforms integrations, such 	as Segment</li>
          <li>Native libraries for Ruby, PHP, Python, and	more</li>
        </ul>
      </div>
    </div>

    <a class="medium regular unstyled underline-link cta-arrow-link" href="">Connect Vero

      <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
    </a>
  </div>
</section>
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="grid job-feature-right bottom-margin-xlarge">
      <div class="col-main">
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Workflows</span>

        <h2 class="chunk regular bottom-margin-xsmall">Code less, move faster</h2>

        <p class="medium">Create and test messaging workflows without writing code. Remove the need to deploy your codebase for every iteration of your marketing messages.</p>

        <p class="medium bottom-margin-xsmall">Confidently design, test and optimize campaigns with real-time data. Vero’s Workflows give you and your team a clear view of all the triggers, conditions, filters, timings and content that make up your customer journey.</p>

        <a class="medium regular unstyled underline-link cta-arrow-link" href="">Test and optimize your campaigns

          <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
      <div class="flex justify-center">
        <div class="image-dots image-dots-4">
          <img class="responsive-image" src="/wp-content/themes/vero/assets/images/jobs/reporting.svg" alt="UI of Event Manager with abstract shapes">
        </div>
      </div>
    </div>
    <div class="grid job-feature-left">
      <div class="col-main">
        <span class="d-block annotation uppercase semi-bold faded bottom-margin-medium">Workflows</span>

        <h2 class="chunk regular bottom-margin-xsmall">Visualize your customers’ experience as you build it. </h2>

        <p class="medium bottom-margin-xsmall">Vero bridges the gap between your engineering team and marketing team.</p>

        <p class="medium bottom-margin-xsmall">Empower your non-technical team members to use your customer data to create, test and optimize customer messages with ease. Help your team move faster.</p>

        <a class="medium regular unstyled underline-link cta-arrow-link" href="">Empower your team and move faster

          <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg"><g stroke="#384254" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M1 5.5h14M10 1l5 4.5-5 4.5"/></g></svg>
        </a>
      </div>
      <div class="flex items-center">
      </div>
    </div>
  </div>
</section>
<section class="double-padding footer-cta bg-dots-strip bg-right">
  <div class="inner xlarge-inner">
    <div class="flex flex-wrap">
      <div class="col-aside">
        <h3 class="tubs regular bottom-margin-tiny">Put your data first and craft better customer experiences</h3>
        <p class="medium">Let Vero help you manage every touchpoint your customer has with your business.</p>
      </div>
      <div class="col-main flex">
        <a class="btn btn-large btn-success self-center left-margin-auto" href="#none">Start a free trial</a>
      </div>
    </div>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("PricingPage");
  include("demo-enquiry-form.php");
?>