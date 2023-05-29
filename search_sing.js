const label= document.querySelector('#content');//prende l'elemento scritto
const xeno_endpoint= 'https://xeno-canto.org/api/2/recordings';

const form= document.querySelector('form');
form.addEventListener('submit', search);

function search(event){
    event.preventDefault();
    document.querySelector('#contenuto article').classList.remove('hidden');
    const xeno_url= xeno_endpoint+'?query='+encodeURIComponent(label.value);
    console.log(xeno_url);
    fetch(xeno_url).then(onResponse).then(onAjson);
}

function onResponse(response){
    return  response.json();
}

function onAjson(json){
    console.log(json);
    const sezione=document.querySelector('#contenuto');
    document.querySelector('#contenuto article').classList.add('hidden');
    for(let i=0; i<10; i++){
        const div= document.createElement('div');
        sezione.appendChild(div);
        div.classList.add('risultato');
        div.textContent='Paese= '+json.recordings[i].cnt+'  Data registrazione= '+json.recordings[i].date+'.  Autore= '+
        json.recordings[i].rec+".  Ascolta e scarica l'audio ";
        const a=document.createElement('a');
        div.appendChild(a);
        a.href= json.recordings[i].file;
        a.textContent='QUI.';
        const img= document.createElement('img');
        div.appendChild(img);
        img.src='http:'+json.recordings[i].osci.large;
        img.classList.add('img_risultato');
        
    }
    form.addEventListener('submit', rimuovi);
       
}

function rimuovi(event){
    for(let i=0; i<10; i++){
        const container=document.querySelector('#contenuto div');
        container.remove();
    }

}