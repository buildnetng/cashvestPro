<body>
	<div class="wrapper">
	    <?php include_once "includes/admin/header.php" ;?>

		
        <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">SYSTEM SETTINGS</h1>
                    <div class="container">
                    <form id="system-info" class="reg post_with_ajax">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">System Information</h4>

                                        <div class="form-group row mb-2">
                                            <label for="site_title" class="col-md-2 col-form-label">Site Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="Notch Chain Capitals" name="site_title">

                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="site_url" class="col-md-2 col-form-label">Site URL</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="url" name="site_url" value="https://account.notchchaincapitals.com/" readonly="">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="meta_keywords" class="col-md-2 col-form-label">Meta Keywords</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="meta_keywords" name="meta_keywords" value="Forex trading, Cryptocurrency Trading, investing in Cryptocurrency, make money faster, secure funding, Trade Bitcoin, Live Trading, ">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="meta_desc" class="col-md-2 col-form-label">Meta Description</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="meta_desc" value="The perfect solution for Cryptocurrency Investment" id="meta_desc">

                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="gmail_account" class="col-md-2 col-form-label">Active GMail Account Email Address (require for SMTP)</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" required="required" name="gmail_account" value="clutus8@gmail.com" id="gmail_account">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="gmail_password" class="col-md-2 col-form-label">Active GMail Account Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" required="required" name="gmail_password" value="Xmen525gg" id="gmail_password">

                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="email_address" class="col-md-2 col-form-label">Active Email Address for Notification Upon Actions From Users</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" required="required" name="email_address" value="support@notchchaincapitals.com" id="email_address">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="sent_from_address" class="col-md-2 col-form-label">System Auto-Sent From Email Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" required="required" name="sent_from_address" value="admin@notchchaincapitals.com" id="sent_from_address">

                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="reply_to_address" class="col-md-2 col-form-label">System Reply-To Email Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" required="required" name="reply_to_address" value="support@notchchaincapitals.com" id="reply_to_address">

                                            </div>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <label for="referral_reward_fee" class="col-md-2 col-form-label">Referral Reward Fee (USD)</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" required="required" name="referral_reward_fee" value="10" id="referral_reward_fee">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label hidden-xs">&nbsp;</label>
                                            <div class="col-md-10">
                                                <div class="col-12">
                                                    <div class="notifier"></div>
                                                </div>
                                                <button type="submit" class="btn btn-primary" data-scroll="no">Save</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                    </form>


                            <form id="system-mailers" class="reg post_with_ajax">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">System Mailers</h4>
                                                <div class="shortcodes">Auto-generic shortcodes: Use this keys to auto generate required values.
                                                    <br><i>[__SITE_TITLE__]</i><i>[__SITE_URL__]</i><i>[__USER_FULLNAME__]</i><i>[__USER_LASTNAME__]</i><i>[__USER_FIRSTNAME__]</i><i>[__USER_EMAIL__]</i><i>[__USER_PHONE__]</i>
                                                </div>

                                                <div class="form-group row mb-2">
                                                    <label for="welcome_mail" class="col-md-2 col-form-label">Welcome Mailer</label>
                                                    <div class="col-md-10">
                                                        <textarea rows="18" id="welcome_mail" class="form-control" placeholder="Type in detail" name="welcome_mail" spellcheck="false">Dear [__USER_FULLNAME__],
&lt;br&gt;
&lt;br&gt;

Thank you for signing up with [__SITE_TITLE__]. Please read this email carefully as it contains critical information.

&lt;h2
    style="margin-top:0;color:#333333;font-size:20px;font-weight:bold;text-align:left"&gt;
    Getting Started
&lt;/h2&gt;

&lt;p
    style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
    Our customer area can be found at: &lt;a href="[__SITE_URL__]sign-in" target="_blank"&gt;[__SITE_URL__]sign-in&lt;/a&gt;
&lt;/p&gt;

&lt;p
    style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
    To log in, you'll need your email address and the password you created during signup. If you created your account with
google you can set your password once you've logged in.
    &lt;br&gt;
    [__SITE_TITLE__]
&lt;/p&gt;

&lt;p
    style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
    You are receiving this email because you recently created an account. If you did not do this, please contact us.
&lt;/p&gt;</textarea>
                                                        <div class="hint">Email to be sent to a user upon successful registration.</div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-2">
                                                    <label for="confirm_mail" class="col-md-2 col-form-label">Confirm Email Mailer</label>
                                                    <div class="col-md-10">
                                                        <textarea rows="18" id="confirm_mail" class="form-control" placeholder="Type in detail" name="confirm_mail">We're happy your're here. Let's get your email address verified.

&lt;center&gt;
    &lt;p
        style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
        Use One Time PIN
    &lt;/p&gt;

    &lt;h2
        style="margin-top:0;color:#333333;font-size:20px;font-weight:bold;"&gt;
        [__confirmation_key__]
    &lt;/h2&gt;

    &lt;p
        style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
        OR
    &lt;/p&gt;

    &lt;p style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
        &lt;a href="[__confirmation_link__]" style="color:#ffffff;background-color:#3869d4;border-top:10px solid #3869d4;border-right:18px solid #3869d4;border-bottom:10px solid #3869d4;border-left:18px solid #3869d4;display:inline-block;text-decoration:none;border-radius:3px;box-sizing:border-box" target="_blank" &gt;
            Click to Verify Email
        &lt;/a&gt;
    &lt;/p&gt;

&lt;/center&gt;</textarea>
                                                        <div class="hint">Email to be sent to a user upon successful registration to confirm their email.</div>

                                                        <div class="shortcodes">Auto-generic shortcodes: Use this keys to auto generate required values.
                                                            <br><i>[__confirmation_link__]</i>or <i>[__confirmation_key__]</i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-2">
                                                    <label for="forgot_password_mail" class="col-md-2 col-form-label">Forgot Password Mailer</label>
                                                    <div class="col-md-10">
                                                        <textarea rows="18" id="forgot_password_mail" class="form-control" placeholder="Type in detail" name="forgot_password_mail">Dear [__USER_FULLNAME__],
&lt;br&gt;
&lt;p
    style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
    You have requested for a new password.
&lt;/p&gt;

&lt;p
    style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
    If you recognize this activity use Click the button below to recover your password. to update your new password. If not kindly reach out to us via mail so the issue is addressed accordingly.
&lt;/p&gt;


&lt;center&gt;
   
    &lt;p style="color:#51545e;margin:0.4em 0 1.1875em;font-size:16px;line-height:1.625"&gt;
        &lt;a href="[__recovery_link__]" style="color:#ffffff;background-color:#3869d4;border-top:10px solid #3869d4;border-right:18px solid #3869d4;border-bottom:10px solid #3869d4;border-left:18px solid #3869d4;display:inline-block;text-decoration:none;border-radius:3px;box-sizing:border-box" target="_blank" &gt;
            Click to Reset Password
        &lt;/a&gt;
    &lt;/p&gt;

&lt;/center&gt;</textarea>
                                                        <div class="hint">Email to be sent to a user when they make a forgot password request.</div>

                                                        <div class="shortcodes">Auto-generic shortcodes: Use this keys to auto generate required values.
                                                            <br><i>[__recovery_link__]</i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label  hidden-xs">&nbsp;</label>
                                                    <div class="col-md-10">
                                                        <div class="col-12">
                                                            <div class="notifier"></div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" data-scroll="no">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                            </form>


                    </div>

					
				</div>
			</main>