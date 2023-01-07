var array = [
    'images/Budva.jpg',
    'images/Capadocia.jpg',
    'images/Dubai.jpg',
    'images/Mavrov.jpg',
    'images/Selanik.jpg',
    'images/Beograd.jpg'
];

var index = 0;
var time = 3000;

function createSlider(){
    document.getElementById('image').src = array[index];
    index++;

    if(index == array.length){
        index = 0;
    }
    setTimeout("createSlider()", time);
}



createSlider();


