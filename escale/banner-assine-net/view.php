<section id="<?php echo $id;?>" class="op-section escale banner-assine-net full-screen">
	<img src="<?php echo $contents['image']; ?>" />
	<div class="component-wrapper">
		<?php
		if ($settings['verify_disponibility']):
		?>
		<section data-component-name="checkAvailability" class="CheckAvailabilityWrapper" data-check-availability>
			<section class="CheckAvailability" data-loading>
				<span class="CheckAvailability-title">VERIFICAR A DISPONIBILIDADE</span>
				<form class="CheckAvailability-form" data-layer='{
			        "component": "checkAvailability",
			        "text": "VERIFICAR A DISPONIBILIDADE",
			        "componentType": "engajamento"
			        }' data-check-availability-form><input type="tel" placeholder="DIGITE SEU CEP" data-check-availability-cep data-cep class="CheckAvailability-formInput"> <input type="submit" value="VERIFICAR" data-layer='{
			        "component": "checkAvailability",
			        "text": "VERIFICAR",
			        "componentType": "conversao"
			        }' class="CheckAvailability-formSubmit">
				</form>
			</section>
		</section>
		<?php
		endif;
		?>
	</div>

</section>