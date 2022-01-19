<?php
session_start();

include 'banco.php';
$pdo = dbConnect();

///// EDIÇÃO TUTORIAIS ///// 
$stmt = $pdo->prepare("
   SELECT * FROM tutorial
   WHERE id =  ? "); 
$stmt->execute([$_GET['id']]);
$tuto= $stmt -> fetch();
///////////////////////////

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorEasy</title>

    <link rel="stylesheet" href="css/style.css">
    <!--Semantic UI -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <style>
        body {
            background: #F7F8F9;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <?php include 'header.php'; ?>

    <div class="ui vertical stripe segment">
        <!-- TUTORIAIS -->
        <div class="container-tutoriais">

            <div class="content-title-tutorial">
                <div class="ui right aligned grid">
                    <div class="left floated left aligned six wide column">
                        <h1><?= $tuto['title'] ?></h1>
                    </div>
                </div>
            </div>

            <!-- CARDS -->
            <div class="ui four cards">
                <?php
                $arquivo = '_arquivo/1/bbb.jpg';
                        if (is_file("_arquivo/" .  $tuto['id'] . "/" . $tuto['arquivo'])) {
				            $arquivo = "_arquivo/" .  $tuto['id'] . "/" . $tuto['arquivo'];
			            }
			        ?>
                <!-- CARD-->
                <div class="ui">
                    <div class="content">
                        <a class="image">
                            <img class="ui large bordered rounded image" src="<?= $arquivo ?>">
                        </a>
                        <br>
                        <div class="description">
                            <p><?= $tuto['description'] ?></p>
                        </div>
                    </div>
                    <br>
                    <div class="extra content">
                        <span class="left floated like"><i class="like icon"></i> Gostei </span>
                        <span class="right floated star"><i class="star icon"></i> Favoritar </span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>

</body>

</html>