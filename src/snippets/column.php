<?php
  // Parameters:
  // $mobile_col_size: (1||2)Int
  // $destkop_col_size: Int
  // $class_list: Array
  // $render: (html)String
?>

<div class="
  g__col
  <?php
    // Mobile column size:
    // Shortcomings:
    // 1. Only 2 columns.
    if (is_int($mobile_col_size)) {
      echo $mobile_col_size === 1
        ? 'g2-1'
        : 'g2-2';
    }
  ?>
  <?php
    // Desktop column size:
    // Shortcomings:
    // 1. Only 1 breakpoint.
    // 2. Can only diminish the number of columns from a desktop version to a mobile version.
    if (is_int($desktop_col_size) && is_int($mobile_col_size)) {
      // !Failsafe: set desktop column size to maximum of 6/12 if mobile column size is 1/2,
      // due to shortcoming (2).
      if ($mobile_col_size === 1 && $desktop_col_size > 6) {
        echo 'g12-6--l';
      } else {
        echo $desktop_col_size <= 12 && $desktop_col_size >= 1
          ? 'g12-'.$desktop_col_size.'--l'
          : 'g12-12--l';
      }
    }
  ?>">
  <?php echo $render; ?>
</div>
