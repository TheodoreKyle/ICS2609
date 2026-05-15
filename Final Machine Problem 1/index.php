<?php
require_once("Announcement.php");

$announcement = new Announcement();

/*
INSERT HANDLER (BUGGY SECTION)
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // BUG 1: wrong method usage order
    $announcement->setTitle($_POST["title"]);
    $announcement->setContent($_POST["content"]);
    $announcement->setAuthor($_POST["author"]);

    // BUG 2: missing author setter usage
    $announcement->addAnnouncement();
}
?>

<h1>Announcement System</h1>
<link rel="stylesheet" href="style.css">

<!-- INSERT FORM -->

<form method="POST">

    <input type="text" name="title" placeholder="Title"><br><br>

    <textarea name="content" placeholder="Content"></textarea><br><br>

    <input type="text" name="author" placeholder="Author"><br><br>

    <button type="submit">Submit</button>
</form>

<hr>


<!-- DISPLAY SECTION -->


<?php
$data = $announcement->getAnnouncements();
?>

<?php foreach ($data as $d): ?>
    <div>
        <h3><?= $d->title ?></h3>
        <p><?= $d->content ?></p>
        <small><?= $d->author ?></small>
    </div>
<?php endforeach; ?>