<?php if( $this->isAuthorizedFor('host_search') ){ ?>
<!-- Search Box Start -->
<div class="ui-widget">
 <div class="p2 ui-widget-header ui-corner-top">
 <?php echo Kohana::lang('common.search-box-header') ?>
 </div>
 <div class="p4 ui-widget-content ui-corner-bottom">
        <div id="selection"></div>
        <input type="text" name="host" id="query" class="textbox" />
        <!--<input type="button" value="GO" />-->
 </div>
</div>
<p>

<script type="text/javascript">
//<![CDATA[

  jQuery(function() {

    var onAutocompleteSelect = function(value, data) {
      //$('#selection').html('<img src="\/global\/flags\/small\/' + data + '.png" alt="" \/> ' + value);
      //alert(data);
      window.location.href = 'graph?host=' + value;
    }

    $('#query').autocomplete({
      serviceUrl: 'ajax/search',
      width: 200,
      delimiter: /(,|;)\s*/,
      onSelect: onAutocompleteSelect,
      deferRequestBy: 200 //miliseconds
    });

  });
  
//]]>
</script>
<!-- Search Box End -->
<?php } ?>
