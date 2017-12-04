<div class="test-question">Enter your height and weight</div>
<input type="hidden" name="question" value="Enter your height and weight">
<input type="hidden" name="key" value="<?php echo $key; ?>">
<input type="hidden" name="next" value="verify-age">
<div class="row test-description">
    <div class="col-md-4 col-md-push-4">
        <div class="form-group">
            <label class="form-label" for="name">Height (cm)</label>
            <input type="text" class="form-control" id="name" name="height">
        </div>
        <div class="form-group">
            <label class="form-label" for="weight">Weight (kg)</label>
            <input type="text" class="form-control" id="weight" name="weight">
        </div>
    </div>
</div>
<a class="btn test-btn test-next" href="#">NEXT</a>