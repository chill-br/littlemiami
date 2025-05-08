<?php get_header(); ?>

<!-- Hero Section -->
<section style="background: url('<?php echo get_template_directory_uri(); ?>/images/hero.jpg') no-repeat center center/cover; color: white; text-align: center; padding: 100px 20px;">
  <h1 style="font-size: 2.5rem;">CINCINNATI BREWERY, PIZZA, & EVENT CENTER</h1>
</section>

<!-- Two Image Blocks -->
<section style="display: flex; justify-content: center; gap: 20px; padding: 40px; background: #7ec3e3;">
  <img src="<?php echo get_template_directory_uri(); ?>/images/section1.jpg" style="max-width: 45%;">
  <img src="<?php echo get_template_directory_uri(); ?>/images/section2.jpg" style="max-width: 45%;">
</section>

<!-- Events or Offerings -->
<section style="padding: 40px; text-align: center;">
  <h2>Discover What We Offer</h2>
  <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; margin-top: 20px;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/food.jpg" style="max-width: 30%;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/outdoor.jpg" style="max-width: 30%;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/venue.jpg" style="max-width: 30%;">
  </div>
</section>

<!-- Brewery Info -->
<section style="padding: 60px 20px;">
  <h2>CINCINNATI BREWERY, PIZZA, & EVENT CENTER</h2>
  <ul style="text-align: left; max-width: 800px; margin: auto;">
    <li><strong>OUR BEERS:</strong> Hand-crafted local favorites brewed on-site.</li>
    <li><strong>OUR PIZZA:</strong> Stone-fired, artisan style with fresh ingredients.</li>
    <li><strong>OUR VENUE:</strong> Perfect for parties, weddings, or corporate events.</li>
    <li><strong>OUR VIEW:</strong> Riverside atmosphere with indoor and outdoor seating.</li>
    <li><strong>EVENT OPTIONS:</strong> Private rentals, catering, and entertainment.</li>
  </ul>
</section>

<!-- Reviews Section -->
<section style="background: #f7f7f7; padding: 60px 20px; text-align: center;">
  <h2>WHAT OUR GUESTS SAY ABOUT US</h2>
  <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 30px;">
    <div style="width: 300px; background: white; padding: 20px; box-shadow: 0 0 10px #ccc;">
      <p>⭐️⭐️⭐️⭐️⭐️</p>
      <p>“Awesome place! Loved the beer and the riverfront view.”</p>
      <small>- Guest 1</small>
    </div>
    <div style="width: 300px; background: white; padding: 20px; box-shadow: 0 0 10px #ccc;">
      <p>⭐️⭐️⭐️⭐️⭐️</p>
      <p>“Perfect venue for our wedding. Staff was great!”</p>
      <small>- Guest 2</small>
    </div>
    <div style="width: 300px; background: white; padding: 20px; box-shadow: 0 0 10px #ccc;">
      <p>⭐️⭐️⭐️⭐️</p>
      <p>“Amazing pizza and cozy atmosphere.”</p>
      <small>- Guest 3</small>
    </div>
  </div>
</section>

<!-- Location Section -->
<section style="padding: 60px 20px; text-align: center;">
  <h2>OUR LOCATION</h2>
  <div style="margin: 20px auto; max-width: 600px;">
    <iframe src="https://maps.app.goo.gl/MZZJQ2T5fJgQRTqS6" width="100%" height="300" style="border:0;" allowfullscreen loading="lazy"></iframe>
  </div>
</section>

<?php get_footer(); ?>
