import './bootstrap';


console.log('[app] initialized.')

Echo.channel('social-mood')
    .listen('EmojiClicked' ,handleEmojiClickedEvent );

function handleEmojiClickedEvent(event)
{
   const counterEl = document.getElementById(`counter-${event.emoji}`);
   let count = parseInt(counterEl.innerText);
   count++;

    counterEl.innerText = `${count}`;
}
