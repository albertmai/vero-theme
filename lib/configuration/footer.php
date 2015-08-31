<?php 

function custom_footer_static_wrap() {
  ?>
  <footer class="site-footer"><div class="wrap">
    <?php echo custom_footer_static(); ?>
  </div></footer>
<?php
}

function custom_footer_static() {
  if( !is_singular('api_docs') ){
    ?>
    <ul class="col">
      <li class="header">Features</li>
      <li><a href="http://www.getvero.com/features">Start the tour &rarr;</a></li>
      <li><a href="http://www.getvero.com/triggered-emails">Triggered emails</li>
      <li><a href="http://www.getvero.com/smart-newsletters">Smart newsletters</li>
      <li><a href="http://www.getvero.com/individual-contact-profiles">Individual contact profiles (CRM)</a></li>
      <li><a href="http://www.getvero.com/external-attributes">External Attributes</li>
    </ul>
    <ul class="col">
      <li class="header">Resources</li>
      <li><a href="http://www.getvero.com/pricing">Pricing</a></li>
      <li><a href="http://www.getvero.com/faq">Help Documentation</a></li>
      <li><a href="http://www.getvero.com/idea-lab">Email Recipe Lab</a></li>
      <li><a href="http://www.getvero.com/api">API Reference</a></li>
      <li><a href="http://www.getvero.com/resources
" target="_blank">Blog</a></li>
    </ul>
    <ul class="col">
      <li class="header">Company</li>
      <!--<li>About</li>-->
      <li><a href="http://www.getvero.com/jobs">Jobs</a></li>
      <li><a href="http://status.getvero.com">Status</a></li>
      <li><a href="http://www.getvero.com/terms-of-service">Terms of Service</a></li>
      <li><a href="http://www.getvero.com/privacy">Privacy Policy</a></li>
    </ul>
    <ul class="col">
      <li class="header">Say Hello</li>
      <li><a href="mailto:support@getvero.com">Email Support</a></li>
      <li><a href="http://www.getvero.com/email-marketing-demo">Contact Sales</a></li>
      <li><a href="https://twitter.com/getvero" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @getvero</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
    </ul>
    <?php
  }
}

?>