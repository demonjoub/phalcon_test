<html>
    <head>
        <title>test - An example blog</title>
    </head>
    <body>
        <h1>Hello!</h1>
        <p><?= $this->tag->linkTo(['signup', 'Sign Up Here!']) ?></p>
        <p><?= $this->tag->linkTo(['view', 'View Member Here!']) ?></p>
    </body>
</html>