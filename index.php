<<<<<<< HEAD
<?php

/**
 * 这是基于modernist 的Typecho模板
 *
 * @package Modernist Theme
 * @author biezhi
 * @version 1.0.0
 * @link https://biezhi.me
 */

$this->need('header.php');
?>
	<div class="content">
		<?php while($this->next()): ?>
	    <article class="post">
		  <header>	    
		      <div class="icon"></div>
		      <a href="<?php $this->permalink() ?>">
				  <time datetime="<?php $this->date('Y-m-d'); ?>">
				    <?php $this->date('Y-m-d'); ?>
				  </time>
			   </a>
		       <h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
		  </header>
	  
		  <div class="entry"><?php $this->content(''); ?></div>
		  
		  <footer class="end-sep">
		        <div class="alignleft">
		          <a href="<?php $this->permalink() ?>#more" class="more-link">Read More</a>
		        </div>
		    <div class="clearfix"></div>
		  </footer>
		</article>
		<?php endwhile; ?>
		
		<nav id="pagination">
			<?php $this->pageLink('Prev'); ?>
			<?php $this->pageLink('Next','next'); ?>
		  	<div class="clearfix"></div>
		</nav>
	</div>
</div>
<?php $this->need('footer.php'); ?>
=======
<?php

/**
 * 这是HanSon 基于material 的Typecho模板
 *
 * @package Material Theme
 * @author HanSon
 * @version 1.0.0
 * @link http://hanc.cc
 */

$this->need('header.php');
?>
<section class="billboard">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="intro animate fadeIn">
					<h1><?php $this->options->slogan() ?></h1>
					<p class="lead"></p>
				</div>
			</div>
		</div>
	</div>
	<canvas class="demo-canvas" id="demo-canvas"></canvas>
</section>
<div class="container">
	<div class="row">

		<div class="col-md-9">
		    <?php while($this->next()): ?>
		    <div class="panel panel-default">
			    <div class="panel-body">
			        <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			        <div class="post-meta">
			        	<span><i class="fa fa-calendar"></i>&nbsp;<?php $this->date('Y-m-d'); ?>　</span>
			        	<span><i class="fa fa-user"></i>&nbsp;<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>　</span>
			        	<span><i class="fa fa-eye"></i>&nbsp;阅读 <?php $this->views()._e(' ') ?>　</span>
			        	<span><i class="fa fa-book"></i>&nbsp;<?php $this->category(','); ?>　</span>
			        	<span><i class="fa fa-comments-o"></i>&nbsp;<a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a></span>
			        </div>
			        <div class="post-content"><?php $this->content('<button class="btn btn-success btn-raised">阅读全文</button>'); ?></div>
			    </div>
		    </div>
		    <?php endwhile; ?>
		    <?php $this->pageNav('<< 上一页', '下一页 >>'); ?>
		</div>

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>

>>>>>>> bb6e707ccbdd7d58b48099ffe2714b65c57e953c
