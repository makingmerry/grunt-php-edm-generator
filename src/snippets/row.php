<?php
  // Parameters:
  // $columns: Array
  // $class_list: Array
?>

<?php if (is_array($columns) && !empty($columns)): ?>
  <div class="
    g__row
    <?php
      echo is_array($class_list) && !empty($class_list)
        ? join(' ', $class_list)
        : '';
    ?>">
    <!--[if mso]>
      <table border="0" cellpadding="0" cellspacing="0" width="800" align="center" style="width: 800px;">
        <tr>
          <td>
    <![endif]-->
    <?php foreach($columns as $i => $column): ?>
      <?php snippet('column', $column); ?>
    <?php endforeach; ?>
    <!--[if mso]>
          </td>
        </tr>
      </table>
    <![endif]-->
  </div>
<?php endif; ?>
