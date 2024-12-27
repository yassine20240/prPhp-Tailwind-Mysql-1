<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisie des notes</title>
</head>
<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>

<head>
 
 <style>
    div{
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        
    }
 </style>
 

 
 
<body  >
    <div >


<h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Saisie des Number </h1>
    <form method="POST"  >
        <label  class="block text-sm font-medium text-gray-700" for="note1">Number--1 :</label>
        <input   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" type="number" id="note1" name="note1" step="0.01" required><br><br>

        <label  class="block text-sm font-medium text-gray-700" for="note2"> Number--2 :</label>
        <input  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"  type="number" id="note2" name="note2" step="0.01" required><br><br>

        <label  class="block text-sm font-medium text-gray-700" for="note3"> Number--3 :</label>
        <input  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"  type="number" id="note3" name="note3" step="0.01" required><br><br>

        <button   class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" type="submit">Calculer la moyenne</button>
    </form>    </div>
 
<?php
//  connect with data base 
$host = "localhost";
$user = "root";
$pass = "new_password";  
$db = "moyenvalues";

 
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// finish the connected with database



if(
isset($_POST['note1'], $_POST['note2'],
 $_POST['note3'])||   
($note1 >= 0 && $note1 <= 20)
 &&($note2 >= 0 && $note2 <= 20)
 &&($note3 >= 0 && $note3 <= 20)
){
$moyen = 0 ; 
$note1 = $_POST['note1'];
$note2 = $_POST['note2'];
$note3 = $_POST['note3'];
  $moyen = ($note1+$note2+$note3 )/3;


 
 
 echo "<h1  class='text-2xl font-semibold text-center text-gray-800 mt-4' >Résultat</h1>  "  . "</p>";
echo "<p class='text-lg font-semibold text-center text-gray-800 mt-4'  > La moyenne des notes est : " . number_format(  $moyen,2) . "</p>"                       ;
   


$query = "INSERT INTO moyens (note1, note2, note3 ,moyen) VALUES ('$note1', '$note2', '$note3', '$moyen' )";


if (mysqli_query($conn, $query)) {
    $message = "Student added successfully!";
} else {
    $message = "Error    ErrorErrorError" . mysqli_error($conn);
}
 
}
 

 



















 
 
?>
</body>
</html>
