const dropArea = document.querySelector(".drop_box"),
  button = dropArea.querySelector("button"),
  dragText = dropArea.querySelector("header"),
  input = dropArea.querySelector("input");
let file;
var filename;

button.onclick = () => {
  input.click();
};

input.addEventListener("change", function (e) {
  var fileName = e.target.files[0].name;
  let filedata = `
    <form action="php/upload4.php" method="post" enctype="multipart/form-data">
    <div class="form">
    <h4>${fileName}</h4>
    <br>
    <button class="btn">Upload</button>
    </div>
    </form>`;
  dropArea.innerHTML = filedata;
});

function cyberacademy() {
  window.open("https://www.youtube.com/channel/UCRv-wp0CWtW2J33NkTId62w");
}