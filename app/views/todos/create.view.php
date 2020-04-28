<?php view('includes/head'); ?>


<section class="section">
  <h1 class="title">Create new todo</h1>
  <form action="/todos/create" method="post" class="max-w-lg mx-auto">
    <div class="field">
      <label for="" class="label">Title</label>
      <div class="control">
        <input type="text" class="input placeholder-gray-500" name="title" placeholder="enter the title">
      </div>
    </div>
    <div class="field">
      <label for="" class="label">Description</label>
      <div class="control">
        <input type="text" class="input placeholder-gray-500" name="description" placeholder="enter description">
      </div>
    </div>
    <div class="control">
      <button type="submit" class="button bg-orange-500 text-white font-semibold">Submit</button>
    </div>
  </form>
</section>


<?php view('includes/footer'); ?>