const clubsSelect = document.getElementById('clubs-select')
const tableBody = document.getElementById('table-body')
const loadingDiv = document.getElementById('loadingDiv');
const xhr = new XMLHttpRequest;
clubsSelect.addEventListener('change', () => {
  loadingDiv.classList.remove('hidden');
  xhr.onload = function() {
    loadingDiv.classList.add('hidden');
    // console.log('ready');
    tableBody.innerHTML = xhr.responseText;
  }
  xhr.open("GET", clubsSelect.getAttribute('data-url') + '/' + clubsSelect.value, true);
  xhr.send();
  // console.log(clubsSelect.value);
});

document.addEventListener('DOMContentLoaded', () => {
  loadingDiv.classList.remove('hidden');
  xhr.onload = function() {
    loadingDiv.classList.add('hidden');
    // console.log('ready');
    tableBody.innerHTML = xhr.responseText;
  }
  xhr.open("GET", clubsSelect.getAttribute('data-url') + '/' + clubsSelect.value, true);
  xhr.send();
})
