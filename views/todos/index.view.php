<?php view('includes/head'); ?>

<section class="section">
  <div class="columns">
    <div class="column border-r-2">
      <a href="/todos/create" class="button hover:border-orange-500">Create</a>
    </div>
    <div class="column">
      <section class="section">
        <ul>
          <?php foreach ($tasks as $task) :  ?>
            <li class="mt-2 text-2xl font-semibold">
              <?php if ($task->completed) : ?>
                <strik><?= $task->title ?></strik>
              <?php else : ?>
                <?= $task->title ?>
              <?php endif; ?>
            </li>
          <?php endforeach ?>
        </ul>
      </section>
    </div>
  </div>
</section>

<?php view('includes/footer'); ?>