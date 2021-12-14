

  ////////////////////////////////////////////////////////////////
  let copy= document.querySelector('#copy');
  let date = new Date();
  let year = date.getFullYear();
  copy.textContent= year ;

////////////////////////////////////////////////////////////////

let h_div = document.querySelector(".head-div");
// let s_div = document.querySelector(".search");

window.addEventListener("scroll", function(){
  h_div.classList.add("add-fix");
   s_div.classList.add("s-nodisplay");
});
window.addEventListener("scrollstart", function(){
  h_div.classList.remove("add-fix");
  
});
// //////////////////////////////////////////////////
// let s_btn = document.querySelector("#search");
//    s_btn.addEventListener("click", function(){
//     if(s_div.classList.remove("s-nodisplay")){ }
//     else{s_div.classList.add("s-display")}
//    });
// ////////////////////////////////////////////////////////////////////
let m_btn = document.querySelector("#m_music");
let v_btn = document.querySelector("#m_video");
let p_div = document.querySelector(".btn-div");
let m_btn_div = document.querySelector(".m_btn");
let v_btn_div = document.querySelector(".v_btn");
let music_div = document.querySelector(".music_div");
let video_div = document.querySelector(".video_div");

// ///////////////////////////////////////////////
m_btn.addEventListener("click", function(){
  p_div.classList.add("btn-div-add");
  m_btn_div.classList.add("m_btn_bg");
  if (v_btn_div.classList.remove("v_btn_bg")) {
  } else{v_btn_div.classList.remove("v_btn_bg");}

  video_div.classList.remove('show_video_div');
  if(video_div.style.display='block'){
  video_div.style.display='none';
}
  // mus_div.classList.add("hide_music_div");

  if(music_div.classList.remove('hide_music_div')){
  
  }
    else{music_div.classList.add('show_music_div');}


});

// //////////////////////////////////////////////////
v_btn.addEventListener("click", function(){
  p_div.classList.add("btn-div-add");
  v_btn_div.classList.add("v_btn_bg");
if (m_btn_div.classList.remove("m_btn_bg")) {
  } else{m_btn_div.classList.remove("m_btn_bg")}

  music_div.classList.add('hide_music_div');
    video_div.style.display='block';
  // video_div.classList.add('show_video_div');
    
  if(video_div.classList.add('hide_video_div')){
    video_div.classList.remove('hide_video_div');
    video_div.classList.add('show_video_div');   
  }
    // else{video_div.classList.add('show_video_div');
    //   video_div.classList.add('show_video_div');}
});
// /////////////////////////////////////////////////////


