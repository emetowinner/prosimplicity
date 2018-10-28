<?php
require_once('../../private/initialize.php');

$pages = find_all_contact();

$page_title = 'view customers';
include(SHARED_PATH . '/admin_header.php');


?>

	
    <div id="content">
  <div class="pages listing">
    <h1>REQUEST</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/admin/pages/new.php')?>">GO TO OTHER </a>
    </div>


<h2>Welcome to Admin pages</h2>
<table class="list">
	<tr>
		<th>ID</th>
		<th>name</th>
		<th>phonenumber</th>
		<th>message</th>
		<th>time</th>
		<th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
	</tr>
	<?php while($page = mysqli_fetch_assoc($pages)) {?>
		<tr>
			<td><?php echo h($page['id']); ?></td>
			<td><?php echo h($page['name']); ?></td>
			<td><?php echo $page['phonenumber']; ?></td>
			<td><?php echo $page['message']; ?></td>
			<td><a class="action" href="<?php echo url_for('/admin/pages/show.php?id=' . $page['id']) ;?>">View</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/pages/edit.php?id=' . h(u($page['id'])));?>">Edith</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/pages/delete.php?id='. h(u($page['id'])))?>">Delete</a></td>
		</tr>
	<?php }?>
</table>

<?php
  mysqli_free_result($pages);
 ?>

</div>
</div>


<?php include(SHARED_PATH . '/admin_footer.php');?>