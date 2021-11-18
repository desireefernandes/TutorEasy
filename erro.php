<!-- Pág provisória -->
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorEasy</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <!--Semantic UI -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

</head>

<body>
    <!-- navbar -->
    <?php include 'header.php'; ?>

    <div class="ui vertical stripe segment">
        <div class="ui text container">

        	<div class="ui middle aligned center aligned grid">
            	<div class="column">
                	<h2 class="ui teal image header">
                		<div class="ui message">
                			<h4>Opa... Este usuário não existe, <a href="login.php">tente novamente</a></h4>
                		</div>
                	</h2>
            	</div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>
	
</body>
</html>