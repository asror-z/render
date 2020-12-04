<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<!-- Tuesday Demo Page -->

		<link rel="stylesheet" type="text/css" href="/publish/yarner/tuesday.less/demo.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/tuesday.less@1.2.3/build/tuesday.css">

		<script async="" src="/publish/yarner/tuesday.less/analytics.js"></script>
		<script src="/publish/yarner/tuesday.less/jquery-2.1.3.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>

	<body>

		<div id="page">
			
			<div class="container entrances">
				<h2>Entrances</h2>

				<div class="button-row">
					<form>
						<select class="animationlist" field_signature="4203909268">
							<optgroup label="FadeIn">
								<option value="tdFadeIn">tdFadeIn</option>
								<option value="tdFadeInDown">tdFadeInDown</option>
								<option value="tdFadeInLeft">tdFadeInLeft</option>
								<option value="tdFadeInUp">tdFadeInUp</option>
								<option value="tdFadeInRight">tdFadeInRight</option>
							</optgroup>
							<optgroup label="ExpandIn">
								<option value="tdExpandIn">tdExpandIn</option>
								<option value="tdExpandInBounce">tdExpandInBounce</option>
							</optgroup>
							<optgroup label="ShrinkIn">
								<option value="tdShrinkIn">tdShrinkIn</option>
								<option value="tdShrinkInBounce">tdShrinkInBounce</option>
							</optgroup>
							<optgroup label="StampIn">
								<option value="tdStampIn">tdStampIn</option>
								<option value="tdStampInSwing">tdStampInSwing</option>
							</optgroup>
							<optgroup label="SwingIn">
								<option value="tdSwingIn">tdSwingIn</option>
							</optgroup>
							<optgroup label="DropIn">
								<option value="tdDropInLeft">tdDropInLeft</option>
								<option value="tdDropInRight">tdDropInRight</option>
							</optgroup>
							<optgroup label="PlopIn">
								<option value="tdPlopIn">tdPlopIn</option>
								<option value="tdPlopInDown">tdPlopInDown</option>
								<option value="tdPlopInUp">tdPlopInUp</option>
							</optgroup>
							<optgroup label="HingeFlip">
								<option value="tdHingeFlipIn" selected="">tdHingeFlipIn</option>
							</optgroup>
						</select>
					
						<button class="button animate">Animate</button>
					</form>
				</div>

				<div class="target">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eveniet unde magnam sequi, iusto, amet iste necessitatibus, impedit nam reiciendis quae corrupti earum quia similique eius aut cupclassitate ipsa et.
				</div>
				<div class="guide"></div>
			</div>

			<div class="container exits">
				<h2>Exits</h2>

				<div class="button-row">
					<form>
						<select class="animationlist" field_signature="4203909268">
							<optgroup label="FadeOut">
								<option value="tdFadeOut">tdFadeOut</option>
								<option value="tdFadeOutDown">tdFadeOutDown</option>
								<option value="tdFadeOutLeft">tdFadeOutLeft</option>
								<option value="tdFadeOutUp">tdFadeOutUp</option>
								<option value="tdFadeOutRight">tdFadeOutRight</option>
							</optgroup>
							<optgroup label="ExpandOut">
								<option value="tdExpandOut">tdExpandOut</option>
								<option value="tdExpandOutBounce">tdExpandOutBounce</option>
							</optgroup>
							<optgroup label="ShrinkOut">
								<option value="tdShrinkOut">tdShrinkOut</option>
								<option value="tdShrinkOutBounce">tdShrinkOutBounce</option>
							</optgroup>
							<optgroup label="SwingOut">
								<option value="tdSwingOut">tdSwingOut</option>
							</optgroup>
							<optgroup label="HingeFlip">
								<option value="tdHingeFlipOut" selected="">tdHingeFlipOut</option>
							</optgroup>
						</select>
					
						<button class="button animate">Animate</button>
					</form>
				</div>

				<div class="target">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eveniet unde magnam sequi, iusto, amet iste necessitatibus, impedit nam reiciendis quae corrupti earum quia similique eius aut cupclassitate ipsa et.
				</div>
				
				<div class="guide"></div>
			</div>

		</div>


		<script type="text/javascript">
			$(document).ready(function(){
				$('button').click(function (event) {
					e.preventDefault();

					var that = this;
					var container = $(that).parents('.container');
					var currentAnimation = container.find('.animationlist').val();
					var target = container.children('.target');
					
					if ($(that).is('.animate')) {

						$(that).addClass('disabled').text('Animating...');
							target.addClass('animated '+currentAnimation);

							target.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function (event) {
								$(that).removeClass('disabled animate').addClass('reset').text('Reset');
							});

					} else {

						$(that).removeClass('reset').addClass('animate').text('Animate');
						target.attr('class', '').addClass('target');

					}
					
				});

				$('.animationlist').change(function(){
					var that = this;
					var container = $(that).parents('.container');
					
					container.find('button').attr('class', '').addClass('animate').text('Animate');
					container.children('.target').attr('class', '').addClass('target');
				});
			});



		</script>

	
</body></html>
