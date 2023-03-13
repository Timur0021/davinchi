<!DOCTYPE html>
<html lang="en">
    <head>
          <!--  REQUIRED META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> DAVINCHI </title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/681833e5f2.js" crossorigin="anonymous"></script>
        <!-- Custom styling -->
        <link rel="stylesheet" href="src/styling/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Rubik+Dirt&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="container-fluid">
            <div class="container">
               <div class="row">
                   <div class="col-4">
                       <h1>
                           <a href="#"> DAVINCHI </a><i class="fa-solid fa-paw"></i>
                       </h1>
                   </div>
                   <nav class="col-8">
                       <ul>
                           <li><a href="#">Головна</a></li>
                           <li><a href="#">Про нас</a></li>
                           <li><a href="#">Послуги</a></li>
                           <li>
                           
                                <a href="#">
                                     <i class="fa fa-user"></i>
                                    Увійти
                                </a>
                                <ul>
                                    <li><a href="#">Адмін панель</a></li>
                                    <li><a href="#">Вихід</a></li>
                                </ul>
                              
                           </li>
                       </ul>
                   </nav>
               </div>
           </div>
        </header>
        <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="reg.php">
       
            <h3>Форма реєстрації</h3>
           <div class="mb-3 col-12 col-md-4">
              <label for="formGroupExampleInput" class="form-label">Ваш логін</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ведіть ваш логін">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
               <label for="exampleInputPassword1" class="form-label">Пароль</label>
               <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
               <label for="exampleInputPassword2" class="form-label">Повторіть пароль</label>
               <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <button type="submit" class="btn btn-info">Відправити</button>
                <button type="button" class="btn btn-primary"><a href="log">Авторизація</a></button>
            </div>
        </form>
        </div>
         
         <!-- foter -->
     <div class="footer container-fluid">
      <div class="content container">
        <div class="row">
          <div class="section about col-md-4 col-12">
            <h3 class="logo-text">DAVINCHI</h3>
            <P>
              Davinci - сайт створений для знайомств, і для показу крутого контенту людям.
            </P>
            <div class="contact">
              <span><i class="fas fa-phone"></i>&nbsp; 123-456-789</span>
              <span><i class="fas fa-envelope"></i>&nbsp; info@gmail.com</span>
            </div>
            <div class="socials">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            </div>
            <div class="links col-md-4 col-12">
            <h3>Quick Links</h3>
            <ul>
              <a href="#">
                <li>Команда</li>
              </a>
              <a href="#">
                <li>Події</li>
              </a>
              <a href="#">
                <li>Про нас</li>
              </a>
              <a href="#">
                <li>Відгуки</li>
              </a>
            </ul>
          </div>
            <div class="contact-form col-md-4 col-12">
              <h3>Контакти</h3>
              <br>
              <form action="index.php" method="post">
                <input type="email" name="email" class="text-input contact-input" placeholder="Email...">
                <textarea rows="4" name="massage" class="text-input contact-input" placeholder="Massage..."></textarea>
                <button type="submit" class = "btn btn-big contact-btn">
                  <h3><i class = "fas fa-envelope"></i> Відправити </h3>
                </button>
              </form>
            </div>
          </div>
          <div class = "footer-bottom">
            &copy; project.com | Designed by Timur
          </div>
        </div>
      </div>
     <!-- footer -->

     <!-- Optional JavaScript: choose one of the two -->

      <!-- Optional 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
          -->
    </body>
</html>