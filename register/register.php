<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=ryanvand_ace', 'ryanvand_ace_admin', 'uwt8StsJX77Th7x');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../error.html.php';
    exit();
}

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['name'])) {
    /*Since the form has been submitted, let's capture the submission values so we can display them to the user on the success page */
    $users_name = $_POST['name'];
    $users_age = $_POST['age'];
    $users_role = $_POST['role'];
    $users_email = $_POST['email'];
    $users_emername = $_POST['emer-name'];
    $users_emerphone = $_POST['emer-phone'];
    $users_gender = $_POST['gender'];
    $users_saturday = $_POST['saturday'];
    $users_sunday = $_POST['sunday'];
    $users_comment = $_POST['comment'];
    date_default_timezone_set('Etc/UTC');

    try
    {
        $sql = 'INSERT INTO registration SET
          name = :name,
          age = :age,
          role = :role,
          email = :email,
          emername = :emername,
          emerphone = :emerphone,
          gender = :gender,
          saturday = :saturday,
          sunday = :sunday,
          comment = :comment';

        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $users_name);
        $s->bindValue(':age', $users_age);
        $s->bindValue(':role', $users_role);
        $s->bindValue(':email', $users_email);
        $s->bindValue(':emername', $users_emername);
        $s->bindValue(':emerphone', $users_emerphone);
        $s->bindValue(':gender', $users_gender);
        $s->bindValue(':saturday', $users_saturday);
        $s->bindValue(':sunday', $users_sunday);
        $s->bindValue(':comment', $users_comment);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted joke: ' . $e->getMessage();
        include '../error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'success.html.php';
}

?>