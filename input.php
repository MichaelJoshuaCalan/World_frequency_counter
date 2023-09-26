<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    textarea{
        text-align: center;
        padding: 50px;
        border-radius: 7px;
    }
    label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}
body{
    background-color: #ffffff;
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 500px;
    margin: 0 auto;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
textarea,
select,
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}


</style>
<body>
    <h1>Word Frequency Counter</h1>

    <form action="process.php"  method="post"> 
        <textarea name="textbox" id="tb" cols="50" rows="10" required placeholder="Paste your text here"></textarea><br><br>
            <label for="sort">Sorting Option:</label>
        <select name="sort" id="sort">
            <option value="ascending">Ascending</option>
            <option value="descending">Descending</option>
        </select>
    <br>
    <br>
        <label for="numOfWords">No. of Words to display:</label>
            <input type="number" id="numWords" name="numWords"value="10" min="1"><br><br>
    
        <input type="submit" value="Calculate Word Frequency">
    
    </form>
</body>
</html>