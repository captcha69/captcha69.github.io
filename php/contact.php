<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/media-query.css">
    <link rel="shortcut icon" href="img/fufuico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Fufu Corp - Contact</title>
</head>
<body>
                                 <!-- NAV -->
<header>
    <!--titre-->
    <div class="tophead">
        <div class="stream">
         <a class="youtube" href="https://www.youtube.com/c/furax22" target="_blank"><i class='bx bxl-youtube' ></i></a>
         <a class="twitch" href="https://www.twitch.tv/furax22" target="_blank"><i class='bx bxl-twitch' ></i></a>
        </div>
            <h1>FUFU CORP</h1>
        <div class="rs">
         <a class="twitter" href="https://twitter.com/Furaxx22" target="_blank"><i class='bx bxl-twitter' ></i></a>
         <a class="discord" href="https://discord.gg/JNkzFGAFuz" target="_blank"><i class='bx bxl-discord-alt' ></i></a>
        </div>
    </div>
    <!--navbar-->
    <nav>
      <label for="menu-mobile" class="menu-mobile"><i class='bx bx-menu' >Menu</i></label>
      <input type="checkbox" id="menu-mobile" role="button">
      <ul>
        <li class="zero"><a href="/index.html"><i class='bx bxs-home'></i> Accueil</a></li> </li>
        <li class="un"><a href="/html/esplive.html"><i class='bx bxs-camera-movie'></i> Streaming</a></li>
        <li class="deux"><a href="/html/video.html"><i class='bx bxs-movie-play' ></i> Vidéos</a>
          <ul class="submenu">
              <li><a href="/html/Vtiktok.html"><i class='bx bxl-tiktok'>Vidéo Tik-Tok</i></a></li>
              <li><a href="/html/Vyt.html"><i class='bx bxl-youtube' >Vidéo YouTube</i></a></li>

          </ul>
      </li>        
      <li class="quatre"><a href="/html/apropos.html"><i class='bx bxs-info-circle'></i> A propos</a></li>
        <li class="six"><a href="/php/contact.php"><i class='bx bxs-message-dots' ></i> Contact</a></li>  
      </ul>
    </nav>
  </header>
  <!--php-->
  <div class="contact-body">


<form method="POST"  id="contact-form" autocomplete="off" action="envoi.php" >


<div class="contact-field">
<div class="contact-field-sub">
<label class="firstname">Prénom * :</label><br>
<span class="primary"><ion-icon name="person-outline"></ion-icon></span>
<input type="text" name="surname" class="primary-field form-control" require><br>
</div>

<div class="contact-field-sub">
<label>Courriel * :</label><br>
<span class="primary"><ion-icon name="mail-outline"></ion-icon></span>
<input type="mail" name="email" class="primary-field form-control" require><br>
</div>
</div>

<div class="contact-field">
<div class="contact-field-sub">

<label>Objet * :</label><br>
<span class="primary"><ion-icon name="at-circle-outline"></ion-icon></span>
<input type="text" name="objet" class="primary-field form-control" require><br>
</div>

<div class="contact-field-sub">

<label>Sujet* :</label><br>
<span class="primary"><ion-icon name="business-outline"></ion-icon></span>
<select name="dep" class="primary-field form-control">
<option>Séléctionner une option</option> 
<option>Demande de déban</option> 
<option>Bug</option> 
<option>Simple Question ?</option> 
</select><br>
</div>



<div class="contact-field">
                             <div class="contact-field-msg-sub">
                                 <label class="label-text">Message *</label>
                                 <span class="primary-field-msg-icon"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span>
                                 <textarea name="message"   class="form-control primary-field-textarea"></textarea>
                             </div>
                         </div>

<div class="contact-field">
                             <div class="success-msg"> Merci de nous avoir contactez ! </div>
                         </div>    

<div class="contact-field">
<button type="submit" class="my-btn">Envoyer</button><br>
</div>






</form>

</div>
</div>
</div>
</div>
</div>
</div>

   
<!---<p><script>alert('Nous avons vos données !')</script></p> !---->



    <!--FOOTER-->
<footer>
  <div id="deuxiemeTrait"></div>
  <div id="copyrightEtIcons">
    <div id="copyright">
      Copyright© 2022 Tous droits réservés. |<span><a href="ML.html"> Mentions Légales</a></span> | <span><a href="ProvPoli.html"> Politique de confidentialité</a></span>
    </div>
    <div id="icons">
      <a href="https://twitter.com"><i class='bx bxl-twitter' ></i></a>
      <a href="http://www.instagram.com"><i class='bx bxl-instagram'></i></a>
      <a href="http://www.discord.com"><i class='bx bxl-discord-alt'></i></a>
      <a href="https://www.youtube.com/c/furax22"><i class='bx bxl-youtube' ></i></a>

    </div>
  </div>
</footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
