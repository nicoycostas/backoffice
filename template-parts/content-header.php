<?php if (!is_single()):  ?>
    <header >
            <!-- top header -->
            
            <h1 class="header-title">Costas Nicou Back Office</h1>
            
            <!-- bottom header -->    
            <nav class="nav" style="position:relative;right: 50px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/profile-pic.jpeg" alt="" class="navbar-brand">

                <!-- dynamic menu -->            
                <ul class="menu">
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>" class="nav-link">Articles</a> </li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/journal" class="nav-link">Journal</a></li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/note" class="nav-link">Notes</a></li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/centralpoint" class="nav-link">Central Points</a></li>
                    <li class="nav-item"> <a href="<?php echo get_home_url(); ?>/strategy" class="nav-link">Strategies</a></li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/decision" class="nav-link">Decisions</a></li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/goal" class="nav-link">Goals</a></li>
                </ul>
            </nav>

    </header>

<?php elseif (is_single() OR is_singular()  ): ?>
    <header >
            <!-- top header -->
        
            <h1 class="header-title">Costas Nicou Back Office</h1>
            
            <!-- bottom header -->    
            <nav class="nav" style="position:relative;right: 100px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/profile-pic.jpeg" alt="" class="navbar-brand">

                <!-- dynamic menu -->            
                <ul class="menu">
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>" class="nav-link">Articles</a> </li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/journal" class="nav-link">Journal</a></li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/note" class="nav-link">Notes</a></li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/centralpoint" class="nav-link">Central Points</a></li>
                    <li class="nav-item"> <a href="<?php echo get_home_url(); ?>/strategy" class="nav-link">Strategies</a></li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/decision" class="nav-link">Decisions</a></li>
                    <li class="nav-item"><a href="<?php echo get_home_url(); ?>/goal" class="nav-link">Goals</a></li>
                </ul>
            </nav>

    </header>
 
<?php endif ?>