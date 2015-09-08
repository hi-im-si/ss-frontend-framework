
<div class="alert  alert--success  is-alerted">
	<p class="alert__copy">This is an alert</p>
</div>

<main class="l-wrap  l-main" role="main">

	<div class="container">


		<section class="row  sg-cols">

			<header class="sg-ttl">
				<h2>Grid System</h2>
			</header>


			<div class="row">
				<?php for ($i = 1; $i < 12 + 1; $i++) {
					echo "<div class='col col--1'><p>1 col</p></div>";
				} ?>
			</div>

			<div class="row">
				<?php for ($i = 1; $i < 6 + 1; $i++) {
					echo "<div class='col col--2'><p>2 cols</p></div>";
				} ?>
			</div>

			<div class="row">
				<?php for ($i = 1; $i < 4 + 1; $i++) {
					echo "<div class='col col--3'><p>3 col</p></div>";
				} ?>
			</div>

			<div class="row">
				<?php for ($i = 1; $i < 3 + 1; $i++) {
					echo "<div class='col col--4'><p>4 col</p></div>";
				} ?>
			</div>

			<div class="row">
				<?php for ($i = 1; $i < 2 + 1; $i++) {
					echo "<div class='col col--6'><p>6 col</p></div>";
				} ?>
			</div>

			<div class="row">
				<div class="col col--12"><p>12 col</p></div>
			</div>

		</section>


		<section class="row  sg-headings">

			<header class="sg-ttl">
				<h2>Typography</h2>
			</header>


			<h1>H1, 60<span class="sg-sml">px</span></h1>

			<h2>H2, 40<span class="sg-sml">px</span></h2>

			<h3>H3, 30<span class="sg-sml">px</span></h3>

			<h4>H4, 20<span class="sg-sml">px</span></h4>

			<h5>H5, 18<span class="sg-sml">px</span></h5>

			<h6>H6, 16<span class="sg-sml">px</span></h6>


			<p>13px. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptate distinctio reprehenderit, autem deleniti ad <a href="#0">voluptatum eaque</a>. Optio ea aperiam nisi distinctio nemo repellat, voluptate fugiat. Quidem neque illum, blanditiis!</p>


		</section>


		<section class="row">

			<header class="sg-ttl">
				<h2>Buttons</h2>
			</header>

			<div class="row">

				<a href="" class="btn  btn--primary  btn--huge"><span>button huge</span></a>
				<a href="" class="btn  btn--primary  btn--large"><span>button large</span></a>
				<a href="" class="btn  btn--primary  btn--small"><span>button small</span></a>
				<br><br>
				<a href="" class="btn  btn--primary  btn--large  btn--full"><span>button full</span></a>

			</div>


			<div class="row">

				<a href="" class="btn  btn--secondary  btn--huge"><span>button huge</span></a>
				<a href="" class="btn  btn--secondary  btn--large"><span>button large</span></a>
				<a href="" class="btn  btn--secondary  btn--small"><span>button small</span></a>
				<br><br>
				<a href="" class="btn  btn--secondary  btn--large  btn--full"><span>button full</span></a>

			</div>


			<div class="row">

				<a href="" class="btn  btn--tertiary  btn--huge"><span>button huge</span></a>
				<a href="" class="btn  btn--tertiary  btn--large"><span>button large</span></a>
				<a href="" class="btn  btn--tertiary  btn--small"><span>button small</span></a>
				<br><br>
				<a href="" class="btn  btn--tertiary  btn--large  btn--full"><span>button full</span></a>

			</div>

		</section>


		<section class="row">

			<header class="sg-ttl">
				<h2>Forms</h2>
			</header>


			<form class="form  form--primary" id="form">

				<div class="row">


					<div class="col  col--12">
						<div class="form__field">
							<label class="form__label" for="email">enter email</label>
							<input class="" type="email" name="email" placeholder="enter email" value="">
						</div>
					</div>

					<div class="col  col--12">
						<div class="form__field">
							<label class="form__label" for="product-search">search your product</label>
							<input class="" type="tel" name="phone" placeholder="search your product" value="">
						</div>
					</div>


				</div>

				<div class="row">


					<div class="col col--12">
						<div class="form__field">
							<label class="form__label" for="email">enter email</label>
							<input class="" type="email" name="email" placeholder="enter email" value="">
						</div>
					</div>

					<div class="col col--12">
						<div class="form__field">
							<label class="form__label" for="product-search">search your product</label>
							<input class="" type="tel" name="phone" placeholder="search your product" value="">
						</div>
					</div>


				</div>

				<div class="row">


					<div class="col col--12">
						<div class="form__field">
							<label class="form__label" for="email">enter email</label>
							<input class="" type="email" name="email" placeholder="enter email" value="">
						</div>
					</div>

					<div class="col col--12">
						<div class="form__field">
							<label class="form__label" for="product-search">search your product</label>
							<input class="" type="tel" name="phone" placeholder="search your product" value="">
						</div>
					</div>


				</div>


				<div class="row">


					<div class="col col--6">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<select name="" class="select__options  js-select" title="quantity">
								<option value="quantity">quantity</option>
							</select>
						</div>

					</div>

					<div class="col col--6">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<select name="" class="select__options  js-select" title="quantity">
								<option value="quantity">quantity</option>
							</select>
						</div>

					</div>

				</div>


				<div class="row">

					<div class="col col--3">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<select name="" class="select__options  js-select" title="quantity">
								<option value="quantity">quantity</option>
							</select>
						</div>

					</div>
					<div class="col col--3">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<select name="" class="select__options  js-select" title="quantity">
								<option value="quantity">quantity</option>
							</select>
						</div>

					</div>
					<div class="col col--3">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<select name="" class="select__options  js-select" title="quantity">
								<option value="quantity">quantity</option>
							</select>
						</div>

					</div>
					<div class="col col--3">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<select name="" class="select__options  js-select" title="quantity">
								<option value="quantity">quantity</option>
							</select>
						</div>

					</div>


				</div>


				<div class="row">

					<div class="col col--3">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<div class="select  select--secondary">
								<select name="" class="select__options  js-select" title="quantity">
									<option value="quantity">quantity</option>
								</select>
							</div>
						</div>

					</div>
					<div class="col col--3">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<div class="select  select--secondary">
								<select name="" class="select__options  js-select" title="quantity">
									<option value="quantity">quantity</option>
								</select>
							</div>
						</div>

					</div>
					<div class="col col--3">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<div class="select  select--secondary">
								<select name="" class="select__options  js-select" title="quantity">
									<option value="quantity">quantity</option>
								</select>
							</div>
						</div>

					</div>
					<div class="col col--3">

						<div class="form__field">
							<label class="form__label" for="">Select Quantity</label>
							<div class="select  select--secondary">
								<select name="" class="select__options  js-select" title="quantity">
									<option value="quantity">quantity</option>
								</select>
							</div>
						</div>

					</div>


				</div>


				<div class="row">

					<div class="col  col--6">

						<div class="form__field">
							<input type="checkbox" name="checkme" id="checkbox1" checked="checked">
							<label class="form__label" for="checkbox1">Checkbox 1</label>
						</div>

						<div class="form__field">
							<input type="checkbox" name="checkme" id="checkbox2" checked="checked">
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

				</div>


				<div class="row">


					<div class="col  col--6  col--center">

						<div class="form__row">

							<div class="form__field  form__field--range">

								<label class="form__label" for="">Price Range</label>
								<div class="rangeslider  js-range-slider"></div>

								<div class="no-js-visible">
									<div class="col  col--6  col--alpha">
										<label class="form__label" for="price_min">Min. Price</label>
										<input class="form__input js-range-slider-min" name="price_min" type="text" value="0">
									</div>
									<div class="col  col--6  col--right  col--omega">
										<label class="form__label" for="price_max">Max. Price</label>
										<input class="form__input js-range-slider-max" name="price_max" type="text" value="750000">
									</div>
								</div>

							</div>

						</div> <!-- /form__row -->

					</div>

				</div>


			</form>

		</section>


		<section class="row">

			<header class="sg-ttl">
				<h2>Components</h2>
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

	</div>

</main> <!-- /l-main -->