<html>
    <head>
        <title>test - An example blog</title>
    </head>
    <body>
        <h1>Sign up using this form</h1>
        <?= $this->tag->form(['signup/register']) ?>
        <p>
        	<label for="name">Name</label>
       		<?= $this->tag->textField(['name', 'size' => 24, 'maxlength' => 70]) ?>
       	</p>
       	<p>
       		<label for="name">email</label>
       		<?= $this->tag->textField(['email', 'size' => 24, 'maxlength' => 70]) ?>
   		</p>
   		<p>
       		<?= $this->tag->submitButton(['Register']) ?>
       	</p>
        </form>
    </body>
</html>
