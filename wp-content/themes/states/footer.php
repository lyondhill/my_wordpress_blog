	        <div id="ft" class="yui-gc">
							        
	        	<div class="yui-u first">
						
					<ul>
				
						<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
			            <?php wp_list_pages('title_li=&depth=1'); ?>						
					</ul>
										
	        		<!-- <p>&#169; <?php the_time('Y'); ?> <span class="wp-title"><?php bloginfo('name'); ?></span>: <span class="wp-tagline"><?php bloginfo('description'); ?></span></p> -->
	        	
				</div>
	        	
	        	<div class="alignright yui-u">
					
					<p>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_donations">
						<input type="hidden" name="business" value="lyondhill@delorum.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="FOP">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/zh_XC/i/scr/pixel.gif" width="1" height="1">
						</form>
					</p>
					
	        	</div>
	        
	        </div><!-- end #ft -->	        
	    
	    </div><!-- end #doc4 -->
	    
		<?php wp_footer(); ?>
	
	</body>

</html>