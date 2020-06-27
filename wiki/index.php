<?php
/**
 * 移值自 wordpress wiki 模板<br/>由<a href="http://www.wamuban.com" title="挖模板 收集网站模板">挖模板</a>整理收集
 * 
 * @package Typecho Wiki Theme 
 * @author M4HTML
 * @version 12.02.29
 * @link http://m4html.com
 */
 
 $this->need('header.php');
 ?>

    <?php $this->need('sidebar.php'); ?>
	
	<article>
	<div id="content">
	    <h3 class="title">文章列表</h3>
		<div id="content_list">
    <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
        <div class="post blog blogindex">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<?php $this->content('阅读剩余部分...'); ?>
		</div>
	<?php endwhile; ?>
    <?php else: ?>
        <div class="post">
            <h2 class="entry_title"><?php _e('没有找到内容'); ?></h2>
        </div>
    <?php endif; ?>
		</div>
        <?php $this->pageNav('上一页','下一页',10,'...'); ?>
	</div><!-- end #content-->
	</article>
	
	<?php $this->need('footer.php'); ?>
