<div class="test-question">How much do you exercise?</div>
<input type="hidden" name="question" value="How much do you exercise?">
<input type="hidden" name="key" value="<?php echo $key; ?>">
<input type="hidden" name="next" value="verify-age">
<div class="row test-answers">
    <div class="col-md-4">
        <div class="test-box test-answer">
            <div class="test-content">
                <span class="test-icon" style="background-image: url('assets/images/test-exercise-daily.png'); width: 72px; height: 74px;"></span>
                <span class="test-title">Daily</span>
                <input class="test-input hide" type="radio" name="answer" value="Daily">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="test-box test-answer">
            <div class="test-content">
                <span class="test-icon" style="background-image: url('assets/images/test-exercise-sometimes.png'); width: 72px; height: 86px;"></span>
                <span class="test-title">Sometimes</span>
                <input class="test-input hide" type="radio" name="answer" value="Sometimes">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="test-box test-answer">
            <div class="test-content">
                <span class="test-icon" style="background-image: url('assets/images/test-exercise-barely.png'); width: 74px; height: 76px;"></span>
                <span class="test-title">Barely</span>
                <input class="test-input hide" type="radio" name="answer" value="Barely">
            </div>
        </div>
    </div>
</div>