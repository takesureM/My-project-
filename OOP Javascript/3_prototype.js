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
//GetAge

Book.prototype.getAge = function() {
    const age = new Date().getFullYear() - this.year;
    return `${this.title} is ${age} years old`;
};

//Revise 

Book.prototype.revise = function (newYear) {
    this.year = newYear;
    this.revise =true;
}

const book1 = new Book('Book-one', 'Takesure', '2016');
const book2 = new Book('Book-two', 'Mamvota', '2016');

console.log(book1);
book1.revise('2022');
console.log(book1);
