:root {
    --primary: #A5C882;
    --secondary: #D33F49;
    --light: #fff;
    --dark: #000;
    --diabled: #e7e7e7;
}

body {
    font-family: 'Lato', sans-serif;
    margin: 0;
    height: 100vh;
    background-color: var(--diabled);
}

*:first-letter {
    text-transform: capitalize;
}

.roundBorder {
    border-radius: 5px;
}

.list {
    margin: 25px auto;
    padding: 25px;
    background-color: var(--light);
    width: 100%;
    max-width: 350px;
}

.date {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.dateRight {
    display: flex;
    align-items: center;
}

#dateNumber {
    font-size: 50px;
}

#dateText {
    letter-spacing: 3px;
    text-transform: uppercase;
}

#dateMonth,
#dateNumber,
#dateText  {
    font-weight: bold;
}

#dateMonth,
#dateYear {
    margin-left: 7px;
    font-size: 20px;
}

form {
    margin: 20px 0;
    display: grid;
    grid-auto-flow: column;
    grid-template-columns: auto 35px auto;
    grid-column-gap: 15px;
}

input {
    border: none;
    padding-left: 10px;
    background-color: var(--diabled);
}

input:focus {
    outline: none;
}

.addTaskButton,
.orderButton {
    border: none;
    font-weight: bold;
    cursor: pointer;
}

.addTaskButton {
    height: 35px;
    border-radius: 50%;
    font-size: 18px;
    background-color: var(--diabled);
}

.orderButton {
    background-color: var(--secondary);
    color: var(--light);
}

.task {
    background-color: var(--primary);
    padding: 15px;
    margin-top: 15px;
    color: var(--light);
    cursor: pointer;
}

.done {
    background-color: var(--diabled);
    text-decoration: line-through;
    color: var(--dark);
}