<?php
// Ligação à BD 
require_once('../connections/connection.php');
?>

<!--Card of content - Form for moments register-->
<div class="row">
    <div class="section scrollspy" id="non-linear">
        <div class="row">
            <div class="col l6 m12 s12">
                <div class="card">
                    <div class="card-content">
                        <ul class="stepper">
                            <li class="step active">
                                <div data-step-label="Just add a data-step-label!"
                                     class="step-title waves-effect waves-dark">Identificação
                                </div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="moment_name" name="moment_name" data-error="<?= $moment_name ?>" data-success="right"
                                                   type="text" class="validate">
                                            <label for="moment_name">Nome do Momento</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="moment_date" name="moment_date" type="date" data-error="<?= $moment_date ?>"
                                                   data-success="right" class="validate datepicker">
                                            <label for="moment_date">Data</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                        <textarea id="moment_story" name="moment_story" data-error="wrong" data-success="right"
                                  class="materialize-textarea validate" data-length="500" ></textarea>
                                            <label for="moment_story">História</label>
                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Step 2</div>
                                <div class="step-content">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id name="password" type="password" class="validate" required>
                                            <label for="password">Your password</label>
                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn blue next-step">CONTINUE</button>
                                        <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Step 3</div>
                                <div class="step-content">
                                    Finish!
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn blue" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col l6 m12 s12">
                <p>
                    In the Non-Linear Stepper you can navigate freely between steps. You can also use the buttons for
                    validation (if you're using jQuery Validation Plugin), but if the user wants to move arbitrarily
                    around the steps, it's allowed by clicking on the steps instead of the buttons.
                </p>
                <p><b>Example:</b></p>
                <pre class="language-markup"><code class=" language-markup">
&lt;ul class="stepper"&gt;...&lt;/ul&gt;
                        </code></pre>
            </div>
        </div>
    </div>
</div>