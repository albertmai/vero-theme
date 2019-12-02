<?php
  add_filter( 'body_class', 'add_class' );
  function add_class($classes) {
    global $post;

    $classes[] = 'glossary';
    return $classes;
  }
  include 'pages-shared/static-header.php';
?>

<section class="glossary-hero">
  <div class="inner large-inner">
    <div class="flex flex-column md-flex-row items-center">
      <div class="aside">
        <h1 class="hulk bottom-margin-sm">Glossary</h1>
        <p class="large bottom-margin-lg">Knowledge is power, and we'd like to help demystify all the jargon on your path to gaining email marketing prowess.</p>
      </div>

      <div class="main">
        <img class="responsive-image" src="/wp-content/themes/vero/assets/dist/images/resources/glossary/hero.svg" alt="Glossary">
      </div>
    </div>
  </div>
</section>
<section class="double-padding bg-dark-blue-lighter">
  <div class="inner large-inner">
    <div class="w-sidebar w-sidebar--glossary">
      <div class="aside hide md-show">
        <ul class="unstyled-list glossary-alphabet">
          <li>
            <a href="#A">A</a>
          </li>
          <li>
            <a href="#B">B</a>
          </li>
          <li>
            <a href="#C">C</a>
          </li>
          <li>
            <a href="#D">D</a>
          </li>
          <li>
            <a href="#E">E</a>
          </li>
          <li>
            <a href="#F">F</a>
          </li>
          <li>
            <a href="#G">G</a>
          </li>
          <li>
            <a href="#H">H</a>
          </li>
          <li>
            <a href="#E">E</a>
          </li>
          <li>
            <a href="#F">F</a>
          </li>
          <li>
            <a href="#G">G</a>
          </li>
          <li>
            <a href="#H">H</a>
          </li>
          <li>
            <a href="#I">I</a>
          </li>
          <li>
            <a href="#J">J</a>
          </li>
          <li>
            <a href="#K">K</a>
          </li>
          <li>
            <a href="#L">L</a>
          </li>
          <li>
            <a href="#M">M</a>
          </li>
          <li>
            <a href="#N">N</a>
          </li>
          <li>
            <a href="O">O</a>
          </li>
          <li>
            <a href="#P">P</a>
          </li>
          <li>
            <a href="#Q">Q</a>
          </li>
          <li>
            <a href="#R">R</a>
          </li>
          <li>
            <a href="#S">S</a>
          </li>
          <li>
            <a href="#T">T</a>
          </li>
          <li>
            <a href="#U">U</a>
          </li>
          <li>
            <a href="#V">V</a>
          </li>
          <li>
            <a href="#E">W</a>
          </li>
          <li>X</li>
          <li>Y</li>
          <li>Z</li>
        </ul>
      </div>
      <div class="main glossary-list md-left-margin-xxl">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php
  no_content_genesis_footer();
?>