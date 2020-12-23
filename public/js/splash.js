let $splash = $('.splash')
let $blank = $('.blank')
let $splash_img = $('.splash-inside img');
$(document).ready(function (){

    if(getStorageItem('splash') !== null){
        $splash.hide()
        $blank.hide()

        updateStorageTimeout('splash', 1000*60)
    }

    setTimeout(function (){
        $blank.hide()
    }, 1000)
    setTimeout(function (){
        $splash_img.addClass('fadeInLeft')
    },500);
    setTimeout(function (){
        $splash_img.addClass('fadeOutLeft')
    },1800);
    setTimeout(function (){
         $splash.removeClass('animate__slideInLeft')
         $splash.addClass('animate__slideOutLeft', function (){
             $splash.hide()
         })

        setStorageItem('splash', true, 1000 * 60)

    }, 2000)

})


function setStorageItem(key, value, ttl) {
    const now = new Date()

    // `item` is an object which contains the original value
    // as well as the time when it's supposed to expire
    const item = {
        value: value,
        expiry: now.getTime() + ttl,
    }
    localStorage.setItem(key, JSON.stringify(item))
}

function getStorageItem(key) {
    const itemStr = localStorage.getItem(key)
    // if the item doesn't exist, return null
    if (!itemStr) {
        return null
    }
    const item = JSON.parse(itemStr)
    const now = new Date()
    // compare the expiry time of the item with the current time
    if (now.getTime() > item.expiry) {
        // If the item is expired, delete the item from storage
        // and return null
        localStorage.removeItem(key)
        return null
    }
    return item.value
}

function updateStorageTimeout(key, ttl){
    const itemStr = localStorage.getItem(key)
    const item = JSON.parse(itemStr)

    item.expiry = new Date().getTime() + ttl

    localStorage.setItem(key, JSON.stringify(item))
}
