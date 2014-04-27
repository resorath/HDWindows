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

  <div class="quote-stage stage2 whitepage" id="stage2-residential" style="display: none;">
    <h2 class="leadcentre lotsoftext">Ok! Now its time to figure out what you need...</h1>

    <div class="well"><p>On the next step we will ask you for details on what you need done. If you have a smart phone or tablet, you can proceed
    to the next step on your device while walking around, we're mobile friendly!</p>

    <p>To estimate your quote, lets count how many window panes you have. Here, lets figure that out.</p></div>

    <p id="estimatequote"><i class="fa fa-bullhorn bigfa"></i> We have two window pane sizes that we need to measure. Panes larger than 6" x 6" (about 15cm x 15cm) and panes smaller than that. If your windows are not squareish, than use a surface area of 36" squared, or 225 cm squared. </p>

    <p id="notapemeasure"><img src="<?=base_url() ?>assets/img/notapemeasure.png" alt="No tape measure!">Don't get out the tape measure! Lets look at some examples.</p>

    <div class="quoteexample">
      <img src="<?=base_url() ?>assets/img/size-example1.jpg" class="sizingexample">
      <p>This window has two window panes, both are "large".</p>
    </div>

    <div class="quoteexample">
      <img src="<?=base_url() ?>assets/img/size-example2.jpg" class="sizingexample">

      <p>This window has four window panes, two "large" and two "small". </p>
    </div>

    <div class="quoteexample">
      <img src="<?=base_url() ?>assets/img/size-example3.jpg" class="sizingexample">

      <p>Can you guess this one? There are three "large" panes.</p>
    </div>

    <div class="well">
      <p>On the next screen, we will ask you how many of each size of window you have. Remember, sills and screens are included in your price!</p>
    </div>

    <button class="btn btn-large btn-primary nav-justified stage2-link" id="residential2-link" style="margin-bottom: 20px;" onclick="window.location.hash='#step3/residential';">Okay, Lets do this!</button>


  </div>


  <div class="quote-stage" id="stage3-residential">

    <h2 class="leadcentre lotsoftext">Great! Tell us what you need!</h1>

    <div class="row">
      <div class="col-md-6 col-parent">
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

      <div class="col-md-6 col-parent">
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



    </div>
    
  </div>

</div>
