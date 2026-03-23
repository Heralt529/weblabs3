<form action="" method="POST">
  <input name="name" />
  <!-- <input name="number"/>
  <input name="email"/> -->
  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  <!-- <input name="sex"/>
  <input name="language"/>
  <input name="biography"/> -->

  <input type="submit" value="ok" />
</form>
