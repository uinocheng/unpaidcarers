<h1>Edinburgh Festivals</h1>
<p>Start questionnaire here</p>

<h2>About yourself</h2>
<p>This is a simple form</p>
<form id="form1" name="form1" method="post" action="<?= ($BASE) ?>/simpleform">
  Please enter your name: 
  <input name="name" type="text" placeholder="Enter name" id="name" size="50" />

<p>Choose a colour: 
  <select name="colour" id="colour">
    <option value="blue">Blue</option>
    <option value="red" selected="selected">Red</option>
    <option value="green">Green</option>
  </select>
</p>
<p>
  <input type="submit" name="Submit" value="Submit" />
</p>
</form>

<p>
  <a href="<?= ($BASE) ?>/about">Read about this example</a>
</p>
