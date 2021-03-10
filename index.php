<?php include("includes/header.php") ?>


    <section id="home">

      <div class="row align-items-center" id="topBanner">

        <div class="container col-12" id="topBannerText">
          <h1 id="topBannerTitle">Do something today that your future self will thank you for.</h1>
          
        </div>
      </div>


      <div class="container cardInfo" id="whatIdo">
        <div class="container card-group align-items-center">
          <div class="card" id="whatIdoImg"></div>
          <div class="card">
            <h2>What I Can Do For You</h2>
            <p>Whatever your health and fitness goals may be, TJ works with you every step of the way. Together, we’ll bust down barriers, unveil your true potential and take you to new heights you never thought possible. Through science, knowledge and encouragment I’ll have you setting and breaking personal records and help you get AND keep the body you’ve always dreamed of. <br><br>Your results are my successes.</p>
            
            <a href="/allclasses.php">
            <button type="button" class="btn btn-success">Get Started!</button>
          </a>
          </div>
        </div>
      </div>

      <div class="container cardInfo" id="healthyBody">
        <div class="container card-group align-items-center">
          <div class="card">
            <h2>Healthy Body  |  Healthy Mind</h2>
            <p>Being in lockdown has taken it's toll on not only everyones bodies but also everyones minds and mental health. <br><br>When you exercise, it increases endorphins, dopamine, adrenaline and endocannabinoid -- these are all brain chemicals associated with feeling happy, feeling confident, feeling capable, feeling less anxiety and stress and even less physical pain. <br><br><strong>THIS  👏🏻    IS   👏🏻    FACT   👏🏻</strong><br><br>A professionally structured and personalised workout regime could be all that stands between you and a clear head.</p>
            
            <a href="#contactAnchor">
              <button type="button" class="btn btn-success">Let's talk</button>
            </a>
          </div>
          <div class="card" id="healthyBodyImg"></div>
        </div>
      </div>
    

      

      <!--CONTACT-->

      <div id="contact" class=" contact-form">

        <div class="container">
          <div id="contactAnchor"></div><!--CONTACT ANCHOR TAG-->

          <div class="contact-image">
              <img id="contactLogo" src="/img/jo avatar.png" width="150px" alt="SDB logo"/>
          </div>

          <form method="post" action="thankssubmit.php">
              <h3>Drop Me a Message</h3>
            <div class="row">
              
              <div class="col">
                <div class="form-group">
                  <input id="nameInput" type="text" name="name" onkeyup="manage(this)" class="form-control" placeholder="Your Name *"/>
                </div>
                <div class="form-group">
                  <input id="emailInput" type="text" name="email" onkeyup="manage(this)" class="form-control" placeholder="Your Email *"/>
                </div>
                <div class="form-group">
                  <input type="text" name="phone" class="form-control" placeholder="Your Phone Number"/>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <textarea id="messageInput" name="message" onkeyup="manage(this)" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
                <div class="form-group">
                  <input id="contactSubmitBtn" type="submit" disabled name="btnSubmit" class="btn btn-success" value="Send Message" />
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

    </section>

      <!--/CONTACT-->

<?php include("includes/footer.php") ?>
