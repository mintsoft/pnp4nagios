<div class="pagebody">
	<?php if (!empty($header)) {
     		echo $header;
	} ?>

    <table class="body"><tr><td valign="top">
    <div class="left ui-widget-content ui-corner-all">
	<?php if (!empty($graph_content)) {
     		echo $graph_content;
	} ?>
    </div>
    </td><td valign="top">
	<div class="right ui-widget-content ui-corner-all">
	<?php if (!empty($search_box)) {
     		echo $search_box;
	} ?>

	<?php if (!empty($icon_box)) {
     		echo $icon_box;
	} ?>

	<?php if (!empty($status_box)) {
     		echo $status_box;
	} ?>

	<?php if (!empty($timerange_box)) {
     		echo $timerange_box;
	} ?>

	<?php if (!empty($service_box)) {
     		echo $service_box;
	} ?>
	<?php if (!empty($logo_box)) {
     		echo $logo_box;
	} ?>
	</div>
    </td></tr></table>
    <div class="cb p4 ui-widget-content ui-corner-all">
	<?php echo Kohana::lang('core.stats_footer') ?>
    </div>
</div>
