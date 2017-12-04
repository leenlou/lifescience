<?php
if (kirby()->request()->ajax() === false) {
    header::status('404');
    return;
}

switch ($_POST['action']) {
    case 'book-appointment':
        bookAppointment();
        break;

    case 'inquiry':
        inquiry();
        break;

    case 'feedback':
        feedback();
        break;

    case 'inquire-service':
        inquireService();
        break;

    case 'book-service':
        bookService();
        break;

    case 'submit-resume':
        submitResume();
        break;

    case 'health-test':
        healthTest();
        break;

    case 'health-test-retake':
        healthTestRetake();
        break;

    default:
        break;
}


/**
 * Book appointment
 *
 * @return void
 */
function bookAppointment()
{
    $data = [
        'title'          => get('title'),
        'first_name'     => get('first_name'),
        'last_name'      => get('last_name'),
        'contact_number' => get('contact_number'),
        'email'          => get('email'),
        'preferred_date' => get('preferred_date'),
        'preferred_time' => get('preferred_time'),
        'service'        => get('service'),
        'healthstatus'   => get('healthstatus'),
    ];

    $rules = [
      'title'          => ['required'],
      'first_name'     => ['required'],
      'last_name'      => ['required'],
      'contact_number' => ['required'],
      'email'          => ['required', 'email'],
      'preferred_date' => ['required'],
      'preferred_time' => ['required'],
      'service'        => ['required'],
      'healthstatus'   => ['required'],
    ];

    $messages = [
      'title'          => 'The Title field is required.',
      'first_name'     => 'The First Name field is required.',
      'last_name'      => 'The Last Name field is required.',
      'contact_number' => 'The Contact Number field is required.',
      'email'          => 'The E-mail field is required and must be a valid email address.',
      'preferred_date' => 'The Preferred Date field is required.',
      'preferred_time' => 'The Preferred Time field is required.',
      'service'        => 'The Service field is required.',
      'healthstatus'   => 'The Health Status field is required.',
    ];

    if (get('slug') == 'new-patient-appointment') {
        $data['birth_date']     = get('birth_date');
        $rules['birth_date']    = ['required'];
        $messages['birth_date'] = 'The Date of Birth field is required.';
    }

    if($invalid = invalid($data, $rules, $messages)) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . reset($invalid) . '</div>',
        ]);
        return;
    }

    $data['subject'] = 'LifeScience Appointment';
    $data['message'] = get('message');
    $body            = snippet('emails/appointment', $data, true);

    $email = email([
        'to'          => 'info@lifescience.ph',
        'name'        => 'LifeScience',
        'subject'     => $data['subject'],
        'body'        => $body,
        'from'        => 'info@lifescience.ph',
        'fromName'    => 'LifeScience',
        'replyTo'     => 'info@lifescience.ph',
        'replyToName' => 'LifeScience',
        'bcc'         => 'pauleen@ocigroup.ph',
    ]);

    if(!$email->send()) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . $email->error()->message() . '</div>',
        ]);
        return;
    }

    echo json_encode([
        'success' => true,
        'content' => '<div class="alert alert--success">Your reservation has been sent successfully, we\'ll keep in touch with you soon. Thank you!</div>',
    ]);

    # send email to sender
    if (get('copy') == 'yes') {
        $email = email([
            'to'          => $data['email'],
            'name'        => $data['first_name'] . ' ' . $data['last_name'],
            'subject'     => $data['subject'],
            'body'        => $body,
            'from'        => 'info@lifescience.ph',
            'fromName'    => 'LifeScience',
            'replyTo'     => 'info@lifescience.ph',
            'replyToName' => 'LifeScience',
            'bcc'         => 'pauleen@ocigroup.ph',
        ]);

        $email->send();
    }
}

/**
 * Inquiry
 *
 * @return void
 */
function inquiry()
{
    $data = [
        'first_name' => get('first_name'),
        'last_name'  => get('last_name'),
        'email'      => get('email'),
        'message'    => get('message'),
    ];

    $rules = [
      'first_name' => ['required'],
      'last_name'  => ['required'],
      'email'      => ['required', 'email'],
      'message'    => ['required'],
    ];

    $messages = [
      'first_name' => 'The First Name field is required.',
      'last_name'  => 'The Last Name field is required.',
      'email'      => 'The E-mail field is required and must be a valid email address.',
      'message'    => 'The Message field is required.',
    ];

    if($invalid = invalid($data, $rules, $messages)) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . reset($invalid) . '</div>',
        ]);
        return;
    }

    $data['subject'] = 'LifeScience Inquiry';
    $body            = snippet('emails/inquiry', $data, true);

    $email = email([
        'to'          => 'info@lifescience.ph',
        'name'        => 'LifeScience',
        'subject'     => $data['subject'],
        'body'        => $body,
        'from'        => 'info@lifescience.ph',
        'fromName'    => 'LifeScience',
        'replyTo'     => 'info@lifescience.ph',
        'replyToName' => 'LifeScience',
        'bcc'         => 'pauleen@ocigroup.ph',
    ]);

    if(!$email->send()) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . $email->error()->message() . '</div>',
        ]);
        return;
    }

    echo json_encode([
        'success' => true,
        'content' => '<div class="alert alert--success">Your inquiry has been sent successfully, we\'ll keep in touch with you soon. Thank you!</div>',
    ]);
}

/**
 * Inquiry
 *
 * @return void
 */
function feedback()
{
    $data = [
        'first_name' => get('first_name'),
        'last_name'  => get('last_name'),
        'email'      => get('email'),
        'client'     => get('client'),
    ];

    $rules = [
      'first_name' => ['required'],
      'last_name'  => ['required'],
      'email'      => ['required', 'email'],
      'client'     => ['required'],
    ];

    $messages = [
      'first_name' => 'The First Name field is required.',
      'last_name'  => 'The Last Name field is required.',
      'email'      => 'The E-mail field is required and must be a valid email address.',
      'client'     => 'The Client field is required.',
    ];

    if($invalid = invalid($data, $rules, $messages)) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . reset($invalid) . '</div>',
        ]);
        return;
    }

    $data['subject']    = 'LifeScience Feedback';
    $data['address']    = get('address');
    $data['last_visit'] = get('last_visit');
    $data['experience'] = get('experience');
    $data['improve']    = get('improve');
    $data['message']    = get('message');
    $data['question1']  = get('question1');
    $data['question2']  = get('question2');
    $data['question3']  = get('question3');
    $data['question4']  = get('question4');
    $body               = snippet('emails/feedback', $data, true);

    $email = email([
        'to'          => 'info@lifescience.ph',
        'name'        => 'LifeScience',
        'subject'     => $data['subject'],
        'body'        => $body,
        'from'        => 'info@lifescience.ph',
        'fromName'    => 'LifeScience',
        'replyTo'     => 'info@lifescience.ph',
        'replyToName' => 'LifeScience',
        'bcc'         => 'pauleen@ocigroup.ph',
    ]);

    if(!$email->send()) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . $email->error()->message() . '</div>',
        ]);
        return;
    }

    echo json_encode([
        'success' => true,
        'content' => '<div class="alert alert--success">Your feedback has been sent successfully, we\'ll review your submission and do our best to improve our services. Thank you!</div>',
    ]);
}

/**
 * Inquire service
 *
 * @return void
 */
function inquireService()
{
    $data = [
        'service'        => get('service'),
        'first_name'     => get('first_name'),
        'last_name'      => get('last_name'),
        'contact_number' => get('contact_number'),
        'email'          => get('email'),
        'message'        => get('message'),
    ];

    $rules = [
      'service'        => ['required'],
      'first_name'     => ['required'],
      'last_name'      => ['required'],
      'contact_number' => ['required'],
      'email'          => ['required', 'email'],
      'message'        => ['required'],
    ];

    $messages = [
      'service'        => 'The Concern field is required.',
      'first_name'     => 'The First Name field is required.',
      'last_name'      => 'The Last Name field is required.',
      'contact_number' => 'The Contact Number field is required.',
      'email'          => 'The E-mail field is required and must be a valid email address.',
      'message'        => 'The Message field is required.',
    ];

    if($invalid = invalid($data, $rules, $messages)) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . reset($invalid) . '</div>',
        ]);
        return;
    }

    $data['subject'] = 'LifeScience Inquire Service';
    $body            = snippet('emails/inquire-service', $data, true);

    $email = email([
        'to'          => 'info@lifescience.ph',
        'name'        => 'LifeScience',
        'subject'     => $data['subject'],
        'body'        => $body,
        'from'        => 'info@lifescience.ph',
        'fromName'    => 'LifeScience',
        'replyTo'     => 'info@lifescience.ph',
        'replyToName' => 'LifeScience',
        'bcc'         => 'pauleen@ocigroup.ph',
    ]);

    if(!$email->send()) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . $email->error()->message() . '</div>',
        ]);
        return;
    }

    echo json_encode([
        'success' => true,
        'content' => '<div class="alert alert--success">Your inquiry has been sent successfully, we\'ll keep in touch with you soon. Thank you!</div>',
    ]);

    # send email to sender
    if (get('copy') == 'yes') {
        $email = email([
            'to'          => $data['email'],
            'name'        => $data['first_name'] . ' ' . $data['last_name'],
            'subject'     => $data['subject'],
            'body'        => $body,
            'from'        => 'info@lifescience.ph',
            'fromName'    => 'LifeScience',
            'replyTo'     => 'info@lifescience.ph',
            'replyToName' => 'LifeScience',
            'bcc'         => 'pauleen@ocigroup.ph',
        ]);

        $email->send();
    }
}

/**
 * Book service
 *
 * @return void
 */
function bookService()
{
    $data = [
        'service'        => get('service'),
        'title'          => get('title'),
        'first_name'     => get('first_name'),
        'last_name'      => get('last_name'),
        'contact_number' => get('contact_number'),
        'email'          => get('email'),
        'preferred_date' => get('preferred_date'),
        'preferred_time' => get('preferred_time'),
    ];

    $rules = [
      'service'        => ['required'],
      'title'          => ['required'],
      'first_name'     => ['required'],
      'last_name'      => ['required'],
      'contact_number' => ['required'],
      'email'          => ['required', 'email'],
      'preferred_date' => ['required'],
      'preferred_time' => ['required'],
    ];

    $messages = [
      'service'        => 'The Service field is required.',
      'title'          => 'The Title field is required.',
      'first_name'     => 'The First Name field is required.',
      'last_name'      => 'The Last Name field is required.',
      'contact_number' => 'The Contact Number field is required.',
      'email'          => 'The E-mail field is required and must be a valid email address.',
      'preferred_date' => 'The Preferred Date field is required.',
      'preferred_time' => 'The Preferred Time field is required.',
    ];

    if($invalid = invalid($data, $rules, $messages)) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . reset($invalid) . '</div>',
        ]);
        return;
    }

    $data['subject'] = 'LifeScience Book Service';
    $data['test']    = json_decode(get('test'), true);
    $body            = snippet('emails/book-service', $data, true);

    $email = email([
        'to'          => 'info@lifescience.ph',
        'name'        => 'LifeScience',
        'subject'     => $data['subject'],
        'body'        => $body,
        'from'        => 'info@lifescience.ph',
        'fromName'    => 'LifeScience',
        'replyTo'     => 'info@lifescience.ph',
        'replyToName' => 'LifeScience',
        'bcc'         => 'pauleen@ocigroup.ph',
    ]);

    if(!$email->send()) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . $email->error()->message() . '</div>',
        ]);
        return;
    }

    echo json_encode([
        'success' => true,
        'content' => '<div class="alert alert--success">Your reservation has been sent successfully, we\'ll keep in touch with you soon. Thank you!</div>',
    ]);

    # send email to sender
    if (get('copy') == 'yes') {
        $email = email([
            'to'          => $data['email'],
            'name'        => $data['first_name'] . ' ' . $data['last_name'],
            'subject'     => $data['subject'],
            'body'        => $body,
            'from'        => 'info@lifescience.ph',
            'fromName'    => 'LifeScience',
            'replyTo'     => 'info@lifescience.ph',
            'replyToName' => 'LifeScience',
            'bcc'         => 'pauleen@ocigroup.ph',
        ]);

        $email->send();
    }
}

/**
 * Submit resume
 *
 * @return void
 */
function submitResume()
{
    $data = [
        'first_name' => get('first_name'),
        'last_name'  => get('last_name'),
        'email'      => get('email'),
        'position'   => get('position'),
        'message'    => get('message'),
    ];

    $rules = [
      'first_name' => ['required'],
      'last_name'  => ['required'],
      'email'      => ['required', 'email'],
      'position'   => ['required'],
      'message'    => ['required'],
    ];

    $messages = [
      'first_name' => 'The First Name field is required.',
      'last_name'  => 'The Last Name field is required.',
      'email'      => 'The E-mail field is required and must be a valid email address.',
      'position'   => 'The Contact Number field is required.',
      'message'    => 'The Message field is required.',
    ];

    if($invalid = invalid($data, $rules, $messages)) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . reset($invalid) . '</div>',
        ]);
        return;
    }

    $tmp_file = $_FILES['resume']['tmp_name'];
    $types    = ['doc', 'docx', 'pdf'];
    $ext      = f::extension($_FILES['resume']['name']);
    $filename = strtolower(get('first_name') . '-' . get('last_name') . '-resume' . '.' . $ext);
    $size     = f::size($tmp_file);

    if (!in_array($ext, $types)) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">The Resume field only allows .doc, .docx, or .pdf file.</div>',
        ]);
        return;
    }

    # check filesize max 5mb
    if ($size > 5 * pow(1024, 2)) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">The Resume field file size must not exceed 5mb.</div>',
        ]);
        return;
    }

    $data['subject'] = 'LifeScience Career Application';
    $body            = snippet('emails/career', $data, true);

    $email = email([
        'to'             => 'info@lifescience.ph',
        'name'           => 'LifeScience',
        'subject'        => $data['subject'],
        'body'           => $body,
        'from'           => 'info@lifescience.ph',
        'fromName'       => 'LifeScience',
        'replyTo'        => 'info@lifescience.ph',
        'replyToName'    => 'LifeScience',
        'bcc'            => 'pauleen@ocigroup.ph',
        'attachment'     => $tmp_file,
        'attachmentName' => $filename,
    ]);

    if(!$email->send()) {
        echo json_encode([
            'success' => false,
            'content' => '<div class="alert alert--error">' . $email->error()->message() . '</div>',
        ]);
        return;
    }

    echo json_encode([
        'success' => true,
        'content' => '<div class="alert alert--success">Your application has been sent successfully, we\'ll keep in touch with you soon. Thank you!</div>',
    ]);
}

/**
 * Health test
 *
 * @return void
 */
function healthTest()
{
    s::start();

    $key      = get('key') != '' ? get('key') : uniqid();
    $data     = s::get($key, []);
    $question = get('question');
    $answer   = get('answer');
    $height   = get('height');
    $weight   = get('weight');

    switch (strtolower($answer)) {
        case 'get or stay fit':
            $next = 'question1a';
            break;

        case 'lose, gain, or maintain weight':
            $next = 'question2a';
            break;

        case 'eat healthier':
            $next = 'question3a';
            break;

        case 'improve sports performance':
            $next = 'question4a';
            break;

        case 'know my food intolerance':
            $next = 'question5a';
            break;

        case 'prevent chronic disease':
            $next = 'question6a';
            break;

        default:
            $next = get('next');
            break;
    }

    switch (strtolower($question)) {
        case 'what is your desired outcome?':
            $programs = [
                'Be healthier' => [
                    'signature-programs/core-health-program',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
                'Lose weight' => [
                    'signature-programs/optimal-weight-management',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/nutrition-coaching',
                ],
                'Restore my health' => [
                    'signature-programs/reverse-chronic-disease',
                    'health-and-wellness-services/customized-nutraceuticals',
                    'health-and-wellness-services/nutrition-coaching',
                ],
            ];

            s::set('services[' . $key . ']', $programs[$answer]);
            break;

        case 'why do you want to lose, gain, or maintain your weight?':
            $programs = [
                'Doctor says I need to' => [
                    'signature-programs/optimal-weight-management',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/nutrition-coaching',
                ],
                'Feel Healthier' => [
                    'signature-programs/core-health-program',
                    'signature-programs/optimal-weight-management',
                    'health-and-wellness-services/hyperbaric-oxygen-treatment-hbot',
                    'health-and-wellness-services/customized-nutraceuticals',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                ],
                'Look Better' => [
                    'signature-programs/core-health-program',
                    'signature-programs/optimal-weight-management',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                ],
            ];

            s::set('services[' . $key . ']', $programs[$answer]);
            break;

        case 'why do you want to eat healthier?':
            $programs = [
                'Doctor says I need to' => [
                    'signature-programs/core-health-program',
                    'health-and-wellness-services/nutrition-coaching',
                ],
                'To have more energy' => [
                    'signature-programs/core-health-program',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/customized-nutraceuticals',
                    'health-and-wellness-services/hyperbaric-oxygen-treatment-hbot',
                ],
                'Lose Weight' => [
                    'signature-programs/core-health-program',
                    'signature-programs/optimal-weight-management',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/nutrition-coaching',
                ],
                'Support my recovery' => [
                    'signature-programs/reverse-chronic-disease',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
                'Improve athletic performance' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/functional-movement-screening',
                ],
            ];

            s::set('services[' . $key . ']', $programs[$answer]);
            break;


        case 'what do you want to improve with your sports performance?':
            $programs = [
                'Build endurance' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
                'Become Stronger' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
                'Be more lean and agile' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
                'Get started' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
            ];

            s::set('services[' . $key . ']', $programs[$answer]);
            break;

        case 'what do you want to improve with your sports performance?':
            $programs = [
                'Build endurance' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
                'Become Stronger' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
                'Be more lean and agile' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
                'Get started' => [
                    'signature-programs/genetic-profiling-intervention',
                    'diagnostic-tests/gene-tests',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'health-and-wellness-services/functional-movement-screening',
                    'health-and-wellness-services/customized-nutraceuticals',
                ],
            ];

            s::set('services[' . $key . ']', $programs[$answer]);
            break;

        case 'why would you like to know your food intolerances?':
            $programs = [
                'Lose weight' => [
                    'signature-programs/optimal-weight-management',
                    'health-and-wellness-services/nutrition-coaching',
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'diagnostic-tests/food-intolerance-test',
                ],
                'Cure my health concern/illness' => [
                    'health-and-wellness-services/kinesis-and-musculoskeletal-rehab',
                    'signature-programs/core-health-program',
                    'signature-programs/reverse-chronic-disease',
                    'diagnostic-tests/food-intolerance-test',
                    'health-and-wellness-services/nutrition-coaching',
                ],
                'Be pro-active about my health' => [
                    'signature-programs/genetic-profiling-intervention',
                    'health-and-wellness-services/customized-nutraceuticals',
                    'health-and-wellness-services/nutrition-coaching',
                    'diagnostic-tests/food-intolerance-test',
                ],
            ];

            s::set('services[' . $key . ']', $programs[$answer]);
            break;

        case 'do you have a history of chronic disease in your family?':
            $programs = [
                'Yes' => [
                    'signature-programs/genetic-profiling-intervention',
                    'health-and-wellness-services/functional-medicine-consultation',
                ],
                'No' => [
                    'signature-programs/genetic-profiling-intervention',
                    'health-and-wellness-services/functional-medicine-consultation',
                ],
            ];

            s::set('services[' . $key . ']', $programs[$answer]);
            break;

        default:
            $programs = [];
            break;
    }

    if (strtolower($question) == 'enter your height and weight') {
        $post = [[
            'question' => 'Enter your height',
            'answer'   => $height,
        ], [
            'question' => 'Enter your weight',
            'answer'   => $weight,
        ]];
    } else {
        $post = [[
            'question' => $question,
            'answer'   => $answer,
        ]];
    }

    $data = array_merge($data, $post);

    s::set($key, $data);

    if (strtolower($question) == 'are you aged 18 and above?') {
        if ($answer == 'Yes') {
            snippet('questions/result', ['key' => $key, 'services' => s::get('services[' . $key . ']', [])]);
        } else {
            snippet('questions/retake');
        }
    } else {
        snippet('questions/' . $next, ['key' => $key]);
    }
}

/**
 * Home survey retake
 *
 * @return void
 */
function healthTestRetake()
{
    snippet('questions/question');
}