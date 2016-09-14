<!doctype html>

<html lang="fr">
<meta charset="utf-8">
<body>
<?php
session_start();
include 'view/_header.php';
include 'view/_topbar.php';
?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div id="margincontact" class="container">
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre email à bien été transmis !
  </div>
  <?php endif; ?>
<form action="contact.php" method="post">
  <div class="row">
<div class="col-md-6">
  <div class="form-group">
  <label for="inputname">Ton nom</label>
  <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
  </div>
  </div>
<div class="col-md-6">
  <div class="form-group">
  <label for="inputemail">Ton email</label>
  <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
  </div>
  </div>
<div class="col-md-12">
  <div class="form-group">
  <label for="inputmessage">Ton beau message</label>
  <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
  </div>  </div>
<div class="col-md-12">
  <button type='submit' class='btn btn-primary'>Envoyer</button>
  </div>
</div>
  </form>
</div>
</body>
  <?php
unset($_SESSION['inputs']); 
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
  ?>

  <?php
session_start();
  $errors = array(); 
if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {
  $errors ['name'] = "vous n'avez pas renseigné votre nom";
  }
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errors ['mail'] = "vous n'avez pas renseigné votre email";
  }
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
  $errors ['message'] = "vous n'avez pas renseigné votre message";
  }
if(array_key_exists('antispam', $_POST)) {
  $errors ['antispam'] = "Vous êtes un robots spammer";
  }
  if(!empty($errors)){ 
  $_SESSION['errors'] = $errors;
  $_SESSION['inputs'] = $_POST;
  header('Location: contact.php');
  }else{
  $_SESSION['success'] = 1;
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
  $to = 'fscalabrin2@gmail.com'; 
  $subject = 'Message envoyé par ' . htmlspecialchars($_POST['name']) .' - <i>' . htmlspecialchars($_POST['email']) .'</i>';
  $message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b> Contenu du message: </b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
mail($to, $subject, $message_content, $headers);
  header('Location: contact.php');
  }
?>
<?php 
include 'view/_footer.php';
?>
</body>