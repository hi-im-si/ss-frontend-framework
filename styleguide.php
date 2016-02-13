
<div class="alert  alert--success  is-alerted">
	<p class="alert__copy">This is an alert</p>
</div>

<div class="notification  notification--success  notification--growl  is-hid  js-notify" data-notify-anim="bounce">
	<p class="notification__body">Hello there! I am a Notification.</p>
	<span class="notification__close  js-notify-close"></span>
</div>




<!-- Grid -->
<section class="styleguide">
	<div class="container">

		<header class="row styleguide__heading text--center">
			<h2>Grid</h2>
		</header>

		<div class="styleguide__columns">
			<div class="row">
				<? for($x=0; $x<=11; $x++): ?>
					<div class='col col--1'><p>1 col</p></div>
				<? endfor; ?>
			</div>
			<div class="row">
				<? for($x=0; $x<=5; $x++): ?>
					<div class='col col--2'><p>2 cols</p></div>
				<? endfor; ?>
			</div>
			<div class="row">
				<? for($x=0; $x<=3; $x++): ?>
					<div class='col col--3'><p>3 cols</p></div>
				<? endfor; ?>
			</div>
			<div class="row">
				<? for($x=0; $x<=2; $x++): ?>
					<div class='col col--4'><p>4 cols</p></div>
				<? endfor; ?>
			</div>
			<div class="row">
				<? for($x=0; $x<=1; $x++): ?>
					<div class='col col--6'><p>6 cols</p></div>
				<? endfor; ?>
			</div>

			<div class="row">
				<div class='col col--12'><p>12 col</p></div>
			</div>
		</div>

		<div class="styleguide__columns">
			<div class="row">
				<? for($x=0; $x<=11; $x++): ?>
					<div class='col col--flush-1'><p>Flush 1 col</p></div>
				<? endfor; ?>
			</div>
			<div class="row">
				<? for($x=0; $x<=5; $x++): ?>
					<div class='col col--flush-2'><p>Flush 2 cols</p></div>
				<? endfor; ?>
			</div>
			<div class="row">
				<? for($x=0; $x<=3; $x++): ?>
					<div class='col col--flush-3'><p>Flush 3 cols</p></div>
				<? endfor; ?>
			</div>
			<div class="row">
				<? for($x=0; $x<=2; $x++): ?>
					<div class='col col--flush-4'><p>Flush 4 cols</p></div>
				<? endfor; ?>
			</div>
			<div class="row">
				<? for($x=0; $x<=1; $x++): ?>
					<div class='col col--flush-6'><p>Flush 6 cols</p></div>
				<? endfor; ?>
			</div>

			<div class="row">
				<div class='col col--full'><p>Full col</p></div>
			</div>

		</div>

	</div>
</section>


<section class="styleguide">
	<div class="container  ib-fix">

		<header class="row  styleguide__heading  text--center">
			<h2>Pallette</h2>
		</header>

		<div class="styleguide__block  styleguide__block--primary"><p>#040707</p></div>
		<div class="styleguide__block  styleguide__block--secondary"><p>#cfcece</p></div>
		<div class="styleguide__block  styleguide__block--tertiary"><p>#f1efef</p></div>
		<div class="styleguide__block  styleguide__block--quarternary"><p>#ffffff</p></div>

	</div>
</section>


<div class="styleguide  styleguide--background">

	<header class="row  styleguide__heading  text--center">
		<h2>Typography</h2>
	</header>

	<div class="container  styleguide__titles">

		<h1>H1, 60<span class="sg-sml">px</span></h1>

		<h2>H2, 40<span class="sg-sml">px</span></h2>

		<h3>H3, 30<span class="sg-sml">px</span></h3>

		<h4>H4, 20<span class="sg-sml">px</span></h4>

		<h5>H5, 18<span class="sg-sml">px</span></h5>

		<h6>H6, 16<span class="sg-sml">px</span></h6>


		<p>13px. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptate distinctio reprehenderit, autem deleniti ad <a href="#0">voluptatum eaque</a>. Optio ea aperiam nisi distinctio nemo repellat, voluptate fugiat. Quidem neque illum, blanditiis!</p>

	</div>
</div>



<section class="styleguide">

	<header class="row  styleguide__heading  styleguide__titles  text--center">
		<h2>Buttons</h2>
	</header>

	<div class="container">

		<div class="row">

			<div class="row">
				<a href="" class="btn  btn--primary  btn--huge"><span>button huge</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--primary  btn--large"><span>button large</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--primary  btn--medium"><span>button medium</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--primary  btn--small"><span>button small</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--primary  btn--large  btn--full"><span>button full</span></a>
			</div>

		</div>


		<div class="row">

			<div class="row">
				<a href="" class="btn  btn--secondary  btn--huge"><span>button huge</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--secondary  btn--large"><span>button large</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--secondary  btn--medium"><span>button medium</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--secondary  btn--small"><span>button small</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--secondary  btn--large  btn--full"><span>button full</span></a>
			</div>
			<div class="row">

			</div>

		</div>


		<div class="row">

			<div class="row">
				<a href="" class="btn  btn--tertiary  btn--huge"><span>button huge</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--tertiary  btn--large"><span>button large</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--tertiary  btn--medium"><span>button medium</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--tertiary  btn--small"><span>button small</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--tertiary  btn--large  btn--full"><span>button full</span></a>
			</div>
			<div class="row">
				<a href="" class="btn  btn--tertiary  btn--large  btn--half"><span>button half</span></a>
			</div>

		</div>


		<div class="row">
			<div class="col col--3">
				<a href="" class="btn  btn--error  btn--large"><span><i class="btn__icon  icon-error"></i> Button</span></a>
			</div>
			<div class="col col--3">
				<a href="" class="btn  btn--success  btn--large"><span><i class="btn__icon  icon-success"></i> Button</span></a>
			</div>
			<div class="col col--3">
				<a href="" class="btn  btn--info  btn--large"><span><i class="btn__icon  icon-info"></i> Button</span></a>
			</div>
			<div class="col col--3">
				<a href="" class="btn  btn--notice  btn--large"><span><i class="btn__icon  icon-help"></i> Button</span></a>
			</div>
		</div>

	</div>

</section>


<section class="styleguide">

	<header class="row  styleguide__heading  styleguide__titles">
		<h2>Forms</h2>
	</header>

	<div class="container">


		<form class="form  form--primary" id="form">

			<section class="styleguide">

				<header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
					<h3>Inputs</h3>
				</header>


				<div class="col  col--12">
					<div class="form__field">
						<label class="form__label" for="field-label">Field Label</label>
						<input class="form__input" id="field-label" type="email" name="field-label" placeholder="" value="">
					</div>
				</div>


				<div class="col  col--6">
					<div class="form__field">
						<label class="form__label" for="field-label-2">Field Label</label>
						<input class="form__input" id="field-label-2" type="email" name="field-label" placeholder="" value="">
					</div>
				</div>


				<div class="col  col--4">
					<div class="form__field">
						<label class="form__label" for="field-label-3">Field Label</label>
						<input class="form__input" id="field-label-3" type="email" name="field-label" placeholder="" value="">
					</div>
				</div>


			</section>



			<section class="styleguide">

				<header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
					<h3>Selects</h3>
				</header>


				<div class="col  col--6">

					<div class="form__field">
						<label class="form__label" for="">Select Label</label>
						<div class="form__select  selectdd">
							<select name="" class="selectdd__options  js-select" title="options">
								<option value="options">options</option>
							</select>
						</div>
					</div>

				</div>

				<div class="col  col--6">

					<div class="form__field">
						<label class="form__label" for="">Select Label</label>
						<div class="form__select  selectdd  selectdd--secondary">
							<select name="" class="selectdd__options  js-select" title="options">
								<option value="options">options</option>
							</select>
						</div>
					</div>

				</div>


			</section>




			<section class="styleguide">

				<header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
					<h3>Radio/Checkbox</h3>
				</header>


				<div class="col  col--6">

					<div class="form__field">
						<input class="form__input  form__input--checkbox" type="checkbox" name="checkme" id="checkbox1" checked="checked">
						<label class="form__label" for="checkbox1">Checkbox 1</label>
					</div>

					<div class="form__field">
						<input class="form__input  form__input--checkbox" type="checkbox" name="checkme" id="checkbox2">
						<label class="form__label" for="checkbox2">Checkbox 2</label>
					</div>

				</div>


				<div class="col col--6">

					<div class="form__field">
						<input type="radio" name="radio" id="radio1">
						<label class="form__label  form__label--reset" for="radio1">Radio 1</label>
					</div>

					<div class="form__field">
						<input type="radio" name="radio" id="radio2">
						<label class="form__label  form__label--reset" for="radio2">Radio 2</label>
					</div>

				</div>

			</section>

		</form>


	</div>

</section>


<section class="styleguide">

	<header class="row  styleguide__heading  styleguide__titles">
		<h2>Components</h2>
	</header>

	<div class="container">

		<section class="styleguide">

			<header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
				<h3>Notifications</h3>
				<a href="#0" class="btn  btn--primary  btn--large  js-trigger"><span>Trigger Growl Notification</span></a>
			</header>

			<div class="row">

				<div class="notification  notification--success">
					<span class="notification__icon"></span>
					<p class="notification__body">Hello</p>
				</div>

				<div class="notification  notification--error">
					<span class="notification__icon"></span>
					<p class="notification__body">Hello</p>
				</div>

				<div class="notification  notification--info">
					<span class="notification__icon"></span>
					<p class="notification__body">Hello</p>
				</div>

				<div class="notification  notification--notice">
					<span class="notification__icon"></span>
					<p class="notification__body">Hello</p>
				</div>

			</div>

		</section>


		<section class="styleguide">

			<header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
				<h3>Dialog's</h3>
			</header>

			<div class="row  text--center">

				<a href="#0" class="btn  btn--primary  btn--large  js-dialog-trigger"><span>Trigger Dialog</span></a>

			</div>

		</section>


		<section class="styleguide">

			<header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
				<h3>Tables</h3>
			</header>

			<div class="row">


				<table>
					<thead>
						<tr>
							<th>Table Head 1</th>
							<th>Table Head 2</th>
							<th>Table Head 3</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Table Row 1 - CELL 1</td>
							<td>Table Row 1 - CELL 2</td>
							<td>Table Row 1 - CELL 3</td>
						</tr>
						<tr>
							<td>Table Row 2 - CELL 1</td>
							<td>Table Row 2 - CELL 2</td>
							<td>Table Row 2 - CELL 3</td>
						</tr>
						<tr>
							<td>Table Row 3 - CELL 1</td>
							<td>Table Row 3 - CELL 2</td>
							<td>Table Row 3 - CELL 3</td>
						</tr>
					</tbody>
				</table>


			</div>


			<div class="row">


				<table class="table  table--bordered">
					<thead>
						<tr>
							<th>Table Head 1</th>
							<th>Table Head 2</th>
							<th>Table Head 3</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Table Row 1 - CELL 1</td>
							<td>Table Row 1 - CELL 2</td>
							<td>Table Row 1 - CELL 3</td>
						</tr>
						<tr>
							<td>Table Row 2 - CELL 1</td>
							<td>Table Row 2 - CELL 2</td>
							<td>Table Row 2 - CELL 3</td>
						</tr>
						<tr>
							<td>Table Row 3 - CELL 1</td>
							<td>Table Row 3 - CELL 2</td>
							<td>Table Row 3 - CELL 3</td>
						</tr>
					</tbody>
				</table>


			</div>


			<div class="row">


				<table class="table  table--striped">
					<thead>
						<tr>
							<th>Table Head 1</th>
							<th>Table Head 2</th>
							<th>Table Head 3</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Table Row 1 - CELL 1</td>
							<td>Table Row 1 - CELL 2</td>
							<td>Table Row 1 - CELL 3</td>
						</tr>
						<tr>
							<td>Table Row 2 - CELL 1</td>
							<td>Table Row 2 - CELL 2</td>
							<td>Table Row 2 - CELL 3</td>
						</tr>
						<tr>
							<td>Table Row 3 - CELL 1</td>
							<td>Table Row 3 - CELL 2</td>
							<td>Table Row 3 - CELL 3</td>
						</tr>
					</tbody>
				</table>


			</div>

		</section>

	</div>



	<?/*
	<div class="row">
		<div class="col col--8">

			<div class="accordion" id="js-accordion">
				<div class="accordion__inner">

					<ul>
						<li>
							<a href="" class="accordion__title  js-accordion-trigger  is-closed">accordion 1</a>

							<div class="accordion__body  js-accordion">

								<p>herp de derp</p>

							</div>
						</li>

						<li>
							<a href="" class="accordion__title  js-accordion-trigger  is-closed">accordion 2</a>

							<div class="accordion__body  js-accordion">

								<p>herp de derp</p>

							</div>
						</li>

						<li>
							<a href="" class="accordion__title  js-accordion-trigger  is-closed">accordion 3</a>

							<div class="accordion__body  js-accordion">

								<p>herp de derp</p>

							</div>
						</li>

					</ul>

				</div>
			</div>

		</div>
	</div>
	*/?>


</section>


<!-- <div class="row">

	<div class="tabs  js-tabs" id="js-tabs">

		<nav class="nav  tabs__nav">
			<ul>
				<li><a href="#section-1" class="icon-twitter"><span>Section 1</span></a></li>
				<li><a href="#section-2" class="icon-twitter"><span>Section 2</span></a></li>
				<li><a href="#section-3" class="icon-twitter"><span>Section 3</span></a></li>
				<li><a href="#section-4" class="icon-twitter"><span>Section 4</span></a></li>
				<li><a href="#section-5" class="icon-twitter"><span>Section 5</span></a></li>
			</ul>
		</nav>

		<div class="container  tabs__container  js-tabs-content">

			<section id="section-1">
				<p>Section 1</p>
			</section>

			<section id="section-2">
				<p>Section 2</p>
			</section>

			<section id="section-3">
				<p>Section 3</p>
			</section>

			<section id="section-4">
				<p>Section 4</p>
			</section>

			<section id="section-5">
				<p>Section 5</p>
			</section>

		</div>

	</div>

</div> -->