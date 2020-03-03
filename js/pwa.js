let differedPromt;
const btnadd = document.querySelector('button.homeScreenButton');

window.addEventListener('beforeinstallprompt', e=> {
    e.preventDefault();

    differedPromt = e;

    //update UI notify users they captionSide: 

    //add to home screen
    btnadd.style.display = 'block';



});
btnadd.addEventListener('click', e=> {
    differedPromt.prompt();
    differedPromt.userChoice.then(choiceResults=> {
        if (choiceResults.outcome ==='accepted') {
            console.log('user accepted')
        }
        differedPromt = null;
    })
})