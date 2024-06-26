//Hier fängt die Aufgabe an, der Rest der Seite entspricht der Vorlage

    //erstellt ein Node-Array mit allen HTML-input-objekten der Seite
    const a = document.querySelectorAll("input");

    /* 3 forEach()-Funktionen setzen für alle Objekte in a 
    die in der Aufgabe geforderen Attribute auf die richtigen Werte */ 
    a.forEach((b) => {
        b.setAttribute("min", "0");
    });

    a.forEach((b) => {
        b.setAttribute("max", "100");
    });

    a.forEach((b) => {
        b.setAttribute("size", "3");
    });
    //neues Node-Array mit allen HTML-Objekten der Klasse "Preis"
    const c = document.querySelectorAll(".preis");

    //Schleife schreibt jeweils Preis in jedes Objekt mit .preis-Klasse 
    for (i = 0; i < c.length; i++) {

        /*konvertiert alle Preise des Preis-Arrays ins Format einer currency, die Funktion nimmt
        den Preis in Euro als float und gibt ihn als zu einem Preis in Euro formatierten String aus
        */

        var preis = (preise[i] / 100).toLocaleString("de-DE", {
            style: "currency",
            currency: "EUR",
        })

        //c besteht nur aus <td>-tags, daher kann diese Funktion verwendet werden um den Preis dort einzutragen
        c[i].innerHTML = preis;
    };

    
