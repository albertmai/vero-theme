<?php
  include 'pages-shared/static-header.php';
?>
<section class="double-padding overflow-hidden" id="hero">
  <?php
    do_action( 'genesis_header' );
    do_action( 'genesis_after_header' );
  ?>
  <div class="inner xlarge-inner">
    <div class="flex flex-column md-flex-row">
      <div class="col-main center-text md-left-text">
        <h1 class="hulk bottom-margin-small home-title">Create better customer experiences</h1>

        <p class="larger bottom-margin-medium">The messaging platform that helps you drive customer engagement and grow your business</p>

        <div class="flex flex-wrap md-flex-nowrap items-center">
          <a class="btn btn-success btn-large" href="https://app.getvero.com/signup">Start a free trial</a>

          <span class="d-inline-block faded horizontal-margin-tiny hide md-show">or</span>

          <a class="btn btn-primary btn-outline btn-large" id="demo-trigger" rel="leanModal" href="#demo">Talk to us</a>
        </div>
      </div>
      <div class="col-aside relative">
        <picture>
          <source media="(max-width: 768px)" srcset="/wp-content/themes/vero/assets/images/home/create-better-customer-experiences-workflows-vero-mobile.png 1x, /wp-content/themes/vero/assets/images/home/create-better-customer-experiences-workflows-vero-mobile@2x.png 2x">
          <source media="(min-width: 769px)" srcset="/wp-content/themes/vero/assets/images/home/create-better-customer-experiences-workflows-vero.png 1x, /wp-content/themes/vero/assets/images/home/create-better-customer-experiences-workflows-vero@2x.png 2x">
          <img src="/wp-content/themes/vero/assets/images/home/create-better-customer-experiences-workflows-vero.png" alt="Create better customer experiences with workflows in Vero">
        </picture>
      </div>
    </div>
  </div>
</section>
<section class="logos" id="logos">
  <div class="inner xlarge-inner flush-top bottom-padding-smedium center-text border-bottom-light">
    <h2 class="micro regular faded bottom-margin-smedium">Trusted by leading brands</h2>

    <ul class="unstyled-list logo-list flex flex-column md-flex-row justify-around">
      <li class="flex justify-center logo-list-item no-margin">
        <a href="https://unsplash.com">
          <img src="/wp-content/themes/vero/assets/images/home/logos/unsplash-logo-vero.svg" alt=" Unsplash logo Vero">
        </a>
      </li>
      <li class="flex justify-center logo-list-item no-margin">
        <a href="http://tidal.com">
          <img src="/wp-content/themes/vero/assets/images/home/logos/tidal-logo-vero.svg" alt="Tidal logo Vero">
        </a>
      </li>
      <li class="flex justify-center logo-list-item no-margin">
        <a href="http://monzo.com">
          <img src="/wp-content/themes/vero/assets/images/home/logos/monzo-logo-vero.svg" alt="Monzo logo Vero">
        </a>
      </li>
      <li class="flex justify-center logo-list-item no-margin">
        <a href="http://about.me">
          <img src="/wp-content/themes/vero/assets/images/home/logos/aboutme-logo-vero.svg" alt="About.me logo Vero">
        </a>
      </li>
      <li class="flex justify-center logo-list-item no-margin">
        <a href="http://helloprint.co.uk">
          <img src="/wp-content/themes/vero/assets/images/home/logos/helloprint-logo-vero.svg" alt="Helloprint logo Vero">
        </a>
      </li>
    </ul>
  </div>
</section>
<section class="double-padding bg-dots-strip bg-left">
  <div class="inner xlarge-inner">
    <header class="inner small-inner flush-top flush-bottom bottom-margin-medium center-text">
      <h2 class="chunk regular no-margin">Design and manage automated messages throughout the entire customer lifecycle</h2>
    </header>
    <div class="grid grid-thirds center-text">
      <a class="d-block job-card padding-small md-padding-smedium md-horizontal-padding-medium border-light border-radius-2 bg-white unstyled" href="empower-your-team">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/empower-your-team-with-vero.svg" alt="Empower your team with Vero">

        <h3 class="micro semi-bold bottom-margin-tiny">Empower your team</h3>

        <p class="bottom-margin-smedium">Empower your marketing team to create and test customer experiences using real-time data.</p>
      </a>
      <a class="d-block job-card padding-small md-padding-smedium border-light border-radius-2 bg-white unstyled" href="/engage-customers">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/engage-customers-with-vero.svg" alt="Engage customers with Vero">

        <h3 class="micro semi-bold bottom-margin-tiny">Engage customers</h3>

        <p class="bottom-margin-smedium">Send email and push notifications that drive customer engagement and increase revenue.</p>
      </a>
      <a class="d-block job-card padding-small md-padding-smedium md-horizontal-padding-medium border-light border-radius-2 bg-white unstyled" href="/coordinate-messaging">
        <img class="bottom-margin-tiny" src="/wp-content/themes/vero/assets/images/home/coordinate-messaging-with-vero.svg" alt="Co-ordinate your messaging strategy with Vero">

        <h3 class="micro semi-bold bottom-margin-tiny">Co-ordinate messaging</h3>

        <p class="bottom-margin-smedium">Create and manage emails, push notifications and custom interactions on a single canvas.</p>
      </a>
    </div>
  </div>
</section>
<!--
<section class="double-padding">
  <div class="inner xlarge-inner">
    <div class="flex flex-wrap">
      <div class="js-showcase-carousel-navigation showcase-carousel-navigation"></div>

      <div class="js-showcase-carousel showcase-carousel">
        <div class="js-showcase-item"
          data-title="Workflows"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular regular">Native and CDP data integrations</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Integrations"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular regular">Unique customer profiles</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Customer profiles"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular regular">Workflows</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Segmentation"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular regular">Segmentation</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Data management"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular regular">Email</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Email"
          data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt."
        >
          <h2 class="tubs regular regular">iOS/Android push</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Push notifications"
          data-desc="Lorem ipsum dolor sit, amett…"
        >
        </div>
        <div class="js-showcase-item"
          data-title="Personalization"
        >
        </div>
        <div class="js-showcase-item"
          data-title="A/B testing"
        >
          <h2 class="tubs regular regular">A/B testing</h2>
          <div class="bg-gray-lighter" style="height: 440px;"></div>
        </div>
        <div class="js-showcase-item"
          data-title="Reporting"
          data-desc="Lorem ipsum dolor sit, amett…"
        >
          <h2 class="tubs regular regular">Reporting</h2>
          <div class="bg-gray-lighter" style="height: 400px;"></div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<section class="bg-offwhite overflow-visible">
  <div class="inner xlarge-inner center-text md-left-text">
    <h2 class="tubs regular regular bottom-margin-smedium jump-link" id="customers">What people have said about Vero</h5>

    <div class="flex items-center justify-center">
      <div class="customer-scroll flex flex-wrap smd-flex-nowrap overflow-x-scroll">
        <blockquote class="bg-white padding-small border-radius-2 border-light flex flex-wrap md-flex-nowrap customer-quote">
          <div class="col-aside right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/luke-chesser-vero testimonial.jpg" srcset="/wp-content/themes/vero/assets/images/customers/luke-chesser-vero testimonial@2x.jpg 2x" alt="Luke Chesser Vero testimonial">
          </div>

          <div class="col-main">
            <img src="/wp-content/themes/vero/assets/images/home/logos/unsplash-logo-vero.svg" height="70" alt="Unsplash logo Vero">

            <p class="medium quote">"Four amazing services that make Unsplash possible with a small team: Heroku, Stream, Imgix, &amp; Vero.</p>

            <a class="d-block semi-bold unstyled" href="https://twitter.com/lukechesser/status/892448177697292289?ref_src=twsrc%5Etfw" target="_blank">Luke Chesser</a>
            <span>Cofounder at Unsplash</span>
          </div>
        </blockquote>

        <blockquote class="bg-white padding-small border-radius-2 border-light flex flex-wrap md-flex-nowrap customer-quote">
          <div class="col-aside right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/julien-catani-vero-testimonial.jpg" srcset="/wp-content/themes/vero/assets/images/customers/julien-catani-vero-testimonial@2x.jpg 2x" alt="Julien Catani Vero testimonial">
          </div>

          <div class="col-main">
            <img class="self-center"
            src="/wp-content/themes/vero/assets/images/home/logos/helloprint-logo-vero.svg" height="70" alt="Helloprint logo Vero">

            <p class="medium quote">"Vero enables us to use real-time data to enrich our emails with relevant content to drive a higher ROI.</p>

            <a class="d-block semi-bold unstyled" href="https://www.getvero.com/resources/driving-revenue-increasing-nps-personalised-email/" target="_blank">Julien Catani</a>
            <span>Head of CRM at Helloprint</span>
          </div>
        </blockquote>

        <blockquote class="bg-white padding-small border-radius-2 border-light flex flex-wrap md-flex-nowrap customer-quote">
          <div class="col-aside right-margin-small">
            <img src="/wp-content/themes/vero/assets/images/customers/nathan-field-vero-testimonial.jpg" srcset="/wp-content/themes/vero/assets/images/customers/nathan-field-vero-testimonial@2x.jpg 2x" alt="Nathan Field Vero testimonial">
          </div>

          <div class="col-main">
            <img src="/wp-content/themes/vero/assets/images/home/logos/unsplash-logo-vero.svg" height="70" alt="Drawboard">

            <p class="medium quote">"Heck! Vero's support is exceptional!</p>

            <a class="d-block semi-bold unstyled" href="https://twitter.com/nathfield/status/909951597500817409?ref_src=twsrc%5Etfw" target="_blank">Nathan Field</a>
            <span>Head of Marketing at Drawboard</span>
          </div>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-shapes bg-center">
  <div class="inner xlarge-inner center-text">
    <div class="donut horizontal-margin-auto bottom-margin-tiny">
      <div>
        <span class="chunk semi-bold bottom-margin-micro font-brand-success">91</span>
        <span class="d-block annotation horizontal-margin-medium semi-bold faded uppercase">Happiness score</span>
      </div>
      <img src="/wp-content/themes/vero/assets/images/home/world-class-support-vero.svg" alt="World-class support provided by Vero">
    </div>

    <span class="medium"><span class="font-brand-success">95% great</span> <span class="font-brand-warning">2% ok</span> <span class="font-brand-error">3% not good</span></span>
    <p class="annotation bottom-margin-medium faded">Based on last 6 months of support ratings</p>

    <header class="section-header center bottom-margin-medium">
      <h2 class="chunk regular bottom-margin-small">World-class support</h2>

      <p class="large">Our global support team is on hand to help 24 hours a day. We have dedicated support team members in Australia, Europe, and the USA</p>
    </header>
  </div>
</section>
<?php
  include 'pages-shared/footer-cta.php';
?>
<?php
  no_content_genesis_footer();
  include("demo-enquiry-form.php");
?>
