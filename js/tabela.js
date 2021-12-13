const tabela = document.getElementById('tabela');

function addElement(infos, classes) {
  const row = document.createElement('tr');

  for (let info of infos) {
    const data = document.createElement('td');
    data.className = classes;
    data.textContent = info;
    row.appendChild(data);
  }

  tabela.appendChild(row);
}

function getJsonFromUrl(url) {
  return fetch(url).then(res => res.json());
}
