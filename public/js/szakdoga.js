class Szakdoga{
    constructor(adat, elem){
        this.elem = elem;
        this.adat = adat;
        this.cim = this.elem.find(".jarmu-card-foglalas");
        this.tagok = this.elem.find(".jarmu-card-kep");
        this.gitlink = this.elem.find(".jarmu-card-marka");
        this.oldalLink = this.elem.find(".jarmu-card-modell");
        this.modosit = this.elem.find(".jarmu-card-kivitel");
        this.torles = this.elem.find(".jarmu-card-kivitel");
    }
}