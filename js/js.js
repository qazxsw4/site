let gallery =
    [
   'img/001.png',
   'img/002.png',
   'img/003.png'
]


let aaa = document.getElementsByClassName('aaa')
c = 0



setInterval(() => {
    if (c == 2) {
        c = -1
    }
    c++ 
    imgGallery.src = gallery[c]
    imgGallery.classList.add('aaa')
  
}, 4000);




