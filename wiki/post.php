<?php $this->need('header.php'); ?>

    <?php $this->need('sidebar.php'); ?>
	
	<div id="content">
	    <h3 class="title"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> &raquo; <?php $this->category(' &raquo; '); ?><?php $this->archiveTitle(); ?></h3>
		<div id="content_list">
        <article>
		<div class="post blog">
			<h2 class="entry_title"><?php $this->title() ?></h2>
			<p class="entry_data">
				<?php _e('分类：'); ?><?php $this->category(','); ?> <?php _e('　标签：'); ?><?php $this->tags(', ', true, '暂无标签'); ?> <?php _e('　时间：'); ?><?php $this->date(); ?> <?php _e('　评论：'); ?><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
			</p>
			<?php $this->content(); ?>
			<p class="author">转载请标明出处，本文永久链接地址：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a></p>
		</div>
		</div>
		</article>
        <?php $this->need('comments.php'); ?>
	</div><!-- end #content-->
	
	<?php $this->need('footer.php'); ?>
