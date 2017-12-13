<?php session_start(); ?>
<?php require_once('includes/config.php'); ?>

<html>
	<?php include('includes/head.php'); ?>
	<?php include 'models/db_functions.php'; ?>
	<body>
		<main>
		<?php include('includes/navbar.php') ?>	
		<div class="section"></div>
		<div class="container">
			<div class="row">
				<div class="col l4">
					<br>
					<br>
					<p>All items are dark gray with white and burgundy print. Orders will be delivered free of charge to addresses in Indian Lake, NY.</p>
					<p>A $7 shipping fee will be added to orders with addresses outside of Indian Lake, NY. Indian Lakers, upon receipt of your order, your $7 will be refunded. Have questions? Email melaniprinting@gmail.com</p>
					<p>Don't want to order online? Download the order form <a href="static/pdfs/orderform.pdf" download>here</a>.</p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
"></form>
				</div>
				<div class="col l4">
					<p>Front of shirt</p>
					<img class="materialboxed" src="static/img/shirtfront.png" style="width: 300px">
				</div>
				<div class="col l4">
					<p>Back of shirt</p>
					<img class="materialboxed" src="static/img/shirtback.png" style="width: 345px">
				</div>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

			</div>

			<div class="divider"></div>
			<div class="section"></div>
			<div class="section"></div>
			<div class="section"></div>
			<div class="row">

				<div class="col l4">
					<p>Adult Unisex Gildan Short Sleeve Tee</p>
					<img src="static/img/mensshort.png" style="width: 200px; height: auto">
					<form target="_self" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="KAZ64VY5TLXB2">
						<input type="hidden" name="on0" value="sizes"><select name="os0">
							<option value="small" class="disabled">Select a size</option>
							<option value="small">Small $15.00 USD</option>
							<option value="medium">Medium $15.00 USD</option>
							<option value="large">Large $15.00 USD</option>
							<option value="xl">XL $15.00 USD</option>
							<option value="2xl">2XL $17.00 USD</option>
							<option value="3xl">3XL $18.00 USD</option>
						</select>
						<input type="hidden" name="currency_code" value="USD">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
				<div class="col l4">
					<p>Adult Unisex Gildan Long Sleeve Tee</p>
					<img src="static/img/menslong.png" style="width: 233px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="5MMY9Z4BT2K26">
					<input type="hidden" name="on0" value="sizes"><select name="os0">
						<option value="small" class="disabled">Select a size</option>
						<option value="small">Small $20.00 USD</option>
						<option value="medium">Medium $20.00 USD</option>
						<option value="large">Large $20.00 USD</option>
						<option value="xl">XL $20.00 USD</option>
						<option value="2xl">2XL $22.00 USD</option>
						<option value="3xl">3XL $23.00 USD</option>
					</select>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>

				</div>
				<div class="col l4">
					<p>Adult Unisex Gildan Crew Sweatshirt</p>
					<img src="static/img/menscrew.png" style="width: 226px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="9Q6WCRV62RSK8">
						<input type="hidden" name="on0" value="sizes"><select name="os0">
							<option value="small" class="disabled">Select a size</option>
							<option value="Small">Small $22.00 USD</option>
							<option value="Medium">Medium $22.00 USD</option>
							<option value="Large">Large $22.00 USD</option>
							<option value="XL">XL $22.00 USD</option>
							<option value="2XL">2XL $26.00 USD</option>
							<option value="3XL">3XL $28.00 USD</option>
						</select> 
						<input type="hidden" name="currency_code" value="USD">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
				</div>
			</div>
			
			<div class="divider"></div>
			<div class="section"></div>
			<div class="section"></div>
			<div class="section"></div>
			
			<div class="row">
				<div class="col l4">
					<p>Adult Unisex Gildan Sweatshirt</p>
					<img src="static/img/menssweatshirt.png" style="width: 200px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="8MFXR8NHEPJ64">
					<input type="hidden" name="on0" value="sizes"><select name="os0">
						<option value="small" class="disabled">Select a size</option>
						<option value="small">Small $28.00 USD</option>
						<option value="medium">Medium $28.00 USD</option>
						<option value="large">Large $28.00 USD</option>
						<option value="xl">XL $28.00 USD</option>
						<option value="2xl">2XL $32.00 USD</option>
						<option value="3xl">3XL $32.00 USD</option>
					</select>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
				<div class="col l4">
					<p>Lady's Cut Short Sleeve Tee</p>
					<img src="static/img/womenscutshort.png" style="width: 240px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="B3TGDM2N5KLCU">
							<input type="hidden" name="on0" value="sizes">
							<select name="os0">
							<option value="small" class="disabled">Select a size</option>
							<option value="small">Small $17.00 USD</option>
							<option value="medium">Medium $17.00 USD</option>
							<option value="large">Large $17.00 USD</option>
							<option value="xl">XL $17.00 USD</option>
							<option value="2xl">2XL $18.00 USD</option>
							<option value="3xl">3XL $19.00 USD</option>
						<input type="hidden" name="currency_code" value="USD">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
				<div class="col l4">
					<p>Lady's Cut Long Sleeve Tee</p>
					<img src="static/img/womenscutlong.png" style="width: 240px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="8QXR5ZFSLAY5G">
						<input type="hidden" name="on0" value="sizes"><select name="os0">
							<option value="small" class="disabled">Select a size</option>
							<option value="small">Small $23.00 USD</option>
							<option value="medium">Medium $23.00 USD</option>
							<option value="large">Large $23.00 USD</option>
							<option value="xl">XL $23.00 USD</option>
							<option value="2xl">2XL $24.00 USD</option>
							<option value="3xl">3XL $25.00 USD</option>
						</select>
						<input type="hidden" name="currency_code" value="USD">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
				</div>
			</div>

			<div class="divider"></div>
			<div class="section"></div>
			<div class="section"></div>
			<div class="section"></div>

			<div class="row">
				<div class="col l4">
					<p>Youth Gildan Short Sleeve Tee</p>
					<img src="static/img/mensshort.png" style="width: 200px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="LKVPR2ELR5MAL">
					<input type="hidden" name="on0" value="sizes"><select name="os0">
						<option value="small" class="disabled">Select a size</option>
						<option value="small">Youth Small $12.00 USD</option>
						<option value="medium">Youth Medium $12.00 USD</option>
						<option value="large">Youth Large $12.00 USD</option>
						<option value="xl">Youth XL $12.00 USD</option>
					</select>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
				<div class="col l4">
					<p>Youth Gildan Long Sleeve Tee</p>
					<img src="static/img/menslong.png" style="width: 233px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="FJA8RU8XE2NWG">
					<input type="hidden" name="on0" value="sizes"><select name="os0">
						<option value="small" class="disabled">Select a size</option>
						<option value="small">Youth Small $18.00 USD</option>
						<option value="medium">Youth Medium $18.00 USD</option>
						<option value="large">Youth Large $18.00 USD</option>
						<option value="xl">Youth XL $18.00 USD</option>
					</select>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
				<div class="col l4">
					<p>Youth Gildan Sweatshirt</p>
					<img src="static/img/menssweatshirt.png" style="width: 203px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="4NPYDLN62NQPQ">
					<input type="hidden" name="on0" value="sizes"><select name="os0">
						<option value="small" class="disabled">Select a size</option>
						<option value="small">Youth Small $25.00 USD</option>
						<option value="medium">Youth Medium $25.00 USD</option>
						<option value="large">Youth Large $25.00 USD</option>
						<option value="xl">Youth XL $25.00 USD</option>
					</select>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
			</div>

			<div class="divider"></div>
			<div class="section"></div>
			<div class="section"></div>
			<div class="section"></div>

			<div class="row">
				<div class="col l4">
					<p>Infant Onesie</p>
					<img src="static/img/onesie.png" style="width: 240px; height: auto">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="AWR3LDWYEHYQ4">
						<input type="hidden" name="on0" value="sizes"><select name="os0">
							<option value="12 month" class="disabled">Select a size</option>
							<option value="12 month">12 Month $15.00 USD</option>
							<option value="24 month">24 Month $15.00 USD</option>
						</select>
						<input type="hidden" name="currency_code" value="USD">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
			</div>

			<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

		</div>

		</main>
		<?php include('includes/footer.php') ?>	
		<?php include 'includes/jsbottom.php';?>
	</body>
</html>