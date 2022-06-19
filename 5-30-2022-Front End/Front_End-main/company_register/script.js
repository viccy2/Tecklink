
    const tab_switcher = document.querySelectorAll('[data-switcher]');

for (let i = 0; i < tab_switcher.length; i++) {
  const tab_switchers = tab_switcher[i];
  const page_id = tab_switchers.dataset.tab;
  tab_switchers.addEventListener('click', () => {
    document.querySelector('.action-buttons .data-list.active').classList.remove('active')
    tab_switchers.parentNode.classList.add('active');

    switchPgae(page_id);
  });
}

function switchPgae (page_id) {
  const current_page = document.querySelector('.main-form .data-page.active');
  current_page.classList.remove('active');
  const next_page = document.querySelector(`.main-form .data-page[data-page="${page_id}"]`);
  next_page.classList.add('active');
}



// drag and drop input
const dropArea = document.querySelector('.drag-area');
const dragText = document.querySelector('.drop-header');

let button = dropArea.querySelector('.drop-button');
let input = dropArea.querySelector('input');

let file;

button.onclick = () => {
  input.click();
};

// when browse
input.addEventListener('change', function () {
  file = this.files[0];
  dropArea.classList.add('drop');
  displayFile();
});

// when file is inside drag area
dropArea.addEventListener('dragover', (event) => {
  event.preventDefault();
  dropArea.classList.add('drop');
  dragText.textContent = 'Release to Upload';

});

// when file leave the drag area
dropArea.addEventListener('dragleave', () => {
  dropArea.classList.remove('drop');

  dragText.textContent = 'Drag & Drop';
});

// when file is dropped
dropArea.addEventListener('drop', (event) => {
  event.preventDefault();


  file = event.dataTransfer.files[0]; 
 
  displayFile();
});

function displayFile() {
  let fileType = file.type;
  

  let validExtensions = ['image/jpeg', 'image/jpg', 'image/png'];

  if (validExtensions.includes(fileType)) {
    
    let fileReader = new FileReader();

    fileReader.onload = () => {
      let fileURL = fileReader.result;
      // console.log(fileURL);
      let imgTag = `<img src="${fileURL}" alt="">`;
      dropArea.innerHTML = imgTag;
    };
    fileReader.readAsDataURL(file);
  } else {
    alert('This is not an Image File');
    dropArea.classList.remove('drop');
  }
}

// image
$(function(){
    $(".small-img").on("click",function(){
        $(".thumb-img").removeClass('select');
        $(this).parent().addClass('select'); 
        var x = $(this).attr("src"); 
        $("#big-img").attr("src",x); 
    })
})


const buttonClick = (form, button) => {

  const forms = ["account_info", "company_bio", "logo-user_info", "training-video_info"]
  const formIndex = forms.indexOf(form);

  if(formIndex > -1) {

    if (button === "NEXT") {
      if (formIndex === forms.length) return;

      document.getElementById(forms[formIndex + 1]).style = "display: block"
      
      forms.forEach((element, index) => {
        if (index !== formIndex + 1) document.getElementById(element).style = "display: none"
      });
    }

    if (button === "BACK") {
      if (formIndex === 0) return;

      document.getElementById(forms[formIndex - 1]).style = "display: block"

      forms.forEach((element, index) => {
        if (index !== formIndex - 1) document.getElementById(element).style = "display: none"
      });
    }
  }
}
console.log(1337)
buttonClick("company_bio","BACK")