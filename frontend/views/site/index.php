<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container">
	<div class="row">
		<?php foreach ($product as $value) :?>      
			<div class="col-md-5">
				<p id="name"><?= $value->name?></p>
				<p id="price"><?= $value->price?></p>

				<form action="https://www.ecorepay.cc/payment/" method="post" id="payment">
					<input type="hidden" name="acid" value="65437850" />
					<input type="hidden" name="auth" value="UKolFGgAogQBVhTA" />
					<input type="hidden" name="product" value="<?= $value->name?>" />
					<input type="hidden" name="amount" value="<?= $value->price?>" />
					<input type="hidden" name="successurl" value="<?= $url?>" />
					<button onclick="$('#payment').submit();" class="button btn btn-primary">Buy</button>  
				</form>

			</div>
		<?php endforeach ;?>
	</div>
</div>
