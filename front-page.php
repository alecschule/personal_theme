<?php 
// Featured Pages
define("nFeaturedPages", 3);
$fp_ids = array(); // featured page ids
for ($i = 0; $i < nFeaturedPages; $i++) {
  array_push($fp_ids, get_theme_mod('feature_page_' . $i));
}
?>

<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link href="<?php echo get_template_directory_uri() . '/assets/css/front-page.css';?>" rel="stylesheet">
    <!-- Google Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="front-page">
    <div id="front-container">
    <p id="salut">Hi, I'm <span id="name"><?php echo get_theme_mod('user_given_name'); ?></span>.</p>
      <p>Full stack web developer. Wordpress expert.</p>
      <p>I love what I do, and I think you will love working with me.</p>
      <div id="fp-links">
<?php for($i = 0; $i < nFeaturedPages; $i++): ?>
      <a href="<?php echo get_page_link($fp_ids[$i]); ?>">
        <div class="fp-link">
          <p><?php echo get_the_title($fp_ids[$i]); ?></p>
        </div>
      </a>
<?php endfor; ?>
      </div> <!-- fp-links -->
    </div> <!-- front-container -->
  </body>
</html>
