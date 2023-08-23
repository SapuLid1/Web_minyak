<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="css/Translate.css">


    <title> Translate </title>

</head>

 <!-- Code provided by Google -->
 <div class=" goog-text-highlight " id="google_translate_element">
    <ul class="list-unstyled list-inline ct-topbar__list">
	  <li class="ct-language">Language <i class="fa fa-arrow-down"></i>
		<ul class="list-unstyled ct-language__dropdown">
		  <li><a href="javascript:;" id="Hindi" onclick="translateLanguage(this.id);"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"></a></li>
		  <li><a href="javascript:;" id="English" onclick="translateLanguage(this.id);"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"></a></li>
		  <li><a href="javascript:;" id="Indonesia" onclick="translateLanguage(this.id);"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"></a></li>
		  <li><a href="javascript:;" id="France" onclick="translateLanguage(this.id);"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"></a></li>
		</ul>
	  </li>
	</ul>
 </div>
<body>
<div id="google_translate_element" style="display: none">
    </div>
<div class="container">
	<h1>Use Google Translate with your Website</h1>
	
</div>



<script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ 
                pageLanguage: 'en', 
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false 
            }, 'google_translate_element');
        }
    
		function translateLanguage(lang) {

			var $frame = $('.goog-te-menu-frame:first');
			if (!$frame.size()) {
				alert("Error: Could not find Google translate frame.");
			return false;
		}
			$frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
			return false;
		}
	
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>

