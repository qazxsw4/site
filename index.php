    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width">
       <link rel="stylesheet" type="text/css" href="css/style.css">
 
 
           
    <style>
    #content{
        border: 1px solid blue;
        position:relative;
        margin:0;
    }
    #noProduct{
         display:none;
    }
    #basket{
         display:none;
    }
    .productName1{
        width: 550px;
        position:absolute;
        left:550px;
        top:30px;
        font-size:30px;
        }
    .product .productName1{
        position:static;
        font-size:12px;
    }

   .blockImg{
       width: 230px;
          height: 170px; 
    margin: auto; 
           display: flex;
    justify-content: center;
    overflow: hidden;
    }
        .blockImg1{

    margin: auto;
        padding:50px 0;
        height: 170px;
      margin-top:-270px;
           display: flex;
    justify-content: center;
    overflow: hidden;
    }
    .blockImg2{
        display:none;
    }
  .blockImg2_a{
        display:block;
    }
  .blockImg3{
    width: 50px;
    height: 50px;
    display: inline-flex;
    justify-content: center;
     overflow: hidden;
     border:1px solid #999;
     border-radius:5px;
      cursor:pointer;
      background: #dddddd;
    }
    .sort1{

    }
.blockPrice1{
    width:150px;
     position: absolute;
    right: 240px;
    top: 300px;
     font-size:30px; 
         }
.product .blockPrice1{
         font-size:18px; 
    }
.product .imgBrand {
          
    }
.button1{
         width:150px;
         height: 33px;
            position: absolute;
             
    right: 240px;
    top: 360px;
         font-size:16px;
    }
      .button1:hover {
        animation: change1 0.5s ease;
        margin: 10px 0;
        right: 240px;
        background: #63ff54;
        font-size:14px;
    }
@keyframes change1 {
    0% {
        width: 150px;
         height: 33px;
        margin: 10px 0;
        background: royalblue;
    }
    50% {
        width: 180px;
        height: 35px;
        margin: 7.5px 0;
        font-size: 0px;
        background: #0e9d00;
         right: 226px;
    }

    100% {
        width: 150px;
         height: 33px;
        margin: 10px 0;
        background: #63ff54;
    }
}
 .imgBrand_a{
        display:none;
   }
.imgBrand1{
         height:100%;
}
  .imgBrand_b{
         height:100%;
   }
   .descriptionClick{
       display:inline-block;
   }
   .blockDescription{
              display:none;

   }
         .description{
              display:none;
         }  
         .content01{
            height:auto !important;
            width:100%;
            top:-150px;
            display:flex;
         }
          .content101{
            margin-top:0 !important;
         }
         .blockBrand1{
             width:540px;
             height:auto !important;

         }
         .blockImg1_a{
              padding:50px 0 20px 0;
             margin-top:-190px;
             height:400px;
         }
        .blockDescription1{
            display:block;
        }
        #ssss{
            height:10px;
             cursor:pointer;
             position:absolute;
             top: 100px;
             right: 100px;
             display:none;
        }
        #logoDelete{
            height:20px;
        }
        #closeViewing{
      display:none;
      position:absolute;
    border: 1px solid red;
    border-radius: 2px;
    width: 200px;
    padding: 3px 5px 5px 5px;
    background: #fff;
    font-size: 25px;
    z-index: 1;
    bottom: 15px;
    right: 0px;
        }
    </style>
 
 <?php include'header.php' ?>
        
  


  <h1 id="noProduct">Нет такого товара</h1>
  <!-- Сортировеа товара начало -->
  <div id="sort">
      <button id="ascending">По возрастанию</button>
    <button id="ascending1">По убыванию</button>
    </div>
     <!-- Сортировеа товара конец -->
       




  <?php  include'product.php' ?>





<br>

 
   
    <div id='prev'>prev</div>
     <div id='next'>next</div>
     <div id='ttt'></div>
  
  

                <script>
                 let element = document.querySelector('.content1');


              

                       // Получает высоту блока начало
   
   let next1 = document.querySelector('.next1');
   let logodelete = document.querySelector('.logo_delete');

     logodelete.addEventListener( "mouseover" , () =>  closeViewing.style.display='block');
     logodelete.addEventListener( "mouseout" , () =>  closeViewing.style.display='none');
                   
             
                
//history.pushState(null, null, '/index.php');



   let blockBrand = document.querySelectorAll('.blockBrand');
   let ssss = document.querySelector('#ssss');
   let imgBrand = document.querySelectorAll('.imgBrand');
   let productName = document.querySelectorAll('.productName');
   let blockPrice = document.querySelectorAll('.blockPrice');
   let button = document.querySelectorAll('.button');
   let blockImg = document.querySelectorAll('.blockImg');
   let blockImg1 = document.querySelectorAll('.blockImg1');
   let blockImg2 = document.querySelectorAll('.blockImg2');
   let imgBrand1 = document.querySelectorAll('.imgBrand1');
   let blockImg3 = document.querySelectorAll('.blockImg3');
   let imgBrand_b = document.querySelectorAll('.imgBrand_b');
   let blockDescription = document.querySelectorAll('.blockDescription');
   // Фото галерея товара начало
     for (let i = 0; i < productName.length; i++) {
         productName[i].onclick=function(){
             filters.style.display="none"
             sort.style.display="none"
             blockSearch.style.display="none"
             next.style.display="none"
             prev.style.display="none"
             content.classList.add('content01')
             content1.classList.add('content101')
             productName[i].classList.add('productName1')
             blockBrand[i].classList.add('blockBrand1')
             blockImg[i].style.width="530px"
             blockImg[i].style.height="400px"
             blockImg[i].style.paddingBottom="50px"
             blockImg1[i].classList.remove('blockImg1_a')
             blockPrice[i].classList.add('blockPrice1')
             button[i].classList.add('button1')
             blockImg2[i].classList.add('blockImg2_a')
             blockDescription[i].classList.add('blockDescription1')
             //imgBrand[i].style.height="230%"
             imgBrand[i].style.marginTop="30px"
             ssss.style.display="block"

              for (let v = 0; v < productName.length; v++) {
          blockBrand[v].style.display="none"
                  }
         blockBrand[i].style.display="block"
          // imgBrand[i].style.display="none"
        
         }
        

         }


  
         ssss.onclick=function(){
                   for (let i = 0; i < blockBrand.length; i++) {
             filters.style.display="block"
             sort.style.display="block"
             blockSearch.style.display="block"
             next.style.display="block"
             prev.style.display="block"
             content.classList.remove('content01')
             content1.classList.remove('content101')
             productName[i].classList.remove('productName1')
             blockBrand[i].classList.remove('blockBrand1')
             blockImg[i].style.width="230px"
             blockImg[i].style.height="170px"
             blockImg[i].style.paddingBottom="0px"
             blockImg1[i].classList.remove('blockImg1_a')
             blockPrice[i].classList.remove('blockPrice1')
             button[i].classList.remove('button1')
             blockImg2[i].classList.remove('blockImg2_a')
             blockDescription[i].classList.remove('blockDescription1')
             imgBrand[i].style.height="100%"
             blockBrand[i].style.display="inline-block"
             imgBrand[i].style.display="inline-block"
             ssss.style.display="none"

             for (let x = 0; x < imgBrand1.length; x++) {
           imgBrand1[x].style.display="none"
           imgBrand[i].style.marginTop="0px"
           }
             }
         }
         
         
     



      
          for (let i = 0; i < blockImg3.length; i++) {
                blockImg3[i].onclick=function(){
                    
                      for (let v = 0; v < blockImg1.length; v++) {
             blockImg[v].style.height="170px"
             blockImg[v].style.paddingBottom="0px"
                   blockImg1[v].classList.add('blockImg1_a')
                  }

                     for (let v = 0; v < blockImg3.length; v++) {
                  imgBrand1[v].style.display="none"
                   
                  }
                  imgBrand1[i].style.display="inline-block"
                    for (let c = 0; c < imgBrand.length; c++) {
                   imgBrand[c].style.display="none"
                   }
                }
              }
       
                   for (let i = 0; i < imgBrand_b.length; i++) {
              if(imgBrand_b[i].getAttribute('src') == ''){
                 blockImg3[i].style.display="none"
              }
              }



                let descriptionClick = document.querySelectorAll('.descriptionClick');
                let description = document.querySelectorAll('.description');

                    for (let i = 0; i < descriptionClick.length; i++) {
                descriptionClick[i].onclick=function(){
                     for (let v = 0; v < descriptionClick.length; v++) {
                  description[v].style.display="none"
                  }
                  description[i].style.display="inline-block"
                }
              }
                 // Фото галерея товара конец

              //  event.target.innerHTML 
    
            
  xxx.onclick = function() {
    localStorage.clear();

  }
   basket.innerHTML += `<span>объщяя цена</span><div id="totalАmount" class="total_amount"></div><!-- Общяя цена в корзине -->`
 let brand1 = document.querySelectorAll('.brand1');
  for (let i = 0; i < brand1.length; i++) {
         basket.innerHTML += `
                 
   <div class="product">
   
       <div class='brandCart'></div>
       <div class="calculator">
           <span class="blockPlus"><img src='logo/plus3.png' class='plus' /></span>
           <span class="quantity"></span>
           <span class="blockMinus"><img src='logo/minus3.png' class='minus' /></span>
       </div>
       <span class="deliteProduct"><img src='logo/basket1.png' class='deliteImg' /></span>
   </div>
                                     `

  }



   let buttonClick = document.querySelectorAll('.buttonClick');
   let product = document.querySelectorAll('.product')
   let brandCart = document.querySelectorAll('.brandCart')
   let plus = document.querySelectorAll('.plus');
   let quantity = document.querySelectorAll('.quantity');
   let minus = document.querySelectorAll('.minus');
   let blockPlus = document.querySelectorAll('.blockPlus');
   let deliteImg = document.querySelectorAll('.deliteImg');


    


  const LS = localStorage;

  let b = 0
  b = LS.getItem('numberProducts')
  c=0
  c = Number(localStorage.getItem('totalАmount'))

  for (let i = 0; i < brand1.length; i++) {


    let a = 0
    a = LS.getItem(i + 'quantity')

       button[i].addEventListener( "mouseover" , () =>  button[i].innerHTML="добавить в корзину");
     button[i].addEventListener( "mouseout" , () =>  button[i].innerHTML="в корзину");
   button[i].onclick = function() {
      a++
      b++
      LS.setItem(i + 'brandCart', brand1[i].innerHTML)
      brandCart[i].innerHTML = brand1[i].innerHTML

      LS.setItem(i + 'quantity', a)
      quantity[i].innerHTML = a

      LS.setItem('numberProducts', b)
      numberProducts.innerHTML = b

      c += Number(price[i].innerHTML)
      LS.setItem('totalАmount', c)
      totalАmount.innerHTML = c

      LS.setItem(i+'product', 'block')
      product[i].style.display='block'

      basket.style.display='block'

    }


    plus[i].onclick = function() {
      a++
      b++
      LS.setItem(i + 'quantity', a)
      quantity[i].innerHTML = a

      LS.setItem('numberProducts', b)
      numberProducts.innerHTML = b

      c += Number(price[i].innerHTML)
      LS.setItem('totalАmount', c)
      totalАmount.innerHTML = c
    }

    minus[i].onclick = function() {
      a--
      b--
      LS.setItem(i + 'quantity', a)
      quantity[i].innerHTML = a

      LS.setItem('numberProducts', b)
      numberProducts.innerHTML = b
     

      c -= Number(price[i].innerHTML)
      LS.setItem('totalАmount', c)
      totalАmount.innerHTML = c

      if(a<1){
          LS.setItem(i+'product', 'none')
      product[i].style.display='none'
      }
      
      if(c<1){
          numberProducts.textContent = LS.removeItem('numberProducts')
         totalАmount.textContent = LS.removeItem('totalАmount')
         basket.style.display='none'
          }
    }

     deliteImg[i].onclick = function() {

           b-=a
           LS.setItem('numberProducts', b)*a
      numberProducts.innerHTML = b

             c -= Number(price[i].innerHTML)*a
      LS.setItem('totalАmount', c)
      totalАmount.innerHTML = c
     
         a=0
         LS.setItem(i + 'quantity', a)
         quantity[i].innerHTML = a
         
         
      if(c<1){
      numberProducts.textContent = LS.removeItem('numberProducts')
       totalАmount.textContent = LS.removeItem('totalАmount')
       basket.style.display='none'
       }
    LS.setItem(i+'product', 'none')
      product[i].style.display='none'
        }

   
    brandCart[i].innerHTML = LS.getItem(i + 'brandCart')
    quantity[i].innerHTML = LS.getItem(i + 'quantity')
    numberProducts.textContent = LS.getItem('numberProducts')
    totalАmount.textContent = LS.getItem('totalАmount')
    product[i].style.display=LS.getItem(i+'product')

  }


 // if(numberProducts.innerHTML==''){
    //  alert(999)
 // }
                </script>







                <style>
                #filters{
                     width: 19%;
                     height:400px;
                     border: 1px solid red;
                     position: fixed;
                     right: 0;
                     top: 160px;
                     overflow:scroll;
                }
                </style>

                <div id='filters'>
                <?php include'filter.php' ?>
                <?php include'range.php' ?>
                </div>








                <script>
// Обновляется страница при возврате назад начало
 window.onpageshow = function(event) {
    if (event.persisted) {
        window.location.reload() 
    }
};
// Обновляется страница при возврате назад конец



    // Сортировеа товара начало
document.getElementById('ascending').addEventListener('click', () => {
    [...document.querySelectorAll('div[data-sort]')]
        .sort((a, b) => a.dataset.sort - b.dataset.sort)
        .forEach(e => e.closest('.content1').append(e));
});
document.getElementById('ascending1').addEventListener('click', () => {
    [...document.querySelectorAll('div[data-sort]')]
        .sort((b, a) => a.dataset.sort - b.dataset.sort)
        .forEach(e => e.closest('.content1').append(e));
});
  // Сортировеа товара конец


   // Пагинация начало
   content1.style.marginTop= "0px"
    next.style.opacity="1"
    next.style.display="block"
    prev.style.opacity="1"
    prev.style.display="block"
  next.onclick=function(){ 
      sss+=361
      if(sss>=element.offsetHeight-363){
          sss=element.offsetHeight-363
          next.style.opacity="0.5"
          prev.style.opacity="1"
      } 
      if(sss<=element.offsetHeight-363){
        
          prev.style.opacity="1"
      } 
      content1.style.marginTop= -sss+"px"  
  }
  if(element.offsetHeight<390){ 
          next.style.display="none"
      }                       

       prev.onclick=function(){ 
      sss-=361
      if(sss<=0){
          sss=0
          next.style.opacity="1"
          prev.style.opacity="0.5"
      } 
            if(sss>=0){
        
          next.style.opacity="1"
      } 
      content1.style.marginTop= -sss+"px"  
  }
  if(element.offsetHeight<390){ 
          prev.style.display="none"
      }    
 // Пагинация конец







       let num = element.offsetHeight/361.6;
       let dd=num.toFixed()
alert( dd-2 );


 alert(element.offsetHeight)
 
   for(let i=0;i<dd;i++){

    ttt.innerHTML+=`
  <div class='next1'>`+i+`</div>
    
 `
 }
  for(let i=0;i<dd;i++){
     let next1 = document.querySelectorAll('.next1');
   next1[i].onclick=function(){ 
      sss=361*next1[i].innerHTML
      if(sss>=element.offsetHeight-363){
          sss=element.offsetHeight-363
          next.style.opacity="0.5"
          prev.style.opacity="1"
      } 
      if(sss<=element.offsetHeight-363){
        
          prev.style.opacity="1"
      } 
      content1.style.marginTop= -sss+"px"  
  }
  }
  if(element.offsetHeight<390){ 
          next.style.display="none"
      }  
      


</script>



             



      

