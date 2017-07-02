<!DOCTYPE html>
<html lang="en">
  <head>
    <title>URL Shortener</title>
    <link rel="stylesheet" href="/assets/css/styles.css" />
  </head>
  <body>
    <div id="container">
      <!--<h2>Uber-Shortener</h2>
      {{Form::open(array('url'=>'/','method'=>'post'))}}

      {{Form::text('link',Input::old('link'),array('placeholder'=>'Insert your URL here and press enter!'))}}
      {{Form::close()}}
	  @if(Session::has('errors'))
		<h3 class="error">{{$errors->first('link')}}</h3>
	  @endif-->
	  
	  <div class="header"> Php URL shortener<hr /></div>
		<div class="content">
		<form id="form1" name="form1" method="post" action="shorten.php">
		  
		  <p><strong> Url:</strong>
			<input type="text" name="url" id="url"  size="45"  />
		  </p>
		  <p>
			<input type="submit" name="Submit" id="Submit" value="Shorten" />
		  </p>
		  <p>&nbsp;</p>
		</form>

    </div>
  </body>
</html>