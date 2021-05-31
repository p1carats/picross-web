# picross-web

Web interface used to play with [piC11ross](https://github.com/inspwastaken/piC11ross), developed in HTML, CSS, JS, and PHP.

## Highlights

 - Play Picross interactively and find your way on our generated grids
 - Supports multiple themes and languages
 - Find out more about this game and how to play it
 - And much more!

## Changelog

May 31th:
  - Refactor grid display to make grid's size modular using txt options
  - Improved database/scoreboard link
  - Make scoreboard great again (fully working now)

May 28th:
  - Progressive transition of the website to MVC
  - Modification of the txt file taken as input by the game
  - Aesthetic changes to the project presentation file
  - Progression on the Game page with graphic elements and dynamic elements around winning the game
  - Progression on the Scoreboard game with the database.

May 27th:
 - Continued the connection between the website and the database.
 - Updated the Game page with PHP and JS code to make it more efficient and connected to a solution stored in the database as a test.
 - Added clearer comments in the code of every page of the website.
 - Started creating the Scoreboard page, directly linked to the game page after winning the nonogram.

May 26th:
 - Added buttons on the Game page to change the background image of the website. The players has now three options: "Day Theme" which is default, "Night Theme", and "Beach Theme"
 - Started the creation of a database to communicate and save information between the website and the program, such as the scoreboard and the generated games.

May 25th:
 - Reworked buttons of the website.
 - Created an error page, following the aesthetic of the website.
 - Added an automatic chronometer on the Game page, which will be the score of the player at the end of the game.
 - Started working on the communication between the website and the program, by looking up how to use a program coded in C# in a website with JavaScript, and how to use a text file alongside.

May 24th:
 - Refactor website architecture
 - Put the website through a system of pages and htaccess, which makes easier to find websites pages and offers the possibility of to create a "404 Page Not Found" error page.

May 21st:
 - Finished working on the settings page of the website, which appears when going to the Game page.
 - Created options on that same page, useless as of right now and waiting for the program to be fully active to be functional.

May 20th:
 - Created the Tutorial page of the website, giving tips and a global idea of how a nonogram works to the reader.
 - Reworked the header, footer, Home page and Game page with a few corrections.
 - Added buttons to travel between pages: one Home button in the header, two buttons in the Home page to the Tutorial and the Game page, and two buttons on the Tutorial page to Home and the Game page.
 - Started working on the Settings page, encountering problems of visibility with the elements and images on it.

May 19th:
 - Focused on resolving the problem with the game's grid, which disappeared by using JavaScript.
 - Put a test game on that page to give an idea of the game.
 - Worked on the aesthetic of the grid, particularly the borders and legends.
 - Worked on the Home page and the Game page, following the models conceived the day before.
 - Worked on the aesthetic of the website, following the theme and colors of the game Animal Crossing.

May 18th:
 - Started working on the website by gathering different ideas and models of how it could look like around the game.
 - After an idea by Romain, we searched, tested and successively coded the header of the website, using JavaScript for the first time.
 - Created footer of the website.
 - Started working on the page of the game itself, and how to make the game playable with PHP and/or JS. 
 - Encountered many problems while trying to make the grid of the game clickable.

## Licensing

Licensed under [MIT](LICENSE).

```
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

---

Some of the sources and resources used are cited below:

- [Getting started with the web, JavaScript Basics](https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/JavaScript_basics), MDN Web Docs
- [Getting started with the web, CSS Basics](https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/CSS_basics), MDN Web Docs
- [Buttons and input elements, HTML documentation](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Button), MDN Web Docs
- MySQL official doc: 
  - [for a better understanding of how works a database like MySQL](https://dev.mysql.com/doc/mysql-getting-started/en)
  - [for particularly helping on "LOAD DATA LOCAL INFILE" code](https://dev.mysql.com/doc/refman/8.0/en/load-data.html)
  - [for also helping in manipulating MySQL and the command line to work with it](https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_local_infile)
- [Interactive Grid](https://codepen.io/kelseyhisek/pen/nupFh), used for the main idea of the creation of the dynamic grid of the game, by Kelsey on Codepen.io
- [Chrono start/stop](https://codepen.io/korell/pen/bVbBgg), by Matthieu Rébillard on Codepen.io
- OpenClassrooms:
  - [for helping with phpMyAdmin](https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913893-phpmyadmin)
  - [for helping with inserting data to a database](https://openclassrooms.com/fr/courses/1959476-administrez-vos-bases-de-donnees-avec-mysql/1960995-inserez-des-donnees)
- [CSS Débutant](http://css.mammouthland.net/border-css.php), for helping with borders around an element
- [jQuery API Documentation](https://api.jquery.com/removeclass), for helping removing the class of an element dynamically
- [Christopher Aue](https://christopheraue.net/design/vertical-align), for helping with vertical alignment in CSS
- [CSS Tricks](https://css-tricks.com/rotated-table-column-headers), for helping with the aesthetic of the game grid
- [Wikipedia, and PuzzleMuseum](https://www.puzzlemuseum.com/griddler/gridhist.htm),  for the story of the Nonogram
- [CodeS SourceS](https://codes-sources.commentcamarche.net/source/23092-chronometre-dynamique), for helping with the chronometer
- [Font Awesome,](https://fontawesome.com) for icons
- [Google Fonts](https://fonts.google.com/specimen/Sanchez?preview.text=Animal%20Crossing&preview.text_type=custom&query=sanchez), for fonts
- [GrandGamersGuild](https://grandgamersguild.com/how-to-solve-picross-puzzle), for clearly explaining how to solve a Nonogram
- [Some random article on Medium](https://medium.com/jspoint/a-simple-guide-to-load-c-c-code-into-node-js-javascript-applications-3fcccf54fd32), for explaining how Node.js works
- [Puzzle Mobile](https://www.puzzles-mobile.com/nonograms/random/10x10), for quickly using Nonogram grids
- [StackExchange](https://codereview.stackexchange.com/questions/242660/javascript-extract-data-from-html-table), for using JavaScript around a HTML Table
- [EncodeDNA](https://www.encodedna.com/javascript/how-to-read-data-from-html-table-using-javascript.htm), for using JavaScript around a HTML Table as well
- [Dynamic Web Coding](http://dyn-web.com/tutorials/php-js/scalar.php), for coding between PHP and JS
- [TheAmplituhedron](https://www.theamplituhedron.com/projects/JavaScript-Game-Snake-with-ScoreBoard/), for helping with handling scores between the website and a database.
- [MySQLTutorial](https://www.mysqltutorial.org/mysql-insert-statement.aspx), for a better understanding of how to insert values to a database with values
- [TutorialRepublic](https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php), also for inserting values to a database
- [Colorhexa](https://www.colorhexa.com/), for color hex codes
- [Dottoro](http://help.dottoro.com/ljbtecpw.php), for a JavaScript variable: webkitTextStroke
- [freeCodeCamp](https://www.freecodecamp.org/news/how-to-disappear-completely-2f23ddb14835/), for giving ideas of how to make a text disappear
- [Stack Overflow](https://stackoverflow.com) (various forums on different errors) and [W3School](https://www.w3schools.com) (for various CSS and HTML elements)
