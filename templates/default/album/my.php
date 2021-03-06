<?php $this->display('my/head.php'); ?>
<div class="container">
    <?php $this->display('album/menu.php'); ?>
    <div class="list-body">
        <div class="content-gallery">
            <div id="grid-gallery" class="listCont" style="opacity:0;">
                <?php $this->display('album/photo-list.php'); ?>
            </div>
            <div class="pageset" style="display:none"><?php echo $pagestr; ?></div> 
        </div>
    </div>
    <div class="loadingbar" style="display:none;"><label>努力加载中</label></div>
</div>

<script>
$("#grid-gallery").justifiedGallery({'rowHeight':300,'margins':10}).on('jg.complete', function (e) {
    $('#grid-gallery').css('opacity',1);
});
</script>
<script type="text/javascript" src="<?php echo S('album','js/loadmore.js'); ?>"></script>
<?php $this->display('my/foot.php'); ?>