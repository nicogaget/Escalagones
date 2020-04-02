<?php
$pageTitle = "Messagerie";
$current_nav = 'mail';
$root = $_SERVER['DOCUMENT_ROOT'];
require_once "$root/_header.php";
require_once "../../connec.php";

$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM contacts ORDER BY id DESC";
$st = $pdo->query($query);
$contacts = $st->fetchAll(PDO::FETCH_ASSOC);

?>
<a href="admin.php">Retour à la page d'administration</a>
<div>
    <h2>Tableau des messages</h2>
</div>
<table class="table">
    <thead>
        <tr class="table-secondary">
            <th>ID</th>
            <th>Nom Prénom</th>
            <th>Email</th>
            <th>Objet</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contacts as $contact): ?>
           <tr class="table-secondary">
                <td class="table-secondary"><?= $contact['id']?></td>
                <td class="table-secondary"><?= $contact['lastname'] .' '. $contact['firstname']?></td>
                <td class="table-secondary"><?= $contact['object']?></td>
                <td class="table-secondary"><?= $contact['email']?></td>
                <td class="table-secondary"><?= $contact['message']?></td>
                <td>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?= $contact['id'] ?>" />
                        <button class="btn btn-sm btn-danger">X</button>
                    </form>
                </td>
           </tr>
        <?php endforeach; ?>
    </tbody>
</table>


