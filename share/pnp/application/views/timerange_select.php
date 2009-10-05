<?php if($this->config->conf['use_calendar']){ 
$start = $this->session->get('start','');
$end   = $this->session->get('end','');
?>
<script type="text/javascript">
$(function() {
    $("#button").click(function() {
        $("#toggle-timerange").toggle("blind",500); 
        return false;
    });
	$("#dpstart").datepicker({ showOn: 'button', buttonImage: '<?php echo url::base()?>media/images/calendar.gif', buttonImageOnly: true, constrainInput: false });
	$("#dpend").datepicker({ showOn: 'button', buttonImage: '<?php echo url::base()?>media/images/calendar.gif', buttonImageOnly: true, constrainInput: false });
});
</script>

<div id="toggle-timerange" class="ui-widget" style="Display: none;">
    <div class="p4 ui-widget-header ui-corner-top"><?php echo Kohana::lang('common.timerange-selector-title') ?></div>
    <div class="p4 ui-widget-content ui-corner-bottom">
	<form method="GET" action="<?php echo url::base().Router::$current_uri?>">
        <fieldset>
            <legend><?php echo Kohana::lang('common.timerange-selector-legend') ?></legend>
			<?php foreach($_GET as $key=>$val){
				if( $key == "start" )
					continue;
				if( $key == "end" )
					continue;
				echo "<input type=\"hidden\" name=\"".$key."\" value=\"".$val."\">\n";
			}?>
            <label for=start"><?php echo Kohana::lang('common.start') ?>: </label><input id="dpstart" type="text" size="16" maxlength="40" name="start" value="<?php echo $start?>">
			<label for=end"><?php echo Kohana::lang('common.end') ?>: </label><input id="dpend" type="text" size="16" maxlength="40" name="end" value="<?php echo $end?>">
			<input type="submit" id="submit" class="ui-button ui-state-default ui-corner-all" value="<?php echo Kohana::lang('common.timerange-selector-submit-button') ?>"></input>
			<input type="button" id="remove_timerange_session" class="ui-button ui-state-default ui-corner-all" value="Clear"></input>
        </fieldset>
    </form><p>
    </div>
</div>
<?php } ?>
