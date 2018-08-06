// Classe Canvas pour dessiner un canvas dans le HTML et avoir son contexte
// Export rend cette classe publique, elle peut être importée
export class Canvas {
    constructor(l, h) {
        this.l = l;
        this.h = h;
        this.creeCanvas();
    }
    // Créer une balise canvas et lui ajouter l'arrère plan
    creeCanvas() {
        // Créer un canvas
        this.canvas = document.createElement("canvas");
        this.ctx2D = this.canvas.getContext("2d"); // Contexte du canvas pour dessiner les images
        this.canvas.width = this.l;
        this.canvas.height = this.h;
        document.body.appendChild(this.canvas);
    }
}