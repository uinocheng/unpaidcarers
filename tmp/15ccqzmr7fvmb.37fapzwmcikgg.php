<!-- 
A very simple response View template:
just echoes what the input data were.
 -->

<h1>Thanks for your data, <?= ($formData['name']) ?> ...</h1>
<p> Your colour was <?= ($formData['colour']) ?> </p>
<hr />
<a href="<?= ($BASE) ?>/dataView">Show all data</a>
