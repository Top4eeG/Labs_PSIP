document.addEventListener("DOMContentLoaded", function(){
    let btn = this.getElementById("btn");
    let bd = this.getElementById("ds");
    let img = this.getElementById("img");
    btn.addEventListener('click', function(){
      bd.classList.toggle('stl');
      img.classList.toggle('IMGstl');
    })
  })

