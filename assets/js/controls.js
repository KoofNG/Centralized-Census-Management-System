window.addEventListener('load', function(){


    var nextBtn = document.querySelectorAll('#next');
    this.console.log(nextBtn);
    var prevBtn = document.querySelectorAll('#previous');
    var tabs = document.getElementsByClassName('tab')
    var index = 0;

    
    

    for (let i = 0; i < nextBtn.length; i++) {
        nextBtn[i].addEventListener('click', function(){
            tabs[index].classList.remove('active');
            document.getElementById('loader').classList.add('show');
            if(index<(tabs.length-1)){
                index++;
            }
            showAnimation();
            
        })
    }

    function showAnimation(){
        setTimeout(() => {
            document.getElementById('loader').classList.remove('show');
            tabs[index].classList.add('active');
        }, 100);
    }
    for (let q = 0; q < prevBtn.length; q++){
        prevBtn[q].addEventListener('click', function(){
            tabs[index].classList.remove('active');
            index--;
            tabs[index].classList.add('active');
        })
    }


    
})