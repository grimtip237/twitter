<?

    $connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

    $select = "SELECT * FROM tweets";
   	$insert = "INSERT INTO tweets(name, text, avatar, image) VALUES ('{$_GET['autor']}', '{$_GET['maintext']}', 'img/4.jpg', 'img/2.png')";



    ob_start();
    $new_url = "index.php";
    header('location: '.$new_url);
    ob_end_flush();
?>