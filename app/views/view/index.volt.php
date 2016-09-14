<html>
    <head>
        <title>test - An example blog</title>
    </head>
    <body>
        <h2>view member</h2>
        <?php foreach ($page as $user) { ?> 
        	<p> <?= $user->name ?> | <?= $user->email ?></p>
        <?php } ?>
        <p><?= $this->tag->linkTo(['index', 'Back!']) ?></p>
    </body>
</html>
