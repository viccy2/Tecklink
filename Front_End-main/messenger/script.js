function myFunction(x) {
  const contentMenu = document.getElementById("contentMenu");

  contentMenu.classList.toggle("hide-on-mobile");
}

const mediaQuery = window.matchMedia("(min-width: 750px)");

function handleTabletChange(e) {
  const menuDesktop = document.querySelector("#menu-desktop");
  const menuIcon = document.querySelector("#menuIcon");
  const iconProfile = document.querySelector("#icon-profile-desktop");
  // const iconProfileBelow = document.querySelector("#icon-below")
  // const iconPostMobile = document.querySelector("#icon-post-mobile")
  const iconPostDesktop = document.querySelector("#icon-post-desktop");

  if (e.matches) {
    // Then log the following message to the console
    console.log("Desktop Size");
    console.log(e);
    iconProfile.classList.remove("hide");
    // iconProfileBelow.classList.add("hide")
    menuDesktop.classList.remove("hide");
    menuIcon.classList.add("hide");
    // iconPostMobile.classList.add("hide")
    iconPostDesktop.classList.remove("hide");
  } else {
    console.log("Mobile Size");
    iconProfile.classList.add("hide");
    // iconProfileBelow.classList.remove("hide")
    menuDesktop.classList.add("hide");
    menuIcon.classList.remove("hide");
    // iconPostMobile.classList.remove("hide")
    iconPostDesktop.classList.add("hide");
  }
}

// Register event listener
mediaQuery.addListener(handleTabletChange);

// Initial check
handleTabletChange(mediaQuery);
