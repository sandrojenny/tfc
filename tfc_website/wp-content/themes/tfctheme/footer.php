<?php wp_footer() ?>

<div class="grid-container-fluid">
  <div class="grid-x">
    <div class="cell">
      <div class="footer">
        <div class="grid-container">
          <div class="grid-x">
            <div class="cell medium-9">
              <p><b>The Fundraising Company Fribourg AG</b> – solutions to success</p>
              <p>Route du Grand-Pré 26, 1700 Fribourg</p>
              <p>T +41 (0)26 426 00 60  |  <a href="mailto:office@fundraising-company.ch">office (at) fundraising-company.ch</a></p>
            </div>
            <div class="cell medium-3">

              <?php wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_class' => 'footermenu',
                'container' => 'ul'
              )); ?>

              <!-- <ul class="footermenu">
                <li>Allgemeine Geschäftsbedinungen</li>
                <li>Impressum</li>
                <li>Datenschutzerklärung</li>
                <li>Kontakt</li>
                <li>Newsletter abonnieren</li>
              -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="<?php bloginfo('template_directory'); ?>/node_modules/jquery/dist/jquery.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/node_modules/what-input/dist/what-input.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/node_modules/foundation-sites/dist/js/foundation.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
</body>
</html>
