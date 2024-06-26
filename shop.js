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

// Aufgabe a3_3: Gesamtpreis berechnen:
// Hinzufügen des 'change'-EventListeners zu allen Eingabefeldern
a.forEach((eingabefeld) => {
    eingabefeld.addEventListener('change', eingabeGeaendert);
});
    
// Funktion, die aufgerufen wird, wenn sich der Wert eines Eingabefeldes ändert

function eingabeGeaendert(event) {
    // hier wird der Preis mit der zahl aus dem eingabefeld multipliziert und dann werden alle preise aufsummiert
    var gesamtpreis = 0;
    for (i = 0; i < a.length; i++) {
        gesamtpreis += a[i].value * preise[i];
    }
    // hier wird der gesamtpreis in ein currency-format umgewandelt
    gesamtpreis = (gesamtpreis / 100).toLocaleString("de-DE", {
        style: "currency",
        currency: "EUR",
    })
    // hier wird der gesamtpreis in das html-element mit der id "gesamtpreis" geschrieben
    document.getElementById("gesamtpreis").innerHTML = gesamtpreis;
}



