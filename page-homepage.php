<?php 
  include 'pages-shared/static-header.php';
?>

<section id="hero" class="hero">
  <?php 
  do_action( 'genesis_before_header' );
  do_action( 'genesis_header' );
  do_action( 'genesis_after_header' );
?>
  <div class="inner clean-padding">
    <div class="content center-text">
      <h1 class="home-hero">The <span class="emphesis emphesis-primary">email platform</span> for <span class="emphesis emphesis-secondary">modern, online businesses</span></h1>
      <p>It's not 2004. Automated workflows, a real time API for tracking and segmentation using all of your data.</p>
     <form class="horizontal-signup-form">
        <input class="form-control" type="email" placeholder="Email Address" name="email">
        <input class="btn btn-success" type="submit" value="Create your account">
      </form>
      <p class="small">No credit card required, only pay when you start sending live emails.</p>
    </div>
    <div class="image center-text">
      <img class="stick-right" src="/wp-content/themes/vero/assets/images/home/hero.png"/>
    </div>
  </div>
</section>
<section id="logos">
  <div class="inner clean-padding full-width">
    <ul class="unstyled-list inline-list">
      <!-- <li class="logo pipedrive"><img src="/wp-content/themes/vero/assets/images/home/logos/pipedrive@2x.png" alt="Pipedrive"></li> -->
      <li class="logo canva"><img src="/wp-content/themes/vero/assets/images/home/logos/home-canva.png" alt="Canva" height="76"></li>
      <li class="logo freelancer"><img src="/wp-content/themes/vero/assets/images/home/logos/home-freelancer.png" alt="Freelancer" height="76"></li>
      <li class="logo sphero"><img src="/wp-content/themes/vero/assets/images/home/logos/home-sitepoint.png" alt="Sitepoint" height="76"></li>
      <li class="logo alexa"><img src="/wp-content/themes/vero/assets/images/home/logos/home-alexa.png" alt="Alexa" height="76"></li>
      <li class="logo aboutme"><img src="/wp-content/themes/vero/assets/images/home/logos/home-aboutme.png" alt="about.me" height="76"></li>
      <li class="logo oneill"><img src="/wp-content/themes/vero/assets/images/home/logos/home-oneill.png" alt="O'Neill" height="76"></li>
      <li class="logo sphero"><img src="/wp-content/themes/vero/assets/images/home/logos/home-sphero.png" alt="Sphero" height="76"></li> 
    </ul>
  </div>
</section>
<section id="features-summary">
  <div class="inner center-text">
    <h5 class="section-label">What is Vero?</h5>
    <h2>A single place to create, test and send all of your teams' product and marketing emails</h2>
    <ul class="unstyled-list inline-list feature-list thirds flex">
      <li class="hover-box">
        <div class="list-inner">
          <img src="/wp-content/themes/vero/assets/images/home/feature-email.png" width="180" />
          <h4 class="feature-title">Deliver useful email experiences</h4>
          <p class="feature-desc">Engage your customers with automated messages tailored to them based on their activity in your application or on your website.</p>
          <a href="/features-email">Learn More</a>
        </div>
      </li>
      <li class="hover-box">
        <div class="list-inner">
          <img src="/wp-content/themes/vero/assets/images/home/feature-target.png" width="180"/>
          <h4 class="feature-title">Intelligently target your customers</h4>
          <p class="feature-desc">Capture scattered user data from multiple sources in Vero and segment in real time using Vero's visual rule builder.</p>
          <a href="/features-people">Learn More</a>
        </div>
      </li>
      <li class="hover-box">
        <div class="list-inner">
          <img src="/wp-content/themes/vero/assets/images/home/feature-data.png" width="180"/>
          <h4 class="feature-title">Spend less time in the code</h4>
          <p class="feature-desc">Manage message content and templates with Vero and empower your entire team to collaborate on great product experiences.</p>
          <a href="/features-data">Learn More</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="feature light-section" id="feature-crm">
  <div class="inner">
    <div class="content">
      <h2>Email meets CRM</h2>
      <p>Bye, bye lists. Every customer has a central, single record in Vero. All of their data is stored and organised to help you treat every user like the <strong>real person</strong> they are.</p>
      <a href="/features/customers">Find out more</a>
    </div>
    <div class="image">
      <img src="/wp-content/themes/vero/assets/images/home/feature-crm.png" width="471"/>
    </div>
  </div>
</section>
<section class="feature" id="feature-email-types">
  <div class="inner">
    <div class="content">
      <h2>Email for the whole team</h2>
      <p>Whether you are a team of one or 100, managing your product and marketing campaigns is made easier with Vero. Run all of your <strong>promotional</strong>, <strong>product</strong> and <strong>transactional</strong> emails in one, single UI and benefit from shared data, knowledge and collaboration.</p>
      <a href="/features/email">Find out more</a>
    </div>
    <div class="image">
      <img class="stick-right" src="/wp-content/themes/vero/assets/images/home/feature-email-types.png" width="578"/>
    </div>
  </div>
</section>
<section id="testimonial">
  <div class="inner center-text">
    <img class="quote-logo" src="/wp-content/themes/vero/assets/images/home/company-logo.png" width="180">
    <blockquote class="quote">&ldquo;This fit perfectly with my business and made us more money too!&rdquo;</blockquote> 
    <h4 class="quote-name">Jaimie Jameson</h4>
    <h5 class="quote-job-title">Marketing Manager</h5>
  </div>
</section>
<section id="blocks">
  <div class="support block center-text">
    <div class="inner-block">
      <h3 class="block-title">98.5% of the time, our customers love our support every time!</h3>
      <p class="block-desc">Email is mission critical. With team members spread around the world, Vero offers fast, reliable support <strong>24/7</strong> – we're real humans.</p>
      <div class="btn btn-outline btn-warning">View the Help Docs</div>
    </div>
  </div>
  <div class="developers block center-text">
    <div class="inner-block">
      <h3 class="block-title">A platform engineers can rely on</h3>
      <p class="block-desc">Realiable and built around an API, Vero gets out of your way and gives you the power to work like the hundreds of other businesses that track <strong>1B+</strong> customer actions and send <strong>200M+</strong> emails every month with Vero. Libraries in Ruby, Python and more. </p>
      <div class="btn btn-primary btn-outline">Read the API Docs</div>
    </div>
  </div>
</section>
<section id="twitter">
  <div class="inner">
      <h5 class="section-label center-text">What people are saying about Vero</h5>
      <div class="tweet">
        <blockquote class="twitter-tweet tw-align-center" lang="en"><p lang="en" dir="ltr">Looking for a new <a href="https://twitter.com/hashtag/email?src=hash">#email</a> client? <a href="https://twitter.com/getvero">@getvero</a> is the bees knees. Co-founder <a href="https://twitter.com/chexton">@chexton</a> delivers a new standard for quality and customer service.</p>&mdash; Paris Rouzati (@parisrouz) <a href="https://twitter.com/parisrouz/status/593558485087846400">April 29, 2015</a></blockquote>
      </div>
      <div class="tweet">
        <blockquote class="twitter-tweet tw-align-center" lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/veroapp">@veroapp</a> is like being a kid in a candy shop for email marketing!</p>&mdash; Sana N Choudary (@SanaOnGames) <a href="https://twitter.com/SanaOnGames/status/509888242619924481">September 11, 2014</a></blockquote>
      </div>
      <div class="tweet">
        <blockquote class="twitter-tweet tw-align-center" lang="en"><p lang="en" dir="ltr">Just sent an email to the <a href="https://twitter.com/getvero">@getvero</a> team that started with &quot;omg&quot; and ended with &quot;thank you thank you thank you&quot;. They are my favourite.</p>&mdash; Ophelie Lechat (@OphelieLechat) <a href="https://twitter.com/OphelieLechat/status/646560855128080384">September 23, 2015</a></blockquote>
      </div>
  </div>
</section>
<section id="call-to-action" class="center-text">
  <div class="inner">
    <h1 class="cta-title">Send your first email today</h1>
    <p class="sub-heading">No contracts to lock you in, only pay when you start sending live emails</p>
    <form class="horizontal-signup-form">
      <input class="form-control" type="email" placeholder="Email Address" name="email">
      <input class="btn btn-success" type="submit" value="Create your account">
    </form>
    <p class="small">No credit card required</p>
  </div>
</section>
<?php 
  no_content_genesis_footer();
?>