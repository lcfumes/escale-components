<div class="container">
	<div class="TableSingle" data-component-name="tableSingle" id="TableSingle">
		<div class="TableSingle-title">Planos de Internet</div>
		<div class="TableSingle-side">
			<table class="TableSingle-table">
				<thead class="TableSingle-head--selected">
					<tr>
						<th>
							<a href="">NET VIRTUA</a>
						</th>
					</tr>
				</thead>
				<tbody class="TableSingle-body--selected">
					<tr>
						<td>
							<i class="fa fa-download" aria-hidden="true">
							</i>
							<p>Download</p>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-upload" aria-hidden="true">
							</i>
							<p>Upload</p>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-wifi" aria-hidden="true">
							</i>
							<p>WI-FI</p>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-shield" aria-hidden="true">
							</i>
							<p>Antivirus</p>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-usd" aria-hidden="true">
							</i>
							<p>Preço Individual</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Preço no Combo</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="TableSingle-content">
			<table class="TableSingle-contentTable">
				<thead class="TableSingle-head">
					<tr>
						<?php
							foreach($contents['items'] as $item => $value):
						?>
						<th>
							<span><?php echo $value['title']; ?></span>
						</th>
						<?php
							endforeach;
						?>
					</tr>
				</thead>
				<tbody class="TableSingle-body">
					<tr>
						<?php
							foreach($contents['items'] as $item => $value):
						?>
						<td><?php echo $value['download']; ?></td>
						<?php
							endforeach;
						?>
					</tr>
					<tr>
						<?php
							foreach($contents['items'] as $item => $value):
						?>
						<td><?php echo $value['upload']; ?></td>
						<?php
							endforeach;
						?>
					</tr>
					<tr>
						<?php
							foreach($contents['items'] as $item => $value):
						?>
						<td><?php echo $value['wifi']; ?></td>
						<?php
							endforeach;
						?>
					</tr>
					<tr>
						<?php
							foreach($contents['items'] as $item => $value):
						?>
						<td><?php echo $value['antivirus']; ?></td>
						<?php
							endforeach;
						?>
					</tr>
					<tr>
						<?php
							foreach($contents['items'] as $item => $value):
						?>
						<td>
							<a href="//assine.combomultinet.com/concluir-pedido?combo=58de9e917d056aa02903c4b4" title="R$ 59,99"> <?php echo $value['price']; ?></a>
						</td>
						<?php
							endforeach;
						?>
					</tr>
					<tr>
						<td>
							<div class="TableSingle-priceBoxWrapper">
								<div class="TableSingle-priceBox">
									<small class="TableSingle-priceUsd">R$</small>
									<span class="TableSingle-priceValue">49,</span>
									<sup class="TableSingle-priceCents">99</sup>
									<sub class="TableSingle-priceMonthly">/mês</sub>
								</div>
							</div>
							<div class="TableSingle-cta">
								<a href="https://assine.combomultinet.com/concluir-pedido?combo=58de9e917d056aa02903c4b4" data-layer="{
								&quot;component&quot;: &quot;tableSingle&quot;,
								&quot;text&quot;: &quot;ASSINE JÁ&quot;,
								&quot;componentType&quot;: &quot;conversao&quot;,
								&quot;componentElementDetails&quot;: &quot;&quot;
							}" data-modal-open="click2Call" class="CallToActionButton" title="Assine já">ASSINE JÁ</a>
						</div>
					</td>
					<td>
						<div class="TableSingle-priceBoxWrapper">
							<div class="TableSingle-priceBox">
								<small class="TableSingle-priceUsd">R$</small>
								<span class="TableSingle-priceValue">49,</span>
								<sup class="TableSingle-priceCents">00</sup>
								<sub class="TableSingle-priceMonthly">/mês</sub>
							</div>
						</div>
						<div class="TableSingle-cta">
							<a href="https://assine.combomultinet.com/concluir-pedido?combo=5a32f73ed73f17f9044f974e" data-layer="{
							&quot;component&quot;: &quot;tableSingle&quot;,
							&quot;text&quot;: &quot;ASSINE JÁ&quot;,
							&quot;componentType&quot;: &quot;conversao&quot;,
							&quot;componentElementDetails&quot;: &quot;&quot;
						}" data-modal-open="click2Call" class="CallToActionButton" title="Assine já">ASSINE JÁ</a>
					</div>
				</td>
				<td>
					<div class="TableSingle-priceBoxWrapper">
						<div class="TableSingle-priceBox">
							<small class="TableSingle-priceUsd">R$</small>
							<span class="TableSingle-priceValue">79,</span>
							<sup class="TableSingle-priceCents">00</sup>
							<sub class="TableSingle-priceMonthly">/mês</sub>
						</div>
					</div>
					<div class="TableSingle-cta">
						<a href="https://assine.combomultinet.com/concluir-pedido?combo=5a33cc2ad73f17f9044f97cf" data-layer="{
						&quot;component&quot;: &quot;tableSingle&quot;,
						&quot;text&quot;: &quot;ASSINE JÁ&quot;,
						&quot;componentType&quot;: &quot;conversao&quot;,
						&quot;componentElementDetails&quot;: &quot;&quot;
					}" data-modal-open="click2Call" class="CallToActionButton" title="Assine já">ASSINE JÁ</a>
				</div>
			</td>
			<td>
				<div class="TableSingle-priceBoxWrapper">
					<div class="TableSingle-priceBox">
						<small class="TableSingle-priceUsd">R$</small>
						<span class="TableSingle-priceValue">79,</span>
						<sup class="TableSingle-priceCents">00</sup>
						<sub class="TableSingle-priceMonthly">/mês</sub>
					</div>
				</div>
				<div class="TableSingle-cta">
					<a href="https://assine.combomultinet.com/concluir-pedido?combo=5a32e671d73f17f9044f96de" data-layer="{
					&quot;component&quot;: &quot;tableSingle&quot;,
					&quot;text&quot;: &quot;ASSINE JÁ&quot;,
					&quot;componentType&quot;: &quot;conversao&quot;,
					&quot;componentElementDetails&quot;: &quot;&quot;
				}" data-modal-open="click2Call" class="CallToActionButton" title="Assine já">ASSINE JÁ</a>
			</div>
		</td>
		<td>
			<div class="TableSingle-priceBoxWrapper">
				<div class="TableSingle-priceBox">
					<small class="TableSingle-priceUsd">R$</small>
					<span class="TableSingle-priceValue">169,</span>
					<sup class="TableSingle-priceCents">99</sup>
					<sub class="TableSingle-priceMonthly">/mês</sub>
				</div>
			</div>
			<div class="TableSingle-cta">
				<a href="https://assine.combomultinet.com/concluir-pedido?combo=5a32ec28d73f17f9044f970e" data-layer="{
				&quot;component&quot;: &quot;tableSingle&quot;,
				&quot;text&quot;: &quot;ASSINE JÁ&quot;,
				&quot;componentType&quot;: &quot;conversao&quot;,
				&quot;componentElementDetails&quot;: &quot;&quot;
			}" data-modal-open="click2Call" class="CallToActionButton" title="Assine já">ASSINE JÁ</a>
		</div>
	</td>
</tr>
</tbody>
<tfoot class="TableSingle-footer">
	<tr>
		<td>
			<a href="/net-virtua/5-mega/">Mais detalhes</a>
		</td>
		<td>
			<a href="/mais-detalhes/facil-sd-35-mega-local/">Mais detalhes</a>
		</td>
		<td>
			<a href="/mais-detalhes/facil-sd-60-mega-local/">Mais detalhes</a>
		</td>
		<td>
			<a href="/mais-detalhes/mix-hd-120-mega-local/">Mais detalhes</a>
		</td>
		<td>
			<a href="/mais-detalhes/mix-hd-240-mega-local/">Mais detalhes</a>
		</td>
	</tr>
</tfoot>
</table>
</div>
</div>
</div>
