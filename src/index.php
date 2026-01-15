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

    <header>
      <div id="brand">Todo app by Kacper Grzesik 52684S</div>
    </header>

    <main>
      <div class="tasks-container">
        <form id="add-task-form" action="#">
          <input name="title" type="text" placeholder="Todo" />
          <button>+</button>
        </form>
      </div>
    </main>
  </body>
</html>
