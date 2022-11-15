
 const timeH = document.querySelector ('P');
 let timeSecond = 50;
 timeH.innerHTML = `you can wait for${timeSecond}`;

 const countDown = setInterval (()=>{
   timeSecond--;
    
 timeH.innerHTML = `you can wait for ${timeSecond}`;
 },1000)
  