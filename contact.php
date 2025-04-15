<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>

<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container mt-5">
    <div class="row block-9">
      <div class="col-md-4 contact-info ftco-animate">
        <div class="row">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Address:</span> 111, Jalan Universiti 5, Taman Universiti, Parit Raja, Malaysia</p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Phone:</span> <a href="#">(+60)1158884403</a></p>
          </div>
          <div class="col-md-12 mb-3">
            <p><span>Email:</span> <a href="mailto:koperasiuthmberhad@gmail.com">koperasiuthmberhad@gmail.com</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 ftco-animate">
        <form id="contactForm" class="contact-form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<div class="mapouter">
  <div class="gmap_canvas">
    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
      src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Secangkir Coopitiam Cafe&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    <a href="https://sprunkin.com/">Sprunki Game</a>
  </div>
  <style>
    .mapouter {
      position: relative;
      text-align: right;
      width: 100%;
      height: 400px;
    }

    .gmap_canvas {
      overflow: hidden;
      background: none !important;
      width: 100%;
      height: 400px;
    }

    .gmap_iframe {
      height: 400px !important;
    }
  </style>
</div>

<script>
  document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent actual form submission
    alert("Success! Your message has been sent.");
    this.reset(); // Reset form fields
  });
</script>

<?php require "includes/footer.php"; ?>
