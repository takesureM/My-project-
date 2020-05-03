//Object Of Protos

const bookProtos = {
    getSummary:function() {
        return `${this.title} was written by 
        ${this.author} in ${this.year}`;
    },

    getAge:function() {
        const age = new Date().getFullYear() - this.year;
        return `${this.title} is ${age} years old`;
    }
}

// Create an Object
// const book1 = Object.create(bookProtos);
// book1.title = 'Book-one';
// book1.Author = 'Takesure';
// book1.year = '2013';

const book1 = Object.create(bookProtos, {
    title: {value: 'Book one'},
    author: {value: 'Diana'},
    year: {value: '2015'},
});


console.log(book1);
