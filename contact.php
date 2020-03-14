<?php include('partials/header.php'); ?>


<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">

              <div class="aboutus">
                  <h2>About us</h2>

                  <h3>Developed by : Hikmat ullah and Taras Lavreniuk</h3>
                  <p><b>Front-end Developer:</b> hikmat ullah</p>
                  <p><b>Back-end Developer:</b> Taras Lavreniuk</p>
                  <p>Web Engineering Databanken und web techniques Group</p>
                  <p>Technical University of chemnitz.</p>
                  <address>
                      Straße der Nationen 62 <br>
                      09111 Chemnitz <br>
                      Germany
                  </address>

              </div>

              <h2>Contact Us</h2>
            <p>Please, fill out our contact form for your feedback.</p>
            <form action="mysql.php" class="contact_form" method="POST">
              <input name="username" class="form-control" type="text" placeholder="Name*">
              <input name="email" class="form-control" type="email" placeholder="Email*">
              <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Message*"></textarea>
              <input type="submit" value="SendMessage">
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>



<?php include('partials/footer.php'); ?>