<?php
$faq_sup_title = 'Miami';
$faq_title = 'Frequently Asked Questions';
$faq_text = 'If you don’t see your particular question answered below, please feel free to contact us directly and we’ll try our best to answer your questions in a clear, concise and timely manner.++';

$faq_collection = array(
	['tab' => 'Frequently Asked - 1', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
	['tab' => 'Frequently Asked - 2', 'text' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed do eiusmod tempor incididunt ut labore magna aliqua. Quis commodo odio aenean sed adipiscing diam.'],
	['tab' => 'Frequently Asked - 3', 'text' => 'Amet-Achmed met, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
	['tab' => 'Frequently Asked - 4', 'text' => 'Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, incididunt ut labore magna aliqua quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
); //dd($faq_collection);
$faq_collection_cnt = count($faq_collection);
?>
<section id="frequently_asked_city_section" class="frequently-asked-section frequently-asked-city-section mt-5">
	<div class="container-lg">
		<div class="sup-title text-uppercase text-center mb-3"><?php echo $faq_sup_title;?></div>
		<h2 class="text-center"><?php echo $faq_title;?></h2>
		<p class="text-center mt-3"><?php echo $faq_text;?></p>

		<div class="accordion accordion-flush mt-md-5 mt-3" id="accordionFrequentlyAsked">

			<?php for( $i=0; $i < $faq_collection_cnt; $i++ ):?>
				<div class="accordion-item">
					<h5 class="accordion-header" id="frequentlyAsked__<?php echo ($i+1);?>">
						<button class="accordion-button collapsed px-0 pt-4 pb-2" type="button" data-bs-toggle="collapse" data-bs-target="#afa_collapse__<?php echo ($i+1);?>" aria-expanded="false" aria-controls="afa_collapse__<?php echo ($i+1);?>">
							<?php echo $faq_collection[$i]['tab'];?>
						</button>
					</h5>
					<div id="afa_collapse__<?php echo ($i+1);?>" class="accordion-collapse collapse" aria-labelledby="frequentlyAsked__<?php echo ($i+1);?>" data-bs-parent="#accordionFrequentlyAsked">
						<div class="accordion-body px-0">
							<?php echo $faq_collection[$i]['text'];?>
						</div>
					</div>
				</div>
			<?php endfor;?>

			<div class="accordion-item"></div>
		</div>
	</div>
</section>