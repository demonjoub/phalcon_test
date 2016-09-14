<html>
    <head>
        <title>test - An example blog</title>
    </head>
    <body>
        <h1>Sign up using this form</h1>
        {{ form("signup/register") }}
        <p>
        	<label for="name">Name</label>
       		{{ text_field("name", "size": 24, "maxlength": 70) }}
       	</p>
       	<p>
       		<label for="name">email</label>
       		{{ text_field("email", "size": 24, "maxlength": 70) }}
   		</p>
   		<p>
       		{{ submit_button("Register") }}
       	</p>
        </form>
    </body>
</html>
