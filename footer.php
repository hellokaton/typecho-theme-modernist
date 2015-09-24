<<<<<<< HEAD
<footer id="footer">
	<div class="copyright">© 2015 <a href="<?php $this->options ->siteUrl(); ?>"><?php $this->author() ?></a></div>
	<div class="theme-copyright">
		<a href="http://typecho.org/" target="_blank">Typecho</a>  
		Theme <a href="https://github.com/biezhi/typecho-theme-modernist" target="_blank">Modernist</a> by Biezhi
	</div>
	<div class="clearfix"></div>
</footer>
  <script src="//cdn.bootcss.com/jquery/1.8.1/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('js/scale.fix.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.imagesloaded.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/gallery.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('fancybox/jquery.fancybox.pack.js'); ?>"></script>
<script type="text/javascript">
  (function($){
    $('.fancybox').fancybox();
  })(jQuery);
</script>

</body>
</html>
=======
	</div>
	</div>
	<footer>
		<div class="footer-bottom">
			<div class="container">
				<div class="pull-left copyright">
				Copyright &copy; 2015&nbsp;<?php $this->options->title(); ?>&nbsp;&nbsp;
				<?php if ($this->options->cnzzCode): ?>
		        <?php $this->options->cnzzCode() ?>
		        <?php endif; ?>
				</div>
				<ul class="footer-nav pull-right">
					<li>Powered by <a href="http://typecho.org/" rel="nofollow">Typecho)))</a></li>
					<li>Optimized by <a href="http://hanc.cc">HanSon</a></li>

					<?php if($this->options->miibeian) : ?>
					<li><a href="http://www.miibeian.gov.cn" rel="nofollow"><?php echo $this->options->miibeian; ?></a></li>
					<?php endif; ?>

					<?php if ( !empty($this->options->misc) && in_array('ShowLoadTime', $this->options->misc) ) : ?>
					<li>加载耗时：<?php echo timer_stop(), ' s'; ?></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</footer>
	<script src="https://dn-biezhi.qbox.me/jquery-2.1.4.min.js"></script>
	<script src="https://dn-biezhi.qbox.me/bootstrap.min.js"></script>
	<script src="https://dn-biezhi.qbox.me/material.min.js"></script>
	<script src="https://dn-biezhi.qbox.me/ripples.min.js"></script>
	<script src="https://dn-biezhi.qbox.me/highlight/highlight.pack.js"></script>
	<script src="<?php $this->options->themeUrl('js/bubble.js'); ?>"></script>
	<script>
      $.material.init();
      hljs.initHighlightingOnLoad();
    </script>
	</body>
</html>
>>>>>>> bb6e707ccbdd7d58b48099ffe2714b65c57e953c
