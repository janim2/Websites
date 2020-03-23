things i would need 

other poems
email address
postal address
more pictures
description of herself
twiiter, instagram acount links
any other social accounts.
any other phone number

Deploying a site to heroku.
1. login to heroku

	heroku login -i
	makes you login in terminal
2.Navigate to site on pc.
3.add an index.php file to the site.
	<?php header( 'Location: /index.html' ) ;  ?>
4.use git to upload the files.
	git init
	git add .
	git commit -m "My site ready for deployment."
	heroku apps:create my-static-site-example
		create an heroku app called 'my-static-site-example' in this case.
	git push heroku master

NB://when uploading a html file. create a php to redirect to the html file as heroku only recognises php files.


changing the content of the site..
1. clone the repository
	$ heroku git:clone -a dampy
	$ cd dampy

	where dampy is the name of the heroku app.

2.deploy the changes.
	$ git add .
	$ git commit -am "make it better"
	$ git push heroku master
