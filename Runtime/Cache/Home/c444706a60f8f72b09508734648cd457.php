<?php if (!defined('THINK_PATH')) exit(); if((LANG_SET == 'en') && (!empty(C('web_reg_en')))): echo htmlspecialchars_decode(C('web_reg_en'));?>
<?php else: ?>
<?php echo htmlspecialchars_decode(C('web_reg')); endif; ?>