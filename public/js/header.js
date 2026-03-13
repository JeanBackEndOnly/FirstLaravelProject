const home_text = document.getElementById('home-nav');
const Management_text = document.getElementById('Management-nav');
const Ratings_text = document.getElementById('Ratings-nav');

home_text.addEventListener('click', function(){
    home_text.style.color = 'rgb(220,50,50)';
    Management_text.style.borderBottom = 'solid 2px rgb(220,50,50)';
    Management_text.style.color = 'rgb(255,255,255)';
    Ratings_text.style.color = 'rgb(255,255,255)';
});
Management_text.addEventListener('click', function(){
    Management_text.style.color = 'rgb(220,50,50)';   
    Management_text.style.borderBottom = 'solid 2px rgb(220,50,50)';
    home_text.style.color = 'rgb(255,255,255)';   
    Ratings_text.style.color = 'rgb(255,255,255)';   
    
});
Ratings_text.addEventListener('click', function(){
    Ratings_text.style.color = 'rgb(220,50,50)';   
    Ratings_text.style.borderBottom = 'solid 2px rgb(220,50,50)';
    Management_text.style.color = 'rgb(255,255,255)';
    home_text.style.color = 'rgb(255,255,255)';   
});
