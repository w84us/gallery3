<?php defined("SYSPATH") or die("No direct script access.") ?>
<div <?= HTML::attributes($div_attrs) ?>>
  <video <?= HTML::attributes($video_attrs) ?>>
    <source <?= HTML::attributes($source_attrs) ?>>
  </video>
</div>
<script type="text/javascript">
  $("#<?= $div_attrs["id"] ?> video").mediaelementplayer(
    $.extend(true, {
      defaultVideoWidth: <?= $width ?>,
      defaultVideoHeight: <?= $height ?>,
      startVolume: 1.0,
      features: ["playpause", "progress", "current", "duration", "volume", "fullscreen"],
      pluginPath: "<?= URL::abs_file("lib/mediaelementjs/") ?>",
      flashName: "flashmediaelement.swf.php"
    }, <?= json_encode($player_options) ?>)
  );
</script>