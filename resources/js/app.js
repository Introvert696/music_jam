import './bootstrap';

let musics = document.getElementsByClassName("title");
let player = document.getElementById("musicplayer");
let progressline = document.getElementsByClassName("progressline")[0];
let musictitle = document.getElementById("music-title");
let currentTrackNumber = 0;
load();

player.addEventListener("timeupdate",()=>{
    var duration = player.duration;
    var currentTime = player.currentTime;
    var res = ((currentTime / duration)*100).toFixed(2);
    progressline.style.width = res +"%";
    // console.log(res);
});

player.addEventListener("ended",()=>{
    console.log("end");
    if(currentTrackNumber+1<musics.length){
        player.src = "/music/"+musics[currentTrackNumber+1].innerHTML;
        musictitle.innerText = musics[currentTrackNumber+1].innerHTML;
        currentTrackNumber+=1;
    } else{
        currentTrackNumber = 0;
        musictitle.innerText = musics[currentTrackNumber].innerHTML;
        player.src = "/music/"+musics[currentTrackNumber].innerHTML;
    }
});

function load(){
    for(let i =0;i<musics.length;i++){
        //console.log(musics[i].innerHTML);
        musics[i].addEventListener("click",(el)=>{
            //console.log(el.target.innerHTML);
            player.src = "";
            player.src = "/music/"+el.target.innerHTML;
            musictitle.innerText = el.target.innerHTML;
            currentTrackNumber = i;
        });
    }
    
}

 
document.getElementById("playbtn").addEventListener("click",()=>{
player.play();
    });

document.getElementById("pausebtn").addEventListener("click",()=>{
player.pause();
});
document.getElementById("prewios").addEventListener("click",()=>{
    if(currentTrackNumber-1>=0){
        player.src = "music/"+musics[currentTrackNumber-1].innerHTML;
        musictitle.innerText = musics[currentTrackNumber-1].innerHTML;
        currentTrackNumber-=1;
    } else{
        currentTrackNumber = musics.length-1;
        musictitle.innerText = musics[currentTrackNumber].innerHTML;
        player.src = "music/"+musics[currentTrackNumber].innerHTML;
    }
    });
    
document.getElementById("next").addEventListener("click",()=>{
    if(currentTrackNumber+1<musics.length){
        player.src = "music/"+musics[currentTrackNumber+1].innerHTML;
        musictitle.innerText = musics[currentTrackNumber+1].innerHTML;
        currentTrackNumber+=1;
    } else{
        currentTrackNumber = 0;
        musictitle.innerText = musics[currentTrackNumber].innerHTML;
        player.src = "music/"+musics[currentTrackNumber].innerHTML;
    }
    });

document.getElementsByClassName("player-controll-volume")[0].addEventListener("click",(el)=>{
    //console.log(el.offsetX/400);
    document.getElementsByClassName("progress-volume")[0].style.width=el.offsetX+"px";
    player.volume=el.offsetX/400;
});
document.getElementsByClassName("progressbar")[0].addEventListener("click",(el)=>{

    var offsetX = el.offsetX;
    var progressBarWidth = el.target.offsetWidth;
    
    var percent = offsetX / progressBarWidth;
    
    player.currentTime = percent * player.duration;
})