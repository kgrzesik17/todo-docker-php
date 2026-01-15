<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Todo App</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php include 'connect.php'; ?>

    <?php
      if(isset($_POST['title'])) {
        echo $_POST['title'];
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
          <div class="task">
            <p>Task Title</p>
            <button type="submit">-</button>
          </div>

          <div class="task">
            <p>Task Title 123</p>
            <button type="submit">-</button>
          </div>
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
