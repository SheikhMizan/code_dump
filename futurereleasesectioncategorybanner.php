<?php

For future release section category banner


  
      <div class="defaultsm-big" style="display:none">
        <h3> Upload Randomize Images </h3>
              		<form method="POST" action="" enctype="multipart/form-data" >
			<div class="">
				<p>
					<label>  Banner Image Link</label> <input
						type="text" name="attributes[s_<?php echo $cat_ID; ?>]"
						value="<?php echo get_option( $slink ); ?>" />
				</p>
              			<p>
					<label> Banner Pointing Link</label> <input
						type="text" name="attributes[t_<?php echo $cat_ID; ?>]"
						value="<?php echo get_option( $tlink ); ?>" />
				</p>
				<?php
				wp_nonce_field ( 'BANNER_SM_settings', 'BANNER_SM_settings' )?>
					<input type="submit"
					value="<?php echo __( "+Add", 'banner-sm' );?>"
					class="button button-primary button-large" />
			</div>
		</form>
      </div>


<ul class="tabs">
  <li class="active-tab">Gallery</li>
	<li>Random Gallery</li>
	<!-- <li>Default</li> -->
</ul>

<ul class="tabs-content">
	<li class="gallaerys">
  <ul>
    <?php
    foreach ( $categories as $category ) 
    {
        $cat_ID        = (int) $category->term_id;
        $category_name = $category->name;

        // When viewing a particular category, give it an [active] class
        $cat_class = ( $cat_ID == $term_id ) ? 'active' : 'not-active';
 
         $slink = "s_".$cat_ID;        
          $tlink = "t_".$cat_ID;        
  $ser = wp_get_attachment_url( get_option( $slink ) );
  //   $imgtag = '<img id="image-preview" src='.$ser.' height="100">';
    // echo $slink;
         	$my_saved_attachment_post_id = get_option( $slink , 0 );
      ?>
    <div class="defaultsm">
  
    
      
      		<form method="POST" action="" enctype="multipart/form-data" >
			<div class="">
              
        
		<?php
      if ( $ser ) {
        echo  '<img id="image-preview" src='.wp_get_attachment_url( get_option( $slink ) ).' width="100"  style="max-height: 100px; width: 100px;" /> ';
      }else{
       ?>
       <img id="image-preview" src="" width="100" height="100" style="max-height: 100px; width: 100px;"/>
       <?php
      }
     ?>

	<input id="" type="button" class="button upload_image_button" value="<?php _e( 'Upload image' ); ?>" />
	<input type="hidden" name="attributes[s_<?php echo $cat_ID; ?>]" id="image_attachment_id" value="">
              
		
              			<p>
					<label>Banner Pointing Link</label> <input
						type="text" name="attributes[t_<?php echo $cat_ID; ?>]"
						value="<?php echo get_option( $tlink ); ?>" />
				</p>
				<?php
				wp_nonce_field ( 'BANNER_SM_settings', 'BANNER_SM_settings' )?>
					<input type="submit"
					value="<?php echo __( "+Add", 'banner-sm' );?>"
					class="button button-primary button-large" />
			</div>
		</form>
       

      
      <label style="margin-top:10px"> Shortcode: </label>  <code style="margin-top:10px">[bansm href="<?php echo $cat_ID; ?>"]</code>
      
      	</div>

    
      <?php
 
    }
    ?>
</ul>
  
  </li>
  <li class="categories">
  <ul>
    <?php
    foreach ( $categories as $category ) 
    {
        $cat_ID        = (int) $category->term_id;
        $category_name = $category->name;

        // When viewing a particular category, give it an [active] class
        $cat_class = ( $cat_ID == $term_id ) ? 'active' : 'not-active';
 
         $slink = "s_".$cat_ID;        
          $tlink = "t_".$cat_ID;        
      
      ?>
    <div class="defaultsm">
  
      		<form method="POST" action="" enctype="multipart/form-data" >
			<div class="">
				<p>
					<label><?php echo $category_name ?> - Banner Image Link</label> <input
						type="text" name="attributes[s_<?php echo $cat_ID; ?>]"
						value="<?php echo get_option( $slink ); ?>" />
				</p>
              			<p>
					<label><?php echo $category_name ?> - Banner Pointing Link</label> <input
						type="text" name="attributes[t_<?php echo $cat_ID; ?>]"
						value="<?php echo get_option( $tlink ); ?>" />
				</p>
				<?php
				wp_nonce_field ( 'BANNER_SM_settings', 'BANNER_SM_settings' )?>
					<input type="submit"
					value="<?php echo __( "Save", 'banner-sm' );?>"
					class="button button-primary button-large" />
			</div>
		</form>
       
      <img src="<?php echo get_option( $slink ); ?>" class="img-prev" />
      	</div>
      <?php
 
    }
    ?>
</ul>
  
  </li>
  <li>
  		<form method="post" action="" enctype="multipart/form-data" >
			<div class="">
				<p>
					<label><?php echo __( "Banner img link", 'banner-sm' );?></label> <input
						type="text" name="banner_sm_img_link"
						value="<?php echo get_option( "banner_sm_img_link" ); ?>" />
				</p>
              			<p>
					<label><?php echo __( "Banner Pointing Link", 'banner-sm' );?></label> <input
						type="text" name="banner_sm_point_link"
						value="<?php echo get_option( "banner_sm_point_link" ); ?>" />
				</p>
				<?php
				wp_nonce_field ( 'BANNER_SM_settings', 'BANNER_SM_settings' )?>
					<input type="submit"
					value="<?php echo __( "Save", 'banner-sm' );?>"
					class="button button-primary button-large" />
			</div>
		</form>
  
  </li>
</ul>
