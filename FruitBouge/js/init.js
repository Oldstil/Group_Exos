// Ce script est déclaré comme un module dans le HTML
// Du coup, on peut importer les fichiers sans s'embêter avec le HTML
import { Canvas } from './canvas.js';
import { Fruit } from './fruit.js';

class Init {
    constructor() {
        this.canvas = new Canvas(window.innerWidth, window.innerHeight);
        this.fruit = new Fruit("./images/bananas.png", 0, 0, this.canvas.ctx2D);
    }
    // Faire tourner le fruit
    bougex(n) {
        console.log(n);
        this.canvas.ctx2D.clearRect(0, 0, this.canvas.l, this.canvas.h);
        this.fruit.x += n;
        this.canvas.ctx2D.drawImage(this.fruit.img, this.fruit.x, this.fruit.y);
    }
    bougey(m) {
        console.log(m);
        this.canvas.ctx2D.clearRect(0, 0, this.canvas.l, this.canvas.h);
        this.fruit.y += m;
        this.canvas.ctx2D.drawImage(this.fruit.img, this.fruit.x, this.fruit.y);
    }
}
// On instancie la classe Init qui instancie les autres classes
var init = new Init();

setTimeout(function () {
    addEventListener("keydown", function (e) {
        console.log(this);

        if (event.defaultPrevented) {
            return; // Should do nothing if the default action has been cancelled
        }
        switch (e.keyCode) {
            case 39:
                init.bougex(20);
                break;
            case 37:
                init.bougex(-20);
                break;
            case 38:
                init.bougey(-20)
                break;
            case 40:
                init.bougey(20)
                break;
        }
    })
})