<?php wp_footer(); ?>

<div id="footer" class="wood">
    <div class="row">
        <div id="footer-content-container" class="col-md-6 col-sm-12">
            <h3>Restaurant Posten</h3>
            <h6>Frokost - fredag - L&oslash;rdag: 11.30 - 15.00<br />Aften - Torsdag - L&oslash;rdag: 17.00 - 24.00<br /><br />2.sal, Torvet 20, 6700 Esbjerg, Denmark<br />+45 69136013<br />info@restaurant-loftet.dk</h6>
            <h3>HomeRun, Nightclub - Gastro sportsbar</h3>
            <h6>Onsdag - Torsdag: 16.00 - 24.00 <br />Fredag - L&oslash;rdag: 12.00 - LUK<br /><br />1.sal, Torvet 20, 6700 Esbjerg, Denmark<br />+45 69136018<br />info@homerunesbjerg.dk</h6>
            <h6>(Ekstra lukke dage kan forekomme se mere p&aring; bord booking)</h6>
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