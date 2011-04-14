<?php



$themename = "Fazyvo";
$shortname = "theme";
$options = array (
    array(  "type" => "begin",
            "name" => "<div id=\"message\" class=\"updated fade\"><p>Please scroll to the bottom of the page to SUBMIT or RESET these settings.	</p></div>"),
            
    array(  "type" => "close"),




    array(  "type" => "begin",
            "name" => "Support"), 
    
    array(  "type" => "p",
            "description" => "<p>Please go the <a href=\"http://www.noonnoo.com/my-free-wordpress-themes/fazyvo/fazyvo_1-6/\">Theme Page</a> for more information. Comment it on the Theme Page or email (mellewynia@noonnoo.com) me if you need help. If you want to support the theme or me, you can do that with:</p><ul> <li>-- &nbsp; <strong>leaving a comment</strong> (I'd really appreciate that!) on the theme documentation page;</li> <li>-- &nbsp; <strong>reporting bugs</strong>;</li> <li>-- &nbsp; <strong>making a donation</strong> on Paypal: <a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7854873\"><img src=\"https://www.paypal.com/en_GB/i/btn/btn_donate_SM.gif\" alt=\"Donate via Paypal\" /></a> I've spent many hours designing, developing, updating and answering questions, I'd really appreciate it.; </li> <li>-- &nbsp; with letting me <strong>customize</strong> this theme for you so it fits to your needs exactly. It's not expensive! Email: mellewynia@noonnoo.com for more info.</li> </ul>" ),

            
    array(  "type" => "close"),
    
    
    
    
    array(  "type" => "begin",
            "name" => "General options"),
    
    array(  "name" => "Cufon - Disable it when you're using a <a href=\"http://en.wikipedia.org/wiki/Latin_characters_in_Unicode\">non-latin characters</a> based language (like Japanese or Arabic).",
            "description" => "It's enabled on default. If you disable it, the site wil load faster in all versions of Internet Explorer.",
            "id" => $shortname."_cufon",
            "type" => "select",
            "std" => "Enable",
            "options" => array("Enable", "Disable")),
    
    array(  "name" => "Pagesmenu",
            "description" => "It's enabled on default. Disable it if you do have to many pages, and it will break the look of your website.",
            "id" => $shortname."_pagesmenu",
            "type" => "select",
            "std" => "Enable",
            "options" => array("Enable", "Disable")),
    
    array(  "name" => "Show a message when your visitors are at home.",
            "description" => "It's disabled on default.",
            "id" => $shortname."_home_welcome_select",
            "type" => "select",
            "std" => "Disable",
            "options" => array("Enable", "Disable")),
    
    array(  "name" => "Welcome message",
            "description" => "Tell your visitors something about you, this site or whatever you want them to know when there're at home. !!! Don't use the following characters (&amp; &#060; &#062; &#047; &#34;) or the whole theme (including this page) unless you know how to code HTML.",
            "id" => $shortname."_home_welcome",
            "type" => "textarea",
            "std" => ""),
    
    array(  "name" => "Show the author's name under titels of posts.",
            "description" => "It's disabled on default.",
            "id" => $shortname."_author",
            "type" => "select",
            "std" => "Disable",
            "options" => array("Enable", "Disable")),
    
    array(  "name" => "Show the html tags you can use above the commentbox.",
            "description" => "It's disabled on default. It's recommended you don't enable it if you or your visitors don't know what html is.",
            "id" => $shortname."_comment_htmltags",
            "type" => "select",
            "std" => "Disable",
            "options" => array("Enable", "Disable")),
    
    array(  "type" => "close"),
    
    
    

    array(  "type" => "begin",
            "name" => "Sidebar options"),
    
    array(  "name" => "Show the RSS links in the sidebar",
            "description" => "It's enabled on default.",
            "id" => $shortname."_sidebar_rss",
            "type" => "select",
            "std" => "Enable",
            "options" => array("Enable", "Disable")),
    
    array(  "type" => "close"),
    
    

    array(  "type" => "begin",
            "name" => "Footer options"),
    
    array(  "name" => "The text next to the title of your blog",
            "description" => "It's Tagline on default.",
            "id" => $shortname."_footer",
            "type" => "select",
            "std" => "Tagline",
            "options" => array("Tagline", "Custom", "Nothing")),

    array(  "name" => "Custom",
            "description" => "!!! Don't use the following characters (&amp; &#060; &#062; &#047; &#34;) or the whole theme (including this page) may break unless you know how to code HTML!",
            "id" => $shortname."_footer_custom",
            "std" => "Copyright 2009, Melle W.",
            "type" => "text"),
    
    array(  "type" => "close"),
    
    
    

    array(  "type" => "begin",
            "name" => "Style options"),
    
    array(  "name" => "Your favicon (What's this? Check <a href=\"http://en.wikipedia.org/wiki/Favicon\">Favicon - Wikipedia</a>.)",
            "description" => "1 is the default favicon. You can chose out of these three:  &nbsp; &nbsp; 1 <img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=".get_stylesheet_directory_uri()."/images/favicon_1.gif />  &nbsp; &nbsp; 2 <img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=".get_stylesheet_directory_uri()."/images/favicon_2.gif /> &nbsp; &nbsp; 3 <img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=".get_stylesheet_directory_uri()."/images/favicon_3.gif />
             &nbsp; &nbsp; 3a <img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=".get_stylesheet_directory_uri()."/images/favicon_3a.gif />
             &nbsp; &nbsp; 4 <img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=".get_stylesheet_directory_uri()."/images/favicon_4.gif />
             &nbsp; &nbsp; 5 <img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=".get_stylesheet_directory_uri()."/images/favicon_5.gif />
             &nbsp; &nbsp; 6 <img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=".get_stylesheet_directory_uri()."/images/favicon_6.gif />",
            "id" => $shortname."_favicon",
            "type" => "select",
            "std" => "1",
            "options" => array("1", "2", "3", "3a", "4", "5", "6")),
    
    array(  "name" => "Which colours do you like in the theme?",
            "description" => "It's 1 on default.",
            "id" => $shortname."_colours",
            "type" => "select",
            "std" => "1",
            "options" => array("1", "2", "3", "4", "5")),
            
     array(  "type" => "p",
            "description" => "<p>The colours:<br/><img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=\"".get_stylesheet_directory_uri()."/images/theme-colours_img.png\" /></p>" ),
            
    array(  "name" => "Which backgroundimage do you want in the header?",
            "description" => "It's 1 on default.",
            "id" => $shortname."_header_bg",
            "type" => "select",
            "std" => "1",
            "options" => array("1", "2", "3", "4", "5", "6")),
    
    array(  "type" => "p",
            "description" => "<p>Background image 1:<br/><img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=\"".get_stylesheet_directory_uri()."/images/header_1.jpg\" /></p>
            <p>Background image 2:<br/><img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=\"".get_stylesheet_directory_uri()."/images/header_2.jpg\" /></p>
            <p>Background image 3:<br/><img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=\"".get_stylesheet_directory_uri()."/images/header_3.jpg\" /></p>
            <p>Background image 4:<br/><img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=\"".get_stylesheet_directory_uri()."/images/header_4.jpg\" /></p>
            <p>Background image 5:<br/><img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=\"".get_stylesheet_directory_uri()."/images/header_5.jpg\" /></p>
            <p>Background image 6:<br/><img style=\"padding:2px; border:1px solid #E3E3E3; background:#fff;\" src=\"".get_stylesheet_directory_uri()."/images/header_6.jpg\" /></p>" ),
    
    array(  "type" => "close")
);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=controlpanel.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); 
                update_option( $value['id'], $value['std'] );}

            header("Location: themes.php?page=controlpanel.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "Fazyvo Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
    <div id="icon-options-general" class="icon32">
        <br/>
    </div>
<h2><?php echo $themename; ?> Options</h2>

<?php foreach ($options as $value) { ?>

<form method="post">

<?php if ($value['type'] == "begin") { ?>

<h3><?php echo $value['name']; ?></h3>

<?php echo $value['description']; ?>

<table class="form-table">

<tbody>
    
<?php } elseif ($value['type'] == "text") { ?>
        
<tr valign="top"> 
    <th scope="row"><?php echo $value['name']; ?></th>
    <td>
        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { 
                
                $str = stripslashes(get_settings( $value['id'] ));
                
                $trans = get_html_translation_table(HTML_ENTITIES); $encoded = strtr($str, $trans); echo $encoded; 
                
                 } else { echo $value['std']; } ?>" size="40" /> <span class="setting-description"><?php echo $value['description']; ?></span>
    </td>
</tr>
<?php } elseif ($value['type'] == "select") { ?>

    <tr valign="middle"> 
        <th scope="top"><?php echo $value['name']; ?></th>
        <td>
            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                <?php foreach ($value['options'] as $option) { ?>
                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; }?>><?php echo $option; ?></option> 
                <?php } ?> 
            </select> <span class="setting-description"><?php echo $value['description']; ?></span>
        </td>
    </tr>
<?php } elseif ($value['type'] == "radio") { ?>

    <tr valign="middle"> 
        <th scope="top"><?php echo $value['name']; ?></th>
        <td>
                <?php foreach ($value['options'] as $option) { ?>
      <input name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo $option; ?>" <?php if ( get_settings( $value['id'] ) == $option) { echo 'checked'; } ?>/> <?php echo $option; echo $value['description']; ?><br />
<?php  } ?>
        </td>
    </tr>
<?php } elseif ($value['type'] == "textarea") { ?>

    <tr valign="middle"> 
        <th scope="top"><?php echo $value['name']; ?>:</th>
        <td>
            <textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="40" rows="5"/><?php if ( get_settings( $value['id'] ) != "") {
                
                $str = stripslashes(get_settings( $value['id'] ));
                
                $trans = get_html_translation_table(HTML_ENTITIES); $encoded = strtr($str, $trans); echo $encoded; 
                
                } else { echo $value['std']; } ?></textarea>
            <span class="setting-description"><?php echo $value['description']; ?></span>
        </td>
    </tr>
<?php } elseif ($value['type'] == "p") { ?>
</tbody>
    </table>

    <?php echo $value['description']; ?>

<table class="form-table">
    <tbody>
    

<?php } elseif ($value['type'] == "close") { ?>
</tbody>
    </table>
<?php
}
}
?>
<p class="submit">
<input class="button-primary" name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php
}

add_action('admin_menu', 'mytheme_add_admin'); ?>
