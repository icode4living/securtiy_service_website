let navList = document.querySelectorAll(".link-item");
//check if device is mobile
document.addEventListener("onload",()=>{
alert("window loaded")
})
document.addEventListener("scroll", ()=>{
    //check if user scroll to top
    if(window.scrollY===0){
        document.querySelector("header").classList.remove("header-bg");
       //change the link item class while scrolling
        navList.forEach((list)=>{
            list.classList.replace("link-item-white", "link-item");
        })
    }
    else{
     // console.log("Not scrolling")
      document.querySelector("header").classList.add("header-bg");
      //document.querySelectorAll("link-item").classList.replace("link-item-white","link-item");
      navList.forEach((list)=>{
        list.classList.replace("link-item", "link-item-white");
             console.log("Not scrolling")

    })


    }
  
  });
