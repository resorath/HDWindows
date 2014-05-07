<!-- start of footer -->
    <div id="footer">
      <p id="copy">Copyright &copy;  2014 HD Window Cleaners of Calgary</p>
      <ul id="footernav">
        <li><a href="<?=base_url() ?>privacypolicy">Privacy Policy</a></li>
        <li><a href="<?=base_url() ?>contactus">Contact Us</a></li>
        <li><a href="<?=base_url() ?>problem">Report a Problem</a></li>

      </ul>
    </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49342770-1', 'hdwindows.ca');
      ga('send', 'pageview');

    </script>
    <script src="<?=base_url() ?>assets/js/modernizr.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url() ?>assets/js/polyfiller.js"></script>
    <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>assets/js/stellar.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.hashchanged.js"></script>    
    <script src="<?=base_url() ?>assets/js/jquery.sidr.min.js"></script>
    <script src="<?=base_url() ?>assets/js/scripts.js"></script>

    <?php 
    if(isset($additionalscripts))
    {
      foreach($additionalscripts as $script):
        ?>

        <script src="<?=base_url() ?>assets/js/<?=$script ?>"></script>

        <?php

      endforeach;

    } ?>
  </body>
</html>
