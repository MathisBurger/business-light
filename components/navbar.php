<div class="nav-flex">
	<nav>
        <?php

            $nav = wp_nav_menu(array(
                'menu_class' => 'display-menu-ul'
            ));
            echo $nav;

        ?>
	</nav>
</div>
