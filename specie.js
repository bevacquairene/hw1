const stella_piena='https://cdn.icon-icons.com/icons2/1077/PNG/512/star_77949.png';
const stella_vuota='https://static.vecteezy.com/system/resources/previews/021/625/119/original/white-star-free-png.png';

const form = document.forms['cerca'];
form.addEventListener('submit', cerca);

function cerca(event){
    event.preventDefault();
    const label= document.querySelector('input');
    const url='ebird.php?specie='+encodeURIComponent(label.value);
    fetch(url).then(onResponse).then(onJson);
}

function onResponse(response){
    return response.json();
}

function onJson(json){
    console.log(json);
    const sezione= document.querySelector('#contenuto');
    const div= document.createElement('div');
    div.classList.add('risultato');
    sezione.appendChild(div);
    const container=document.createElement('div');
    div.appendChild(container);
    const img= document.createElement('img');
    container.appendChild(img);
    img.src=json.foto;
    img.id='foto';
    img.classList.add('img_pappagallo');
    const p= document.createElement('p');
    div.appendChild(p);
    var paragrafo='Specie: '+json.specie+'\n\n Genere: '+json.genere+'\n\n Famiglia: '+json.famiglia+
    '\n\n Regione: '+json.regione+'\n\n Descrizione: '+json.descrizione;
    var righe=paragrafo.split("\n");
    for (var i = 0; i < righe.length; i++) {
        p.appendChild(document.createTextNode(righe[i]));
        
        if (i < righe.length - 1) {
          p.appendChild(document.createElement("br"));
        }
      }
    form.addEventListener('submit', rimuovi);
    const url='get_preferiti.php?foto='+encodeURIComponent(json.foto);
    fetch(url).then(onResponse).then(onVJson);
}

function onVJson(json){
    console.log(json);
    const container= document.querySelector('#contenuto div div');
    const img2=document.createElement('img');
    container.appendChild(img2);
    img2.classList.add('img_preferito');
    if(json===null){
        img2.src=stella_vuota;
        img2.addEventListener('click', inserisci_preferito);
    }
    else{
        img2.src=stella_piena;
        img2.addEventListener('click', rimuovi_preferito);
    }
}

function rimuovi(event){
    const container=document.querySelector('#contenuto div');
    container.remove();
}

function inserisci_preferito(event){
    const img= event.currentTarget;
    img.src=stella_piena;
    const foto= document.querySelector('#foto');
    var dati= new URLSearchParams();
    dati.append('foto', foto.src);
    const data={
        method:'POST',
        body: dati
    }
    fetch('preferiti.php', data).then(onPResponse).then(onPJson);
    img.removeEventListener('click', inserisci_preferito);
    img.addEventListener('click', rimuovi_preferito);
}

function rimuovi_preferito(event){
    const img=event.currentTarget;
    img.src=stella_vuota;
    const foto= document.querySelector('#foto');
    const url='delete_preferiti.php?foto='+encodeURIComponent(foto.src);
    fetch(url).then(onPResponse).then(onPJson);
    img.removeEventListener('click', rimuovi_preferito);
    img.addEventListener('click', inserisci_preferito);
}

function onPResponse(response){
    if (response.status===200){
        return response.text();
    }
}

function onPJson(text){
    console.log(text);
}


