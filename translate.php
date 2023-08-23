<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/translate.css">
    <title> Minyak Kelapa </title>
    
</head>
<body>

<div class="translate">
<span class="navbar-nav mr-sm-2" id="google_translate_element"></span>
<i class="fa-brands fa-whatsapp"></i>
</div>
<div class="container">
    <div class="col-12-md">
        <div class="card-body">
            <p>halo semuanya, ini adalah uji coba </p>
        </div>
    </div>
</div>
     




<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>


<script type="text/javascript">
   function googleTranslateElementInit() {
      new google.translate.TranslateElement({
      defaultLanguage: 'en',  
      pageLanguage: 'en',
      includedLanguages: 'et,id,en,hi,fr,zh-CN',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      autoDisplay: false,
      multilanguagePage: true}, 'google_translate_element');
      };
</script>

<!-- Flag click handler -->
<script type="text/javascript">
    $('.translation-links a').click(function() {
      var lang = $(this).data('lang');
      var $frame = $('.goog-te-menu-frame:first');
      if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
        return false;
      }
      $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
      return false;
    });

$(window).load(function () {

$('.translation-icons').css('visibility', 'visible');

    $('.translation-icons a').click(function(e) {
        e.preventDefault();
        var placement = $(this).data('placement');
        var lang_num = $('.translation-icons a').length;
        var $frame = $('.goog-te-menu-frame:first');

        if (!$frame.size()) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }

        var langs = $('.goog-te-menu-frame:first').contents().find('a span.text');

        if(langs.length != lang_num) placement = placement+1;

        langs.eq(placement).click();
        return false;
    });
});
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>