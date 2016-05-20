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
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
&lt;div class="col  col--1"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=11; $x++): ?>
                        <div class='col  col--1'><p>1 col</p></div>
                    <? endfor; ?>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--2"&gt;&lt;/div&gt;
&lt;div class="col  col--2"&gt;&lt;/div&gt;
&lt;div class="col  col--2"&gt;&lt;/div&gt;
&lt;div class="col  col--2"&gt;&lt;/div&gt;
&lt;div class="col  col--2"&gt;&lt;/div&gt;
&lt;div class="col  col--2"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=5; $x++): ?>
                        <div class='col  col--2'><p>2 cols</p></div>
                    <? endfor; ?>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--3"&gt;&lt;/div&gt;
&lt;div class="col  col--3"&gt;&lt;/div&gt;
&lt;div class="col  col--3"&gt;&lt;/div&gt;
&lt;div class="col  col--3"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=3; $x++): ?>
                        <div class='col  col--3'><p>3 cols</p></div>
                    <? endfor; ?>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--4"&gt;&lt;/div&gt;
&lt;div class="col  col--4"&gt;&lt;/div&gt;
&lt;div class="col  col--4"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=2; $x++): ?>
                        <div class='col  col--4'><p>4 cols</p></div>
                    <? endfor; ?>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--6"&gt;&lt;/div&gt;
&lt;div class="col  col--6"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=1; $x++): ?>
                        <div class='col  col--6'><p>6 cols</p></div>
                    <? endfor; ?>
                </div>




                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--12"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--12'><p>12 col</p></div>
                </div>
            </div>



            <div class="styleguide__columns">
                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-1"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=11; $x++): ?>
                        <div class='col  col--flush-1'><p>Flush 1 col</p></div>
                    <? endfor; ?>
                </div>


                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--flush-2"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-2"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-2"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-2"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-2"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-2"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=5; $x++): ?>
                        <div class='col  col--flush-2'><p>Flush 2 cols</p></div>
                    <? endfor; ?>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--flush-3"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-3"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-3"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-3"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=3; $x++): ?>
                        <div class='col  col--flush-3'><p>Flush 3 cols</p></div>
                    <? endfor; ?>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--flush-4"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-4"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-4"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=2; $x++): ?>
                        <div class='col  col--flush-4'><p>Flush 4 cols</p></div>
                    <? endfor; ?>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--flush-6"&gt;&lt;/div&gt;
&lt;div class="col  col--flush-6"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <? for($x=0; $x<=1; $x++): ?>
                        <div class='col  col--flush-6'><p>Flush 6 cols</p></div>
                    <? endfor; ?>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--full"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--full'><p>Full col</p></div>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--6  col--center"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--6  col--center'><p>Centre align col</p></div>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--9  col--offset-3"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--9  col--offset-3'><p>9 cols offset by 3</p></div>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--6  col--offset-6"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--6  col--offset-6'><p>6 cols offset by 6</p></div>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--4  col--offset-8"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--4  col--offset-8'><p>4 cols offset by 8</p></div>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--9  col--offset-3  col--offset-3--reverse"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--9  col--offset-3  col--offset-3--reverse'><p>9 cols offset by 3 (reverse)</p></div>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--6  col--offset-6  col--offset-6--reverse"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--6  col--offset-6  col--offset-6--reverse'><p>6 cols offset by 6 (reverse)</p></div>
                </div>



                <div class="row">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;div class="col  col--4  col--offset-8  col--offset-8--reverse"&gt;&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>
                    <div class='col  col--4  col--offset-8  col--offset-8--reverse'><p>4 cols offset by 8 (reverse)</p></div>
                </div>



            </div>

        </div>
    </section>


    <section class="styleguide">
        <div class="container  ib-fix">

            <header class="row  styleguide__heading  text--center">
                <h2>Pallette</h2>
            </header>

            <div class="styleguide__code  js-reveal">
                <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                <pre class="language-css">
                    <code class="code  language-css">
                        $color--primary: #3A3F4E;
                        $color--secondary: #009EE3;
                        $color--tertiary: #E8E8E8;
                        $color--quarternary: #FFFFFF;
                    </code>
                </pre>
            </div>

            <div class="styleguide__block  styleguide__block--primary"><p>#3A3F4E</p></div>
            <div class="styleguide__block  styleguide__block--secondary"><p>#009EE3</p></div>
            <div class="styleguide__block  styleguide__block--tertiary"><p>#E8E8E8</p></div>
            <div class="styleguide__block  styleguide__block--quarternary"><p>#FFFFFF</p></div>

        </div>
    </section>


    <div class="styleguide  styleguide--background">

        <header class="row  styleguide__heading  text--center">
            <h2>Typography</h2>
        </header>

        <div class="styleguide__code  js-reveal">
            <span class="styleguide__code__trigger  js-reveal-trigger"></span>

            <pre class="language-markup">
                <code class="code  language-markup">
                    <div class="code__block">
&lt;!-- Ensure to utilise semantic headings. --&gt;
&lt;!-- If you need to apply H1 styling to a H2, utilise the .h_ classes - example: --&gt;
&lt;h2 class="h_alpha"&gt;I am a H2 with styles inherited from H1&lt;/h2&gt;
&lt;h3 class="h_beta"&gt;I am a H3 with styles inherited from H2&lt;/h3&gt;
                    </div>
                </code>
            </pre>
        </div>

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
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;!--
Button COLOURS are hooked via:
btn--primary
btn--secondary
btn--tertiary
--&gt;

&lt;!--
Button SIZES are hooked via:
btn--huge
btn--large
btn--medium
btn--small
--&gt;

&lt;a href="#0" class="btn  btn--primary  btn--huge"&gt;&lt;span&gt;button huge&lt;/span&gt;&lt;/a>
                                </div>
                            </code>
                        </pre>
                    </div>
                </div>



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


            <div class="panel  row">

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
                <div class="styleguide__code  js-reveal">
                    <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                    <pre class="language-markup">
                        <code class="code  language-markup">
                            <div class="code__block">
&lt;!-- BUTTON ACTION MODIFIERS --&gt;
&lt;!--
Button action colours are extended via:
btn--error
btn--success
btn--info
btn--notice
--&gt;

&lt;!--
You can utilise icons to convey these actions using:
icon-error
icon-success
icon-info
icon-help
--&gt;

&lt;a href="#0" class="btn  btn--success  btn--large"&gt;&lt;span&gt;button huge&lt;/span&gt;&lt;/a&gt;
                            </div>
                        </code>
                    </pre>
                </div>
            </div>

            <div class="row">
                <div class="col col--3">
                    <a href="" class="btn  btn--error  btn--large"><span><i class="icon-error"></i> Button</span></a>
                </div>
                <div class="col col--3">
                    <a href="" class="btn  btn--success  btn--large"><span><i class="icon-success"></i> Button</span></a>
                </div>
                <div class="col col--3">
                    <a href="" class="btn  btn--info  btn--large"><span><i class="icon-info"></i> Button</span></a>
                </div>
                <div class="col col--3">
                    <a href="" class="btn  btn--notice  btn--large"><span><i class="icon-help"></i> Button</span></a>
                </div>
            </div>



            <div class="row">
                <div class="styleguide__code  js-reveal">
                    <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                    <pre class="language-markup">
                        <code class="code  language-markup">
                            <div class="code__block">
&lt;!-- BUTTON OBJECTS --&gt;
&lt;!--
Button objects extend the standard button with icons via:
btn--object--circle
btn--object--square
--&gt;

&lt;!--
Button objects will need to inherit new sizing for icons:
btn--object--small
btn--object--medium
btn--object--large
btn--object--huge
--&gt;

&lt;a href="" class="btn  btn--primary  btn--large  btn--object  btn--object--medium  btn--object--circle"&gt;&lt;span&gt;&lt;i class="icon-more"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt;
&lt;a href="" class="btn  btn--primary  btn--large  btn--object  btn--object--medium  btn--object--square"&gt;&lt;span&gt;&lt;i class="icon-more"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt;
                            </div>
                        </code>
                    </pre>
                </div>
            </div>


            <div class="row">
                <div class="col col--3">
                    <a href="" class="btn  btn--primary  btn--large  btn--object  btn--object--medium  btn--object--circle"><span><i class="icon-more"></i></span></a>
                </div>
                <div class="col col--3">
                    <a href="" class="btn  btn--primary  btn--large  btn--object  btn--object--medium  btn--object--square"><span><i class="icon-more"></i></span></a>
                </div>
            </div>


            <div class="row">
                <div class="styleguide__code  js-reveal">
                    <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                    <pre class="language-markup">
                        <code class="code  language-markup">
                            <div class="code__block">
&lt;!-- BUTTON GROUPS --&gt;

&lt;div class="btn-group"&gt;
    &lt;a href="" class="btn  btn--primary  btn--small"&gt;&lt;span&gt;Button&lt;/span&gt;&lt;/a&gt;
    &lt;a href="" class="btn  btn--primary  btn--small"&gt;&lt;span&gt;Button&lt;/span&gt;&lt;/a&gt;
    &lt;a href="" class="btn  btn--primary  btn--small"&gt;&lt;span&gt;Button&lt;/span&gt;&lt;/a&gt;
    &lt;a href="" class="btn  btn--primary  btn--medium  btn--object  btn--object--small  btn--object--square"&gt;&lt;span&gt;&lt;i class="icon-more"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt;
&lt;/div&gt;

                            </div>
                        </code>
                    </pre>
                </div>
            </div>

            <div class="row">

                <div class="btn-group">
                    <a href="" class="btn  btn--primary  btn--small"><span>Button</span></a>
                    <a href="" class="btn  btn--primary  btn--small"><span>Button</span></a>
                    <a href="" class="btn  btn--primary  btn--small"><span>Button</span></a>
                    <a href="" class="btn  btn--primary  btn--medium  btn--object  btn--object--small  btn--object--square"><span><i class="icon-more"></i></span></a>
                </div>

            </div>

            <div class="row">

                <div class="btn-group">
                    <a href="" class="btn  btn--secondary  btn--medium"><span>Button</span></a>
                    <a href="" class="btn  btn--secondary  btn--medium"><span>Button</span></a>
                    <a href="" class="btn  btn--secondary  btn--medium"><span>Button</span></a>
                    <a href="" class="btn  btn--secondary  btn--large  btn--object  btn--object--medium  btn--object--square"><span><i class="icon-more"></i></span></a>
                </div>

            </div>

            <div class="row">

                <div class="btn-group">
                    <a href="" class="btn  btn--primary  btn--large"><span>Button</span></a>
                    <a href="" class="btn  btn--primary  btn--large"><span>Button</span></a>
                    <a href="" class="btn  btn--primary  btn--large"><span>Button</span></a>
                    <a href="" class="btn  btn--primary  btn--huge  btn--object  btn--object--large  btn--object--square"><span><i class="icon-more"></i></span></a>
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


                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>


                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">

&lt;div class="form__field"&gt;
    &lt;label class="form__label" for="field-label"&gt;Field Label&lt;/label&gt;
    &lt;input class="form__input" id="field-label" type="email" name="field-label" placeholder="" value=""&gt;
&lt;/div&gt;

                                </div>
                            </code>
                        </pre>
                    </div>


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


                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>


                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">

&lt;div class="form__field"&gt;
    &lt;label class="form__label" for=""&gt;Select Label&lt;/label&gt;
    &lt;div class="form__select  selectdd"&gt;
        &lt;select name="" class="selectdd__options  js-select" title="options"&gt;
            &lt;option value="options"&gt;options&lt;/option&gt;
        &lt;/select&gt;
    &lt;/div&gt;
&lt;/div&gt;

                                </div>
                            </code>
                        </pre>
                    </div>


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


                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>


                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;!-- Checkbox --&gt;
&lt;div class="form__field"&gt;
    &lt;input class="form__input  form__input--checkbox" type="checkbox" name="checkme" id="checkbox1" checked="checked"&gt;
    &lt;label class="form__label" for="checkbox1"&gt;Checkbox 1&lt;/label&gt;
&lt;/div&gt;
                                </div>
                                <div class="code__block">
&lt;!-- Radio --&gt;
&lt;div class="form__field"&gt;
    &lt;input class="form__input  form__input--radio" type="radio" name="radio" id="radio1"&gt;
    &lt;label class="form__label" for="radio1"&gt;Radio 1&lt;/label&gt;
&lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>


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
                            <input class="form__input  form__input--radio" type="radio" name="radio" id="radio1">
                            <label class="form__label" for="radio1">Radio 1</label>
                        </div>

                        <div class="form__field">
                            <input class="form__input  form__input--radio" type="radio" name="radio" id="radio2">
                            <label class="form__label" for="radio2">Radio 2</label>
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
                </header>



                <div class="row">

                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>

                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
    &lt;!-- NOTIFICATIONS --&gt;
    &lt;!--
    Notification action colours are extended via:
    notification--success
    notification--error
    notification--info
    notification--notice
    --&gt;

    &lt;div class="notification  notification--success"&gt;
        &lt;span class="notification__icon"&gt;&lt;/span&gt;
        &lt;p class="notification__body"&gt;Hello&lt;/p&gt;
    &lt;/div&gt;
                                </div>
                            </code>
                        </pre>
                    </div>

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


                <div class="row  text--center">
                    <div class="styleguide__code  js-reveal">
                        <span class="styleguide__code__trigger  js-reveal-trigger"></span>


                        <pre class="language-markup">
                            <code class="code  language-markup">
                                <div class="code__block">
&lt;a href="#0" class="btn  btn--primary  btn--large  js-trigger"&gt;&lt;span&gt;Trigger Growl Notification&lt;/span&gt;&lt;/a&gt;
                                </div>
                            </code>
                        </pre>
                    </div>

                    <a href="#0" class="btn  btn--primary  btn--large  js-trigger"><span>Trigger Growl Notification</span></a>
                </div>

            </section>


            <section class="styleguide">

                <header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
                    <h3>Dropdown's</h3>
                </header>

                <div class="row">

                    <div class="dropdown  dropdown--secondary  js-reveal">
                        <a href="#0" class="dropdown__trigger  btn  btn--secondary  btn--medium  js-reveal-trigger"><span>Reveal some stuff</span></a>
                        <div class="dropdown__menu">
                            <a class="dropdown__link" href="">I am a dropdown item.</a>
                            <a class="dropdown__link" href="">I am a dropdown item.</a>
                            <a class="dropdown__link" href="">I am a dropdown item.</a>
                            <a class="dropdown__link" href="">I am a dropdown item.</a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col  col--4">
                        <div class="dropdown  js-reveal">
                            <a href="#0" class="btn  btn--primary  btn--large  btn--object  btn--object--medium  btn--object--square  js-reveal-trigger"><span><i class="icon-more"></i></span></a>
                            <div class="dropdown__menu">
                                <a class="dropdown__link" href="">I am a dropdown item.</a>
                                <a class="dropdown__link" href="">I am a dropdown item.</a>
                                <a class="dropdown__link" href="">I am a dropdown item.</a>
                                <a class="dropdown__link" href="">I am a dropdown item.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col  col--4">
                        <div class="dropdown  dropdown--secondary  dropdown--right  js-reveal">
                            <a href="#0" class="btn  btn--secondary  btn--large  btn--object  btn--object--medium  btn--object--square  js-reveal-trigger"><span><i class="icon-more"></i></span></a>
                            <div class="dropdown__menu">
                                <a class="dropdown__link" href="">I am a dropdown item.</a>
                                <a class="dropdown__link" href="">I am a dropdown item.</a>
                                <a class="dropdown__link" href="">I am a dropdown item.</a>
                                <a class="dropdown__link" href="">I am a dropdown item.</a>
                            </div>
                        </div>
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


                    <table class="table">
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


                <div class="panel  row">


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


                <div class="panel">


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


                <section class="styleguide">

                    <header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
                        <h4>Div based Table</h4>
                    </header>

                    <div class="row">

                        <div class="table  table--fixed">

                            <div class="table__row  table__head">
                                <div class="table__cell">Title</div>
                                <div class="table__cell">Title</div>
                                <div class="table__cell">Title</div>
                                <div class="table__cell">Title</div>
                            </div>

                            <div class="table__row  js-reveal">
                                <div class="table__cell">Row 1 Cell</div>
                                <div class="table__cell">Row 1 Cell</div>
                                <div class="table__cell">Row 1 Cell</div>
                                <div class="table__cell"><a href="" class="js-reveal-trigger">Reveal me</a></div>
                            </div>

                            <div class="table__row">
                                <div class="table__cell">Row 2 Cell</div>
                                <div class="table__cell">Row 2 Cell</div>
                                <div class="table__cell">Row 2 Cell</div>
                                <div class="table__cell">Row 2 Cell</div>
                            </div>

                        </div>

                    </div>
                </section>

            </section>

            <section class="styleguide">

                <header class="row  styleguide__heading  styleguide__heading--sub  styleguide__titles">
                    <h3>Lists</h3>
                </header>

                <div class="row">


                    <div class="col  col--4">
                        <ul class="list  list--bullet">
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                        </ul>
                    </div>


                    <div class="col  col--4">
                        <ul class="list  list--square">
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                        </ul>
                    </div>


                    <div class="col  col--4">
                        <ul class="list  list--circle">
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                        </ul>
                    </div>


                </div>

                <div class="row">


                    <div class="col  col--4">
                        <ul class="list  list--disc">
                            <li>List Item
                                <ul class="list  list--disc">
                                    <li>List Item</li>
                                    <li>List Item</li>
                                    <li>List Item
                                        <ul class="list list--disc">
                                            <li>List Item</li>
                                            <li>List Item</li>
                                            <li>List Item</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>List Item
                                <ul class="list  list--disc">
                                    <li>List Item</li>
                                    <li>List Item</li>
                                    <li>List Item
                                        <ul class="list list--disc">
                                            <li>List Item</li>
                                            <li>List Item</li>
                                            <li>List Item</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                    <div class="col  col--4">
                        <ul class="list  list--counter">
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                        </ul>
                    </div>


                </div>

            </section>

        </div> <!-- /container -->



        <!--
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
        -->


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
