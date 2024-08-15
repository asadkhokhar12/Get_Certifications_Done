<?php include 'partials/header.php' ?>

<div class="useful-sec">
  <div class="inner_page_banner">
    <div class="container py-3">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h3 class="display-3">Contact Us</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="terms_section">
    <div class="container pt-4 pb-5">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="terms_s_left">
            <h3>Need help with anything? <br>Feel free to contact us around the clock</h3>
            <p>You can give us a call at: <?php echo $tel_no ?><br><br>
              <span class="or">OR</span><br><br>You can get in touch using our email address: <span
                class="email">info@getmycertificationdone.com</span>
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="terms_section_form">
            <h5 class="fs-3">Order <span class="bold_blue">Right Away</span> To Score Top Grades </h5>
            <form method="POST" action="/backend/action/action" class="d-grid gap-4">
              <input type="hidden" name="type" value="contactForm">
              <div class="form-group">
                <label>Your name *</label>
                <input type="text" class="form-control" placeholder="Name" required="required" name="name">
              </div>
              <div class="form-group">
                <label>Your email address *</label>
                <input type="email" class="form-control" placeholder="email" required="required" name="email">
              </div>
              <div class="form-group">
                <label>Phone Number *</label>
                <input class="form-control" placeholder="Number" type="number" required="required" name="phone">
              </div>
              <div class="form-group">
                <label>Message *</label>
                <textarea class="form-control" rows="3" placeholder="Message" name="message"></textarea>
              </div>
              <button type="submit" id="submit_btn" class="btn btn-primary ms-auto"
                name="contact_sbmit_btn">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'partials/footer.php'; ?>