<?php
/**
 * Template to render the body section.
 *
 * @author    Tobias Jüschke
 * @author    Achim Sperling <achim.sperling@gmail.com>
 * @link      https://github.com/tobiju/bookdown-bootswatch-templates for the canonical source repository
 * @copyright Copyright (c) 2015 Tobias Jüschke
 * @license   https://github.com/tobiju/bookdown-bootswatch-templates/blob/master/LICENSE.txt New BSD License
 */

  $cssBootswatch = getenv('CSS_BOOTSWATCH') ?: 'cerulean';

?>
<body class="bbt-theme-<?php echo $cssBootswatch; ?>">
    <div class="page-wrapper">
        <?php echo $this->render('core'); ?>
    </div>

    <script src="https://tobiju.github.io/share/prismjs/main.js"></script>
    <script src="https://tobiju.github.io/share/prismjs/prism.js"></script>
</body>
