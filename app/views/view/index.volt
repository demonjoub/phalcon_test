<html>
    <head>
        <title>test - An example blog</title>
    </head>
    <body>
        <h2>view member</h2>
        {% for user in page %} 
        	<p> {{ user.name }} | {{ user.email }}</p>
        {% endfor %}
        <p>{{ link_to("index", "Back!")}}</p>
    </body>
</html>
