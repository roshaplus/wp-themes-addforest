<?php
global $adforest_theme; 
$pid	=	get_the_ID();
?>
<div class="ad-share text-center">
		<?php
        if( isset( $adforest_theme['share_ads_on'] ) && $adforest_theme['share_ads_on'] )
        {
        ?>
           <div data-toggle="modal" data-target=".share-ad" class="descs-box col-md-4 col-sm-4 col-xs-12">
              <i class="fa fa-share-alt"></i> <span class="hidetext"><?php echo __('Share','adforest'); ?></span>
           </div>
       <?php
       get_template_part( 'template-parts/layouts/ad_style/share', 'ad' );
        }
        ?>
           <a class="descs-box col-md-4 col-sm-4 col-xs-12" href="javascript:void(0);" id="ad_to_fav" data-adid="<?php echo get_the_ID(); ?>">
           <i class="fa fa-heart-o active"></i> 
           <span class="hidetext">
		   <?php echo __('Add to Favourites','adforest'); ?>
           </span>
           </a>
           <div data-target=".report-quote" data-toggle="modal" class="descs-box col-md-4 col-sm-4 col-xs-12">
              <i class="fa fa-warning"></i>
              <span class="hidetext"><?php echo __('Report','adforest'); ?></span>
           </div>
</div>
<div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&#10005;</span><span class="sr-only"><?php echo __('Close','adforest'); ?></span></button>
          <h3 class="modal-title"><?php echo __('Why are you reporting this ad?','adforest'); ?></h3>
       </div>
       <div class="modal-body">
          <!-- content goes here -->
          <form>
             <div class="skin-minimal">
                <div class="form-group col-md-12 col-sm-12">
                   <ul class="list">
                      <li >
                            <select class="alerts" id="report_option">
                            <?php
								$options	=	explode( '|', $adforest_theme['report_options'] );
								foreach( $options as $option )
								{
							?>
                            	<option value="<?php echo esc_attr( $option ); ?>"><?php echo esc_html( $option ); ?></option>
                            <?php
								}
							?>
                            </select>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="form-group  col-md-12 col-sm-12">
                <label></label>
                <textarea placeholder="<?php echo __('Write your comments.','adforest'); ?>" rows="3" class="form-control" id="report_comments"></textarea>
             </div>
             <div class="clearfix"></div>
             <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
             <input type="hidden" id="ad_id" value="<?php echo esc_attr( $pid ); ?>" />
                <button type="button" class="btn btn-theme btn-block" id="sb_mark_it"><?php echo __('Submit','adforest'); ?></button>
             </div>
          </form>
       </div>
    </div>
 </div>
</div>

