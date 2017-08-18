<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="wrapper">
      <section id="post-a-vacancy-content">
        <h3 class="dark-gray-text">Post a vacancy</h3>
        <div>
          <form action="" method="POST">
            <input name ="position" type="text" name="position" placeholder="Position"><br>
            <input name ="salary"   type="text" name="salary" placeholder="Salary">
              <select class="select-category">
                  <option value="cny" selected="">CNY</option>
                  <option value="usd">USD</option>
                  <option value="rub">RUB</option>
              </select><br>
            <input name ="required_experience" type="text" name="salary" placeholder="Required experience"><br>
            Select industry: <select class="select-category">
                <option value="cny" selected="">Administrative Personnel</option>
                <option value="usd">IT, Internet, Telecom</option>
                <option value="rub">Management</option>
            </select><br>
            Employment type: <select class="select-category">
                <option value="cny" selected="">Полный рабочий день</option>
                <option value="usd">Пол ставки</option>
                <option value="rub">Хуй в жопу</option>
            </select><br>
            City: <select class="select-category">
                <option value="cny" selected="">Beijing</option>
                <option value="usd">Anus tvoei mamki</option>
                <option value="rub">Dushanbe</option>
            </select><br>

            Address: <input type="text" name="address"><br>
            <textarea name = "info" placeholder="Info"></textarea><br>

            <input name  = "submit" type="submit" value="Post a vacancy">
          </form>
        </div>
      </section>
    </div>


<?php include ROOT . '/views/layouts/footer.php'; ?>
