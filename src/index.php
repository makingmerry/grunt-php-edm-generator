<?php
  // Core utility modules:
  include '../config.php';
  include '../helpers.php';
?>

<?php
  $data = [
    'title' => 'Index',
    'desc' => 'Index description text.'
  ];
  snippet('header', $data);
?>

<?php
  $data = [
    'class_list' => false,
    'columns' => [
      0 => [
        'mobile_col_size' => 2,
        'desktop_col_size' => 6,
        'render' => '
          <div class="p-all-4">
            <h1 class="f-s-4">Foobar</h1>
            <div class="f-s-5">Foobar content</div>
          </div>
        ',
      ],
      1 => [
        'mobile_col_size' => 2,
        'desktop_col_size' => 6,
        'render' => '
          <div class="p-all-4">
            <h1 class="f-s-4">Foobar</h1>
            <div class="f-s-5">Foobar content</div>
          </div>
        ',
      ],
    ],
  ];
  snippet('row', $data);
?>

<?php snippet('footer'); ?>
