<?php
  // Parameters:
  $title ?? $title = '';
  $desc ?? $desc = '';
?>

<?php
  // Try and ensure core data is present before
  // excecuting snippet body.
  try {
    if (empty($title)) {
      throw new Exception('[Head]: title is missing.');
    }
    if (!is_string($title)) {
      throw new Exception('[Head]: title is not a string.');
    }

    if (empty($desc)) {
      throw new Exception('[Head]: description is missing.');
    }
    if (!is_string($desc)) {
      throw new Exception('[Head]: description is not a string.');
    }
?>

  <!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
      <?php // Meta tags: ?>
      <meta name="viewport" content="width=device-width"/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <!--[if !mso]><!-->
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <!--<![endif]-->
      <title><?php echo $title; ?></title>
      <meta name="description" content="<?php echo $desc; ?>"/>

      <?php // Styles: ?>
      <link href="/static/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="bg-c-light-grey">
      <!--[if mso]>
      <table border="0" cellpadding="0" cellspacing="0" width="800" align="center" bgcolor="#fff" style="width: 800px;"><tr><td>
      <![endif]-->
      <div class="
        g
        m-ver-3
        f-f-arial
        bg-c-white">

<?php
  // End try.
  }

  catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n"; // !Single quotes does not work.
  }
?>
