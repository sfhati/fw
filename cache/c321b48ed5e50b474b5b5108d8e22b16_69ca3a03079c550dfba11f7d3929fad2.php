<?php global $lezaz;?>		<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">[Home]</a>
							</li>
						</ul><!-- /.breadcrumb -->

						<!-- #section:basics/content.searchbox -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->

						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">

                                            
                                            
                                          
                           
						<!-- /section:settings.box -->

                                                
   <?php  if ($lezaz->get( "useajax" )) { 

$lezaz_="0";
 ?>      
 
						<div class="page-content-area" data-ajax-content="true">
							<!-- ajax content goes here -->
						</div><!-- /.page-content-area -->                                                                                         
                                              <?php }else{ ?>

                                                 
 <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

   <?php 
echo $lezaz->lezaz->include_tpl('{template}admin/content/'.$lezaz->get( "noajaxpage" ).'') ;
     
 ?>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
                                                                                                        
						
                                                     
<?php }  ?>

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->