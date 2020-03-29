<?php
include "_header.php";
if($_POST)
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

        header("Location:messageConfirm.php?name=$_POST[firstname]&lastName=$_POST[lastname]&object=$_POST[object]&email=$_POST[email]&message=$_POST[message]");
    }

}
?>
<div></div>


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
            <select type="text" id="object" name="object" >

                <option value="">Je souhaite proposer un événement</option>
                <option value="">Je souhaite proposer un lieu</option>
                <option value="">Je souhaite vous contacter</option>
                <option value="">Autres...</option>
            </select>
        </div>

        <label class="label" data-error="wrong" data-success="right" for="message">Votre message</label>
        <textarea type="text" name="message" id="message" class="md-textarea form-control" rows="4" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>"></textarea>
        <p><?php if(isset($errors['message1'])) echo $errors['message1']; ?></p>

        <button type="submit" class="btn btn-unique form-button">Envoyez ! <i class="fas fa-paper-plane-o ml-1"></i></button>

    </form>
</div>
<div></div>

<?php
include "_footer.php";?>


