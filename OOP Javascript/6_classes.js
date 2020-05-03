class Book{
    constructor(title, author,year){
        this.title = title;
        this.author = author;
        this.year = year;
    }

    getSummary(){
        return `${this.title} was written by ${this.author}
        in ${this.year}`;
    }

    static topBookStore(){
        return 'Barnes & Noble';
    }
}



class Magazine extends Book{
    constructor(title,author,year,month) {
        super(title,author,year);
        this.month = month;
    }
    
}

const mag  = new Magazine('Book', 'Tkesure', '2015', 'June')
// const book1 = new Book('Book', 'Tkesure', '2015');
// console.log(book1);

// console.log(Book.topBookStore());
console.log(mag);