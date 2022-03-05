<?php 
require './db.php';

$id =  $_GET['id'] ?? null;

if(!$id){
    header("Location: index.php");
    exit;
}


$statement = $db->prepare('SELECT *  FROM CUSTOMERS WHERE CustomerID = :id');
$statement->bindValue(':id', $id);
$statement ->execute();
$customer= $statement->fetch(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
  //  print_r($_POST);
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $Email = $_POST['Email'];

  $statement = $db->prepare("UPDATE CUSTOMERS 
  SET FirstName = :FirstName,
  LastName =:LastName,  
  Email =:Email
  WHERE CustomerID =:id
  ");
    $statement->bindValue("FirstName", $FirstName);
    $statement->bindValue("LastName", $LastName);
    $statement->bindValue("Email", $Email);
    $statement->bindValue('id', $id);
    $statement->execute();

  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta
    http-equiv="X-UA-Compatible"
    content="IE=edge"
  >
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <script src="./lib/tailwind.js"></script>
  <title>Document</title>
</head>

<body class="bg-gray-100">
  <form
    action=""
    method="POST"
    class="p-10  w-max shadow-md mx-auto mt-4 rounded-md bg-white"
  >
    <h1 class="text-gray-500 text-3xl p-4 text-center uppercase">Add a new Entry</h1>
    <div>
      <div class="flex flex-col p-4 ">
        <label
          for="FirstName"
          class="text-xl text-gray-400"
        >First Name</label>
        <input
          type="text"
          name="FirstName"
          id="FirstName"
          class="h-10 border-b-2 border-slate-700 outline-none"
          value="<?php echo $customer["FirstName"]; ?>"
        />
      </div>
      <div class="flex flex-col p-4 ">
        <label
          for="LastName"
          class="text-xl text-gray-400"
        >Last Name</label>
        <input
          type="text"
          name="LastName"
          id="LastName"
          class="h-10 border-b-2 border-slate-700 outline-none"
         value = "<?php echo $customer["LastName"];?>"
        />
      </div>
      <div class="flex flex-col p-4 ">
        <label
          for="Email"
          class="text-xl text-gray-400"
        >Email Address </label>
        <input
          type="email"
          name="Email"
          id="Email"
          class="h-10 border-b-2 border-slate-700 outline-none"
          value="<?php echo $customer["Email"];?>"
        />
      </div>
     
    </div>
    <div class="flex justify-center items-center">
      <button
        type="submit"
        class="rounded-xl bg-gray-700 text-gray-100 py-4 px-5"
      >Continue</button>
    </div>
  </form>
</body>

</html>