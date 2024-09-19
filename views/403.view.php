<!-- 404.view.php -->
<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>


<main>
  <div class="container mx-auto p-4">
    <div class="flex justify-center">
      <div class="w-full md:w-1/2 xl:w-1/3">
        <div class="error-template">
          <h1 class="text-6xl text-center mb-4">403</h1>
          <h2 class="text-2xl text-center">Unauthorized and Forbidden !</h2>
          <p class="mt-4 text-lg">
            Sorry, an error has occurred, You don't have permission to access this resource.
          </p>
          <a href="/" class="text-blue-500 underline">
            <span class="fas fa-home"></span> Take Me Home
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

  <?php require('partials/footer.php') ?>

