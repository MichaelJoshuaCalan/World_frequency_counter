<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    display: flex;
    justify-content: center; /* Horizontally center */
    align-items: center; /* Vertically center */
    
}
th, td {
border: 1px solid #ccc;
padding: 10px;
text-align: center;
}
th {
background-color: #f2f2f2;
}
h1{
    text-align: center;
}
</style>
<body>
    <h1>Word Frequency Output</h1>
<table>

<?php

        function freq_calc($tokenizedParagraph)
            {
                //Calculating the frequency of words
                $wordFrequency = array_count_values($tokenizedParagraph);

                    //removing the stopwords in the given input
                    $stop_words = ["the", "and", "in", "to", "of", "a", "for", "on"];
                        foreach($stop_words as $stop_words){
                        unset($wordFrequency[$stop_words]);    
                        } 
                        return $wordFrequency;

            }
            //sorting function
            function sort_order($sort_Order,$wordFrequency) 
                {
                   if ($sort_Order == "ascending"){
                    asort($wordFrequency);
                   }
                   
                  else {
                    arsort($wordFrequency);
                   }
                    return $wordFrequency;
                    
                    
                }


            // Function to limit the number of words displayed
            function limit_of_words($wordFrequency, $limit) 
                {
                    return array_slice($wordFrequency, 0, $limit);
                }

      


//getting user input/choice//
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Retrieve user input and perform input validation
        $input = trim($_POST['textbox']);
        $SortOrder = $_POST['sort']; 
        $numWords = (int)$_POST['numWords'];


            if(empty($input) || $numWords <1)
                {
                    echo "Error! Please Check your inputs. <br>";
                }
            else
                {   //turn every word into lowercase
                    $input = strtolower($input);
                    
                    //tokenization/ dividing the paragraph into words and set as array//
                    $text = str_word_count($input, 1);

                    //Word frequency calculation and removing of unwanted words (stop words)//
                    $words_frequency = freq_calc($text);
                            
                    //sorting of output display
                    $sorting_output = sort_order($SortOrder,$words_frequency);
                    
                    //limiting the words to be display as output
                    $word_limit =  limit_of_words($sorting_output,$numWords);

                    echo '<table>';
            echo '<tr><th>Word</th><th>Frequency</th></tr>';


            foreach ($word_limit as $word => $frequency) {
                // HTML escape user-generated content
                $word = htmlspecialchars($word);
                echo "<tr><td>$word</td><td>$frequency</td></tr>";
            }

            echo '</table>';


                    
                }

    }
else {
    echo "<p>No information or data submitted</p>";
}

?>


    </table>
    </body>
</html>
