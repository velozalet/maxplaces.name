<?php
$faq_superscript_title = get_sub_field('faq_superscript_title'); $faq_title = get_sub_field('faq_title'); $faq_text = get_sub_field('faq_text');
$faq_collection = get_sub_field('question_answer'); $faq_collection_cnt = count($faq_collection);
?>
<section id="frequently_asked_section" class="frequently-asked-section mt-5">
	<div class="container-lg">
		<div class="sup-title text-uppercase text-center mb-3"><?php echo $faq_superscript_title;?></div>
		<h2 class="text-center"><?php echo $faq_title;?></h2>
		<p class="text-center mt-3"><?php echo $faq_text;?></p>

		<div class="accordion accordion-flush mt-md-5 mt-3" id="accordionFrequentlyAsked">

			<?php for( $i=0; $i < $faq_collection_cnt; $i++ ):?>
				<div class="accordion-item">
					<h5 class="accordion-header" id="frequentlyAsked__<?php echo ($i+1);?>">
						<button class="accordion-button collapsed px-0 pt-4 pb-2" type="button" data-bs-toggle="collapse" data-bs-target="#afa_collapse__<?php echo ($i+1);?>" aria-expanded="false" aria-controls="afa_collapse__<?php echo ($i+1);?>">
							<?php echo $faq_collection[$i]['question'];?>
						</button>
					</h5>
					<div id="afa_collapse__<?php echo ($i+1);?>" class="accordion-collapse collapse" aria-labelledby="frequentlyAsked__<?php echo ($i+1);?>" data-bs-parent="#accordionFrequentlyAsked">
						<div class="accordion-body px-0">
							<?php echo $faq_collection[$i]['answer'];?>
						</div>
					</div>
				</div>
			<?php endfor;?>

			<div class="accordion-item"></div>
		</div>
	</div>
</section>