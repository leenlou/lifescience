<div class="header-booking header-booking-<?php echo $device; ?>">
    <h2 class="heading header-booking-heading">BOOK AN APPOINTMENT</h2>
    <div class="header-booking-description">Take charge of your health today! Call +632-828-LIFE (5433).</div>
    <form class="form form--booking" id="form-header-appointment-<?php echo $device; ?>" action="#">
        <div class="notif"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                <label class="form-label" for="title_<?php echo $device; ?>">Title</label>
                <select class="form-control form-control--xs" name="title" id="title_<?php echo $device; ?>">
                    <option value="">Choose...</option>
                    <option value="mr">Mr.</option>
                    <option value="ms">Ms.</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="form-label" for="first_name_<?php echo $device; ?>">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name_<?php echo $device; ?>">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="form-label" for="last_name_<?php echo $device; ?>">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name_<?php echo $device; ?>">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="form-label" for="contact_number_<?php echo $device; ?>">Contact Number</label>
                <input type="text" class="form-control" name="contact_number" id="contact_number_<?php echo $device; ?>">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="form-label" for="email_<?php echo $device; ?>">E-mail</label>
                <input type="text" class="form-control" name="email" id="email_<?php echo $device; ?>">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="form-label" for="preferred_date_<?php echo $device; ?>">Preferred Date</label>
                <input type="text" class="form-control datepicker" name="preferred_date" id="preferred_date_<?php echo $device; ?>">
                <span class="form-control-calendar"></span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="form-label" for="preferred_time_<?php echo $device; ?>">Preferred Time</label>
                <select class="form-control" name="preferred_time" id="preferred_time_<?php echo $device; ?>">
                    <option value="">Choose...</option>
                    <option value="07:00 - 08:00 am">07:00 - 08:00 am</option>
                    <option value="08:00 - 09:00 am">08:00 - 09:00 am</option>
                    <option value="09:00 - 10:00 am">09:00 - 10:00 am</option>
                    <option value="10:00 - 11:00 am">10:00 - 11:00 am</option>
                    <option value="11:00 - 12:00 am">11:00 - 12:00 am</option>
                    <option value="01:00 - 02:00 pm">01:00 - 02:00 pm</option>
                    <option value="02:00 - 03:00 pm">02:00 - 03:00 pm</option>
                    <option value="03:00 - 04:00 pm">03:00 - 04:00 pm</option>
                    <option value="04:00 - 05:00 pm">04:00 - 05:00 pm</option>
                    <option value="05:00 - 06:00 pm">05:00 - 06:00 pm</option>
                    <option value="06:00 - 07:00 pm">06:00 - 07:00 pm</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="form-label" for="service_<?php echo $device; ?>">Service</label>
                <select class="form-control" name="service" id="service_<?php echo $device; ?>">
                    <option value="">Choose...</option>
                    <option value="Online Consultation">Online Consultation</option>
                    <option value="Core Health Program">Core Health Program</option>
                    <option value="Genetic Profiling &amp; Intervention">Genetic Profiling &amp; Intervention</option>
                    <option value="Reverse Chronic Disease">Reverse Chronic Disease</option>
                    <option value="Optimum Weight Management Program">Optimum Weight Management Program</option>
                    <option value="Environmental Tests">Environmental Tests</option>
                    <option value="Gene Tests">Gene Tests</option>
                    <option value="GI Immunology Tests">GI (Gastrointestinal) Immunology Tests</option>
                    <option value="Metabolic Tests">Metabolic Tests</option>
                    <option value="Nutritional Tests">Nutritional Tests</option>                   
                    <option value="Complete Health Profile">Complete Health Profile</option>
                    <option value="Hyperbaric Oxygen Treatment (HBOT)">Hyperbaric Oxygen Treatment (HBOT)</option>
                    <option value="Kinesis and Muscoskeletal Rehab">Kinesis and Muscoskeletal Rehab</option>
                    <option value="Nutrition Coaching">Nutrition Coaching</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                <label class="form-label" for="healthstatus_<?php echo $device; ?>">Health Status</label>
                <select class="form-control" name="healthstatus" id="healthstatus_<?php echo $device; ?>">
                    <option value="">Choose...</option>
                    <option value="Very Poor">Very Poor</option>
                    <option value="Poor">Poor</option>
                    <option value="Satisfactory">Satisfactory</option>
                    <option value="Good">Good</option>
                    <option value="Very Good">Very Good</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                <label class="form-label" for="message_<?php echo $device; ?>">Message</label>
                <textarea class="form-control" name="message" id="message_<?php echo $device; ?>" cols="30" rows="4"></textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                <input type="checkbox" class="form-checkbox" name="copy" id="copy_<?php echo $device; ?>" value="yes"><label for="copy_<?php echo $device; ?>"> Send me a copy</label>
                <button type="submit" class="btn btn--booking" id="header-book-appointment">SEND</button>
            </div>
        </div>
    </form>
</div>