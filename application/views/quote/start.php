  <div class="quote-stage stage1" id="stage1-welcome">

    <h2 class="leadcentre lotsoftext">Which of these choices best represents you?</h1>

    <div class="row multichoice">
      <a href="#step2/measure" class="stage1-link" id="residential-link">
        <div class="col-md-3 quote-stage-1" id="residential">
          <div class="windowretainer"></div>
          <p class="lead">Residential</p>
          <p class="follow">I own a house, townhouse, condo or apartment unit.</p>
        </div>
      </a>
      <a href="#step2/measure" class="stage1-link" id="lightcommercial-link">
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

  <div class="quote-stage stage2 whitepage" id="stage2-measure" style="display: none;">
    <h2 class="leadcentre lotsoftext ">Ok! Now its time to figure out what you need...</h2>

    <div class="well"><p>On the next step we will ask you for details on what you need done. If you have a smart phone or tablet, you can proceed
    to the next step on your device while walking around, we're mobile friendly!</p>

    <p>To estimate your quote, lets count how many window panes you have. Here, lets figure that out.</p></div>

    <p id="estimatequote"><i class="fa fa-bullhorn bigfa"></i> We have two window pane sizes that we need to measure. Panes larger than 6" x 6" (about 15cm x 15cm) and panes smaller than that. If your windows are not squareish, than use a surface area of 36" squared, or 225 cm squared. </p>

    <p id="notapemeasure"><img src="<?=base_url() ?>assets/img/notapemeasure.png" alt="No tape measure!">Don't get out the tape measure! Lets look at some examples.</p>

    <div class="quoteexamplecol">

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

    </div>

    <div class="well">
      <p>On the next screen, we will ask you how many of each size of window you have. Remember, sills and screens are included in your price!</p>
    </div>

    <button class="btn btn-large btn-primary nav-justified stage2-link" id="residential2-link" style="margin-bottom: 20px;" onclick="window.location.hash='#step3/quote';">Okay, Lets do this!</button>


  </div>

  <div class="quote-stage stage2 whitepage" id="stage2-commercial" style="display: none;">
    <h2 class="leadcentre lotsoftext ">Hello!</h2>

    <div class="well"><p>Thank you for your interest in HD Windows. Due to the diversity of commercial properties, we can not offer you a reliable instant quote online. </p>
      <p>However, we would be more than happy to talk to you over the phone or book a meeting to discuss your needs. Please <a href="<?=base_url() ?>">contact us</a> to get started.

      <div id="quotebookbutton">
        <a href="<?=base_url() ?>contactus" class="btn btn-primary">Contact Us</a>
      </div>
    </div>


  </div>


  <div class="quote-stage stage3" id="stage3-quote" style="display: none;">

    <h2 class="leadcentre lotsoftext">Great! Tell us what you need!</h2>

    <div class="well">
      <p>Please enter how many of each type of pane you would like cleaned. Please note that there are different prices for cleaning single-side of the window versus doing both sides. </p>

      <p>Sills and Ledges are included for each window.</p>

      <p>Looking for other services; such as gutters, storm windows, post-construction cleanup, or the like? <a href="<?=base_url() ?>contactus">Please give us a call.</a></p>
    </div>

    <div class="row">
      <div class="col-md-4 col-parent">
        <div class="quote-col-leader">
          Single Side Cleaning
        </div>
        <div class="valueification">
          <img src="<?=base_url() ?>assets/img/onesidewindow.png">
          One side of the window (Inside OR Outside)
        </div>

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/smallpane.png">
          <div class="description">
            <p>Small Pane</p>
            <p class="kindasmall">Under 6x6"</p>
          </div>
          <div class="input">
            <input type="text" id="input-single-smallpane">
          </div>
          <div class="inputadjuster">
            <button class="btn btn-xs btn-primary up" data-attachedinput="input-single-smallpane"><span class="glyphicon glyphicon-plus"></span></button>
            <button class="btn btn-xs btn-danger down" data-attachedinput="input-single-smallpane"><span class="glyphicon glyphicon-minus"></span></button>
          </div>

        </div>
        <!-- /Service Item -->

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/largepane.png">
          <div class="description">
            <p>Large Pane</p>
            <p class="kindasmall">Over 6x6"</p>
          </div>
          <div class="input">
            <input type="text" id="input-single-largepane">
          </div>
          <div class="inputadjuster">
            <button class="btn btn-xs btn-primary up" data-attachedinput="input-single-largepane"><span class="glyphicon glyphicon-plus"></span></button>
            <button class="btn btn-xs btn-danger down" data-attachedinput="input-single-largepane"><span class="glyphicon glyphicon-minus"></span></button>
          </div>

        </div>
        <!-- /Service Item -->

      </div>

      <div class="col-md-4 col-parent">
        <div class="quote-col-leader">
          Complete Cleaning
        </div>
        <div class="valueification">
          <img src="<?=base_url() ?>assets/img/twosidewindow.png">
          Both sides of the Window (Better Value)
        </div>

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/smallpane.png">
          <div class="description">
            <p>Small Pane</p>
            <p class="kindasmall">Under 6x6"</p>
          </div>
          <div class="input">
            <input type="text" id="input-complete-smallpane">
          </div>
          <div class="inputadjuster">
            <button class="btn btn-xs btn-primary up" data-attachedinput="input-complete-smallpane"><span class="glyphicon glyphicon-plus"></span></button>
            <button class="btn btn-xs btn-danger down" data-attachedinput="input-complete-smallpane"><span class="glyphicon glyphicon-minus"></span></button>
          </div>

        </div>
        <!-- /Service Item -->

        <!-- Service Item -->
        <div class="quote-col">
          <img src="<?=base_url() ?>assets/img/largepane.png">
          <div class="description">
            <p>Large Pane</p>
            <p class="kindasmall">Over 6x6"</p>
          </div>
          <div class="input">
            <input type="text" id="input-complete-largepane">
          </div>
          <div class="inputadjuster">
            <button class="btn btn-xs btn-primary up" data-attachedinput="input-complete-largepane"><span class="glyphicon glyphicon-plus"></span></button>
            <button class="btn btn-xs btn-danger down" data-attachedinput="input-complete-largepane"><span class="glyphicon glyphicon-minus"></span></button>
          </div>

        </div>
        <!-- /Service Item -->
      </div>

      <div class="col-md-4 col-parent">
        <div class="quote-col-leader">
          Quote Estimate
        </div>

        <button class="btn btn-default" id="calculatebutton"><i class="fa fa-cog"></i> Calculate</button>

        <table id="tally">
          <thead>
            <tr>
              <th>Item</th>
              <th>Count</th>
            </tr>
          </thead>
          <tbody id="lineitems">


            <tr id="trspacer">
            </tr>


          </tbody>

        </table>

      </div>
    </div>

    <script>
      var wc = {
        single : {
          small: 2,
          large: 5
        },

        complete : {
          small: 4,
          large: 8
        },

        tax : 0.05

      };


    </script>

    <div id="quotebookbutton">
      <a href="<?=base_url() ?>booking" class="btn btn-primary">Book Now</a>
      <a href="<?=base_url() ?>contactus" class="btn btn-primary">Give us a Shout</a>
    </div>
    
  </div>

</div>
