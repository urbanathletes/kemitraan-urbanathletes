const clubsSelect = document.getElementById('clubs-select')
const studioSelect = document.getElementById('studio-select')
const tableBody = document.getElementById('table-body')
const loadingDiv = document.getElementById('loadingDiv');
const xhr = new XMLHttpRequest;
clubsSelect.addEventListener('change', () => {
  loadingDiv.classList.remove('hidden');
  xhr.onload = function() {
    loadingDiv.classList.add('hidden');
    tableBody.innerHTML = xhr.responseText;
  }
  xhr.open("GET", clubsSelect.getAttribute('data-url') + '?branch_id=' + clubsSelect.value, true);
  xhr.send();
});

document.addEventListener('DOMContentLoaded', () => {
  loadingDiv.classList.remove('hidden');
  xhr.onload = function() {
    loadingDiv.classList.add('hidden');
    tableBody.innerHTML = xhr.responseText;
  }
  xhr.open("GET", clubsSelect.getAttribute('data-url')  + '?branch_id=' + clubsSelect.value, true);
  xhr.send();
})

studioSelect.innerHTML = `<option value="NULL">Select Our Studio</option>`;
function selectClub(el) {
  var xhttp = new XMLHttpRequest();
  let dataElement = [`<option value="NULL">Select Our Studio</option>`];
  if (el.value != "NULL") {
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        dataStudio = JSON.parse(this.response).data.rows;
        if (dataStudio) {
          dataStudio.forEach(dt => {
            dataElement.push("<option value="+ dt.id +">" + dt.name + "</option>")
          });
          studioSelect.innerHTML = dataElement
        }
      }
    };
    xhttp.open("GET", 'https://api.urbanathletes.co.id/fitness/v1/studio?branch_id=' + el.value, true);
    xhttp.send();
  } else {
    studioSelect.innerHTML = dataElement;
  }
}

function selectStudio(studio) {
  console.log(studio.getAttribute('data-url'));
  loadingDiv.classList.remove('hidden');
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      loadingDiv.classList.add('hidden');
      tableBody.innerHTML = this.responseText;
    }
  }
  xhr.open("GET", studio.getAttribute('data-url') + '?branch_id=' + clubsSelect.value + '&studio_id=' + studio.value, true);
  xhr.send();
}
