function Book(title, author, year) {
    this.title = title;
    this.author = author;
    this.year = year;

}
// getSummary
Book.prototype.getSummary = function() {
    return `${this.title} was written by ${this.author}
    in ${this.year}`;

};

function Magazine(title,author,year,month) {
    Book.call(this,title,author,year);
    this.month = month;
}

function Awake (title,author,year,month,language) {
    Magazine.call(this,title,author,year,month);
    this.language = language;

}

// inherit prototype
Magazine.prototype = Object.create(Book.prototype);
Awake.prototype = Object.create(Magazine.prototype);

//InstantiateMagazine
const mag = new Awake('Awake-one', 'Takesure', '2028', 'June', 'Shona');
//Use magazine 
Awake.prototype.constructor = Awake;

console.log(mag);