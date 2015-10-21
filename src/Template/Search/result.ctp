<div class="main-content">
	<div class="wrapper">
		<?php
		if(isset($merchant) && $merchant != '')
		{?>
			<h2 class="text-center">Search Results</h2>
			<?php
			foreach ($merchant as $merchants) 
			{?>				    
		        <div class="merchant-top">
		            <div class="col-xs-3 coupen-left-main">
		                <div class="coupen-left">
		                <?php
		                	$id = $merchants->id;
		                    $logo = md5($merchants->logo);
		                ?>
		                    <img src="<?= $this->Url->build('/images/'.$logo.'.png')?>" alt="<?= h($merchants->name) ?>">
		                </div>
		                <?php 
                            $re = strpos($merchants->rebate, ' ');
                            $repart1 = substr($merchants->rebate, 0, $re);
                            $repart2 = substr($merchants->rebate, $re);
                        ?>
		                <div class="coupen-right">
		                    <span class="percentage-large"><?= $repart1; ?></span>
		                    <span class="offer-title"><?= $repart2;?></span>
		                    <?php if($merchants->accept_bitcoin):?>
		                    	<span class="offer-small-title"><?= __('Accepting Bitcoin')?></span>
		                    <?php endif;?>
		                </div>
		                <div class="clearfix"></div>
		            </div>                        
		            <div class="col-xs-6 coupen-info">
		                <a href="<?= $this->Url->build('/merchants/'.$id);?>">
		                	<h5><?= h($merchants->tag_line) ?></h5>
		                	<h6><?= h($merchants->description) ?></h6>
		                </a>
		            </div>
		            <div class="col-xs-3 coupen-info-btn-main">
		                <?php if($merchants->accept_bitcoin):?>
		                <?= $this->Html->image('/images/b-logo.png',[
		                    'alt'       => 'logo',
		                    'class'     => 'b-logo',
		                ])?>
		                <?php endif; ?>
		                <a href="<?= $merchants->website_link ?>" target="_blank" class="bring-to-store-btn"><?= __('Bring To Store') ?></a>
		                <div class="clearfix"></div>
		            </div>
		            <div class="clearfix"></div>
		        </div>		        	
			<?php 
			}
		}
		else if(isset($atozmerchant) && $atozmerchant != '')
		{
			$q = '';
			if(isset($_REQUEST['q']) && $_REQUEST['q'] != '')
			{
				$q = $_REQUEST['q'];
			}
			echo '<h2 class="atozbar text-center">';
			for($i=0; $i<26;$i++)	
			{
				$color = '#cccccc';
				if(chr(65+$i) == $q)
				{
					$color = '#ffae00';
				}
				echo '<a style="color:'.$color.';" href="'.$this->Url->build(["controller"=>"Search", "action"=>"result", "q"=> chr(65+$i), "submit"=>"A-Z"]).'">'.chr(65+$i).'</a>';
				if($i<25)
				{echo '-';}			
			}
			
			if(!empty($atozmerchant))
			{
				echo '</h2><h2 class="d-head text-center">Search Results</h2>';
				foreach ($atozmerchant as $atozmerchants) 
				{?>				    
			        <div class="merchant-top">
			            <div class="col-md-12 store-result">
			               	<h2>
			               		<?php $id = $atozmerchants->id;?>
			               		<a href="<?= $this->Url->build('/merchants/'.$id);?>">
				               		<span class="store-name"><?= h($atozmerchants->name) ?> - </span>
				               	</a>
			               		<span class="tag_line"><?= h($atozmerchants->tag_line)?></span>
			               		<p><?= h($atozmerchants->description)?></p>
			               	</h2>   
			            </div>
			            <div class="col-md-12 store-offers">
			            	<ul>
			            		<li class="offer-list"> Special Offers in <?= h($atozmerchants->name) ?> Store.</li>
			            		<?php if($atozmerchants->accept_bitcoin):?>
			            			<li class="offer-list"> Bitcoin Store</li>
			            		<?php endif;?>
			            	</ul>
			            </div>                        			            			            
			        </div> 		
			        <div class="clearfix"></div>	         			    
				<?php 
				}
			}
			else
			{
				echo '<h2 class="text-center">No result found</h2>';
			}			
		}
		else
		{
			echo '<h2 class="text-center">No result found</h2>';
		}?>	
		<div class="back-at-home">
		    <a href="<?= $this->URL->build('/') ?>" class="back-home"><?= __('Back to Home page')?></a>
	    </div>
	</div>
</div>