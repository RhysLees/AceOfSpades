import './bootstrap';

import JSConfetti from 'js-confetti';
import {Howl, Howler} from 'howler';

const canvas = document.getElementById('your_custom_canvas_id');
window.jsConfetti = new JSConfetti({ canvas });


window.Howl = Howl;
window.Howler = Howler;

window.winSound = new Howl({
    src: ["/build/audio/win.mp3"],
});

window.loseSound = new Howl({
    src: ["/build/audio/lose.mp3"],
});


