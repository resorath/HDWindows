<div class="container" id="maincontent">

  <div class="row bigheader" id="quotebigheader">
    <div class="col-sm-4" id="logo">
      <img src="<?=base_url() ?>assets/img/badlogo.png" alt="Bad Logo">
    </div>
    <div class="col-sm-4 col-sm-offset-1" id="quoteheader">
      <h1 class="leadcentre">Get a Quote</h1>
    </div>
  </div>


  <div class="smallheader" id="quotesmallheader">
    <em>HDWindows</em> | Get a Quote
  </div>


  <div class="quote-stage stage1" id="stage1">

    <h2 class="leadcentre lotsoftext">Which of these choices best represents you?</h1>

    <div class="row multichoice">
      <a href="#step2/residential" class="stage1-link" id="residential-link">
        <div class="col-md-3 quote-stage-1" id="residential">
          <div class="windowretainer"></div>
          <p class="lead">Residential</p>
          <p class="follow">I own a typical house, townhouse, condo or apartment unit.</p>
        </div>
      </a>
      <a href="#step2/lightcommercial" class="stage1-link" id="lightcommercial-link">
        <div class="col-md-3 col-md-offset-1 quote-stage-1" id="lightcommercial">
          <div class="windowretainer"></div>
          <p class="lead">Light Commercial</p>
          <p class="follow">I represent a small business, such as a kiosk, strip-mall (unit or whole building), etc.</p>
        </div>
     </a>
      <a href="#step2/commercial" class="stage1-link" id="commercial-link">
        <div class="col-md-3 col-md-offset-1 quote-stage-1" id="commercial">
          <div class="windowretainer"></div>
          <p class="lead">Heavy Commercial</p>
          <p class="follow">I represent a high-rise building; such as a commercial tower, apartment or condo complex, or other large buildings.
        </div>
      </a>

    </div>

  </div>

  <div class="quote-stage stage2" id="stage2-residential" style="display: none;">
    <h2 class="leadcentre lotsoftext">Ok! Now its time to figure out what you need...</h1>

    <div class="well"><p>On the next step we will ask you for details on what you need done. If you have a smart phone or tablet, you can proceed
    to the next step on your device while walking around, we're mobile friendly! Please have a rough idea of:</p></div>

    <ul class="protips">
      <li><p>If you need Window cleaning, how many window panes you have and roughly how big they are. A window pane a continuous peice
        of glass that needs cleaning. Count windows you need cleaned inside and out.</p>

        <img src="<?=base_url() ?>assets/img/windowdiagram.png">
      </li>


      <li>Ledges and Sils? Collect a rough length of each ledge and sil that needs cleaning.</li>

      <li>Removing or replacing storm windows? Get a rough size and count.</li>
    </ul>

    <button class="btn btn-large btn-primary nav-justified stage2-link" id="residential2-link" onclick="window.location.hash='#step3/residential';">Okay, Lets do this!</button>


  </div>


  <div class="quote-stage" id="stage3-residential">

    <h2 class="leadcentre lotsoftext">Great! Tell us what you need!</h1>

    <div class="row">
      <div class="col-md-4 col-parent">
        <div class="quote-col-leader">
          Indoor Cleaning
        </div>

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/placeholder.gif">
          <div class="description">
            <p>Regular Pane</p>
            <p class="kindasmall">Under 4m</p>
          </div>
          <div class="input">
            <input type="text" id="input-indoor-regularpane">
          </div>
          <div class="inputadjuster">
            <button class="btn btn-xs btn-primary up" data-attachedinput="input-indoor-regularpane"><span class="glyphicon glyphicon-plus"></span></button>
            <button class="btn btn-xs btn-danger down" data-attachedinput="input-indoor-regularpane"><span class="glyphicon glyphicon-minus"></span></button>
          </div>

        </div>
        <!-- /Service Item -->

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/placeholder.gif">
          <div class="description">
            <p>Super Pane</p>
            <p class="kindasmall">Over 2km</p>
          </div>
          <div class="input">
            <input type="text" id="input-indoor-superpane">
          </div>
          <div class="inputadjuster">
            <button class="btn btn-xs btn-primary up" data-attachedinput="input-indoor-superpane"><span class="glyphicon glyphicon-plus"></span></button>
            <button class="btn btn-xs btn-danger down" data-attachedinput="input-indoor-superpane"><span class="glyphicon glyphicon-minus"></span></button>
          </div>

        </div>
        <!-- /Service Item -->

      </div>

      <div class="col-md-4 col-parent">
        <div class="quote-col-leader">
          Outdoor Cleaning
        </div>

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/placeholder.gif">
          <div class="description">
            <p>Super Pane</p>
            <p class="kindasmall">Over 2km</p>
          </div>
          <div class="input">
            <input type="text" id="input-outdoor-superpane">
          </div>
          <div class="inputadjuster">
            <button class="btn btn-xs btn-primary up" data-attachedinput="input-outdoor-superpane"><span class="glyphicon glyphicon-plus"></span></button>
            <button class="btn btn-xs btn-danger down" data-attachedinput="input-outdoor-superpane"><span class="glyphicon glyphicon-minus"></span></button>
          </div>

        </div>
        <!-- /Service Item -->

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/placeholder.gif">
          <div class="description">
            <p>Ledges <span class="small">(Meters)</a></p>
            <p class="kindasmall">1st or 2nd Floor</p>
          </div>
          <div class="input">
            <input type="text" id="input-ledges">
          </div>
          <div class="sliderholder">
            <input type="text" class="span2 slideinput" value="0" id="input-ledgesSlider" data-attachedinput="input-ledges">
          </div>
        </div>

        <!-- /Service Item -->

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/placeholder.gif">
          <div class="description">
            <p>Sils <span class="small">(Meters)</a></p>
            <p class="kindasmall">1st or 2nd Floor</p>
          </div>
          <div class="input">
            <input type="text" id="input-sils">
          </div>
          <div class="sliderholder">
            <input type="text" class="span2 slideinput" value="0" id="input-silsSlider" data-attachedinput="input-sils">
          </div>
        </div>

        <!-- /Service Item -->

      </div>



      <div class="col-md-4 col-parent">
        <div class="quote-col-leader">
          Installation and Teardown
        </div>

        <div class="quote-col">
          
        </div>

      </div>

    </div>
    
  </div>

</div>
