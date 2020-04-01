<?php
$pagetitle = "admin/mail";
require_once "../../connec.php";
include "_admin_header.php";
$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM contacts";
$st = $pdo->query($query);
$contacts = $st->fetchAll(PDO::FETCH_ASSOC);

?>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom Prénom</th>
        <th>Objet</th>
        <th>Message</th>

    </tr>
    </thead>
    <?php foreach ($contacts as $contact): ?>
       <tr>
            <td><?= $contact['id']?></td>
            <td><?= $contact['firstname'] .' '. $contact['lastname']?></td>
            <td><?= $contact['object']?></td>
            <td><?= $contact['email']?></td>
            <td><?= $contact['message']?></td>

       </tr>
    <?php endforeach; ?>
</table>

<?php include "_admin_footer.php"; ?>
