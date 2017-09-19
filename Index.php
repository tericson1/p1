<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" type = "text/css" href="stylesheet.css"/>




 </head>
 <body>
<h1>	 Tracy Ericson -cool </h1>
	<div class="container">
 <img style = "width:375px;height:400px;" src='/Images/classphoto.jpg' alt='TracyPhoto' >


<h2> Personal Intro:</h2>
<p>
	 Hi! I am a Senior Applications Specialist in ITS at Harvard Law School. I have taken a couple of classes at the Extension school, and am interested in learning more about coding web applications.
	 I live in Melrose, Ma with my boyfriend and our 4 year old Cairn Terrier/Bichon Frise named Duffy.
</p>
</div>
<h2>Random Quote Generator: </h2>

<p><?php
//used code from http://www.programmingforums.org/thread5906.html
	function quote_generate()
	{
		$quote = array("I am ready to face any challenge that might be foolish enough to face me - Dwight K. Schrute", "So it seems like this internet thing is here to stay, huh? -Chandler Bing",
		"You miss 100% of the shots you don't take - Wayne Gretzky - Michael Scott");

		return($quote[rand(0, count($quote) - 1)]);
	}

	echo quote_generate();
?> </p>
</body>
</html>
