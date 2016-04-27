<div id="vt_main_show">
<?php if ($this->countModules('header1 + header2 + header3 + header4 + header5 + header6 ')) : ?>
     <div id="vt_header">
     <div class="vt_headcontent">
     	<div class="vt_head_top_left"> &nbsp; </div>
        <div class="vt_head_bottom_left"> &nbsp; </div>
        <div class="vt_head_top_right"> &nbsp; </div>
        <div class="vt_head_bottom_right"> &nbsp; </div>
        <div class="vt_container">
        	 <?php if ($this->countModules('header1')) : ?>
         <div class="<?php echo $headermodulewidth; ?> <?php echo $headermodsep1; ?> floatleft">
		   <div class="vt_module_inside">
             <jdoc:include type="modules" name="header1" style="vt_xhtml"  />
		   </div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('header2')) : ?>
         <div class="<?php echo $headermodulewidth; ?> <?php echo $headermodsep2; ?> floatleft">
		   <div class="vt_module_inside">
             <jdoc:include type="modules" name="header2" style="vt_xhtml"  />
		   </div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('header3')) : ?>
         <div class="<?php echo $headermodulewidth; ?> <?php echo $headermodsep3; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="header3" style="vt_xhtml"  />
			 </div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('header4')) : ?>
         <div class="<?php echo $headermodulewidth; ?> <?php echo $headermodsep4; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="header4" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
		 <?php if ($this->countModules('header5')) : ?>
         <div class="<?php echo $headermodulewidth; ?> <?php echo $headermodsep6; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="header5" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
		 <?php if ($this->countModules('header6')) : ?>
         <div class="<?php echo $headermodulewidth; ?>  floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="header6" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
	     <div class="clr"></div>
        </div>
      </div>  
	 </div>
   <?php endif; ?>
   <?php if ($this->countModules('feature1 + feature2 + feature3 + feature4 + feature5 + feature6 ')) : ?>
     <div id="vt_feature">
       <div class="vt_container">
        <?php if ($this->countModules('feature1')) : ?>
         <div class="<?php echo $featuremodulewidth; ?> <?php echo $featuremodsep1; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="feature1" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('feature2')) : ?>
         <div class="<?php echo $featuremodulewidth; ?> <?php echo $featuremodsep2; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="feature2" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('feature3')) : ?>
         <div class="<?php echo $featuremodulewidth; ?> <?php echo $featuremodsep3; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="feature3" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('feature4')) : ?>
         <div class="<?php echo $featuremodulewidth; ?>  <?php echo $featuremodsep4; ?> floatleft">
		    <div class="vt_module_inside">
               <jdoc:include type="modules" name="feature4" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
		 <?php if ($this->countModules('feature5')) : ?>
         <div class="<?php echo $featuremodulewidth; ?>  <?php echo $featuremodsep5; ?> floatleft">
		     <div class="vt_module_inside">
                <jdoc:include type="modules" name="feature5" style="vt_xhtml"  />
		     </div>
         </div>
         <?php endif; ?>
		 <?php if ($this->countModules('feature6')) : ?>
         <div class="<?php echo $featuremodulewidth; ?>  floatleft">
		     <div class="vt_module_inside">
                <jdoc:include type="modules" name="feature6" style="vt_xhtml"  />
			 </div>
         </div>
         <?php endif; ?>
	     <div class="clr"></div>
        </div>
	 </div>
   <?php endif; ?>
	 <div id="vt_main_contaner">
        <div class="vt_container">
         <div id="vt_main_inside">
	      <?php if(($pageview == "wrapper") || ($Layout == "wf")) : ?>
	             <div id="vt_full">
				   <?php if($SystemMessages == 1) : ?>
				   <jdoc:include type="message" />
				   <?php endif; ?>
				   <jdoc:include type="component" />
				 </div>
	      <?php else : ?>
	         <?php if($this->countModules('left')) : ?>
	             <div id="vt_nav_left" class="vt_auto_cols <?php echo $navleft ." ". $leftfloat;?>">
				  <?php echo $modleft;?>
	             </div>
	         <?php endif; ?>
                 <div id="vt_main_com" class="vt_auto_cols <?php echo $contentwidth." ".$bodyfloat;?>">
	               <?php if($SystemMessages == 1) : ?>
				   <jdoc:include type="message" />
				   <?php endif; ?>
				   <div class="vt_component_inside">
                   <?php echo $component;?>
					<?php if ($this->countModules('inset1 + inset2')) : ?>
					<div id="vt_inset">
					   <?php if ($this->countModules('inset1')) : ?>
                         <div class="<?php echo $insetmodulewidth; ?>  floatleft">
		                     <div class="vt_module_inside">
                               <jdoc:include type="modules" name="inset1" style="vt_xhtml"  />
			                 </div>
                         </div>
                       <?php endif; ?>
					   <?php if ($this->countModules('inset2')) : ?>
                         <div class="<?php echo $insetmodulewidth; ?>  floatleft">
		                     <div class="vt_module_inside">
                               <jdoc:include type="modules" name="inset2" style="vt_xhtml"  />
			                 </div>
                         </div>
                       <?php endif; ?>
	                   <div class="clr"></div>
					</div>
					<?php endif; ?>
				   </div>
	             </div>
	          <?php if($this->countModules('right')) : ?>
	             <div id="vt_nav_right" class="vt_auto_cols <?php echo $navright ." ". $rightfloat;?>">
				   <?php echo $modright;?>
	             </div>
	          <?php endif; ?>
                 <div class="clr"></div>
	       <?php endif; ?>
		</div>
      </div>
     </div>
	 
	 <?php if ($this->countModules('bottom1 + bottom2 + bottom3 + bottom4 + bottom5 + bottom6 ')) : ?>
     <div id="vt_bottom">
     <div class="vt_bgbottom_l"></div>
     <div class="vt_bgbottom_r"></div>
       <div class="vt_container">
        <?php if ($this->countModules('bottom1')) : ?>
         <div class="<?php echo $bottommodulewidth; ?> <?php echo $bottommodsep1; ?> floatleft">
		    <div class="vt_module_inside">
               <jdoc:include type="modules" name="bottom1" style="vt_xhtml"  />
			</div>  
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('bottom2')) : ?>
         <div class="<?php echo $bottommodulewidth; ?> <?php echo $bottommodsep2; ?> floatleft">
		     <div class="vt_module_inside">
                <jdoc:include type="modules" name="bottom2" style="vt_xhtml"  />
			 </div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('bottom3')) : ?>
         <div class="<?php echo $bottommodulewidth; ?> <?php echo $bottommodsep3; ?> floatleft">
		     <div class="vt_module_inside">
               <jdoc:include type="modules" name="bottom3" style="vt_xhtml"  />
			 </div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('bottom4')) : ?>
         <div class="<?php echo $bottommodulewidth; ?>  <?php echo $bottommodsep4; ?> floatleft">
		     <div class="vt_module_inside">
                <jdoc:include type="modules" name="bottom4" style="vt_xhtml"  />
			 </div>
         </div>
         <?php endif; ?>
		 <?php if ($this->countModules('bottom5')) : ?>
         <div class="<?php echo $bottommodulewidth; ?>  <?php echo $bottommodsep5; ?> floatleft">
		     <div class="vt_module_inside">
               <jdoc:include type="modules" name="bottom5" style="vt_xhtml"  />
			 </div>
         </div>
         <?php endif; ?>
		 <?php if ($this->countModules('bottom6')) : ?>
         <div class="<?php echo $bottommodulewidth; ?>  floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="bottom6" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
       </div>
     <div class="clr"></div>  
	 </div>
   <?php endif; ?>
  <div class="clr"></div> 
  </div> 
   <?php if ($this->countModules('footer1 + footer2 + footer3 + footer4 + footer5 + footer6 ')) : ?>
     <div id="vt_footer">
       <div class="vt_container">
        <?php if ($this->countModules('footer1')) : ?>
         <div class="<?php echo $footermodulewidth; ?> <?php echo $footermodsep1; ?> floatleft">
		    <div class="vt_module_inside">
               <jdoc:include type="modules" name="footer1" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('footer2')) : ?>
         <div class="<?php echo $footermodulewidth; ?> <?php echo $footermodsep2; ?> floatleft">
		     <div class="vt_module_inside">
               <jdoc:include type="modules" name="footer2" style="vt_xhtml"  />
			 </div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('footer3')) : ?>
         <div class="<?php echo $footermodulewidth; ?> <?php echo $footermodsep3; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="footer3" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
         <?php if ($this->countModules('footer4')) : ?>
         <div class="<?php echo $footermodulewidth; ?>  <?php echo $footermodsep4; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="footer4" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
		 <?php if ($this->countModules('footer5')) : ?>
         <div class="<?php echo $footermodulewidth; ?>  <?php echo $footermodsep5; ?> floatleft">
		    <div class="vt_module_inside">
              <jdoc:include type="modules" name="footer5" style="vt_xhtml"  />
			</div>
         </div>
         <?php endif; ?>
		 <?php if ($this->countModules('footer6')) : ?>
         <div class="<?php echo $footermodulewidth; ?>  floatleft">
		     <div class="vt_module_inside">
                <jdoc:include type="modules" name="footer6" style="vt_xhtml"  />
			 </div>
         </div>
         <?php endif; ?>
	     <div class="clr"></div>
       </div>
   <?php endif; ?>
</div>