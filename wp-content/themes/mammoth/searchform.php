<form method="get" id="searchform" action="<?php home_url('url'); ?>/">
	<span class="left"></span>
		<input type="text" value="<?php _e('Search');?>" name="s" id="s" onfocus="if (this.value == '<?php _e('Search');?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Search');?>';}" />
	<span class="right"></span>
</form>