const getURL = function () {                  //get URL of the page
    let currentURL = window.location.href;
    return currentURL;
}

const cutURL = function () {
    let currentURL = getURL ();
    let lastSlashPosition = currentURL.lastIndexOf("/");   //find last slash
    //console.log(lastSlashPosition);
    let pageName = currentURL.slice(lastSlashPosition + 1, currentURL.length);      //first argument is the position after last slash, second argument is the length of whole URL. Now we have the name of the page!
    return pageName;
}

let pageName = cutURL();           //take the curent page name

  const setAsActive = function () {
      //console.log(pageName);
      let currentElement = document.querySelectorAll("[href=\"" + pageName + "\"]");      //find on what page user is

      currentElement[0].classList.add("active");   //add class active to current page
      
  }
setAsActive();
