<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
        <div class="post">
            <h2 class="entry_title">404 - <?php _e('页面没找到'); ?></h2>
			<p>您可以尝试搜索一下看看？</>
            <p>
            <form method="post">
                <input type="text" name="s" class="searchInput" size="20" /><input type="submit" class="searchBtn" value="<?php _e('搜索'); ?>" /><div class="clear"></div>
            </form>
            </p>
			<p>另外为您随机挑选了几篇文章，您可能会感兴趣？</p>

        </div>

    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
