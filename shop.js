// Eingabefelder abrufen
const inputFields = document.querySelectorAll('input[type="number"]');

// Standardwert, Minimalwert, Maximalwert und Größe für jedes Eingabefeld festlegen
inputFields.forEach((input) => {
    input.value = 0;
    input.min = 0;
    input.max = 100;
    input.size = 3;
});

// Array von Preisen
const preise = [10, 20, 30, 40, 50];

// Elemente mit der Klasse "preis" abrufen
const preisElements = document.querySelectorAll('.preis');

// Die Preise in den Elementen festlegen
preisElements.forEach((element, index) => {
    element.textContent = preise[index];
});

// Die Preise in Euro umrechnen und formatieren
preisElements.forEach((element, index) => {
    const preisInEuro = preise[index] / 100; // Umrechnung von Cents zu Euro
    const euro = Math.floor(preisInEuro); // Ganzzahliger Eurobetrag
    const cent = Math.round((preisInEuro - euro) * 100); // Centbetrag mit zwei Nachkommastellen
    const formattedPreis = euro.toLocaleString('de-DE', { style: 'currency', currency: 'EUR' }) + ' ' + cent.toString().padStart(2, '0'); // Formatierung als Eurobetrag mit zweistelligem Centbetrag
    element.textContent = formattedPreis;
});

