<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Profile</title>
 
  
  <link rel="stylesheet" href="pr.css">
</head>
<body>
    
<div class="row">
    
        <div class="col-lg-2"></div><div class="col-lg-8 mainn shadow"> 
        <div class="row">
            <div class="col-lg-3 barss">
              <div class="d-flex align-items-start">
              <div class="nav flex-column nav-tabs me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">ПРОФИЛЬ</button>
                <button class="nav-link" id="v-pills-osn-tab" data-bs-toggle="pill" data-bs-target="#v-pills-osn" type="button" role="tab" aria-controls="v-pills-osn" aria-selected="false">ОСНОВНОЙ КВЕСТ</button>
                <button class="nav-link" id="v-pills-competition-tab" data-bs-toggle="pill" data-bs-target="#v-pills-competition" type="button" role="tab" aria-controls="v-pills-competition" aria-selected="false">СОРЕВНОВАНИЯ</buttona>
                <button class="nav-link" id="v-pills-static-tab" data-bs-toggle="pill" data-bs-target="#v-pills-static" type="button" role="tab" aria-controls="v-pills-static" aria-selected="false">СТАТИСТИКА</button>
                <button class="nav-link" id="v-pills-rating-tab" data-bs-toggle="pill" data-bs-target="#v-pills-rating" type="button" role="tab" aria-controls="v-pills-rating" aria-selected="false">РЕЙТИНГ</button>
                <button class="nav-link" id="v-pills-shop-tab" data-bs-toggle="pill" data-bs-target="#v-pills-shop" type="button" role="tab" aria-controls="v-pills-shop" aria-selected="false">МАГАЗИН</button>
                <button class="nav-link" id="v-pills-test-tab" data-bs-toggle="pill" data-bs-target="#v-pills-test" type="button" role="tab" aria-controls="v-pills-test" aria-selected="false">ТЕСТЫ</button>
                <hr>
                <?php 
                  if($_COOKIE['user'] == ''):?>   
                          
                          <button class="nav-link"  href="#" tabindex="-1"  data-bs-toggle="modal" data-bs-target="#signmod" >Sign In</button>
                      
                          <button class="nav-link"  href="#" tabindex="-1"  data-bs-toggle="modal" data-bs-target="#regmod" >Регистрация</button>
                        
                       
                  
                <?php endif; ?>

                <div class="modal fade" id="regmod" tabindex="-1" aria-labelledby="modlb" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modlb">Регистрация</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form action="check_reg_prof.php" method="post">
                      <div class="mb-3">
                          <label for="firstname" class="form-label">Имя</label>
                          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Имя">
                        </div>
                        <div class="mb-3">
                          <label for="secondname" class="form-label">Фамилия</label>
                          <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Фамилия">
                        </div>
                        <div class="mb-3">
                          <label for="thirdname" class="form-label">Отчество</label>
                          <input type="text" class="form-control" id="thirdname" name="thirdname" placeholder="Отчество">
                        </div>
                    
                        <div class="mb-3">
                          <label for="logreg" class="form-label">Логин</label>
                          <input type="text" class="form-control" id="logreg" name="logreg" placeholder="Логин">
                        </div>
                        <div class="mb-3">
                          <label for="passreg" class="form-label">Пароль</label>
                          <input type="password" class="form-control" id="passreg" name="passreg" placeholder="Пароль">
                        </div>
                        <div class="mb-3">
                          <label for="desc" class="form-label">Описание</label>
                          <input type="text" class="form-control" id="desc" name="desc" placeholder="Опишите себя">
                        </div>
                        <div class="mb-3">
                          <label for="appoint" class="form-label">Должность</label>
                          <input type="number" class="form-control" id="appoint" name="appoint" placeholder="ID должности">
                        </div>
                        <div class="mb-3">
                          <label for="work" class="form-label">Подразделение</label>
                          <input type="number" class="form-control" id="work" name="work" placeholder="ID подразделения">
                        </div>
                        <div class="mb-3">
                          <label for="photo" class="form-label">Фотография</label>
                          <input type="image" class="form-control" id="photo" name="photo" placeholder="Отчество">
                        </div>
                      
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal" >Закрыть</button>
                        <button type="submit" name="do_reg" class="btn btn-dark">Готово</button> 
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
 


            </div></div></div>
            <div class="col-lg-9">
            
              <div class="tab-content" id="v-pills-tabContent">
                 <!-- inception -->     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row then">
                        <div class="col-lg-12">


                          <div class="row">
                            
                            <div class="col-lg-1"></div>
                            <div class="col-lg-3">
                              <div class="container"><img class="imgcontainer" src="kindofprofile.png" alt="" width="150%"></div>         
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                              <p><h2>Фамилия Имя Отчество</h2></p>
                              <div class="gray"> Должность: </div> <div id="dolzhnost">такая то такая то</div>
                              <div class="gray"> Подразделение: </div> <div id="podrazdelenie">такая то такая то</div>
                              <p><div>Я очень интересный человек.Я очень интересный человек.Я очень интересный человек.Я очень интересный человек.</div></p>
                              <div class="row">
                                <div class="col-lg-4 coin">Очки: 500</div><div class="col-lg-4 energ">Энергия: 600</div><div class="col-lg-4 hear">Сердца: 700</div>
                              </div>
                            </div>
                            <div class="col-lg-1"></div>
                          </div>


                        <br>

                          <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-3">
                              <div class="gray"> Основной квест: </div> <div id="maintask">такая то такая то</div>
                              <div class="gray"> Прогресс: </div> <div id="progress">такая то такая то</div>
                              <div class="gray"> Срок: </div> <div id="deadline">такая то такая то</div>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="col-lg-4">
                              <div class="container border">
                                <h4>Продуктивность: </h4>
                                <div class="row border progresscolor2"><div class="col-lg-7 progresscolor borderprogress"></div></div>
                                <h4>Качества: </h4>
                                <div class="row border progresscolor2"><div class="col-lg-3 progresscolor borderprogress"></div></div>
                              </div>
                            </div>
                            <div class="col-lg-1"></div>
                          </div>




                          <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5">
                              <br>
                              <h4> Список задач:</h4>
                              <div class="container perfectblue border">
                              <div class="row"><div class="col-lg-8"><h5>Название задачи</h5></div><div class="col-lg-4 right" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x2-gap" viewBox="0 0 16 16">
  <path d="M4 4v2H2V4h2zm1 7V9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 5V9a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 4v2H7V4h2zm5 0h-2v2h2V4zM4 9v2H2V9h2zm5 0v2H7V9h2zm5 0v2h-2V9h2zm-3-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-2z"/>
</svg></div> </div>
                                <br><div class="row border progresscolor2"><div class="col-lg-4 progresscolor borderprogress"> 30%</div></div>
                                <div class="row">  <div class="col-lg-5">Тип задачи</div><div class="col-lg-2"></div><div class="col-lg-5">до 21.05.20</div>   </div>
                              <br></div><br>
                              <div class="container perfectblue border">
                              <div class="row"><div class="col-lg-8"><h5>Название задачи</h5></div><div class="col-lg-4 right" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x2-gap" viewBox="0 0 16 16">
  <path d="M4 4v2H2V4h2zm1 7V9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 5V9a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 4v2H7V4h2zm5 0h-2v2h2V4zM4 9v2H2V9h2zm5 0v2H7V9h2zm5 0v2h-2V9h2zm-3-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-2z"/>
</svg></div> </div>
                                <br><div class="row border progresscolor2"><div class="col-lg-9 progresscolor borderprogress"> 70%</div></div>
                                <div class="row">  <div class="col-lg-5">Тип задачи</div><div class="col-lg-2"></div><div class="col-lg-5">до 21.05.20</div>   </div>
                              <br></div><br>

                              <div class="container perfectblue border">
                              <div class="row"><div class="col-lg-8"><h5>Название задачи</h5></div><div class="col-lg-4 right" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x2-gap" viewBox="0 0 16 16">
  <path d="M4 4v2H2V4h2zm1 7V9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 5V9a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 4v2H7V4h2zm5 0h-2v2h2V4zM4 9v2H2V9h2zm5 0v2H7V9h2zm5 0v2h-2V9h2zm-3-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-2z"/>
</svg></div> </div>
                                <br><div class="row border progresscolor2"><div class="col-lg-11 progresscolor borderprogress"> 90%</div></div>
                                <div class="row">  <div class="col-lg-5">Тип задачи</div><div class="col-lg-2"></div><div class="col-lg-5">до 21.05.20</div>   </div>
                              <br></div><br>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-4">
                            <br>
                              <h4> Aчивки:</h4>
                              <div class="container border">
                                <div class="circle"></div>
                                <div class="circle"></div>
                                <div class="circle"></div>
                              </div>
                            </div>
                            <div class="col-lg-1"></div>
                          </div>


                        </div>
                        </div>







                      </div> <!-- end of profile -->























                <div class="tab-pane fade" id="v-pills-osn" role="tabpanel" aria-labelledby="v-pills-osn-tab">2</div>
                <div class="tab-pane fade" id="v-pills-competition" role="tabpanel" aria-labelledby="v-pills-competition-tab">3</div>
                <div class="tab-pane fade" id="v-pills-static" role="tabpanel" aria-labelledby="v-pills-static-tab">4</div>
                <div class="tab-pane fade" id="v-pills-rating" role="tabpanel" aria-labelledby="v-pills-rating-tab">5</div>
                <div class="tab-pane fade" id="v-pills-shop" role="tabpanel" aria-labelledby="v-pills-shop-tab">6</div>
                <div class="tab-pane fade" id="v-pills-test" role="tabpanel" aria-labelledby="v-pills-test-tab">7</div>

              </div>
            </div>
        


        </div>
        </div> <div class="col-lg-2"></div>
       
</div>
  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
  integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>




