<?php $__env->startSection('content'); ?>

<div id="video-viewport">
<a href="<?php echo e(URL::to('home')); ?>">
  <video autoplay muted loop width="100%">
    <source src="assets/video/Intro-plataformate.mp4" type="video/mp4" />
    <source src="assets/video/Intro-plataformate.ogg" type="video/ogg" />
  </video>
</a>
</div>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
  <link rel="stylesheet" type="text/css" href="assets/css/headerStyle.css">
  <link rel="stylesheet " href="assets/css/map.css ">

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
  <script>
    var min_w = 300;
    var vid_w_orig;
    var vid_h_orig;
$(function() {
    vid_w_orig = parseInt($('video').attr('width'));
    vid_h_orig = parseInt($('video').attr('height'));
    $(window).resize(function () { fitVideo(); });
    $(window).trigger('resize');
});
function fitVideo() {
    $('#video-viewport').width($('.fullsize-video-bg').width());
    $('#video-viewport').height($('.fullsize-video-bg').height());
    var scale_h = $('.fullsize-video-bg').width() / vid_w_orig;
    var scale_v = $('.fullsize-video-bg').height() / vid_h_orig;
    var scale = scale_h > scale_v ? scale_h : scale_v;
    if (scale * vid_w_orig < min_w) {scale = min_w / vid_w_orig;};
    $('video').width(scale * vid_w_orig);
    $('video').height(scale * vid_h_orig);
    $('#video-viewport').scrollLeft(($('video').width() - $('.fullsize-video-bg').width()) / 2);
    $('#video-viewport').scrollTop(($('video').height() - $('.fullsize-video-bg').height()) / 2);
};
  </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>