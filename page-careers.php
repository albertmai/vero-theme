<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'careers transparent-header';
    return $classes;
  }
  include 'pages-shared/static-header.php';
?>
<section id="careers-hero" class="hero double-padding dark-box">
  <?php
  do_action( 'genesis_before_header' );
  do_action( 'genesis_header' );
  do_action( 'genesis_after_header' );
?>
  <div class="inner">
    <h1 class="hulk bold no-margin-top">We've come far.<br/>With your help we’ll go further.</h1>
    <a class="btn btn-outline" href="#careers-job-listings">Get amongst it!</a>
  </div>
</section>
<section id="careers-mission" class="double-padding">
  <div class="inner small-inner flush-bottom">
    <h1 class="chunk">We believe data is changing our world</h1>
    <p class="medium">Collecting realtime data and using it responsibly to create products and messages that deliver <strong>more value</strong> is the key to success for the next generation of products. At Vero, you'll help Product Teams harness the power of their data to <strong>create</strong> message and product experiences that matter.</p>
  </div>
</section>
<section id="careers-why" class="double-padding">
  <div class="inner small-inner flush-bottom"">
    <h1 class="chunk no-margin bottom-margin-large">Be empowered to do your best work</h1>
  </div>
  <div class="inner large-inner flush-top flush-bottom">
    <ul class="feature-list unstyled-list thirds sm-left-align">
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/rubix.svg" class="bottom-margin-small">
        <p class="semi-bold">Work on hard problems</p>
        <p class="">Smart people should work on the hardest problems. At Vero, you'll have the opportunity to tackle the kind of challenges that make work interesting.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/meteor.svg" class="bottom-margin-small">
        <p class="semi-bold">Make an impact</p>
        <p class="">We believe in quality over quantity. As a young company with a growing team you will have the opportunity to make a big impact on all aspects of Vero.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/grow.svg" class="bottom-margin-small">
        <p class="semi-bold">Opportunities to grow</p>
        <p class="">We believe in growing and moving forward, as a company and as individuals. Our goal is to enable you to seek the knowledge and learn the skills that make you a better human.</p>
      </li>
    </ul>
  </div>
</section>
<section id="careers-vibe" class="double-padding">
  <div class="inner small-inner bottom-padding-medium">
    <h1 class="chunk">Live to work, not the other way around</h1>
    <p class="medium">We believe that happy teams are the key to a powerful business. At Vero we are an empowered group of people who accomplish a lot. By helping each other to overcome any challenge that comes our way we have built a company that thrives on trust, positivity and a pinch of adventure.</p>
  </div>
  <div class="inner flush-top large-inner vibe-images">
    <div class="vibe-image" id="glass"></div>
    <div class="vibe-image" id="cafe"></div>
    <div class="vibe-image" id="bar"></div>
    <div class="vibe-image" id="boat"></div>
  </div>
</section>
<section id="careers-profiles" class="double-padding">
  <ul class="" id="careers-profiles-slider">
    <li class="rory">
      <div class="inner">
        <h3>Do exceptional work with extraordinary people</h3>
        <p class="italic">
          <q>Every day I get the chance to work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference.</q>
        </p>
        <div class="top-margin-small">
          <div class="pull-left rory small-profile-image"></div>
          <h4>Rory Colsell</h4>
          <p class="no-top-margin">Product Design</p>
        </div>
        <!-- <div class="bx-controls">
          <div class="bx-control bx-active" data-bx="0"></div>
          <div class="bx-control" data-bx="1"></div>
          <div class="bx-control" data-bx="2"></div>
        </div> -->
      </div>
    </li>
    <!-- <li class="andrew">
      <div class="inner">
        <h3>Do exceptional work with extraordinary people</h3>
        <p class="italic">
          <q>Everyday I get the chance work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference, that’s what drives me every day.</q>
        </p>
        <div class="top-margin-small">
          <div class="pull-left andrew small-profile-image"></div>
          <h4>Andrew O'Brien</h4>
          <p class="no-top-margin">Product Engineering</p>
        </div>
        <div class="bx-controls">
          <div class="bx-control" data-bx="0"></div>
          <div class="bx-control bx-active" data-bx="1"></div>
          <div class="bx-control" data-bx="2"></div>
        </div>
      </div>
    </li>
    <li class="mitchell">
      <div class="inner">
        <h3>Do exceptional work with extraordinary people</h3>
        <p class="italic">
          <q>Everyday I get the chance work with amazing people to help improve what is a mission critical product for many of our customers. Our customers are very passionate about what they do so each new release makes a difference, that’s what drives me every day.</q>
        </p>
        <div class="top-margin-small">
          <div class="pull-left mitchell small-profile-image"></div>
          <h4>Mitchell Quille</h4>
          <p class="no-top-margin">Engineering</p>
        </div>
        <div class="bx-controls">
          <div class="bx-control" data-bx="0"></div>
          <div class="bx-control" data-bx="1"></div>
          <div class="bx-control bx-active" data-bx="2"></div>
        </div>
      </div>
    </li> -->
  </ul>
</section>
<section id="careers-perks" class="double-padding floating-section light-box">
  <div class="inner blue-box">
    <h1 class="chunk md-center">Not just work life, real life</h1>
    <ul class="feature-list unstyled-list thirds md-center sm-left-align">
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/remote.svg">
        <p class="semi-bold">Remote-First</p>
        <p class="">Embracing global culture and opportunity, you are free to live and work where you want in the world, whether it's our HQ in Sydney, or a cabin in the woods.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/hours.svg">
        <p class="semi-bold">Flexibility</p>
        <p class="">We know people have different needs and work in different ways. We believe in asynchronous work and invest in processes that enable you to work the way that suits you.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/vacation.svg">
        <p class="semi-bold">Yearly Adventures</p>
        <p class="">Once a year we go on a team retreat somewhere exciting, challenging and inspiring. For our last trip we went to Thailand, we had a blast!</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/health.svg">
        <p class="semi-bold">Health Conscious</p>
        <p class="">We believe in a healthy working environment. Sit-stand desks are provided, healthy snacks are on offer and our global team regularly discusses their exercise.</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/activities.svg">
        <p class="semi-bold">Team Activities</p>
        <p class="">From doing the Friday crossword to running and indoor climbing, we flex our brains and bodies in different ways, always with a little competition thrown in.</p>
      </li>
    </ul>
  </div>
</section>
<section id="careers-remote" class="double-padding">
  <div class="inner small-inner bottom-padding-small">
    <h1 class="chunk">Be where you want to be</h1>
    <p class="medium">Living and traveling to different countries is a valuable and pleasurable part of life. At Vero, you are free to live and work wherever you want. We hire from countries around the world and we encourage people to travel and try something new. Here’s a list of the places Vero team members reside:</p>
  </div>
  <div class="inner full-width flush-top flush-bottom">
    <ul class="feature-list unstyled-list flex center-text">
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/locations/sydney.png" srcset="/wp-content/themes/vero/assets/images/careers/locations/sydney@2x.png 2x">
        <p class="semi-bold no-bottom-margin">Sydney</p>
        <p class="no-margin small">Australia</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/locations/sanfran.png" srcset="/wp-content/themes/vero/assets/images/careers/locations/sanfran@2x.png 2x">
        <p class="semi-bold no-bottom-margin">San Fransisco</p>
        <p class="no-margin small">USA</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/locations/beijing.png" srcset="/wp-content/themes/vero/assets/images/careers/locations/beijing@2x.png 2x">
        <p class="semi-bold no-bottom-margin">Beijing</p>
        <p class="no-margin small">China</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/locations/brisbane.png" srcset="/wp-content/themes/vero/assets/images/careers/locations/brisbane@2x.png 2x">
        <p class="semi-bold no-bottom-margin">Brisbane</p>
        <p class="no-margin small">Australia</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/locations/berlin.png" srcset="/wp-content/themes/vero/assets/images/careers/locations/berlin@2x.png 2x">
        <p class="semi-bold no-bottom-margin">Berlin</p>
        <p class="no-margin small">Germany</p>
      </li>
      <li>
        <img src="/wp-content/themes/vero/assets/images/careers/locations/goldcoast.png" srcset="/wp-content/themes/vero/assets/images/careers/locations/goldcoast@2x.png 2x">
        <p class="semi-bold no-bottom-margin">Gold Coast</p>
        <p class="no-margin small">Australia</p>
      </li>
    </ul>
  </div>
</section>
<section id="careers-job-listings" class="double-padding">
  <div class="inner small-inner">
    <h1 class="chunk">See where you fit in</h1>
    <p class="medium">Join us on our mission to empower businesses to put their data to work to create great product experiences.</p>
    <ul class="unstyled-list lined-list top-margin-medium">
      <li class="no-margin">
        <a href="https://getvero.workable.com/jobs/409733" target="_blank" class="semi-bold display-block vertical-padding-small">
          Business Development Manager
          <img class="pull-right" src="/wp-content/themes/vero/assets/images/careers/arrow.svg">
        </a>
      </li>
        <li class="no-margin">
        <a href="https://getvero.workable.com/jobs/760959" target="_blank" class="semi-bold display-block vertical-padding-small">
          Content Manager
          <img class="pull-right" src="/wp-content/themes/vero/assets/images/careers/arrow.svg">
        </a>
      </li>
      </li>
        <li class="no-margin">
        <a href="https://getvero.workable.com/jobs/774998" target="_blank" class="semi-bold display-block vertical-padding-small">
          Web Designer / Engineer
          <img class="pull-right" src="/wp-content/themes/vero/assets/images/careers/arrow.svg">
        </a>
      </li>
      </li>
        <li class="no-margin">
        <a href="https://getvero.workable.com/jobs/774996" target="_blank" class="semi-bold display-block vertical-padding-small">
          Senior Engineer - Cloud Infrastructure (AWS)
          <img class="pull-right" src="/wp-content/themes/vero/assets/images/careers/arrow.svg">
        </a>
      </li>
    </ul>
    <p class="top-margin-medium">Don’t see what you’re looking for? Drop us a line at <a href="mailto:careers@getvero.com">careers@getvero.com</a></p>
  </div>
</section>
<?php
  no_content_genesis_footer();
  add_page_tracking_code("ProductPage");
?>
