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