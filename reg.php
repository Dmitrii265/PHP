<?php
  $title = "Войти";
  $style = "";
  require_once('site_components/header.php');
?>



    <div class="container-fluid">
      <div class="row justtify-content-centr mt-5">
        <div class="col-8">
          <h1 class="text-center">Регистрация</h1>
            <!-- <form action="#">//--------------куда передавать данные-------------------//-->
            <!--  <form action="#" metod="GET"> ================ когда видно данные куда направляется===============-->
          <form action="reg_obr.php" method="POST"> 
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Введите Login" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="login">
              </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
              </span>
              </div>
              <input type="password" class="form-control" placeholder="Введите пароль" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="pass">
              </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
              </span>
              </div>
              <input type="password" class="form-control" placeholder="Повторите пароль" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="passrepeat">
              </div>
              <h2 class="text-center">Личная информация</h2>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Имя" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="name">
              </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Фамилия" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="lastname">
              </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Отчество" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="patronymic">
              </div>
              <p>Дата рождения</p>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                </span>
              </div>
              <input type="date" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя" aria-describedby="basic-addon1" name="birthdate">
              </div>
              <!-- <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя" aria-describedby="basic-addon1"> // --------------------ОДИН КОНТЕЙНЕР -------------------------//
              </div> -->
              <input type="submit" class="btn btn-primary btn-block mt-2" value="Зарегистрироваться">
              <!-- <input type="submit" class="btn btn-primary btn-block mt-2" value="Зарегистрироваться">//---КНОПКА СИНЯЯ -->
              
          </form>
        </div>  
      </div>
    </div>
    
<? require_once('site_components/footer.php'); ?>
