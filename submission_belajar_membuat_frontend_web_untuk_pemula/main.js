let books = [];
const RENDER_EVENT = "render-book";
const STORAGE_KEY = "BOOKSHELF_APPS";
const UNCOMPLETED_BOOK_ID = "incompleteBookshelfList";
const COMPLETED_BOOK_ID = "completeBookshelfList";
const BOOK_ITEMID = "itemId";

function isStorageExist() {
    if (typeof Storage === undefined) {
        alert("Browser kamu tidak mendukung local storage");
        return false;
    }
    return true;
}

function saveData() {
    const parsed = JSON.stringify(books);
    localStorage.setItem(STORAGE_KEY, parsed);
}

function loadDataFromStorage() {
    const serializedData = localStorage.getItem(STORAGE_KEY);

    let data = JSON.parse(serializedData);
    
    if (data !== null)
        books = data;
    
    document.dispatchEvent(new Event(RENDER_EVENT));
}

function updateDataToStorage() {
    if (isStorageExist())
        saveData();
}

function composeBookObject(title, author, year, isCompleted) {
    return {
        id: +new Date(),
        title,
        author,
        year,
        isCompleted
    };
}

function findBook(bookId) {
    for (book of books) {
        if (book.id === bookId)
            return book;
    }
    return null;
}

function findBookIndex(bookId) {
    let index = 0
    for (book of books) {
        if (book.id === bookId)
            return index;

        index++;
    }

    return -1;
}

function refreshDataFromBooks() {
    let listUncompleted = document.getElementById(UNCOMPLETED_BOOK_ID);
    let listCompleted = document.getElementById(COMPLETED_BOOK_ID);
    listCompleted.innerHTML = "";
    listUncompleted.innerHTML = "";

    for (book of books) {
        const newBook = makeBook(book.title, book.author, book.year, book.isCompleted);
        newBook[BOOK_ITEMID] = book.id;

        if (book.isCompleted) {
            listCompleted.append(newBook);
        } else {
            listUncompleted.append(newBook);
        }
    }
}

function refreshDataAfterSearch(listData) {
    let listUncompleted = document.getElementById(UNCOMPLETED_BOOK_ID);
    let listCompleted = document.getElementById(COMPLETED_BOOK_ID);
    listCompleted.innerHTML = "";
    listUncompleted.innerHTML = "";

    for (book of listData) {
        const newBook = makeBook(book.title, book.author, book.year, book.isCompleted);
        newBook[BOOK_ITEMID] = book.id;

        if (book.isCompleted) {
            listCompleted.append(newBook);
        } else {
            listUncompleted.append(newBook);
        }
    }
}

function updateBookToCompleted(bookId) {
    const book = findBook(bookId);
    book.isCompleted = true;
    updateDataToStorage();
}

function updateBookToUncompleted(bookId) {
    const book = findBook(bookId);
    book.isCompleted = false;
    updateDataToStorage();
}

function removeBookFromCompleted(bookId) {
    const bookIndex = findBookIndex(bookId);
    books.splice(bookIndex, 1);
    updateDataToStorage();
}

function undoBookFromCompleted(bookId) {
    const book = findBook(bookId);
    book.isCompleted = false;
    updateDataToStorage();
}

function undoBookFromUncompleted(bookId) {
    const book = findBook(bookId);
    book.isCompleted = true;
    updateDataToStorage();
}

function addBook() {
    const uncompletedBOOKList = document.getElementById(UNCOMPLETED_BOOK_ID);
    const completedBOOKList = document.getElementById(COMPLETED_BOOK_ID);
    const title = document.getElementById("inputBookTitle").value;
    const author = document.getElementById("inputBookAuthor").value;
    const year = document.getElementById("inputBookYear").value;
    const isCompleted = document.getElementById("inputBookIsComplete").checked;

    if(title == "" || author == "" || year == "") {
        alert("Data tidak boleh kosong");
        return;
    }

    if(checkBooksNameIfExist(title)) {
        alert("Judul buku sudah ada");
        return;
    }
    const book = composeBookObject(title, author, year, isCompleted);
    books.push(book);

    if (isCompleted) {
        completedBOOKList.append(makeBook(title, author, year, true));
    } else {
        uncompletedBOOKList.append(makeBook(title, author, year, false));
    }

    document.dispatchEvent(new Event(RENDER_EVENT));
    
}

function makeBook(title, author, year, isCompleted) {
    const textTitle = document.createElement("h3");
    textTitle.innerText = title;

    const textAuthor = document.createElement("p");
    textAuthor.classList.add("author");
    textAuthor.innerText = author;

    const textYear = document.createElement("p");
    textYear.classList.add("year");
    textYear.innerText = year;

    // const textContainer = document.createElement("div");
    // textContainer.classList.add("inner");
    // textContainer.append(textTitle, textAuthor, textYear);

    const container = document.createElement("article");
    container.classList.add("book_item");
    container.append(textTitle, textAuthor, textYear);
    const buttonContainer = document.createElement("div");
    buttonContainer.classList.add("action");

    if (isCompleted) {
        buttonContainer.append(
            createUndoButton(),
            createTrashButton()
        );
    } else {
        buttonContainer.append(
            createCheckButton(),
            createTrashButton()
        );
    }
    container.append(buttonContainer);

    return container;
}

function createButton(valueButton,buttonTypeClass, eventListener) {
    const button = document.createElement("button");
    button.innerText = valueButton;
    button.classList.add(buttonTypeClass);
    button.addEventListener("click", function (event) {
        eventListener(event);
    });
    return button;
}

function createCheckButton() {
    return createButton("Selesai dibaca","green", function (event) {
        addBookToCompleted(event.target.parentElement.parentElement);
    });
}

function createTrashButton() {
    return createButton("Hapus buku","red", function (event) {
        // Make Alert
        const confirm = window.confirm("Apakah anda yakin ingin menghapus buku ini?");
        if(confirm) {
            removeBookFromCompleted(event.target.parentElement.parentElement[BOOK_ITEMID]);
            event.target.parentElement.parentElement.remove();
        }
    });
}

function createUndoButton() {
    return createButton("Belum selesai dibaca","green", function (event) {
        // undoBookFromCompleted(event.target.parentElement[BOOK_ITEMID]);
        addBookToUncompleted(event.target.parentElement.parentElement);
        event.target.parentElement.parentElement.remove();
    });
}

function checkBooksNameIfExist(title) {
    for (book of books) {
        if (book.title === title)
            return true;
    }
    return false;
}

function addBookToCompleted(bookElement) {
    const listCompleted = document.getElementById(COMPLETED_BOOK_ID);
    const bookTitle = bookElement.querySelector("h3").innerText;
    const bookAuthor = bookElement.querySelector(".author").innerText;
    const bookYear = bookElement.querySelector(".year").innerText;
    const newBook = makeBook(bookTitle, bookAuthor, bookYear, true);
    const book = findBook(bookElement[BOOK_ITEMID]);
    book.isCompleted = true;
    newBook[BOOK_ITEMID] = book.id;

    listCompleted.append(newBook);
    bookElement.remove();

    updateDataToStorage();
}

function addBookToUncompleted(bookElement) {
    const listUncompleted = document.getElementById(UNCOMPLETED_BOOK_ID);
    const bookTitle = bookElement.querySelector("h3").innerText;
    const bookAuthor = bookElement.querySelector(".author").innerText;
    const bookYear = bookElement.querySelector(".year").innerText;

    const newBook = makeBook(bookTitle, bookAuthor, bookYear, false);
    const book = findBook(bookElement[BOOK_ITEMID]);

    book.isCompleted = false;
    newBook[BOOK_ITEMID] = book.id;

    listUncompleted.append(newBook);
    bookElement.remove();

    updateDataToStorage();
}

function searchBook() {
    const searchText = document.getElementById("searchBookTitle").value;
    const localStorageItem = JSON.parse(localStorage.getItem(STORAGE_KEY));

    const result = localStorageItem.filter(function (book) {
        return book.title.toLowerCase().includes(searchText);
    });

    if (searchText === "") {
        loadDataFromStorage();
    } else if (result.length === 0) {
        alert("Data buku tidak ditemukan");
    } else {
        datas = [];
        for (const res of result) {
            datas.push(res);
        }
        refreshDataAfterSearch(datas);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const submitForm = document.getElementById("inputBook");
    submitForm.addEventListener("submit", function (event) {
        event.preventDefault();
        addBook();
    });

    const searchForm = document.getElementById("searchBook");
    searchForm.addEventListener("submit", function (event) {
        event.preventDefault();
        searchBook();
    });

    if (isStorageExist())
        loadDataFromStorage();
});

document.addEventListener(RENDER_EVENT, function () {
    refreshDataFromBooks();
});