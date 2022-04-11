let previous = document.querySelector('#pre');
let play = document.querySelector('#play');
let next = document.querySelector('#next');
let title = document.querySelector('#title');
let recent_volume = document.querySelector('#volume');
let volume_show = document.querySelector('#volume_show');
let slider = document.querySelector('#duration_slider');
let show_duration = document.querySelector('#show_duration');
let track_image = document.querySelector('#track_image');
let auto_play = document.querySelector('#auto');
let present = document.querySelector('#present');
let total = document.querySelector('#total');
let artist = document.querySelector('#artist');

let timer;
let autoplay = 0;

let index_no = 0;
let playing_song = false;

//create audio element//
let track = document.createElement('audio');

//all song list//
let All_song = [
    {
        name: "Ashiqui 2",
        path: "albums/1.mp3",
        img: "album_img/1.webp",
        singer: "Ravi Chaudhary"
    },
    {
        name:"Raz",
        path:"albums/2.mp3",
        img:"album_img/2.jpg",
        singer:"Shravan Rathod"
    },
    {
        name:"Radhe Shyam",
        path:"albums/3.mp3",
        img:"album_img/3.webp",
        singer:"Arjit Singh"
    },
    {
        name:"Me Hoon Na",
        path:"albums/4.mp3",
        img:"album_img/4.jpg",
        singer:"Sonu Nigam"
    },
    {
        name:"Wildest Dreams",
        path:"song/ts.mp3",
        img:"",
        singer:"Taylor swift"
    }
];

//all function//


//function load the track//
function load_track(index_no){
    clearInterval(timer);
    reset_slider();
    track.src = All_song[index_no].path;
    title.innerHTML = All_song[index_no].name;
    track_image.src= All_song[index_no].img;
    artist.innerHTML = All_song[index_no].singer;
    track.load();

//adjust total no of pages//
    total.innerHTML=All_song.length;
    present.innerHTML = index_no+1;
    timer = setInterval(range_slider, 1000);

}

load_track(index_no);

//mute sound//
function mute_sound(){
    track.volume = 0;
    volume.value = 0;
    volume_show.innerHTML=0
}

//reset song slider//
function reset_slider(){
    slider.value =0;

}

//checking the song is playing or not//

function justplay(){
    if(playing_song == false){
        playsong();
    }else{
        pausesong();
    }

}

//play song//
function playsong(){
    track.play();
    playing_song = true;
    play.innerHTML = '<i class="fa fa-pause"></i>';
}

//pause song

function pausesong(){
    track.pause();
    playing_song = false;
    play.innerHTML = '<i class="fa fa-play"></i>';
}

//next song//
function next_song(){
    if(index_no < All_song.length - 1){
        index_no +=1;
        load_track(index_no);
        playsong();
    }else{
        index_no= 0;
        load_track(index_no);
        playsong();
    }
}

//previous song//

function previous_song(){
    if(index_no > 0){
        index_no -=1;
        load_track(index_no);
        playsong();
    }
    else{
        index_no =All_song.length;
        load_track(index_no);
        playsong();
    }
}

//change volume//
function volume_change(){
    volume_show.innerHTML = recent_volume.value;
    track.volume = recent_volume.value / 100;
}

//change slider position//

function change_duration(){
    slider_position = track.duration * (slider.value / 100);
    track.currrentTime = slider_position;
}

//autoplay function//
function autoplay_switch(){
    if(autoplay ==1){
        autoplay = 0;
        auto_play.style.background = "rgba(255, 255, 255, 0.1)";
    }else{
        autoplay =1;
        auto_play.style.background = "#ff8a65";
    }
}

function range_slider(){
    let position = 0;
    //update slider position//
    if(!isNaN(track.duration)){
        position = track.currentTime * (100 / track.duration);
        slider.value = position;
    }

    //function will play when song is over//
    if(track.ended){
        play.innerHTML = '<i class="fa fa-play"></i>';
        if(autoplay ==1){
            index_no +=1;
            load_track(index_no);
            playsong();
        }
    }
}