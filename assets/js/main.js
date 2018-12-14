let moreRecord = document.querySelector('#moreRecords');
moreRecord.addEventListener('click', (event)=>{
    event.preventDefault();
    document.querySelector('.moreLinks').classList.toggle('active')
})