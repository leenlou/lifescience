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
                                            <td>Service</td>
                                            <td><?php echo $package." ".$service; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Title</td>
                                            <td><?php echo $title; ?></td>
                                          </tr>
                                          <tr>
                                            <td>First Name</td>
                                            <td><?php echo $first_name; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Last Name</td>
                                            <td><?php echo $last_name; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Contact Number</td>
                                            <td><?php echo $contact_number; ?></td>
                                          </tr>
                                          <tr>
                                            <td>E-mail</td>
                                            <td><?php echo $email; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Preferred Date</td>
                                            <td><?php echo $preferred_date; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Preferred Time</td>
                                            <td><?php echo $preferred_time; ?></td>
                                          </tr>
                                        </table>

                                        <?php if (!empty($test)) { ?>
                                        <h2>Quick Health Test</h2>
                                        <table width="100%">
                                          <?php
                                          foreach ($test as $t) {
                                            if ($s['question'] != 'Are you aged 18 and above?') {
                                          ?>
                                          <tr>
                                            <td><?php echo $t['question']; ?></td>
                                            <td><?php echo $t['answer']; ?></td>
                                          </tr>
                                          <?php
                                            }
                                          }
                                          ?>
                                        </table>
                                        <?php } ?>
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
