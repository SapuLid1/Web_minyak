<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/imagetest.css">
    <link rel="stylesheet" href="css/lightbox.css">
    
    <title> Minyak Kelapa </title>
</head>
<body>
<section>
<div class="wrapper" >
    <nav>
        <div class="items">
        <button type="button" class="item active button1" data-name="semua">Semua</button> 
        <button type="button" class="item button1" data-name="seliter">Seliter</button>
        <button type="button" class="item button1" data-name="dualiter">Dualiter</button>
        <button type="button" class="item button1" data-name="tigaliter">Tigaliter</button>

        </div>
    </nav>
    <!--filter image-->
    
    <div class="container gallery">
        <div class="image" data-name="seliter" >
            <span><a href ="img/m1.jpg" data-lightbox="minyak" data-title="foto1" style="width: 300px; height:auto"; alt="foto1">
            <img src="img/m1.jpg"></a></span>
        </div>
         <div class="image" data-name="dualiter" >
            <span><a href ="img/m2.jpg" data-lightbox="minyak" data-title="foto2" style="width: 300px; height:auto"; alt="foto2">
            <img src="img/m2.jpg"></a></span>
        </div>
         <div class="image" data-name="tigaliter" >
            <span><a href ="img/m3.jpg" data-lightbox="minyak" data-title="foto3" style="width: 300px; height:auto"; alt="foto3">
            <img src="img/m3.jpg"></a></span>
        </div>
         <div class="image" data-name="seliter" >
            <span><a href ="img/m4.jpg" data-lightbox="minyak" data-title="foto4" style="width: 300px; height:auto"; alt="foto4">
            <img src="img/m4.jpg"></a></span>
        </div>
         <div class="image" data-name="dualiter" >
            <span><a href ="img/m2.jpg" data-lightbox="minyak" data-title="foto5" style="width: 300px; height:auto"; alt="foto5">
            <img src="img/m2.jpg"></a></span>
        </div>
    </div>
</div>
</section>


<!-- Fullscreen image preview box 
<section>
<div class="container">
    <div class="gallery2">
        <a href="img/blog-1.jpg" data-lightbox="Minyak" data-title="foto1">
            <img src="img/blog-1.jpg">
        </a>
</section>
-->

<script src="javascriptM/lightbox-plus-jquery.js"> </script>
<script type="text/javascript">
  //membuat filterisasi element
const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".image");

window.onload = ()=>{ //once window loaded 
    filterItem.onclick = (selectedItem)=>{  // kalau user klik filterItem div
        if(selectedItem.target.classList.contains("item")){// kalau user klik element yang ada .item class nya
            filterItem.querySelector(".active").classList.remove("active"); // memghilangkan activce class yang ada di element/item pertama
            selectedItem.target.classList.add("active");  //add active class ke selected element/item
            let filterName = selectedItem.target.getAttribute("data-name"); //mengambil data-name value dari selected Item dan menyimpannya di variable filtername 
            filterImg.forEach((Image)=>{
                let filterImages = Image.getAttribute("data-name");// ngambil value image data-name

                //if user selected item data-name value is equal to image data-name value 
                //or user selected item data-name value is equal to "semua"
                if((filterImages == filterName)|| filterName == "semua"){
                    Image.classList.remove("hide");
                    Image.classList.add("show");
                }else{
                    Image.classList.add("hide");
                    Image.classList.remove("show");
                }
            });



        }

    }

}
</script>
 
<script src="https://kit.fontawesome.com/5ce8376c23.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>