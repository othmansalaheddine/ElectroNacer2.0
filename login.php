<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="assets/imgs/png/EE.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>electronacer</title>
</head>
<body>
 
    <!-- component -->
<!-- page -->
<main
  class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white"
> 
<div class="grid grid-cols-2 gap-4 place-content-center h-48 ...">
    <div><img class="img-fluid" src="assets/imgs/svg/Group 1.svg" alt=""></div>
    
  </div>
  <!-- component -->
  <section class="flex w-[30rem] flex-col space-y-10">
    <div class="text-center text-4xl font-medium">Log In</div>

    <div
      class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500"
    >
      <input
        type="text"
        placeholder="Email or Username"
        class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
      />
    </div>

    <div
      class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500"
    >
      <input
        type="password"
        placeholder="Password"
        class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
      />
    </div>

    <button
      class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400"
    >
      LOG IN
    </button>

    

    <p class="text-center text-lg">
      No account?
      <a
        href="signup.html"
        class="font-medium text-indigo-500 underline-offset-4 hover:underline"
        >Create One</a
      >
    </p>
  </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>