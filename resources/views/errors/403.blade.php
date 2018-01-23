<html>
<head>

  <style>
   section{
   	overflow: hidden;
   }
   #MessageSectionContainer{
    width: 100%;
    max-width: 36%;
    margin: 12vw auto;
   /* box-shadow: -4px 2px 18px 3px rgba(0, 0, 0, 0.06);*/
    padding: 2vw;
   }

   #CactusContainer, #MessageContainer{
   	display: inline-block;
   }
   #MessageContainer{
	vertical-align: top;
	margin: 4vw 0 0 1.5620vw;
	font-size: 0.823vw;
   }

   @media(max-width: 1920px){
	   #MessageSectionContainer{
	   	max-width: 660px;
		margin: 230px auto;
	   }   	
	   #MessageContainer{
		margin: 50px 0 0 30px;
		font-size: 16px;
	   }
   }
   @media(max-width: 670px){
	   #MessageSectionContainer{
	   	max-width: 660px;
		margin: 20px auto;
		text-align: center;
	   }   	
	   #MessageContainer{
		margin: 0px 0 0 0px;
		font-size: 16px;
		
	   }
   }

  </style>	
</head>

<body>
  <section>
	<div id="MessageSectionContainer">
		<div id="CactusContainer">
			<img src="{{ asset('admin/gfx/scared_cactus.jpg') }}">
		</div>
		<div id="MessageContainer">
			<h1>Oh noes!</h1>
			<h2>You are not authorized to do that!</h2>
			<p>If you need access to the page, please contact the IT team! :)</p>
		</div>	
	</div>
  </section>
</body>

</html>