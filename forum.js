const form = document.forms['carica_post'];
form.addEventListener('submit', aggiungi_post);

function aggiungi_post(event){
    event.preventDefault();
    var dati= new URLSearchParams();
    const testo=document.querySelector('#commento').value;
    dati.append('commento', testo);
    const data={
        method:'POST',
        body: dati
    }
    fetch('aggiungi_post.php', data).then(onPResponse).then(onPJson);

}

function onPResponse(response){
    if (response.status===200){
        return response.text();
    }
}

function onPJson(text){
    console.log(text);
    fetch('get_utente.php').then(onResponse).then(onJson);
}

function onResponse(response){
    return response.json();
}

function onJson(json){
    console.log(json);
    const section= document.querySelector('#risultato');
    section.classList.add('post');
    const img= document.createElement('img');
    section.appendChild(img);
    if(json.immagine_profilo==null){
        img.src='https://png.pngtree.com/png-vector/20191009/ourlarge/pngtree-user-icon-png-image_1796659.jpg';
    }
    else{
        img.src=json.immagine_profilo.slice(19);
    }
    const h3= document.createElement('h3');
    section.appendChild(h3);
    h3.textContent=json.username;
    const testo=document.querySelector('#commento').value;
    const p=document.createElement('p');
    section.appendChild(p);
    p.textContent=testo;
}

