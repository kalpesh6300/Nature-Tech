let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}
/******************************VIDEO PLAYLIST START*****************************************************/

const videosList = [
   {
      video: 'images/video_1.mp4',
      title: 'A to Z Plantation Video'
   },
   {
      video: 'images/video_2.mp4',
      title: 'Mango Plantation Video in Details'
   },
   {
      video: 'images/video_3.mp4',
      title: 'Flower Plantation Video in Details'
   },
   
   ]
   
   const categories = [...new Set(videosList.map((item) => { return item }))]
   document.getElementById('videosList').innerHTML = categories.map((item) => {
      var { video, title } = item;
      return (
         `<div class="list active">
         <video src=${video} class="list-video"></video>
         <h3 class="list-title">${title}</h3>
         </div>`
         )
   }).join('')
   
   let videoList = document.querySelectorAll('.video-list-container .list');
   videoList.forEach(remove => { remove.classList.remove('active') });
   videoList.forEach(vid => {
      vid.onclick = () => {
         videoList.forEach(remove => { remove.classList.remove('active') });
         vid.classList.add('active');
         let src = vid.querySelector('.list-video').src;
         let title = vid.querySelector('.list-title').innerHTML;
         document.querySelector('.main-video-container .main-video').src = src;
         document.querySelector('.main-video-container .main-video').play();
         document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
      };
   });
/******************************VIDEO PLAYLIST END*******************************************************/