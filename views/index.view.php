<?php require view('includes/head'); ?>


<?php require view('includes/nav'); ?>
<section class="section">
  <div class="columns">
    <div class="column border-r-2"></div>
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

<?php require view('includes/footer'); ?>