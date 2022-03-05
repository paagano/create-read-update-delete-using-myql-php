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

<body>
  <table
    border="1"
    class="table-auto border-collapse  m-10"
  >
    <thead>
      <tr>
        <th class="border border-slate-600 p-5">NO</th>
        <th class="border border-slate-600 p-5">First Name</th>
        <th class="border border-slate-600 p-5">Last Name</th>
        <th class="border border-slate-600  p-5">Email</th>
        <th class="border border-slate-600  p-5">Controls</th>
      </tr>
    </thead>
    <tbody>
     <?php  foreach ($customers as $customer): ?>
      <tr>
         <td class="border border-slate-700 p-4">
            <?php echo $customer["CustomerID"];  ?>
         </td>
         <td class="border border-slate-700 p-4">
            <?php echo $customer["FirstName"];  ?>
         </td>
         <td class="border border-slate-700 p-4">
            <?php echo $customer["LastName"];  ?>
         </td>
         <td class="border border-slate-700 p-4">
            <?php echo $customer["Email"];  ?>
         </td>

      <td class="border border-slate-700 p-4">
            <a href="update.php?id=<?php echo $customer["CustomerID"];  ?>">
                  <button class="bg-amber-500 p-2 rounded-xl text-gray-700">Edit</button>
            </a>
            <a href="delete.php?id=<?php echo $customer["CustomerID"];  ?>">
                  <button class="bg-gray-700 p-2 rounded-xl text-gray-100">Delete</button>
            </a>
      </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="flex justify-center items-center w-1/2 ">
    <a href="create.php">
      <button class="rounded-xl bg-gray-700 text-gray-100 py-4 px-5">Add New</button>
    </a>
  </div>
</body>

</html>