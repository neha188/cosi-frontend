<nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
      <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 pt-8 mx-auto">
          <a href="#" class="flex items-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="h-6 mr-3 sm:h-9" alt="Cosi" />
          </a>
          <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <?php wp_nav_menu(array(
            'theme_locations' => 'primary-menu',
            'menu_class' => 'flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0'
            ))
            ?>
          </div>

      </div>
  </nav>  