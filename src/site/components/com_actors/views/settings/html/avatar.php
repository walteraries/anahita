<?php defined('KOOWA') or die ?>

<h3><?= @text('LIB-AN-AVATAR-EDIT') ?></h3>

<p><?= @avatar($item, 'medium', false) ?></p>

<p class="lead"><?= @text('LIB-AN-AVATAR-SELECT-IMAGE-ON-YOUR-COMPUTER') ?></p>
    
<form id="actor-avatar" action="<?= @route($item->getURL().'&edit=avatar') ?>" method="post" enctype="multipart/form-data">
    
    <div class="control-group">
        <div class="controls">
            <input type="file" name="portrait" data-limit="<?= ini_get('upload_max_filesize') ?>" />
        </div>
    </div>
    
    <?php if($item->portraitSet()): ?>
    <div class="form-actions">
        <button data-trigger="DeleteAvatar" class="btn btn-danger">
            <?= @text('LIB-AN-AVATAR-DELETE') ?>
        </button>
    </div>
    <?php endif ?>
</form>