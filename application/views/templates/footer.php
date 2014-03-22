<!-- start of footer -->
    <div id="footer">
      <p id="copy">Copyright &copy;  2014 HD Window Cleaners of Calgary</p>
      <ul id="footernav">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Report a Problem</a></li>

      </ul>
    </div>



    <script src="<?=base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>assets/js/stellar.min.js"></script>
    <script src="<?=base_url() ?>assets/js/responsiveslides.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.hashchanged.js"></script>
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
