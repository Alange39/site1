<?php
require("./config/connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Alex+Brush&family=Cedarville+Cursive&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
 <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets\css\style.css">
  <title>Categories Pages</title>
</head>
<body class=" birthstone-regular  ">
  
<div class=" alex-brush-regular  bg-gray-500 text-center text-white">  <p class=" ">Triple A Services</p> </div>

    <header class=" text-xl flex justify-between h-[70px] ">
    <nav class="bg-gray-200 hover:text-gray-400 flex justify-between w-screen max-lg:flex-col">
    <p class=" cedarville-cursive-regular pt-[20px] pl-[50px] ">Watch am</p>
     <ul class=" max-lg:flex-col text-white flex gap-[30px] text-black">
       <li class="pt-[20px]"> <a href="ac_categ.php" class="pr-[20px]">Ajouter une categorie?</a></li>
      <li class="pt-[20px]"> <a href="index.php"class="pt-[30px]">Acceuil</a></li>
      <li class="pt-[20px]"><a href="./pprod.php" class="">Nos Produits</a></li>
      <li class="pt-[20px]"> <a href="./ac_conn.php" class="">My account</a></li>
      <li class="pt-[20px]"> <a href="./contact.php" class="pr-[20px]">Contact us</a></li>
      <li class="pt-[20px]"> <a href="./deconnexion.php" class="pr-[20px]">Deconnexion</a></li>
      
      <svg class=" max-lg:invisible w-8 h-8 text-gray-800 dark:text-white mt-[20px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
    <a href=""></a>
</svg>
      </ul>
    </nav>
 </header>
      

  <div id="menu" class="">
<svg class=" rounded-[20px] w-[40px] h-[40px] text-gray-800  hover:underline hover:bg-gray-400 dark:text-white" aria-hidden="true" 
 xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
</svg>
</div>
<div  id="submenu" class="rounded-[20px] bg-gray-500 h-[900px]  w-[280px] fixed ">
 <div><p class="pt-[40px] text-center text-3xl text-bold">Hi, Dear Admin </p></div>  
<ul class="p-[20px] absolute">

    <li class="flex  p-[30px]  rounded-[10px] hover:bg-gray-400 w-[200px] ">
           <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="m7.14284 11 4.99996-6 5 6m-9.99996 0h-3v8H20.1428v-8h-3m-9.99996 0H3.14285l3-4h4.33735l-3.33736 4Zm9.99996 0h4l-3-4h-4.3374l3.3374 4Zm-3 2c0 1.1046-.8954 2-2 2-1.1045 0-2-.8954-2-2s.8955-2 2-2c1.1046 0 2 .8954 2 2Z"/>
</svg>
<a href="./ac_admin.php">Dashboard</a></li>
    <li class="p-[30px]  flex rounded-[10px] hover:bg-gray-400 w-[200px] ">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
</svg>
<a href="./us_dash.php">Users</a></li>
    <li class="p-[30px] flex rounded-[10px] hover:bg-gray-400 w-[200px] ">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd"/>
</svg>
<a href="./categ.php">Categories</a></li>
    <li class="p-[30px] flex rounded-[10px] hover:bg-gray-400 w-[200px] ">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z"/>
</svg>
<a href="./pprod.php">Products</a></li>
    <li class="p-[30px] flex rounded-[10px] hover:bg-gray-400 w-[200px] ">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857ZM18 14a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0-2h-2v-2Z" clip-rule="evenodd"/>
</svg>
<a href="">Orders</a></li>
  </ul>
</div>

 <h1 class="text-3xl text-center text-gray-600 underline font-bold pt-[50px] pb-[70px] ">
    Liste des categories
  </h1>

  

<div class=" overflow-x-auto shadow-md sm:rounded-lg ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Noms categories
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

         <?php
           
            try{
                $stmt=$conn->prepare("SELECT*FROM categories");
                $stmt->execute();

                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $k => $v) {
                
            
            ?>

               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600 text-xl">
                
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                      <?php echo $v["noms"];?>
                </td>
                <td class="px-6 py-4">
                    <a href="./del_prod.php?sms=<?= $v['id']?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
            
           <?php
                }}
                catch(PDOException $e){
                  echo"Adding failed" . $e->getMessage();
                }
           ?> 
           
        </tbody>
    </table>
</div>



<script src="./assets/js/add.js"></script>
</body>
</html>