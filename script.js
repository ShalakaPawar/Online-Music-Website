console.log("welcome to vadika");

//initilize the variables//
let songIndex = 0;
let audioElement = new Audio('1.mp3');
let masterPlay = document.getElementById('masterPlay');
let myProgressbar = document.getElementById('myProgressbar');

let songs = [
    {songname:"Lut-Gaye", filepath:"song/1.mp3", coverpath:"covers/1.jpg",}
]

//audioelement.play();

///handle play, pause, click//
masterPlay.addEventListener('click', ()=>{
    if(audioElement.paused || audioElement.currentTime <= 0){
        audioElement.play();
    }
})

//listen to events//
document.addEventListener('timeupdate', ()=>{
    console.log('timeupdate');
    //update seek bar//
})