<?php
    // ako su mysql username/password i ime baze na vasim racunarima drugaciji
    // obavezno ih ovde zamenite
    $servername = "127.0.0.1";
    $username = "root";
    $password = "vivify";
    $dbname = "sql_lession";
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Vivify Academy Blog - Homepage</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="va-l-page va-l-page--single">
<?php include('header.php'); ?>
    <div class="va-l-container">
        <main class="va-l-page-content">
            <?php
                if (isset($_GET['post_id'])) {
                    // pripremamo upit
                    $sql = "SELECT id, title, category, created_at, content FROM posts WHERE posts.id = {$_GET['post_id']}";
                    $statement = $connection->prepare($sql);
                    // izvrsavamo upit
                    $statement->execute();
                    // zelimo da se rezultat vrati kao asocijativni niz.
                    // ukoliko izostavimo ovu liniju, vratice nam se obican, numerisan niz
                    $statement->setFetchMode(PDO::FETCH_ASSOC);
                    // punimo promenjivu sa rezultatom upita
                    $singlePost = $statement->fetch();
                    // koristite var_dump kada god treba da proverite sadrzaj neke promenjive
                        echo '<pre>';
                        var_dump($singlePost);
                        echo '</pre>';
                $sql = "SELECT t.name 
                        FROM posts p 
                        INNER JOIN postTags pt ON pt.post_id = p.id 
                        INNER JOIN tags t ON t.id = pt.tag_id 
                        WHERE p.id = {$_GET['post_id']}";
                $statement = $connection->prepare($sql);
                $statement->execute();
                $statement->setFetchMode(PDO::FETCH_OBJ);
                $tags = $statement->fetchAll();
                $sql = "SELECT *
                        FROM comments
                        WHERE post_id = {$_GET['post_id']} LIMIT 3";
                $statement = $connection->prepare($sql);
                $statement->execute();
                $statement->setFetchMode(PDO::FETCH_OBJ);
                $comments = $statement->fetchAll();
            ?>
                    <article class="va-c-article">
                        <header>
                            <h1><?php echo $singlePost['title'] ?></h1>
                            <!-- zameniti privremenu kategoriju pravom kategorijom blog post-a iz baze -->
                            <h3>category: <strong><?php echo ($singlePost['category'])?></strong></h3>
                            <!-- zameniti  datum i ime sa pravim imenom i datumom blog post-a iz baze -->
                            <div class="va-c-article__meta"><?php echo($singlePost['created_at'])?> by John Doe</div>
                        </header>
                        <!-- zameniti ovaj privremeni (testni) text sa pravim sadrzajem blog post-a iz baze -->
                        <div>
                            <p><?php echo ($singlePost['content'])?></p>
                        </div>
                        <footer>
                            <h3>tags:
                                <!-- zameniti testne tagove sa pravim tagovima blog post-a iz baze -->
                                <?php 
                                foreach ($tags as $tag) {
                                    echo("<a>{$tag->name}, <a>");
                                }?>
                            </h3>
                        </footer>
                        <div class="comments">
                            <h3>comments</h3>
                            <!-- zameniti testne komentare sa pravim komentarima koji pripadaju blog post-u iz baze -->
                            <?php
                                foreach ($comments as $comment) {
                            ?>
                            <div class="single-comment">
                                <div>posted by: <strong>Pera Peric</strong> on 15.06.2017.</div>
                                <div><?php echo ($comment->text); ?></div>
                            </div>
                            <?php
                                }
                                ?>
                    </article>
            <?php
                } else {
                    echo('post_id nije prosledjen kroz $_GET');
                }
            ?>
        </main>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>