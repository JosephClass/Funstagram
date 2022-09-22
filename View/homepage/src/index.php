<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/style.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>

<!-- Top Nav Bar -->


<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Funstagram</span>
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onClick="document.location.href='../../../View/login/logout.php'">Log Out</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Article</a>
      </li>
      <li>
        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Video</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!-- Posting Image -->

<a class="block p-6 max-w-sm mx-auto mb-10 my-40 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Post an Image</h5>
    <div class="font-normal text-gray-700 dark:text-gray-400">
        <div class="mb-4">
          <form method="POST" enctype="multipart/form-data">  
            <input type="file" class="form-control mb-3 text-sm text-grey-500
              file:mr-5 file:py-2 file:px-6
              file:rounded-full file:border-0
              file:text-sm file:font-medium
              file:bg-blue-50 file:text-blue-700
              hover:file:cursor-pointer hover:file:bg-amber-50
              hover:file:text-amber-700 " name="" id="f1" placeholder="" >
            <button type="submit" class="flex items-center mx-auto bg-blue-500 hover:bg-blue-700 text-black text-sm font-medium py-2 px-6 rounded-full" name="upload"  onclick="upld()">Upload File</button>
          </form>
        </div>
    </div>
</a>

<!-- Image Gallery Grid -->

<section class="overflow-hidden text-gray-700 ">
  <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <!-- Image Object -->
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter mx-1 mb-5">
            <figure class="hover:grayscale">
              <a href="#">
                <img class="rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
              </a>
            </figure>
            <figcaption class="absolute bottom-6 px-4 text-lg text-white">
              <button class=" px-4 py-2 text-sm text-white bg-indigo-600 hover:rounded-full hover:bg-indigo-800">Delete</button>
            </figcaption>
          </figure>
        </div>
      </div>
      <!-- Image Object -->
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter mx-1 mb-5">
            <figure class="hover:grayscale">
              <a href="#">
                <img class="rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="image description">
              </a>
            </figure>
            <figcaption class="absolute bottom-6 px-4 text-lg text-white">
              <button class=" px-4 py-2 text-sm text-white bg-indigo-600 hover:rounded-full hover:bg-indigo-800">Delete</button>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 

  <h2>Delete An Image</h2>

  <form method ="GET">

      <label for="a">Input Image ID </label>

  	<input type="number" id="a" name="a" min="1" >

  	<div>

  		<button type="submit" name="delete" onclick="dlt()">Delete</button>

  	</div>

  </form>
-->

<script >

      function dlt() {

          let value = document.getElementById("a").value;

          x1 = new XMLHttpRequest();

          x1.open("GET","delete-image.php?a="+value, true);

          x1.send();

          x1.onreadystatechange = function() {

      if (x1.readyState == 4 && x1.status == 200) {

              alert(x1.responseText);

              }

          }

          

      }



function upld() {

  let photo = document.getElementById("f1").files[0]; //file input

  let req = new XMLHttpRequest();

  let formData = new FormData();

  formData.append("image", photo);                                

  req.open("POST", "../../../Model/insertDb.php", true);

  req.send(formData);

  req.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {

      }

  }

  

}

  </script>




<?php

  include "../../../Model/insertDb.php";

  echo "<script>alert('$msg')</script>"

    // while ($row = mysqli_fetch_array($result)) {

    //   echo "<div id='img_div'>";

    //   	echo "<img id='post-img' src='uploads/".$row['file_name']."' >";

    //   	echo "Image ID :".$row['id'];

    //   echo "</div>";

    // }

?> 

</div>

</body>
</html>
