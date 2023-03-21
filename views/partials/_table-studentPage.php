<div class="overflow-x-auto"><font></font>
  <table class="table table-zebra w-full"><font></font>
    <!-- head --><font></font>
    <thead><font></font>
      <tr><font></font>
        <th>id</th><font></font>
        <th>Prénom</th><font></font>
        <th>Nom</th><font></font>
        <th>Formation</th><font></font>
        <th>Voir</th><font></font>
        <th>Modifier</th><font></font>
      </tr><font></font>
    </thead><font></font>
    <tbody><font></font>
      <!-- row 1 -->
      <?php
      foreach($students as $student){ ?>
      <font></font>
      <tr><font></font>
        <th><?= $student['id'] ?></th><font></font>
        <td><?= $student['fName'] ?></td><font></font>
        <td><?= $student['lName'] ?></td><font></font>
        <td><?= $student['formation'] ?></td><font></font>
       
        <td>
          <a href="show-student.php?id=<?= $student['id']?>&name=<?= $student['fName']?>">
          <i class="fa-solid fa-eye text-sky-300"></i>
          </a>
        </td><font></font>
    
        <td><i class="fa-solid fa-pencil text-sky-300"></i></td><font></font>
      </tr><font></font>
      <?php
      } ?>
     
    </tbody><font></font>
  </table><font></font>
</div>