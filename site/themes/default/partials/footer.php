    <footer class="footer">
        <div class="container">
            <p class="social-links text-center">
                <a rel="nofollow" href="<?php echo Flextype\Config::get('site.social_link.twitter'); ?>"><i class="fab fa-twitter"></i></a>
                <a rel="nofollow" href="<?php echo Flextype\Config::get('site.social_link.github'); ?>"><i class="fab fa-github"></i></a>
                <a rel="nofollow" href="<?php echo Flextype\Config::get('site.social_link.gitter'); ?>"><i class="fab fa-gitter"></i></a>
                <a rel="nofollow" href="<?php echo Flextype\Config::get('site.social_link.facebook'); ?>"><i class="fab fa-facebook"></i></a>
                <a rel="nofollow" href="<?php echo Flextype\Config::get('site.social_link.telegram'); ?>"><i class="fab fa-telegram"></i></a>
                <a rel="nofollow" href="<?php echo Flextype\Config::get('site.social_link.vkontakte'); ?>"><i class="fab fa-vk"></i></a>
            </p>
            <p>
                <ul class="locales">
                    <li><a href="http://flextype.org">English</a></li>
                    <li><a href="http://flextype.ru">Русский</a></li>
                </ul>
            </p>
            <p>
                <ul class="copyright">
                    <li>
                        <p><a href="{Url::getBase()}">Flextype</a> was <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <a href="http://awilum.github.io" class="highlight">Sergey Romanenko</a> and <a href="https://github.com/flextype/flextype/network/members" class="highlight">Flextype Community</a></p>
                        <p>Copyright © 2018 - <a href="{Url::getBase()}/about/license">Flextype</a> - All rights reserved</p>
                    </li>
                </ul>
            </p>
        </div>
    </footer>
    <?php Flextype\Templates::display('partials/tail'); ?>
  </body>
</html>
