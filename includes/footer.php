<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer id="footer" role="contentinfo">
	&copy; <?php Matcha::copyrightYear(); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
	<?php Matcha::footerInfo(); ?>
	<!-- 返回顶部按钮 -->
	<div id="helpbar">
		<button id="light-switch"><span class="iconfont">&#xe7ac;</span></button>
		<button id="back2top"><span class="iconfont">&#xe749;</span></button>
	</div>
</footer>
</div>
</div>

<footer id="script"><?php
	Matcha::footerSetting(); 
	Matcha::footer(); 
	$this->footer(); 
?></footer>

</body>
</html>