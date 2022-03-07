<?php wp_footer(); ?>

<div id="footer" class="paper">
    <div class="row">
        <div id="footer-content-container" class="col-md-6 col-sm-12">
            <h3>Opening Hours</h3>
            <h4>Åbningstider efter uge 12, 2022 <h4>
            <h6>
                Mandag - Lørdag: 09.00 - 21.00  <br>
                Søndag: 09.00 - 15.00
            </h6>
            <h4> Åbningstider fra uge 1, 2022 <h4>
            <h6>
                Tirsdag - Lørdag: 09.00 - 21.00
            </h6>
            <h3>Contact</h3>
            <h6>
                Phone: 6913 6013 <br>
                Mail: info@posthuset.dk <br>
                Torvet 20, 6700 Esbjerg, Denmark <br>    
            </h6>
        </div>
        <div id="footer-menu-container" class="col-md-6 col-sm-12">
            <div id="nav-footer">
                <?php
                    wp_nav_menu(
                        array( 
                            'theme_location' => 'footer-menu'
                        )
                    )
                ?>
            </div>
        </div>
    </div>
</div>

</body>

</html>