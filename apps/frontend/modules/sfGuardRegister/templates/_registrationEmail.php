<h1>Hooray!</h1>

<p>You registered on Olympiad site. Here is your confirmation code:</p>
<p align="center" bgcolor="#666"><?php echo $user->getPassword() ?></p>
<p> <br /> </p>

<p>To confirm your mail click <a href="<?php echo sprintf(sfConfig::get('sf_registration_confirm_check'), $sf_user->getCulture()) ?><?php echo $user->getPassword() ?>">link</a>
  or enter it on <a href="<?php echo sprintf(sfConfig::get('sf_registration_confirm_page'), $sf_user->getCulture()) ?>">page</a></p>
<p> <br /> </p>

<p>Thank you!</p>
