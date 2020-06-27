<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
			<h4 class="num"><?php $this->commentsNum(_t('暂时无人评论'), _t('仅有 1 条评论'), _t('共有 %d 条评论')); ?> &raquo;</h4>            
            <div class="commentpage">
			<?php $comments->pageNav('上一页','下一页',10,'...'); ?>
            
            <?php $comments->listComments(); ?>

			<?php $comments->pageNav('上一页','下一页',10,'...'); ?>
            
            </div>
			<?php endif; ?>
			

            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
            
			<h4 class="response"><?php _e('添加新评论'); ?> &raquo;</h4>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <?php if($this->user->hasLogin()): ?>
                <?php else: ?>
				<p>
                    <label for="author"><?php _e('您的昵称'); ?></label>
					<input type="text" name="author" id="author" class="text" size="40" value="<?php $this->remember('author'); ?>" />
				</p>
				<p>
                    <label for="mail"><?php _e('电子邮件'); ?></label>
					<input type="text" name="mail" id="mail" class="text" size="40" value="<?php $this->remember('mail'); ?>" />
				</p>
				<p>
                    <label for="url"><?php _e('贵站链接'); ?></label>
					<input type="text" name="url" id="url" class="text" size="40" value="<?php $this->remember('url'); ?>" />
				</p>
                <?php endif; ?>
				<p><textarea rows="8" cols="70" name="text" class="textarea"><?php $this->remember('text'); ?></textarea></p>
				<p><input type="submit" value="<?php _e('提交评论'); ?>" class="submit" /></p>
			</form>
            </div>
            <?php else: ?>
            <?php endif; ?>
		</div>
