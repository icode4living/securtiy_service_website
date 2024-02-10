let navList = document.querySelectorAll(".link-item");
//check if device is mobile
document.addEventListener("onload",()=>{
alert("window loaded")
})

const header = document.getElementById("header");
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
            // console.log("Not scrolling")

    })


    }
  
  });

  /**Mobile menu control */
 var menuButton = document.getElementById("menu-btn");
 //close button
 var closeBtn = document.getElementById("close-btn");
 //open menu on mobile screen
menuButton.addEventListener("click",()=>{
    //console.log("menu clicked")
    closeBtn.style.display = "block";
document.querySelector(".nav-link").classList.replace("nav-link","nav-menu");
document.querySelectorAll(".link-item").forEach((list)=>{
list.classList.replace("link-item","mobile-menu-list");
})

});
//close menu on mobile screen

closeBtn.addEventListener("click",()=>{
    //console.log("menu clicked")
    closeBtn.style.display = "none";
document.querySelector(".nav-menu").classList.replace("nav-menu","nav-link");
document.querySelectorAll(".mobile-menu-list").forEach((list)=>{
list.classList.replace("mobile-menu-list","link-item");
})

});