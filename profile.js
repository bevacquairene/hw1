const stella=document.querySelectorAll('.stella');
for(let i=0; i<stella.length; i++){
    stella[i].addEventListener('click', rimuovi);
}

function rimuovi(event){
    const stella=event.currentTarget;
    const container=stella.parentNode;
    const img=container.childNodes[0].src;
    const url='delete_preferiti.php?foto='+encodeURIComponent(img);
    fetch(url).then(onPResponse).then(onPJson);
    container.remove();
}

function onPResponse(response){
    if (response.status===200){
        return response.text();
    }
}

function onPJson(text){
    console.log(text);
}
