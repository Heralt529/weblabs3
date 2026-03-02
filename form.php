<form action="" method="POST">
  <input name="fio" maxlength="128" placeholder="фио"/>
  <input name="phone" type="tel" maxlength="11" placeholder="+7-777-777-77-77"/>
  <input name="email" type="email" maxlength="128" placeholder="email@gmail.com"/>
  <select name="year"/>
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>

  <input type = "radio" id = "sex" name='sex"/>
    <label for="sex"
  
  <input type="submit" value="ok" />
</form>
