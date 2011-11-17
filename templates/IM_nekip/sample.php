		<?php 
		//remove mootools.js and caption.js
		$headerstuff=$this->getHeadData();
		reset($headerstuff['scripts']);
		foreach($headerstuff['scripts'] as $key=>$value){
		  unset($headerstuff['scripts'][$key]);
		}		
		$this->setHeadData($headerstuff);
		?>
		<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<jdoc:include type="head" />  
	<head>
		<title>Nandu - Kancelejas preču veikals</title>
		<?php
		if(isset($_GET['Itemid'])&& $_GET['Itemid']=='56' || $_GET['Itemid']=='58'|| $_GET['Itemid']=='60' || $_GET['fileid']=='3'){
		echo '<link rel="stylesheet" href="'.$this->baseurl .'/templates/'. $this->template . '/css/positions2.css" type="text/css" />'; 
		}
		else{
		echo '<link rel="stylesheet" href="'.$this->baseurl .'/templates/'. $this->template . '/css/positions.css" type="text/css" />'; 
		}
		?>	
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){

//Page Flip on hover

	$("#pageflip").hover(function() {
		$("#pageflip img , .msg_block").stop()
			.animate({
				width: '307px', 
				height: '319px'
			}, 500); 
		} , function() {
		$("#pageflip img").stop() 
			.animate({
				width: '100px', 
				height: '102px'
			}, 220);
		$(".msg_block").stop() 
			.animate({
				width: '90px', 
				height: '90px'
			}, 200);
	});

	
});
</script> 
	</head>
	<body>
	
	<?php
	if(isset($_GET['Itemid'])&& $_GET['Itemid']=='56' || $_GET['Itemid']=='58'|| $_GET['Itemid']=='60' || $_GET['fileid']=='3'){
		echo '<div id="pageflip">
	<a href="index.php">
		<img src="images/page_flip.png" alt="" />
		<span class="msg_block"></span>
	</a>
</div>';
		}
		else{
		echo '<div id="pageflip">
	<a href="index.php/picrija">
		<img src="images/page_flip.png" alt="" />
		<span class="msg_block"></span>
	</a>
</div>';
		}
		?>
	
	
	
		<div class="wrap">
			<div class="head">
			<div id="topbox">
				<div id="logo"></div>
		<?php
		if(isset($_GET['Itemid'])&& $_GET['Itemid']=='56' || $_GET['Itemid']=='58'|| $_GET['Itemid']=='60' || $_GET['fileid']=='3' || isset($_GET['cat'])){
		echo '<div id="food"></div>';
		}
		else{
		echo '<div id="top_ads"><jdoc:include type="modules" name="top_ads" style="xhtml" headerLevel="3" /></div>';
		}
		?>
			</div>
			<div style="clear:both"></div>
				<div class="menu">
					<jdoc:include type="modules" name="menu" style="xhtml" headerLevel="3" />
				</div>
			<div id="breadcrubs">
			<?php echo JText::_('Jūs šobrīd atrodaties: '); ?>
					<jdoc:include type="modules" name="breadcrumb" />
					</div>
		</div>
		<div class="bodij">
			<div class="right">
				<?php if($this->countModules('rotator')) : ?>
					<div id="rotator_l"><jdoc:include type="modules" name="buy now" style="xhtml" headerLevel="3" /></div>
							<div id="">
							<?php
							if(isset($_GET['page'])){
								if($_GET['page']=='shop.browse'){
								echo '<img hspace="4px" vspace="4px" src="images/shop.jpg" alt="Shop comerce">';
								}
							}
							else{
							echo '<jdoc:include type="modules" name="rotator" style="xhtml" headerLevel="0" />';
							}
							?>
							</div>
						<?php endif; ?>		
								<div style="clear:both"></div>
						<div class="left">
							<jdoc:include type="modules" name="left" style="xhtml" headerLevel="3" />
						</div>
			
			
			<div class="contentz">
							<jdoc:include type="component" />
			</div>
			</div>
		<div style="clear:both"></div>
		</div>
					<div style="clear:both"></div>
				<div class="bottom">
					<div id="bottom_ad" align="center">
						<div id="box" align="center"><div id="bottom_ads">
							<jdoc:include type="modules" name="bottom_ads_1" style="xhtml" headerLevel="3" />
						</div></div>
						<div id="box" align="center"><div id="bottom_ads">
							<jdoc:include type="modules" name="bottom_ads_2" style="xhtml" headerLevel="3" />
						</div></div>
						<div id="box" align="center"><div id="bottom_ads">
							<jdoc:include type="modules" name="bottom_ads_3" style="xhtml" headerLevel="3" />
						</div></div>
						<div id="box" align="center"><div id="bottom_ads">
							<jdoc:include type="modules" name="bottom_ads_4" style="xhtml" headerLevel="3" />
						</div></div>
					</div>
				<div style="clear:both"></div>
				<div id="bmenu" align="left">
				<jdoc:include type="modules" name="bottom menu" style="xhtml" headerLevel="3" />
				</div>
				<div id="footer" align="right">
				Portālu izstrādāja Intelligence Media Group. Visa portālā atrodamā informācija ir autora īpašums.<br>
				Sistēma darbojas uz Joomla CMS platformas zem GNU licenses.
				</div>
				<div id="img_logo"></div>
				</div>
			
		</div>
	</body>
	