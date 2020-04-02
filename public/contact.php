<?php
$pageTitle= "Contact";
$current_nav = 'contact';
include "_header.php";
if(!empty($_POST))
{
    $errors = array();

    if (empty($_POST['firstname']))
    {
        $errors['firstname1']= "Votre Prénom doit être renseigné";
    }

    if (empty($_POST['lastname']))
    {
        $errors['lastname1']= "Votre nom doit être renseigné";
    }

    if (empty($_POST['email']))
    {
        $errors['email1']= "Votre email doit être renseigné";
    }

    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $errors['email1']="Votre email n'est pas valide";
    }

    if (empty($_POST['message']))
    {
        $errors['message1']= "Merci de nous laisser votre message";
    }


    if (count($errors) == 0)
    {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $object = $_POST['object'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        require_once "../connec.php";

        $pdo = new PDO (DSN, USER, PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "INSERT INTO contacts (`firstname`, `lastname`,`object`, `email`, `message`) VALUES (:firstname, :lastname,:object, :email, :message)";
        $st = $pdo->prepare($query);

        $st->bindValue(':firstname', $firstName);
        $st->bindValue(':lastname', $lastName);
        $st->bindValue(':object', $object);
        $st->bindValue(':email', $email);
        $st->bindValue(':message', $message);

        $st->execute();


        header("Location:admin/messageConfirm.php?name=$_POST[firstname]&lastName=$_POST[lastname]&object=$_POST[object]&email=$_POST[email]&message=$_POST[message]");
    }

}
?>
<body class ="main-contact">
    <div class="form">
        <form method="post" action="">
            <h4 class="modal-title w-100 font-weight-bold ">Contactez nous</h4>
            <label  data-error="wrong" data-success="right" for="firstname">Nom</label>
            <input type="text" name ="firstname" id="firstname" class="form-control validate"value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
            <p><?php if(isset($errors['firstname1'])) echo $errors['firstname1']; ?></p>

            <label class="label" data-error="wrong" data-success="right" for="lastname">Prénom</label>
            <input type="text" name ="lastname" id="lastname" class="form-control validate" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>">
            <p><?php if(isset($errors['lastname1'])) echo $errors['lastname1']; ?></p>

            <label class="label" data-error="wrong" data-success="right" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control validate" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
            <p><?php if(isset($errors['email1'])) echo $errors['email1']; ?></p>
            <div>
                <label class="label" data-error="wrong" data-success="right"  for="object">Objet de votre message</label>
                <input type="text" name="object" id="object" class="form-control validate" value="<?php if(isset($_POST['object'])) echo $_POST['object']; ?>">
                <p><?php if(isset($errors['object1'])) echo $errors['object1']; ?></p>
            </div>

            <label class="label" data-error="wrong" data-success="right" for="message">Votre message</label>
            <textarea type="textaera" name="message" id="message" class="md-textarea form-control" rows="4" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>"></textarea>
            <p><?php if(isset($errors['message1'])) echo $errors['message1']; ?></p>

            <div class="button">
            <button type="reset" class="myButton orange">Reset <i class="fas fa-paper-plane-o ml-1"></i></button>
            <button type="submit" class="myButton vert">Envoyez ! <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>


        </form>
    </div>

<?php
include "_footer.php";?>



