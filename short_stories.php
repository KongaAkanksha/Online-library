<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>short_stories</title>
    <link rel="stylesheet" href="genre.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
    <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="genre.php">Action & Adventure</a>
            <a href="comics.php">Comics</a>
            <a href="fantasy.php">Fantasy</a>
            <a href="historical.php">Historical</a>
            <a href="horror.php">Horror</a>
            <a href="mystery.php">Mystery</a>
            <a href="romance.php">Romance</a>
            <a href="sci-fi.php">Sci-Fi</a>
            <a href="short_stories.php">Short stories</a>
            <a href="thrillers.php">Thrillers</a>
          </div>
          <span style="font-size:30px;cursor:pointer" onclick="openNav()"> <a style="color:rgb(255, 255, 255);">&nbsp MENU &nbsp &#x2630;</a></span>
          <div class="books">
            <a href="logout.php" style="text-align: right; display: block;" class="logout-button">
                <button type="button" class="download">Logout</button>
            </a>
            <a style="color:rgb(255, 255, 255);">
                <h1> SHORT STORIES </h1><br><br>
                <div class="1">
                    <!-- <label style="font-size: 30px;"> &nbsp &nbsp &nbsp &nbspGulliver’s Travel</label> -->
                    <p style="color:rgb(255, 255, 255); font-size: 20px;"><b style="font-size: 30px;"> Alice's Adventures in Wonderland </b> &nbsp  (Author - Lewis Caroll)</p><br>
                    <div style="display: flex; align-items: flex-start;">
                        <a href="books/Alice's Adventures in Wonderland.pdf" download>
                            <img src="images/Alice adventures in wonderland.jpg" width="375" height="500">
                        </a>
                        <div style="margin-left: 10px;">
                            <p style="color:rgb(255, 255, 255); font-size: 20px;">
                              <br>
                                A keystone of English literature, "Gulliver’s Travels" was one of the books that gave birth to the novel form, though it did not yet have the rules of the genre as an organizing tool. A parody of the then popular travel narrative, "Gulliver’s Travels" combines adventure with savage satire, mocking English customs and the politics of the day.
                                <br><br>
                                Jonathan Swift’s masterpiece was originally published in 1726 without its author’s name under the title "Travels into Several Remote Nations of the World." This work, which is told in Gulliver’s “own words,” is the most brilliant as well as the most bitter and controversial of his satires.
                            </p>
                            <br><br>
                            <a href="books/Alice's Adventures in Wonderland.pdf" download>
                                <button type="download" class="download">Download</button>
                            </a>
                        </div>
                    </div>
                </div>
                <br><hr><br>
                <div class="2">
                  <!-- <label style="font-size: 30px;"> &nbsp &nbsp &nbsp &nbspGulliver’s Travel</label> -->
                  <p style="color:rgb(255, 255, 255); font-size: 20px;"><b style="font-size: 30px;"> The Overcoat </b> &nbsp  (Author - ikolai Gogol)</p><br>
                  <div style="display: flex; align-items: flex-start;">
                      <a href="books/The Overcoat.pdf" download>
                          <img src="images/The overcoat.jpg" width="375" height="500">
                      </a>
                      <div style="margin-left: 10px;">
                          <p style="color:rgb(255, 255, 255); font-size: 20px;">
                            <br>
                              Robinson Crusoe, as a young and impulsive wanderer, defied his parents and went to sea. He was involved in a series of violent storms at sea and was warned by the captain that he should not be a seafaring man. Ashamed to go home, Crusoe boarded another ship and returned from a successful trip to Africa. Taking off again, Crusoe met with bad luck and was taken prisoner in Sallee. His captors sent Crusoe out to fish, and he used this to his advantage and escaped, along with a slave.
                              <br><br>
                              Daniel Defoe, first published on 25 April 1719. Written with a combination of Epistolary, confessional, and didactic forms, the book follows the title character (born Robinson Kreutznaer) after he is cast away and spends 28 years on a remote tropical desert island near the coasts of Venezuela and Trinidad, encountering cannibals, captives, and mutineers before being rescued
                          </p>
                          <br><br>
                          <a href="books/The Overcoat.pdf" download>
                              <button type="download" class="download">Download</button>
                          </a>
                      </div>
                  </div>
              </div>
            </a>
        </div>
        
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
          </script>
    </section>
</body>
</html>