// const s1 = 'Hello';

// console.log(typeof s1);
// const s2 = new String('Hello');

// console.log(window);
// console.log(navigator.appVersion);

const book1 = {
    title: 'book one',
    author: 'Takesure',
    year: '2016',
    getSummary: function() {
        return `${this.title} was written by ${this.author} in ${this.year}`;
    }
};

const book2 = {
    title: 'book two',
    author: 'Diana',
    year: '2018',
    getSummary: function() {
        return `${this.title} was written by ${this.author} in ${this.year}`;
    }
};

// console.log(book2.getSummary());
// console.log(Object.values(book1));
console.log(Object.keys(book2));
