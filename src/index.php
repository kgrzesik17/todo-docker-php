<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Todo App</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php require 'connect.php'; ?>

    <?php
      function addTask ($taskTitle, $link) {
        $sql = "INSERT INTO tasks (title) VALUES ('$taskTitle') ";
        mysqli_query($link, $sql);
      }

      if(isset($_POST['title'])) {
        addTask($_POST['title'], $link);
      }

      function getTasks($link) {
        $sql = "SELECT * FROM tasks";
        $query = mysqli_query($link, $sql);
        $fetch = mysqli_fetch_all($query);

        return $fetch;
      }
    ?>

    <header>
      <div id="brand">Todo app by Kacper Grzesik 52684S</div>
    </header>

    <main>
      <div class="tasks-container">
        <form id="add-task-form" action="#" method="post">
          <input name="title" type="text" placeholder="Todo" />
          <button type="submit">+</button>
        </form>

        <div class="tasks">
          <h2>Do zrobienia</h2>
          
          <?php
            foreach(getTasks($link) as $task) {
              echo '<div class="task">';
              echo "<p>$task[1]</p>";
              echo '<button type="submit">-</button>';
              echo '</div>';
            }
          ?>
        </div>

        <div class="tasks tasks-done">
          <h2>Zrobione</h2>
          <div class="task tasks-done">
            <p>Task Title</p>
            <button type="submit">+</button>
          </div>

          <div class="task tasks-done">
            <p>Task Title 123</p>
            <button type="submit">+</button>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <a href="https://github.com/kgrzesik17/todo-docker-php" target="_blank"
        >Github</a
      >
    </footer>
  </body>
</html>
