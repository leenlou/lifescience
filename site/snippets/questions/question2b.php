<div class="test-question">Have you been diagnosed with a medical condition?</div>
<input type="hidden" name="question" value="Have you been diagnosed with a medical condition?">
<input type="hidden" name="key" value="<?php echo $key; ?>">
<input type="hidden" name="next" value="question2c">
<div class="row test-answers">
   <div class="col-md-4 col-md-offset-2">
        <div class="test-box test-answer">
            <div class="test-content">
                <span class="test-icon" style="background-image: url('assets/images/test-yes.png'); width: 73px; height: 72px;"></span>
                <span class="test-title">Yes</span>
                <input class="test-input hide" type="radio" name="answer" value="Yes">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="test-box test-answer">
            <div class="test-content">
                <span class="test-icon" style="background-image: url('assets/images/test-no.png'); width: 72px; height: 72px;"></span>
                <span class="test-title">No</span>
                <input class="test-input hide" type="radio" name="answer" value="No">
            </div>
        </div>
    </div>
</div>