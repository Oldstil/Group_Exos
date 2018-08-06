// Classe fruit pour dessiner un fruit
// Export rend cette classe publique, elle peut être importée
export class Fruit {
    constructor(src, x, y, ctx) {
        console.log(this);
        this.x = x;
        this.y = y;
        this.ctx = ctx;
        this.img = new Image();
        // On utilise une méthode en flat arrow éviter que le onload (asynchrone) n'ait de contexte
        this.img.onload = () => {
            console.log(this, this.ctx);
            this.ctx.drawImage(this.img, this.x, this.y);
        }
        this.img.src = src;
    }
}