<?php require view('includes/head'); ?>
<?php require view('includes/nav'); ?>


<section class="section">
  <h1 class="title">Create new todo</h1>
  <form action="/create" method="post" class="max-w-lg mx-auto">
    <div class="field">
      <label for="" class="label">Title</label>
      <div class="control">
        <input type="text" class="input" name="title">
      </div>
    </div>
    <div class="field">
      <label for="" class="label">Description</label>
      <div class="control">
        <input type="text" class="input" name="description">
      </div>
    </div>
    <div class="control">
      <button type="submit" class="button bg-orange-500 text-white font-semibold">Submit</button>
    </div>
  </form>
</section>


<?php require view('includes/footer'); ?>