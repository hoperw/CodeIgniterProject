# CodeIgniterProject

The purpose of this project was to get an introduction into working with MVC design using the CodeIgniter PHP Framework and implementing an API as part of a site.  A brief description of the model, views, and controllers in this project are below and later the use of the Leaflet API in this project is discussed.


<h2>Model</h2>
<ul>
  <li>The News_model class inherits from the CI_Model class and its constructor includes a method to load CodeIgniter's database library.</li>
  <li>A simple database was created in MySQL for the News_model to access.</li>
  <li>CodeIgniter has access to a Query Builder class which allowed a desired query to only be written once.  In this case a query was written once to get all news records from the database or a news item using its slug category from the database.</li>
</ul>

<h2>Controllers</h2>
<ul>
  <li>The News controller loads the data from the News_model either by getting all of the news data at once or each news item.  The controller then passes data to the view index.php in the index method or a news item in the view.php in the view method.</li>
  <li>The Pages controller passes hard coaded data to the home page view for the site.</li>
  <li>The Ajax controller processes data from the Ajax request sent from email.js and then returns a response that's processed client side.</li>
</ul>

<h2>Views</h2>
<ul>
  <li>The primary views for the site include the pages views, news views, and templates.</li>
  <li>The pages views include the about page, contact page with the AJAX request, and a home page.</li>
  <li>The news views include the index page where all news items are listed and the view page where each item will be displayed.</li>
  <li>The templates pages include the common header and footer for all pages.</li>
</ul>
