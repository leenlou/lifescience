<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $subject; ?></title>
<style type="text/css">
img {
max-width: 100%;
}
body {
-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6;
}
body {
background-color: #f6f6f6;
}
@media only screen and (max-width: 640px) {
  h1 {
    font-weight: 600 !important; margin: 20px 0 5px !important;
  }
  h2 {
    font-weight: 600 !important; margin: 20px 0 5px !important;
  }
  h3 {
    font-weight: 600 !important; margin: 20px 0 5px !important;
  }
  h4 {
    font-weight: 600 !important; margin: 20px 0 5px !important;
  }
  h1 {
    font-size: 22px !important;
  }
  h2 {
    font-size: 18px !important;
  }
  h3 {
    font-size: 16px !important;
  }
  .container {
    width: 100% !important;
  }
  .content {
    padding: 10px !important;
  }
  .content-wrapper {
    padding: 10px !important;
  }
  .invoice {
    width: 100% !important;
  }
}
</style>
</head>

<body style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6; background: #f6f6f6; margin: 0; padding: 0;">

<table class="body-wrap" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background: #f6f6f6; margin: 0; padding: 0;">
    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
        <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0;" valign="top"></td>
        <td class="container" width="600" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0;" valign="top">
            <div class="content" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                <table class="main" width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background: #fff; margin: 0; padding: 0; border: 1px solid #e9e9e9;">
                    <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                        <tr>
                            <td class="alert alert-warning" style="font-size: 16px; color: #fff; font-weight: 500; padding: 20px; text-align: center; border-radius: 3px 3px 0 0; background: #79ae5d;"><?php echo $subject; ?></td>
                        </tr>
                        <td class="content-wrap" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                            <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                                <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                                    <td class="content-block" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                        <h2>User Details</h2>
                                        <table width="100%">
                                          <tr>
                                            <td>First Name</td>
                                            <td><?php echo $first_name; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Last Name</td>
                                            <td><?php echo $last_name; ?></td>
                                          </tr>
                                          <tr>
                                            <td>E-mail</td>
                                            <td><?php echo $email; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Address</td>
                                            <td><?php echo $address; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Client</td>
                                            <td><?php echo ucwords($client); ?></td>
                                          </tr>
                                          <tr>
                                            <td>When did you last visit our clinic?</td>
                                            <td><?php echo $last_visit; ?></td>
                                          </tr>
                                          <tr>
                                            <td>How has your experience been so far across all your visits?</td>
                                            <td><?php echo $experience; ?></td>
                                          </tr>
                                          <tr>
                                            <td>In what ways can we improve your experience with us?</td>
                                            <td><?php echo $improve; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Please share with us the name of the doctor/staff that you would like to commend and a message you would like to give them.</td>
                                            <td><?php echo $message; ?></td>
                                          </tr>
                                          <tr>
                                            <td>You are treated with care throughout your stay</td>
                                            <td><?php echo $question1; ?></td>
                                          </tr>
                                          <tr>
                                            <td>You consider yourself as a regular customer for the next 5 years</td>
                                            <td><?php echo $question2; ?></td>
                                          </tr>
                                          <tr>
                                            <td>The staff are friendly and accomodating</td>
                                            <td><?php echo $question3; ?></td>
                                          </tr>
                                          <tr>
                                            <td>LifeScience provides you the health care you need</td>
                                            <td><?php echo $question4; ?></td>
                                          </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <div class="footer" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;">
                    <table width="100%" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                        <tr style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; padding: 0;">
                            <td class="aligncenter content-block" style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">&copy; 2016 &ndash; LifeScience</td>
                        </tr>
                    </table>
                </div></div>
        </td>
        <td style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0;" valign="top"></td>
    </tr>
</table>

</body>
</html>
