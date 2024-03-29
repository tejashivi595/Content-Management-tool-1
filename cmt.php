<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Style.css" />
    <script defer src="script.js"></script>
    <title>My Blogging webpage</title>
  </head>
  <body>
    <div class="modal-container">
      <div class="modal">
        <button class="modal__btn"></button>
        <h2 class="modal__title"></h2>
        <p class="modal__body"></p>
      </div>
    </div>
    <div class="form-container">
      <h1>CONTENT INPUT</h1>
      <h3>Add a New Content:</h3>
      <form action="connect.php" method="post">
        <label for="title"
          >Title
          <input type="text" id="title" name="titles" placeholder="Enter a Content title." />
        </label>

        <label for="image"
        >Upload Image :
        <input type="file" id="title" name="images" placeholder="Upload Image." />
      </label><br><br>

        <label for="note"
          >Content<textarea
            type="text"
            id="note"
            cols="40"
            rows="20"
            placeholder="Enter your content."
            name="contents"
          ></textarea>
        </label>
        <input type="submit" value="submit" name="submit">
<!-- 
        <input type="submit" name="submit"> -->
        <!-- <a href="suces.php"><input type="submit" value="submit" name="submit"></a>  -->
      </form>
    </div>
    <div class="note-container"></div>
  </body>
</html>
